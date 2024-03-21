<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $table = 'generos';

    protected $primaryKey = 'genero_id';

    protected $fillable = ['nombre']; 

   
    public function peliculas()
    {
        return $this->hasMany(Pelicula::class, 'genero_id');
    }
}
