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
        Schema::create('tipo_documento', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_tipo_documento', 45)->comment('Nombre del documento');
            $table->string('sigla_tipo_documento', 5)->comment('Sigla del documento');
            $table->timestamps();

            $table->comment('Tabla paramétrica para almacenar tipos de documentos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_documento');
    }
};
