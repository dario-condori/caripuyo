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
        Schema::create('contribuyente', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 100)->comment('Nombre o razon social del contribuyente');
            $table->string('apellidos', 100)->comment('Nombre o razon social del contribuyente');
            $table->enum('genero', ['M', 'F'])->comment('Genero del contribuyente M=masculino y F=femenino');
            $table->unsignedBigInteger('tipo_documento_id')->comment('Identificador del tipo de documenteo que presenta el contribuyente');
            $table->string('numero_documento',20)->comment('Número de documento que presenta el contribuyente');
            $table->unsignedBigInteger('lugar_expedido_id')->comment('Identificador del lugar de expedición del documento del contribuyente');
            $table->unsignedBigInteger('tipo_persona_id')->comment('Identificador del tipo de persona del contribuyente');
            $table->string('urbanizacion')->comment('Urbanizacion donde vive el contribuyente');
            $table->string('zona')->nullable()->comment('Zona donde vive el contribuyente');
            $table->string('comunidad')->nullable()->comment('Zona donde vive el contribuyente');
            $table->string('manzano')->comment('Manzano donde vive el contribuyente');
            $table->string('avenida_calle')->comment('Avenida o calle donde vive el contribuyente');
            $table->unsignedBigInteger('usuario_id')->comment('Identificador del usuario que realiza el registro');
            $table->timestamps();

            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documento')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('lugar_expedido_id')->references('id')->on('lugar_expedido')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('tipo_persona_id')->references('id')->on('tipo_persona')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('usuario_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contribuyente');
    }
};
