<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tipus extends Model
{
    use HasFactory;

    protected $table = 'tipus';

    public function pokemons()
    {
        return $this->belongsToMany(Pokemon::class, 'pokemon_tipus', 'tipus_id', 'pokemon_id');
    }
}