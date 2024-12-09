<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipusesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('tipus')->insert([
            'id' => 1,
            'nom' => 'Normal',
        ]);

        DB::table('tipus')->insert([
            'id' => 2,
            'nom' => 'Lucha',
        ]);

        DB::table('tipus')->insert([
            'id' => 3,
            'nom' => 'Volador',
        ]);

        DB::table('tipus')->insert([
            'id' => 4,
            'nom' => 'Fuego',
        ]);

        DB::table('tipus')->insert([
            'id' => 5,
            'nom' => 'Agua',
        ]);

        DB::table('tipus')->insert([
            'id' => 6,
            'nom' => 'Tierra',
        ]);

        DB::table('tipus')->insert([
            'id' => 7,
            'nom' => 'Psiquico',
        ]);

        DB::table('tipus')->insert([
            'id' => 8,
            'nom' => 'Bicho',
        ]);

        DB::table('tipus')->insert([
            'id' => 9,
            'nom' => 'Roca',
        ]);

        DB::table('tipus')->insert([
            'id' => 10,
            'nom' => 'Fantasma',
        ]);

        DB::table('tipus')->insert([
            'id' => 11,
            'nom' => 'Dragon',
        ]);

        DB::table('tipus')->insert([
            'id' => 12,
            'nom' => 'Electrico',
        ]);

        DB::table('tipus')->insert([
            'id' => 13,
            'nom' => 'Hielo',
        ]);

        DB::table('tipus')->insert([
            'id' => 14,
            'nom' => 'Hada',
        ]);

        DB::table('tipus')->insert([
            'id' => 15,
            'nom' => 'Acero',
        ]);

        DB::table('tipus')->insert([
            'id' => 16,
            'nom' => 'Planta',
        ]);

        DB::table('tipus')->insert([
            'id' => 17,
            'nom' => 'Veneno',
        ]);
    }
}