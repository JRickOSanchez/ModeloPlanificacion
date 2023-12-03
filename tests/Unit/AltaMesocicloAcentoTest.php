<?php

use App\Models\Macro;
use App\Services\AcentosUseCase;
use App\Services\DatabaseUseCase;
use Tests\TestCase;

class AltaMesocicloAcentoTest extends TestCase
{
    /**
     * @return void
     */
    public function test_crear_mesociclo_acento()
    {
        DatabaseUseCase::prepare();
        AcentosUseCase::crearConMesociclos();

        $macro     = Macro::first();
        $mesociclo = $macro->mesociclos()->create([
            'acento_id' => 1,
            'etapa'     => 'GEN'
        ]);


        $this->assertDatabaseHas('mesociclos', [
            'id' => $mesociclo->id
        ]);
    }
}