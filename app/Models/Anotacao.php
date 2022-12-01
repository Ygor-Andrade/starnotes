<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anotacao extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'titulo',
        'nota',
    
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    
    
    public function imagems()
    {
        return $this->hasMany(Imagem::class);
    }
    


}
