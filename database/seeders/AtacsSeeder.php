<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtacsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create()
        DB::table('atacs')->insert([
            'id' => 1,
            'nom' => 'Placaje',
            'PPs' => '5',
            'precisio' => '100',
            'potencia' => '40',
        ]);

        DB::table('atacs')->insert([
            'id' => 2,
            'nom' => 'Corte',
            'PPs' => '5',
            'precisio' => '100',
            'potencia' => '40',
        ]);

        DB::table('atacs')->insert([
            'id' => 3,
            'nom' => 'Pistola agua',
            'PPs' => '5',
            'precisio' => '100',
            'potencia' => '40',
        ]);
    }
}