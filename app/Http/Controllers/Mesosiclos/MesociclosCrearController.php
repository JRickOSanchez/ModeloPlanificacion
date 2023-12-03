<?php

namespace App\Http\Controllers\Mesosiclos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mesociclos\CrearMesociclosRequest;
use App\Models\Acento;
use App\Models\Macro;
use App\Models\Mesociclo;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MesociclosCrearController extends Controller
{
    /**
     * @param Request $request
     * @param mixed   $id
     *
     * @return View
     */
    public function view(Request $request, mixed $id): View
    {
        $macro = Macro::firstWhere('id', '=', $id);
        if ($macro == null) {
            return view('macro-no-encontrado');
        }
        return view('mesociclos/mesociclos-crear', ['macro' => $macro]);
    }

    /**
     * @param CrearMesociclosRequest $request
     * @param mixed                  $id
     *
     * @return RedirectResponse
     */
    public function action(CrearMesociclosRequest $request, mixed $id): RedirectResponse
    {
        $macro  = Macro::firstWhere('id', '=', $request->validated('macro_id'));
        $acento = Acento::firstWhere('id', '=', $request->validated('acento_id'));

        $macroSemanas   = $macro->start_at->diffInWeeks($macro->end_at);
        $erorres        = '';
        $acentosSemanas = 0;


        // Calcular semanas
        foreach ($macro->mesociclos as $mesociclo) {
            $acentosSemanas += $mesociclo->acento->semanas;
        }

        // Semanas restantes para asignar
        $restante = $macroSemanas - $acentosSemanas;

        if ($restante >= $acento->semanas) {
            \Log::info('OKJ');
            Mesociclo::create($request->validated());
            return redirect()->route('macro.editar.mesociclos', parameters : ['id' => $id]);
        } else {
            $restante == 0 ? $erorres = 'No hay semanas (mesociclos) restantes para asignar'
                : $erorres = 'Las semanas restantes (mesociclos) para asignar son: ' . $restante;
        }

        session()->flash('errores', $erorres);

        return back();
    }
}
