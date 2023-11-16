<?php

namespace App\Http\Controllers\Acentos;

use App\Http\Controllers\Controller;
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
}
