<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected  $fillable=['id','username','contraseña'];
    protected  $table='login';
}
