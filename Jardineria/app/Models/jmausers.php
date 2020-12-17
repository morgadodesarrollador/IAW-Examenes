<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jmausers extends Model
{
    use HasFactory;
    protected $table = 'jmausers';
    protected $primarykey = 'id';
    protected $fillable = [
        'id','role','name','surname','email','passwd','image'
    ];
    public $timestamps = false;
}
