<?php

namespace App\Http\Controllers\Acentos;

use App\Http\Controllers\Controller;
use App\Http\Requests\Acentos\AcentosPaso1Request;
use App\Models\Macro;
use Illuminate\Http\Request;

class AcentosController extends Controller
{
    public function paso1(AcentosPaso1Request $request, mixed $id)
    {
        return view('acentos/crear-acento-2', data : [
            ...$request->validated(),
            'macro' => Macro::firstWhere('id', '=', $id)
        ]);
    }
}
