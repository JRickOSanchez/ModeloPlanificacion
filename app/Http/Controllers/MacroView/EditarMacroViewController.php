<?php

namespace App\Http\Controllers\MacroView;

use App\Http\Controllers\Controller;
use App\Models\Macro;
use Illuminate\Http\Request;

class EditarMacroViewController extends Controller
{
    public function show(Request $request, mixed $id)
    {
        $macro = Macro::firstWhere('id', '=', $id);

        if ($macro == null) {
            return view('macro-no-encontrado');
        }

        return view('editar-macro');
    }
}
