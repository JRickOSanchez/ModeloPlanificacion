<?php

namespace App\Services;

use App\Models\User;

class UsuariosUseCase
{
    /**
     * @return void
     */
    public static function crear(): void
    {
        User::create([
            'name'     => 'Juan Felipe',
            'email'    => 'juan.lopez216672@potros.itson.edu.mx',
            'password' => 'pipen2001',
        ]);
    }
}