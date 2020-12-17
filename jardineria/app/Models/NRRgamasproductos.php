<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NRRgamasproductos extends Model
{
    use HasFactory;
    protected $table = 'gamasproductos';
    protected $fillable = ['gama','descripcion','imagen','created_at','updated_at'];

}
