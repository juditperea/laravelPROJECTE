<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListaPelicula extends Model
{
    protected $table = 'lista_peliculas';
    protected $fillable = ['pelicula_id', 'user_id', 'estado', 'lista_usuario_id'];

    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class, 'pelicula_id');
    }
}
