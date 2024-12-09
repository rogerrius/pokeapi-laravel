<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class habilitats extends Model
{
    use HasFactory;

    public function pokemons()
    {
        return $this->belongsToMany(pokemon::class);
    }
}