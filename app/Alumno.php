<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected  $fillable=['idalumno','rut','nombres','appaterno', 'apmaterno', 'direccion', 'fono', 'fecnac', 'alergia', 'enfermedad', 'fonoemergencia', 'disciplina'];
    protected  $table='alumnos';
}
