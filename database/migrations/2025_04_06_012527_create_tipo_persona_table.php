<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tipo_persona', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tipo_persona', 30)->comment('Nombre del tipo de persona');
            $table->timestamps();

            $table->comment('Tabla paramétrica para almacenar tipos de personas natural o jurídico');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_persona');
    }
};
