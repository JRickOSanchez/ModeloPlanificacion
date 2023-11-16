<?php

namespace App\Services;

use App\Models\Macro;

class AcentosWrapper
{
    static public function fromMacro(Macro $macro)
    {

        $data = [];


        $macro->load('acentos');

        return $macro->acentos()->max('semanas');
    }
}