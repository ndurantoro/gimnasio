<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected  $fillable=['idlogin','username','contraseña'];
    protected  $table='login';
}
