<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected  $fillable=['id','rut','nombres','appaterno', 'apmaterno', 'direccion', 'fono', 'fecnac', 'alergia', 'enfermedad', 'fonoemergencia', 'nomdisciplina'];
    protected  $table='alumnos';
}
