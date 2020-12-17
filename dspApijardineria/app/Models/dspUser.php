<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dspUser extends Model
{
    use HasFactory;
    protected $table = 'dspusuarios';
    protected $primarykey = 'id';
    protected $fillable = ['id','role','name','surname','email','passwd','image', 'created_at', 'updated_at'];
    public $timestamps = true;
}
