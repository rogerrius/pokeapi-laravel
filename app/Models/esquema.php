<?php

// Imagen 1 (One to One)

class Usuari extends Model
{
    public function perfil()
    {
        return $this->hasOne(Perfil::class);
    }
}

class Perfil extends Model
{
    public function usuari()
    {
        return $this->belongsTo(Usuari::class);
    }
}

// Nota: En la tabla perfil hay una columna usuari-id que hace referencia a la tabla usuari.



// Imagen 2 (Many to Many)

class Usuari extends Model
{
    public function rols()
    {
        return $this->belongsToMany(Rol::class);
    }
}

class Rol extends Model
{
    public function usuaris()
    {
        return $this->belongsToMany(Usuari::class);
    }
}

// Nota: Aquí necesitamos una tabla pivote usuari_rol que tendrá las columnas usuari-id y rol-id.



// Imagen 3 (One to Many)

class Usuari extends Model
{
    public function publicacions()
    {
        return $this->hasMany(Publicacio::class);
    }
}

class Publicacio extends Model
{
    public function usuari()
    {
        return $this->belongsTo(Usuari::class);
    }
}

// Nota: En la tabla publicacions habrá una columna usuari-id que hace referencia a la tabla usuari.