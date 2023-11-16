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
        Schema::create('acentos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('macro_id')->constrained('macros');
            $table->string('nombre');
            $table->integer('semanas');
            $table->timestamps();
        });

        Schema::create('acentos_distribucion', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acento_id')->constrained('acentos');
            $table->integer('porcentaje');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acentos');
        Schema::dropIfExists('acentos_distribucion');
    }
};
