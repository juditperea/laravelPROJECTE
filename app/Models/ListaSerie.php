<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListaSerie extends Model
{
    protected $table = 'lista_series';
    protected $fillable = ['lista_id', 'serie_id', 'user_id', 'estado'];


    public function serie()
    {
        return $this->belongsTo(Serie::class, 'serie_id');
    }
}
