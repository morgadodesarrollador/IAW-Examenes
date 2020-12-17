<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DIRGamaProducto extends Model
{
    use HasFactory;
    protected $table = 'dirgamaproducto';
    protected $primarykey = 'gama';
    protected $fillable = ['gama','descripcion','imagen'];
}
