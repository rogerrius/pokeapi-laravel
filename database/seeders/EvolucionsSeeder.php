<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvolucionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create()
        DB::table('evolucions')->insert([
            'id' => 1,
            'pokemon_id' => 1,
            'id-evolucions' => 1,
        ]);

        DB::table('evolucions')->insert([
            'id' => 2,
            'pokemon_id' => 2,
            'id-evolucions' => 2,
        ]);

        DB::table('evolucions')->insert([
            'id' => 3,
            'pokemon_id' => 3,
            'id-evolucions' => 3,
        ]);
    }
}