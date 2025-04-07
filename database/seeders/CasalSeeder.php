<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CasalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('casals')->insert([
            [
                'nom' => 'La Granja de Pablo',
                'data_inici' => '2025-04-01',
                'data_final' => '2025-04-25',
                'n_places' => 15,
                'id_ciutat' => 1,
            ],
            [
                'nom' => 'Aula de la majora acollida',
                'data_inici' => '2025-04-05',
                'data_final' => '2025-04-15',
                'n_places' => 8,
                'id_ciutat' => 2,
            ],
            [
                'nom' => 'El menjador de Pau',
                'data_inici' => '2025-04-03',
                'data_final' => '2025-04-20',
                'n_places' => 12,
                'id_ciutat' => 3,
            ],
            [
                'nom' => 'Anem jugant',
                'data_inici' => '2025-04-02',
                'data_final' => '2025-04-22',
                'n_places' => 20,
                'id_ciutat' => 4,
            ],
        ]);
    }
}
