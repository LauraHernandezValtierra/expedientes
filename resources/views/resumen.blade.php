@extends('exp')

@section('content')
<!--<div class="container">
	<div class="container">
		<ul class="nav nav-tabs">
			<li class="active"><a href="#">Resumen</a></li>
		    <li><a href="{{url('ver_expediente', [$expediente->cid_expediente, $act=2])}}">Menu 1</a></li>
		    <li><a href="#">Menu 2</a></li>
		    <li><a href="#">Menu 3</a></li>
		</ul>-->
		  <br>
		  <div class="container">
		  	<div class="row">
			  	<div class="col-md-2">
					<div class="form-group">
					    <label>Mínimo a Pagar</label>   
					    <input type="txt" name="" class="form-control" value="{{$expediente->minapagar}}">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <label>Fecha de Salida</label>   
					    <input type="txt" name="" class="form-control" value="{{$expediente->dfechasalida}}">
					    <button type="button" class="btn btn-primary btn-xs">Cambiar Fecha</button>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <label>Fecha de Regreso</label>   
					    <input type="txt" name="" class="form-control">
					    <button type="button" class="btn btn-primary btn-xs">Cambiar Fecha</button>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
					    <label>Notas</label>   
					    <textarea class="form-control"></textarea>
					    <button type="button" class="btn btn-primary btn-xs">Agregar Comentario</button>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					   <button type="button" class="btn btn-warning">Cerrar Expediente</button>

					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
					    <label>Paquete</label>   
					    <select class="form-control">
					    	<option></option>
					    </select>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <label>Área</label>   
					    <select class="form-control">
					    	<option></option>
					    </select>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <label>MT</label>   
					    <select class="form-control">
					    	<option></option>
					    </select>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <label>Clave MT</label>   
					    <select class="form-control">
					    	<option></option>
					    </select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="texto col-md-8">
					<label>Paquete</label>
					<div>
						<div  class="col-md-2">
							<label>Paquete</label>
							<input type="text" name=""  class="form-control"value="PRINCIPAL">
						</div>
						<div  class="col-md-2">
							<label>No. Área</label>
							<input type="text" name=""  class="form-control"value="{{$expediente->nid_area}}">
						</div>
						<div  class="col-md-2">
							<label>Área</label>
							<input type="text" name="" class="form-control" value="{{$expediente->area}}">
						</div>
						<div  class="col-md-2">
							<label>MT</label>
							<input type="text" name=""  class="form-control"value="{{$expediente->cid_destin}}">
						</div>
						<div  class="col-md-4">
							<label>Nombre del Paquete</label>
							<input type="text" name=""  class="form-control"value="{{$expediente->paquete}}">
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<br><br>
					<button type="button" class="btn btn-success">Agregar</button>
					<button type="button" class="btn btn-info">Editar</button>
					<button type="button" class="btn btn-danger">Eliminar</button>
				</div>
			</div>
			<br><br>
			<div class="row">
				<div class="col-md-4">
					<label>Observaciones</label>
					<textarea class="form-control">{{$expediente->observa}}</textarea>
				</div>
				<div class="col-md-3">
					<div class="form-group">
					    <label>Elegir Promoción</label>   
					    <select class="form-control">
					    	<option></option>
					    </select>
					</div>
					
				</div>
				<div class="col-md-3">
					
						<div class="checkbox">
					      <label><input type="checkbox" value="">T.C. Preferencial</label>
					      <input type="text" name="">
					    </div>
					    <div class="checkbox">
					      <label><input type="checkbox" value="">Meses sin Intereses</label>
					      <input type="text" name="">
					    </div>
					    <div class="checkbox">
					      <label><input type="checkbox" value="">Tarifa Aerea Promocional</label>
					    </div>
					
				</div>
				<div class="col-md-2">
					
						<div class="checkbox">
					      <button type="button" class="btn btn-primary">Envío Mail Quinceañeras</button>
					    </div>
				</div>
			</div>
		  </div>
	</div>


	  	<br><br>
</div>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  
</footer>
@endsection