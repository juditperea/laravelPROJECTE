<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PeliculasComment;

class Pelicula extends Model
{
    use HasFactory;

    protected $table = 'peliculas'; 

    public $timestamps = false;
    
    protected $fillable = ['imagen', 'titulo', 'descripcion', 'genero_id', 'ano_lanzamiento', 'estado']; 

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genero_id', 'id'); 
    }
    public function comments()
    {
        return $this->hasMany(PeliculasComment::class);
    }
    public function listasUsuarios()
{
    return $this->belongsToMany(User::class, 'listas_usuario', 'pelicula_id', 'user_id')
        ->withPivot('lista')
        ->withTimestamps();
}
}
