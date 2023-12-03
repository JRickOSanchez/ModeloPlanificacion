<?php

namespace App\Services;

use Artisan;

class DatabaseUseCase
{
    /**
     * @return void
     */
    public static function prepare(): void
    {
        Artisan::call('migrate:fresh --seed');
    }
}