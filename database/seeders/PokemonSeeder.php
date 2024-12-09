<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PokemonSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        DB::table('pokemons')->insert([
            'id' => 1,
            'nom' => 'Bulbasaur',
            'alçada' => '7',
            'pes' => '69',
            'hp' => 45,
            'atac' => 49,
            'defensa' => 49,
            'atac_esp' => 65,
            'defensa_esp' => 65,
            'velocitat' => 45,
            'descripcio' => 'Una rara semilla le fue plantada en el lomo al nacer. La planta brota y crece con este pokemon.',
            'sprite' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/1.png',
            'sprite_shiny' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/shiny/1.png',
            'id_gen' => null
        ]);

        DB::table('pokemons')->insert([
            'id' => 2,
            'nom' => 'Ivysaur',
            'alçada' => '10',
            'pes' => '130',
            'hp' => 60,
            'atac' => 62,
            'defensa' => 63,
            'atac_esp' => 80,
            'defensa_esp' => 80,
            'velocitat' => 60,
            'descripcio' => 'Poco agradable, pero muy bueno. La planta brota y crece con este pokemon.',
            'sprite' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/2.png',
            'sprite_shiny' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/shiny/2.png',
            'id_gen' => null
        ]);

        DB::table('pokemons')->insert([
            'id' => 3,
            'nom' => 'Venusaur',
            'alçada' => '200',
            'pes' => '100',
            'hp' => 80,
            'atac' => 82,
            'defensa' => 83,
            'atac_esp' => 100,
            'defensa_esp' => 100,
            'velocitat' => 80,
            'descripcio' => 'Puede convertir la luz del sol en energía. Por esa razón, es más poderoso en verano. ',
            'sprite' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/3.png',
            'sprite_shiny' => 'https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/shiny/3.png',
            'id_gen' => null
        ]);
    }
}