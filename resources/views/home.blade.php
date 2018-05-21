@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<!--<div class="col-md-10 col-md-offset-1">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <ul class="nav navbar-nav">
			      <li class="active"><a href="#">Administrar Expedientes</a></li>
			      <li class="dropdown">
			        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Ingresos
			        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><a href="#">Nueva Solicitud</a></li>
				          <li><a href="#">Cambio de Folio a Expediente</a></li>
				          <li><a href="#">Cancelar Expediente</a></li>
				        </ul>
				      <li><a href="#">Ver Bitácoras</a></li>
				      <li><a href="#">Comisiones</a></li>
				    </li>
				</ul>
			  </div>
			</nav>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Administración de Expedientes</div>

				<div class="panel-body">
					<div class="form-group col-md-3">
						<label>Expediente</label>
						<input type="text" name="exp" class="form-control">
					</div>
					<div class="form-group col-md-3">
						<label>Nombre/Razón Social</label>
						<input type="text" name="exp" class="form-control">
					</div>
					<div class="form-group col-md-3">
						<label>Empleado</label>
						<select class="form-control">
							<option></option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Fechas</label>
						<input type="date" name="exp" class="form-control">
					</div>
					
				</div>
			</div>
		</div>
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Expedientes</div>

				<div class="panel-body">
					<table class="table table-striper table-hover">
						<tr>
							<th>Cotización</th>
							<th>Expediente</th>
							<th>Ingreso</th>
							<th>Paquete</th>
							<th>ID Cliente</th>
							<th>Nombre/Razón Social</th>
							<th>I. Ejec</th>
							<th># Emp</th>
							<th>Pax</th>
							<th>F.Salida</th>
							<th>T.Ope A</th>
							<th>T.Ope Terr</th>
							<th>Ver</th>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td><a href="{{url('ver_expediente')}}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
						</tr>
					</table>
					
				</div>
			</div>
		</div>-->
	</div>
</div>
@endsection
