<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtacsPokemonSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('atacs-pokemons')->insert([
            'id' => 1,
            'id-atacs' => 1,
            'id-pokemon' => 1,
        ]);

        DB::table('atacs-pokemons')->insert([
            'id' => 2,
            'id-atacs' => 2,
            'id-pokemon' => 2,
        ]);

        DB::table('atacs-pokemons')->insert([
            'id' => 3,
            'id-atacs' => 3,
            'id-pokemon' => 3,
        ]);
    }
}