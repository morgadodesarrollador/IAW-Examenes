<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jcggclientes extends Model
{
    use HasFactory;
    public function clientes() { 
        return $this->hasMany(Jcggclientes::class,'Clientes', 'Clientes');
    }
}
