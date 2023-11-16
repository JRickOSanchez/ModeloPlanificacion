<?php

namespace App\Http\Controllers\AcentoView;

use App\Http\Controllers\Controller;
use App\Models\Macro;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AcentoViewController extends Controller
{

    /**
     * @param Request $request
     * @param mixed   $id
     *
     * @return View
     */
    public function paso1(Request $request, mixed $id): View
    {
        $macro = Macro::firstWhere('id', '=', $id);
        if ($macro == null) {
            return view('macro-no-encontrado');
        }
        return view('acentos/crear-acento-1', ['macro' => $macro]);
    }
}
