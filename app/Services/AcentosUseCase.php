<?php

namespace App\Services;

use App\Models\Macro;
use Carbon\Carbon;

class AcentosUseCase
{
    /**
     * @return void
     */
    static public function crearConMesociclos(): void
    {
        UsuariosUseCase::crear();
        $macro = Macro::create([
            'name'     => 'JUDO - Olimpiadas 2024',
            'user_id'  => 1,
            'sport'    => 'JUDO',
            'branch'   => 'Olimpico',
            'start_at' => Carbon::now()->addWeeks(3)->toDateTimeString(),
            'end_at'   => Carbon::now()->addWeeks(20)->toDateTimeString(),
        ]);

        $macro->acentos()->create([
            'nombre'  => '1.1',
            'semanas' => 3
        ]);

        $macro->acentos()->create([
            'nombre'  => '2.2',
            'semanas' => 4
        ]);

        $macro->acentos()->create([
            'nombre'  => '3.3',
            'semanas' => 2
        ]);

        $macro->mesociclos()->create([
                'acento_id' => 1,
                'etapa'     => 'GEN'
            ]
        );

        $macro->mesociclos()->create([
                'acento_id' => 2,
                'etapa'     => 'ESP'
            ]
        );

        $macro->mesociclos()->create([
                'acento_id' => 3,
                'etapa'     => 'COMP'
            ]
        );
    }
}