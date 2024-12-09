<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HabilitatsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('habilitats')->insert([
            'id' => 1,
            'nom' => 'Ventosas',
            'descripcio' => 'Ventosas que se aferran al suelo, con lo cual anula movimientos y objetos que fuerzan el cambio de Pokémon.',
            'oculta' => 'None',
        ]);

        DB::table('habilitats_pokemon')->insert([
            'id' => 1,
            'habilitat_id' => 1,
            'pokemon_id' => 1,
        ]);

        DB::table('habilitats')->insert([
            'id' => 2,
            'nom' => 'Piel tosca',
            'descripcio' => 'Hiere con su áspera piel al Pokémon que lo ataca con un movimiento de contacto.',
            'oculta' => 'Gible, Gabite, Garchomp',
        ]);

        DB::table('habilitats_pokemon')->insert([
            'id' => 2,
            'habilitat_id' => 2,
            'pokemon_id' => 2,
        ]);

        DB::table('habilitats')->insert([
            'id' => 3,
            'nom' => 'Levitación',
            'descripcio' => 'Su capacidad de flotar sobre el suelo le proporciona inmunidad frente a los movimientos de tipo tierra.',
            'oculta' => 'None',
        ]);

        DB::table('habilitats_pokemon')->insert([
            'id' => 3,
            'habilitat_id' => 3,
            'pokemon_id' => 3,
        ]);
    }
}