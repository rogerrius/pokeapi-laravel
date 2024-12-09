<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AtacPokemon extends Model
{
    use HasFactory;
    protected $table ='atac_pokemon';

    public function pokemon()
    {
        return $this->belongsToMany(Pokemon::class);
    }

    public function atac()
    {
        return $this->belongsTo(atac::class);
    }
}