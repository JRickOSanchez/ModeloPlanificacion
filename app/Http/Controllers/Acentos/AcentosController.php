<?php

namespace App\Http\Controllers\Acentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acentos\AcentosGeneralesRequest;
use App\Models\Macro;
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
}
