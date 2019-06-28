@extends('Layouts/principal')
@section('content')
<form method="POST" action="{{route('alumno.store')}}" role="form">
    {{csrf_field()}}
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">                      
                <h4 class="modal-title">Agregar alumno</h4>
            </div>
            <div class="modal-body">                    
                <div class="form-group">
                    <label>Rut</label>
                    <input type="" name="rut" id="rut" class="form-control" required value="">
                </div>
                <div class="form-group">
                    <label>Nombres</label>
                    <input type="text" name="nombres" id="nombres" class="form-control" required value="">
                </div>
                <div class="form-group">
                    <label>Apellido paterno</label>
                    <input type="text" name="appaterno" id="appaterno" class="form-control" required value="">
                </div>
                <div class="form-group">
                    <label>Apellido materno</label>
                    <input type="text" name="apmaterno" id="apmaterno" class="form-control" required value="">
                </div>
                <div class="form-group">
                    <label>Direccion</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" required value="">
                </div>
                <div class="form-group">
                    <label>Telefono</label>
                    <input type="text" name="fono" id="fono" class="form-control" required value="">
                </div>
                <div class="form-group">
                    <label>Fecha nacimieto</label>
                    <input type="date" name="fecnac" id="fecnac" class="form-control" required value="">
                </div>
                <div class="form-group">
                    <label>Alergia</label>
                    <input type="text" name="alergia" id="alergia" class="form-control" required value="">
                </div>
                <div class="form-group">
                <label>Enfermedad</label>
                    <input type="text" name="enfermedad" id="enfermedad" class="form-control" required value="">
                </div>
                <div class="form-group">
                    <label>Fono emergencia</label>
                    <input type="text" name="fonoemergencia" id="fonoemergencia" class="form-control" required value="">
                </div>
                <div class="form-group">
                    <label>Disciplina</label>
                    <select name="disciplina" id="disciplina" class="form-control" >
                        @foreach ($disciplinas as $disciplina)
                        <option value="{{$disciplina['nombredisciplina']}}"> {{$disciplina['nombredisciplina']}}</option>
                        @endforeach
                    </select>
                </div> 
                <div class="modal-footer">                    
                    <a href="{{route('alumno.index')}}" class="btn btn-info">Regresar</a>
                    <input type="submit" value="Registrar Alumno" class="btn btn-success">
                </div>  
            </div>
        </div>
        
    </div>
</form>

@stop