<?php

namespace Tests\Unit;

use App\Models\Macro;
use App\Services\AcentosUseCase;
use App\Services\DatabaseUseCase;
use Tests\TestCase;

class MesocicloAltaEtapaTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_alta_mesociclo_etapa(): void
    {
        DatabaseUseCase::prepare();
        AcentosUseCase::crearConMesociclos();

        $macro = Macro::first();

        $this->expectException('\PDOException');

        $macro->mesociclos()->create([
            'acento_id' => 1,
            'etapa'     => 'FAKE'
        ]);
    }
}
