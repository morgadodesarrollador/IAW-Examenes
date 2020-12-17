<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jcgggamas extends Model
{
    use HasFactory;
    public function gamas() { 
        return $this->hasMany(Jcgggamas::class,'Gamas', 'Gamas');
    }
}