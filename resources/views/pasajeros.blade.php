@extends('exp')
@push('styles')
<style type="text/css">
        #scroll {
            overflow:scroll;
            height:150px;
        }
       
    </style>
@endpush
@section('content')

		  <br>
		  <div class="container">
		  	<div class="row">
		  		<div class="panel panel-default">
					<div class="panel-body" >
					  	<div class="col-md-2">
							<div class="form-group">
							    <label>Apellido Paterno</label>   
							    <input type="txt" name="" class="form-control" >
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							    <label>Apellido Materno</label>   
							    <input type="txt" name="" class="form-control">
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
				</div>
			</div>
		
				<div class="row">
					<div class="panel panel-primary">
						<div class="panel-heading">Pasajeros</div>
						<div class="panel-body" >
							<div class="texto col-md-10">
								
								<div>
									<div  class="col-md-2">
										<label>Apellido Paterno</label>

									</div>
									<div  class="col-md-2">
										<label>Apellido Materno</label>
										
									</div>
									<div  class="col-md-4">
										<label>Nombre(s)</label>
										
									</div>
									<div  class="col-md-2">
										<label>Título</label>
										
									</div>
									<div  class="col-md-2">
										<label>P</label>
										
									</div>
								</div>
							</div>
							@foreach($pasajeros as $pax)
							<div class="texto col-md-10">
								<div id="scroll">
									<div  class="col-md-2">
										<input type="text" name=""  class="form-control"value="{{$pax->apellidop}}">
									</div>
									<div  class="col-md-2">
										<input type="text" name=""  class="form-control"value="{{$pax->apellidom}}">
									</div>
									<div  class="col-md-4">
										<input type="text" name="" class="form-control" value="{{$pax->nombre}}">
									</div>
									<div  class="col-md-2">
										<input type="text" name=""  class="form-control"value="{{$pax->titulo}}">
									</div>
									<div  class="col-md-2">
										@if($pax->principal==1)
										<div class="checkbox">
									      <input type="checkbox" checked="checked">
									    </div>
									      @else
									    <div class="checkbox">
									      <input type="checkbox">
									    </div>
									    @endif
									</div>
								</div>
							</div>
							@endforeach
							<div class="col-md-2">
								<div class="dropdown">
									<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Opciones
									<span class="caret"></span></button>
								  <ul class="dropdown-menu">
								    <li><a href="#">Cargar Datos Adicionales Assist Card</a></li>
								    <li><a href="#">Solicitud de ASSIST CARD</a></li>
								    <li><a href="#">Pax de Bloq (EU)</a></li>
								    <li><a href="#">Completar datos /Pax(EU)</a></li>
								    <li><a href="#">Exportar a Excel</a></li>
								  </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			<br><br>
			<div class="row">
				<div class="panel panel-primary">
					<div class="panel-heading"></div>
					<div class="panel-body" >
						<div class="form-group">
							<label>Buscar Archivo</label>
							<input type="text" name="" class="form-control">
						</div>
						
							<button type="button" class="btn btn-primary">Cargar Pasaporte</button>
						
							<button type="button" class="btn btn-primary">Cargar Visa</button>
						
							<button type="button" class="btn btn-primary">Cargar boleto Nevada</button>
						
							<button type="button" class="btn btn-primary">Consulta Pasaporte</button>
						
							<button type="button" class="btn btn-primary">Consulta Visa</button>
						
							<button type="button" class="btn btn-primary">Boletos Nevada</button>
					
					</div>
				</div>
			</div>


		</div>
	</div>


	  	<br><br>
</div>
@endsection