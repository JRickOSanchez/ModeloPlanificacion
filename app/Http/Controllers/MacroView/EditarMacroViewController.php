<?php

namespace App\Http\Controllers\MacroView;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Macro;

class EditarMacroViewController extends Controller
{
    /**
     * @param Request $request
     * @param mixed   $id
     *
     * @return View
     */
    public function show(Request $request, mixed $id): View
    {
        $macro = Macro::firstWhere('id', '=', $id);
        if ($macro == null) {
            return view('macro-no-encontrado');
        }
        return view('editar-macro', ['macro' => $macro]);
    }

    /**
     * @param Request $request
     * @param mixed   $id
     *
     * @return View
     */
    public function acentos(Request $request, mixed $id): View
    {
        $macro = Macro::firstWhere('id', '=', $id);
        if ($macro == null) {
            return view('macro-no-encontrado');
        }
        return view('editar-macro-acentos', ['macro' => $macro]);
    }
}
