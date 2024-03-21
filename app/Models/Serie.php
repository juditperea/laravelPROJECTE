<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SeriesComment;

class Serie extends Model
{
    use HasFactory;

    protected $table = 'series'; 
    
    public $timestamps = false;

    protected $fillable = ['imagen', 'titulo', 'descripcion', 'genero_id', 'ano_inicio', 'ano_fin', 'estado', 'numero_temporadas', 'numero_episodios']; 

    public function genero()
    {
        return $this->belongsTo(Genero::class, 'genero_id','id');
    }
    public function comments()
    {
        return $this->hasMany(SeriesComment::class);
    }
    public function listasUsuarios()
{
    return $this->belongsToMany(User::class, 'listas_usuario', 'serie_id', 'user_id')
        ->withPivot('lista')
        ->withTimestamps();
}
}
