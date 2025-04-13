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
        Schema::create('lugar_expedido', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_lugar_expedido', 30)->comment('Nombre del lugar de expedicion del documento');
            $table->string('sigla_lugar_expedido', 5)->comment('Sigla del lugar de expedicion del documento');
            $table->timestamps();

            $table->comment('Tabla paramétrica para almacenar lugar de expedición del documento');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lugar_expedido');
    }
};
