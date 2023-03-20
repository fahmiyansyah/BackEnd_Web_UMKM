<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table='admin';
    protected $fillable=[
        'email','password','phone','address'
    ];

}
