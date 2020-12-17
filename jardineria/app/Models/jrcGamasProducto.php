<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jrcGamasProducto extends Model
{
    use HasFactory;
    protected $table = 'gamasproductos';
    protected $primarykey = 'Gama';
    protected $fillable = ['Gama','Descripcion','Imagen','created_at','updated_at'];
    public $timestamps = false;
}
