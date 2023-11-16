<?php

namespace App\Http\Controllers\Acentos;

use App\Http\Controllers\Controller;
use App\Models\Acento;
use App\Models\AcentoDistribucion;
use App\Models\Macro;
use Illuminate\Http\Request;

class AcentosSemanasController extends Controller
{
    public function view(Request $request, mixed $id, mixed $nombre, mixed $semanas)
    {
        $macro = Macro::firstWhere('id', '=', $id);
        if ($macro == null) {
            return view('macro-no-encontrado');
        }
        return view('acentos/crear-acento-semanas', ['macro' => $macro, 'nombre' => $nombre, 'semanas' => $semanas]);
    }

    public function action(Request $request, mixed $id, mixed $nombre, mixed $semanas)
    {
        $errores       = null;
        $currentWeek   = 0;
        $totalPercents = 0;
        $percents      = [];

        foreach ($request->post() as $key => $value) {
            if (str_starts_with($key, 'sem_')) {
                $currentWeek++;
                $percents[]    = (int) $value;
                $totalPercents += (int) $value;

                if ((int) $value == 0) {
                    $errores = 'No puede haber una semana con 0%';
                }
            }
        }

        if ($currentWeek != (int) $semanas) {
            $errores = 'No se llenaron todas las semanas';
        } else if ($totalPercents < 100) {
            $errores = 'El porcentaje total de los acentos debe ser 100%';
        } else if ($totalPercents > 100) {
            $errores = 'El porcentaje total de los acentos no puede ser mayor a 100%';
        }

        session()->flash('errores', $errores);

        if ($errores != null) {
            return back()->withInput();
        }

        Macro::firstWhere('id', '=', $id);

        $acento = Acento::create(['macro_id' => $id, 'nombre' => $nombre, 'semanas' => $semanas]);

        foreach ($percents as $percent) {
            AcentoDistribucion::create(['acento_id' => $acento->id, 'porcentaje' => $percent]);
        }

        return to_route('macro.editar.acentos', parameters : ['id' => $id]);
    }
}
