<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jrcUsers extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primarykey = 'id';
    protected $fillable = ['id','role','name','surname','email','passwd','images','created_at','updated_at'];
    public $timestamps = false;
}
