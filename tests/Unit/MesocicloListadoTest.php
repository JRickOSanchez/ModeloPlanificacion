<?php

namespace Tests\Unit;

use App\Models\Macro;
use App\Services\AcentosUseCase;
use App\Services\DatabaseUseCase;
use Tests\TestCase;

class MesocicloListadoTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_listado(): void
    {
        DatabaseUseCase::prepare();
        AcentosUseCase::crearConMesociclos();

        $listado = Macro::first()->mesociclos;

        $this->assertTrue($listado->count() > 0);
    }

    /**
     * @return void
     */
    public function test_listado_registod_base_datos()
    {
        $this->assertDatabaseCount('mesociclos', 3);
    }
}
