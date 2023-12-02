<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mesociclos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('macro_id')->constrained('macros');
            $table->foreignId('acento_id')->constrained('acentos');
            $table->enum('etapa', ['GEN', 'ESP', 'COMP']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesociclos');
    }
};
