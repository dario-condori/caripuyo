<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoDocumentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_documento')->delete();

        DB::table('tipo_documento')->insert([
            'id' => 1,
            'nombre_tipo_documento' => 'Cédula de identidad',
            'sigla_tipo_documento' => 'CI',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tipo_documento')->insert([
            'id' => 2,
            'nombre_tipo_documento' => 'Registro Único Nacional',
            'sigla_tipo_documento' => 'RUN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tipo_documento')->insert([
            'id' => 3,
            'nombre_tipo_documento' => 'Cédula de identidad Extranjeria',
            'sigla_tipo_documento' => 'CI-EX',
            'created_at' => now(),
            'updated_at' => now(),
        ]);        
        DB::table('tipo_documento')->insert([
            'id' => 4,
            'nombre_tipo_documento' => 'Registro de comercio',
            'sigla_tipo_documento' => 'RCOM',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
