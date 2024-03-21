<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeriesComment extends Model
{
    use HasFactory;

    protected $fillable = ['serie_id', 'user_id', 'comment'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}
?>