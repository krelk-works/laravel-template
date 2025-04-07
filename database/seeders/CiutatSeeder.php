<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CiutatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('ciutats')->insert([
            [
                'nom' => 'Alacant',
                'n_habitants' => 1335011,
            ],
            [
                'nom' => 'Barcelona',
                'n_habitants' => 856005,
            ],
            [
                'nom' => 'Madrid',
                'n_habitants' => 1204563,
            ],
            [
                'nom' => 'Zaragoza',
                'n_habitants' => 872645,
            ],
        ]);
    }
}
