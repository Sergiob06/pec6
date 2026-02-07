<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table='posts';
    public function usuari(){
        return $this->belongsTo(Usuari::class);
    }

    public function comentaris(){
        return $this->hasMany(Comentari::class);
    }
    
}
