<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected  $fillable=['idasistencia','nomalumno','fecha','nomprofesor'];
    protected  $table='asistencias';
}
