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
</style>

@extends('Layouts/principal')
@section('content')

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
			<h2>Mensualidad</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{action('MensualidadController@create')}}" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar plan</span></a>
                    </div>
                </div>
            </div>
            @if($mensualidades->count())
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>Nombre plan</th>
			<th>Fecha de pago</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                @foreach($mensualidades as $mensualidad)
                <tbody>
                    <tr>
                        <td>{{$mensualidad->usuario}}</td>
                        <td>{{$mensualidad->nomplan}}</td>
                        <td>{{$mensualidad->fechapago}}</td>
                        <td>
                            <a href="{{action('MensualidadController@edit',$mensualidad->id)}}" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
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

    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{action('MensualidadController@destroy',$mensualidad->id)}}" method="POST">
                {{csrf_field()}}
                    <div class="modal-header">                      
                        <h4 class="modal-title">Eliminar Plan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">                    
                        <p>¿Estás seguro de que deseas eliminar este plan?</p>
                        <p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input name="_method" type="hidden" value="DELETE">
                        <input type="submit" value="Eliminar" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
