<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensualidad extends Model
{
    protected  $fillable=['id','usuario','nomplan','fechapago'];
    protected  $table='mensualidades';
}
