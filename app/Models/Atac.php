<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Atac extends Model
{
    use HasFactory;

    public function pokemons()
    {
        return $this->belongsToMany(pokemon::class);
    }

    public function atacs_pokemon()
    {
        return $this->hasMany(atacs_pokemon::class);
    }
}