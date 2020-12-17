<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DIRUsuario extends Model
{
    use HasFactory;
    protected $table = 'digusuario';
    protected $primarykey = 'id';
    protected $fillable = ['id','role','name','surname','email','passwd','image','created_at'];
}
