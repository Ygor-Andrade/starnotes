<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_anotacao',
        'url',
    ];


    public function anotacaos()
    {
        return $this->belongsTo(Anotacao::class);
    }


}
