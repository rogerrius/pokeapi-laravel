<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipusPokemonsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create()
        DB::table('pokemon_tipus')->insert([
            'pokemon_id' => 1,
            'tipus_id' => 16,
        ]);

        DB::table('pokemon_tipus')->insert([
            'pokemon_id' => 1,
            'tipus_id' => 17,
        ]);

        DB::table('pokemon_tipus')->insert([
            'pokemon_id' => 2,
            'tipus_id' => 2,
        ]);

        DB::table('pokemon_tipus')->insert([
            'pokemon_id' => 3,
            'tipus_id' => 3,
        ]);
    }
}