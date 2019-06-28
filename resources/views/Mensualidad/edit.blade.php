@extends('Layouts/principal')
@section('content')
<form method="POST" action="{{route('mensualidad.update',mensualidad->id)}}" role="form">
    {{csrf_field()}}
     <input name="_method" type="hidden" value="PATCH">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">                      
                <h4 class="modal-title">Plan alumno</h4>
            </div>
            <div class="modal-body">                    
                <div class="form-group">
                    <label>Alumno</label>
                    <select name="disciplina" id="disciplina" class="form-control" disabled="true">
                        @foreach ($alumnos as $alumno)
                        <option value="{{$alumno['nombres']}}"> {{$alumno['nombres']}} {{$alumno['appaterno']}} {{$alumno['apmaterno']}}</option>
                        @endforeach
                    </select>
                </div> 
                <div class="form-group">
                    <label>Plan</label>
                    <select name="disciplina" id="disciplina" class="form-control" disabled="true">
                        @foreach ($planes as $plan)
                        <option value="{{$plan['nombreplan']}}"> {{$plan['nombreplan']}}</option>
                        @endforeach
                    </select>
                </div> 
                
                <div class="form-group">
                    <label>Fecha Pago</label>
                    <input type="date" name="fechapago" id="fechapago" class="form-control" required value="{{$mensualidad->fechapago}}">
                </div>
                <div class="modal-footer">                    
                    <a href="{{route('mensualidad.index')}}" class="btn btn-info">Regresar</a>
                    <input type="submit" value="Registrar Alumno" class="btn btn-success">
                </div>  
            </div>
        </div>
        
    </div>
</form>

@stop