<?php

namespace App\Http\Controllers\Mesociclos;

use App\Http\Controllers\Controller;
use App\Models\Macro;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MesocicloController extends Controller
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
        return view('mesociclos/mesociclos-listado', ['macro' => $macro]);
    }
}
