<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\JsonResponse;

class PokemonController extends Controller
{
    public function index(): JsonResponse
    {
        $data = Pokemon::with('tipus')->get();  // Asegúrate de que la tabla 'pokemons' exista
        return response()->json(['success' => true, 'data' => $data]);
    }

    public function show($id): JsonResponse
    {
        $data = Pokemon::where('id', '=', $id)->with('tipus')->get();  // Asegúrate de que la tabla 'pokemons' exista
        return response()->json(['success' => true, 'data' => $data]);
    }
}