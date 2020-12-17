<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jrcCliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $primarykey = 'Codigo';
    protected $fillable = ['Codigo','Nombre','Telefono','Direccion','Ciudad','Pais','CodigoPostal','LimiteCredito','userid','create_at','update_at'];
    public $timestamps = false;
}
