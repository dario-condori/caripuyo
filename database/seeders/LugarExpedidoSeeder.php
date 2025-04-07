<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LugarExpedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lugar_expedido')->delete();

        DB::table('lugar_expedido')->insert([
            'nombre_lugar_expedido' => 'Chuquisaca',
            'sigla_lugar_expedido' => 'CH',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('lugar_expedido')->insert([
            'nombre_lugar_expedido' => 'La Paz',
            'sigla_lugar_expedido' => 'LP',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('lugar_expedido')->insert([
            'nombre_lugar_expedido' => 'Cochabamba',
            'sigla_lugar_expedido' => 'CB',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('lugar_expedido')->insert([
            'nombre_lugar_expedido' => 'Oruro',
            'sigla_lugar_expedido' => 'OR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('lugar_expedido')->insert([
            'nombre_lugar_expedido' => 'Potosí',
            'sigla_lugar_expedido' => 'PT',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('lugar_expedido')->insert([
            'nombre_lugar_expedido' => 'Tarija',
            'sigla_lugar_expedido' => 'TJ',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('lugar_expedido')->insert([
            'nombre_lugar_expedido' => 'Santa Cruz',
            'sigla_lugar_expedido' => 'SC',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('lugar_expedido')->insert([
            'nombre_lugar_expedido' => 'Beni',
            'sigla_lugar_expedido' => 'BN',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('lugar_expedido')->insert([
            'nombre_lugar_expedido' => 'Pando',
            'sigla_lugar_expedido' => 'PD',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('lugar_expedido')->insert([
            'nombre_lugar_expedido' => 'Otros',
            'sigla_lugar_expedido' => 'OTR',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
