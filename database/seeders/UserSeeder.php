<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'nick' => 'admin',
            'password' => 'admin',
            'nombre' => 'Jose',
            'apellidos' => 'García',
            'departamento' => 'Informática',
        ]);

        User::factory()->create([
            'nick' => 'contabilidad',
            'password' => 'contabilidad',
            'nombre' => 'Ana',
            'apellidos' => 'Perez',
            'departamento' => 'Contabilidad',
        ]);

        User::factory()->create([
            'nick' => 'produccion',
            'password' => 'produccion',
            'nombre' => 'Juan',
            'apellidos' => 'Gómez',
            'departamento' => 'Produccion',
        ]);

        User::factory()->create([
            'nick' => 'marketing',
            'password' => 'marketing',
            'nombre' => 'Kike',
            'apellidos' => 'García',
            'departamento' => 'Marketing',
        ]);
    }
}
