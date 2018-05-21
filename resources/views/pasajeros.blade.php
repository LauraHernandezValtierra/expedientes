@extends('exp')

@section('content')

		  <br>
		  <div class="container">
		  	<div class="row">
			  	<div class="col-md-2">
					<div class="form-group">
					    <label>Apellido Paterno</label>   
					    <input type="txt" name="" class="form-control" value="{{$expediente->minapagar}}">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <label>Apellido Materno</label>   
					    <input type="txt" name="" class="form-control" value="{{$expediente->dfechasalida}}">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <label>Nombre(s)</label>   
					    <input type="txt" name="" class="form-control">
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
					    <label>Título</label>   
					    <select class="form-control">
					    	<option></option>
					    </select>
					</div>
				</div>
				<div class="col-md-1">
					<div class="checkbox">
					      <label><input type="checkbox" value="">Pasajero Principal</label>
					</div>
				</div>
				<div class="col-md-3">
					<br><br>
					<button type="button" class="btn btn-success">Agregar</button>
					<button type="button" class="btn btn-warning">Editar</button>
					<button type="button" class="btn btn-danger">Eliminar</button>
				</div>
			</div>
			<hr>
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