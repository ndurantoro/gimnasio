<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected  $fillable=['id','nombreplan','diasalmes'];
    protected  $table='planes';
}
