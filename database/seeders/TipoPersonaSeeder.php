<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tipo_persona')->delete();

        DB::table('tipo_persona')->insert([
            'id' => 1,
            'nombre_tipo_persona' => 'Persona natural',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('tipo_persona')->insert([
            'id' => 2,
            'nombre_tipo_persona' => 'Persona jurídica',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
