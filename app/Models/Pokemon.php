<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pokemon extends Model
{
    use HasFactory;

    protected $table = 'pokemons';

    public function atacs()
    {
        return $this->belongsToMany(Atac::class);
    }

    public function atacs_pokemon()
    {
        return $this->hasMany(atacs_pokemon::class);
    }

    public function tipus()
    {
        return $this->belongsToMany(Tipus::class, 'pokemon_tipus', 'pokemon_id', 'tipus_id');
    }

    public function evolucions()
    {
        return $this->belongsToMany(evolucions::class);
    }

    public function habilitats()
    {
        return $this->belongsToMany(habilitats::class);
    }
}