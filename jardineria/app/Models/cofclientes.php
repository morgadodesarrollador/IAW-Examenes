<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cofclientes extends Model
{
    use HasFactory;
    protected $table = 'cofclientes';
    protected $primarykey = 'Codigo';
    protected $fillable = [
        'Codigo',
        'Nombre',
        'Telefono',
        'Direccion',
        'Ciudad',
        'Pais',
        'CodigoPostal',
        'LimiteCredito',
        'userid',
        'created_at',
        'updated_at'];

}
