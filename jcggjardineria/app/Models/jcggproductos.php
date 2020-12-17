<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jcggproductos extends Model
{
    use HasFactory;
    public function productos() { 
        return $this->hasMany(Jcggproductos::class,'Productos', 'Productos');
        }
}
