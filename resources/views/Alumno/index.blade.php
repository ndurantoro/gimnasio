<style type="text/css">
    body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}	
</style>

@extends('Layouts/principal')
@section('content')

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
			<h2>Alumnos</h2>
			</div>
			<div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar alumno</span></a>
			</div>
                </div>
            </div>
            @if($alumnos->count())
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>RUT</th>
                        <th>Nombres</th>
			<th>Apellidos</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Fecha nacimiento</th>
                        <th>Alergia</th>
                        <th>Enfermedad</th>
                        <th>Fono emergencia</th>
                        <th>Disciplina</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach($alumnos as $alumno)
                <tbody>
                    <tr>
                        <td>{{$alumno->rut}}</td>
                        <td>{{$alumno->nombres}}</td>
                        <td>{{$alumno->appaterno}} {{$alumno->apmaterno}}</td>
                        <td>{{$alumno->direccion}}</td>
                        <td>{{$alumno->fono}}</td>
                        <td>{{$alumno->fecnac}}</td>
                        <td>{{$alumno->alergia}}</td>
                        <td>{{$alumno->enfermedad}}</td>
                        <td>{{$alumno->fonoemergencia}}</td>
                        <td>{{$alumno->nomdisciplina}}</td>
                        <td>
                            <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                            <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            @else
                No hay planes registrados para alumnos
            @endif
            
        </div>
    </div>
	<!-- Agregar Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
		<div class="modal-content">
                    <form method="POST" action="{{action('AlumnoController@create',$alumno->id)}}" role="form">
                        {{csrf_field()}}
			<div class="modal-header">						
                            <h4 class="modal-title">Agregar alumno</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
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
			</div>
			<div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                            <input type="submit" class="btn btn-success" value="Agregar">
			</div>
                    </form>
		</div>
            </div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
		<div class="modal-content">
                    <form method="POST" action="{{action('AlumnoController@update',$alumno->id)}}"" role="form">
                    {{csrf_field()}}
			<div class="modal-header">						
                            <h4 class="modal-title">Editar datos alumno</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
                        <div class="modal-body">					
                            <div class="form-group">
				<label>Rut</label>
                                <input type="" name="rut" id="rut" class="form-control" value="{{$alumno->rut}}">
                            </div>
                            <div class="form-group">
				<label>Nombres</label>
                                <input type="text" name="nombres" id="nombres" class="form-control" value="{{$alumno->nombres}}">
                            </div>
                            <div class="form-group">
				<label>Apellido paterno</label>
                                <input type="text" name="appaterno" id="appaterno" class="form-control" value="{{$alumno->appaterno}}">
                            </div>
                            <div class="form-group">
				<label>Apellido materno</label>
                                <input type="text" name="apmaterno" id="apmaterno" class="form-control" value="{{$alumno->apmaterno}}">
                            </div>
                            <div class="form-group">
				<label>Direccion</label>
                                <input type="text" name="direccion" id="direccion" class="form-control" value="{{$alumno->direccion}}">
                            </div>
                            <div class="form-group">
				<label>Telefono</label>
                                <input type="text" name="fono" id="fono" class="form-control" value="{{$alumno->fono}}">
                            </div>
                            <div class="form-group">
				<label>Fecha nacimieto</label>
                                <input type="date" name="fecnac" id="fecnac" class="form-control" value="{{$alumno->fecnac}}">
                            </div>
                            <div class="form-group">
				<label>Alergia</label>
                                <input type="text" name="alergia" id="alergia" class="form-control" value="{{$alumno->alergia}}">
                            </div>
                            <div class="form-group">
				<label>Enfermedad</label>
                                <input type="text" name="enfermedad" id="enfermedad" class="form-control" value="{{$alumno->enfermedad}}">
                            </div>
                            <div class="form-group">
				<label>Fono emergencia</label>
                                <input type="text" name="fonoemergencia" id="fonoemergencia" class="form-control" value="{{$alumno->fonoemergencia}}">
                            </div>
                            <div class="form-group">
                                <label>Disciplina</label>
                                <select name="disciplina" id="disciplina" class="form-control" >
                                    @foreach ($disciplinas as $disciplina)
                                    <option value="{{$disciplina['nombredisciplina']}}"> {{$disciplina['nombredisciplina']}}</option>
                                    @endforeach
                                </select>
                            </div> 
			</div>
			<div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                            <input type="submit" value="Actualizar" class="btn btn-success">
			</div>
                    </form>
		</div>
            </div>
	</div>
	<!-- Eliminar Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
		<div class="modal-content">
                    <form action="{{action('AlumnoController@destroy',$alumno->id)}}" method="POST">
                        {{csrf_field()}}
			<div class="modal-header">						
                            <h4 class="modal-title">Eliminar alumno</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">					
                            <p>¿Estás seguro de que deseas eliminar este registro?</p>
                            <p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
			</div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                            <input name="_method" type="hidden" value="DELETE">
                                <input type="submit" value="Eliminar" class="btn btn-danger">
			</div>
                    </form>
		</div>
            </div>
	</div>
        
<script type="text/javascript">
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>

@stop
