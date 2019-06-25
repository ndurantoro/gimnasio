<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensualidad extends Model
{
    protected  $fillable=['idmensualidad','usuario','nomplan','fechapago'];
    protected  $table='mensualidades';
}
