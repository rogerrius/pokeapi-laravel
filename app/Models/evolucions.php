<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class evolucions extends Model
{
    use HasFactory;

    public function pokemons()
    {
        return $this->belongsToMany(pokemon::class);
    }
}