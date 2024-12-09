<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneracionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create()
        DB::table('generacions')->insert([
            'id' => 1,
            'nom' => 'Kanto',
        ]);

        DB::table('generacions')->insert([
            'id' => 2,
            'nom' => 'Johto',
        ]);

        DB::table('generacions')->insert([
            'id' => 3,
            'nom' => 'Hoenn',
        ]);
    }
}