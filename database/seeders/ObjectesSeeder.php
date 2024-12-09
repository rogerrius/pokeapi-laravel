<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjectesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create()
        DB::table('objectes')->insert([
            'id' => 1,
            'nom' => 'Pokeball',
            'descripcio' => 'Dispositivo para capturar pokemons',
            'sprite' => ''
        ]);

        DB::table('objectes')->insert([
            'id' => 2,
            'nom' => 'Poción',
            'descripcio' => 'Medicina en espray que cura 20 PS de un Pokemon.',
            'sprite' => ''
        ]);

        DB::table('objectes')->insert([
            'id' => 3,
            'nom' => 'Revivir',
            'descripcio' => 'Medicina que revive a un Pokemon que ha sido derrotado.',
            'sprite' => ''
        ]);
    }
}