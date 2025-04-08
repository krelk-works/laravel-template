<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Incidencia;
use Illuminate\Support\Facades\DB;

class IncidenciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('incidencias')->insert([
            [
                'descripcion' => 'No me arranca en Word',
                'tipo' => 'Software',
                'estado' => 'Pendiente',
                'nick' => 'contabilidad',
            ],
            [
                'descripcion' => 'No enciende mi ordenador',
                'tipo' => 'Hardware',
                'estado' => 'En tramite',
                'nick' => 'marketing',
            ],
            [
                'descripcion' => 'No me funciona Internet',
                'tipo' => 'Hardware',
                'estado' => 'Pendiente',
                'nick' => 'produccion',
            ],
            [
                'descripcion' => 'La impresora no imprime',
                'tipo' => 'Hardware',
                'estado' => 'En tramite',
                'nick' => 'produccion',
            ],
        ]);
    }
}
