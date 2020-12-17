<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mgGamasProductos extends Model
{
    use HasFactory;
    protected $table = 'gamasproductos';
    protected $primarykey = 'gama';
    protected $fillable = ['gama','descripcion','imagen','created_at','updated_at'];

    public function gamasproductos() {
        return $this->hasMany(gamasproductos::class,'gama', 'gama');
    }
}
