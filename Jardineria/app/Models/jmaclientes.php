<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jmaclientes extends Model
{
    use HasFactory;
    protected $table = 'jmaclientes';
    protected $primarykey = 'codigo';
    protected $fillable = ['codigo',
        'nombre','telefono','direccion','ciudad','pais','codigoPostal','LimiteCredito','userid'
];
    public $timestamps = false;
}
