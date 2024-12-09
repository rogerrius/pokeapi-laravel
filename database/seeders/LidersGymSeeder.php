<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LidersGymSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create()
        DB::table('lidersgym')->insert([
            'id' => 1,
            'nom' => 'Ash Ketchum',
            'id-gen' => 1,
        ]);

        DB::table('lidersgym')->insert([
            'id' => 2,
            'nom' => 'Misty',
            'id-gen' => 2,
        ]);

        DB::table('lidersgym')->insert([
            'id' => 3,
            'nom' => 'Brock',
            'id-gen' => 3,
        ]);
    }
}