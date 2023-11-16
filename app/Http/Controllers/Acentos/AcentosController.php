<?php

namespace App\Http\Controllers\Acentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acentos\AcentosGeneralesRequest;
use App\Models\Macro;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AcentosController extends Controller
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
        return view('acentos/crear-acento-generales', ['macro' => $macro]);
    }

    /**
     * @param AcentosGeneralesRequest $request
     * @param mixed                   $id
     *
     * @return RedirectResponse
     */
    public function action(AcentosGeneralesRequest $request, mixed $id): RedirectResponse
    {
        return to_route('macro.acento.crear.semanas', parameters : ['id' => $id, ...$request->validated()]);
    }

    /**
     * @param AcentosGeneralesRequest $request
     * @param mixed                   $id
     *
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function semanas(AcentosGeneralesRequest $request, mixed $id)
    {
        $macro = Macro::firstWhere('id', '=', $id);
        return view('acentos/crear-acento-semanas', ['macro' => $macro, ...$request->validated()]);
    }

    /**
     * @param AcentosGeneralesRequest $request
     * @param mixed                   $id
     * @param mixed                   $nombre
     * @param mixed                   $semanas
     *
     * @return RedirectResponse
     */
    public function guardar(Request $request, mixed $id, mixed $nombre, mixed $semanas): RedirectResponse
    {
        return back()->withInput();
    }
}
