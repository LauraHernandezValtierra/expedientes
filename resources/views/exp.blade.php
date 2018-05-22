<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prueba</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	@stack('styles') 
</head>
<body>
	<div class="content">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="http://lax.megatravel.com.mx/expo/img/logo_mt.png" width="100"></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}"></a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if (Auth::guest())
						
						
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->ciniciales }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><img src="http://lax.megatravel.com.mx/expo/img/logo_mt.png" width="100"></li>
								<li>{{ Auth::user()->cnombre }} {{ Auth::user()->capellidop }}</a></li>
								<li>{{ Auth::user()->email }}</a></li>
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
	</div>
	<div class="jumbotron">
	  <div class="container">
	  	<div class="col-md-2">
		  	<div class="form-group">
			    <h4>Expediente EXP.:<strong>{{$expediente->cid_expediente}}</strong></h4>      
			    <input type="hidden" name="" class="form-control">
			</div>
			<div class="form-group">
			    <label>Fecha de Apertura</label>      
			    <input type="txt" name="fecha_apertura" class="form-control input-sm" value="{{$expediente->dfecha}}">
			</div>
			
			<div class="form-group">
			    <label>Total del Paquete</label>      
			    <input type="txt" name="totpaq" class="form-control input-sm" value="{{$expediente->totpaq}}">
			</div>
			<div class="form-group">
			    <label>Moneda</label>      
			    <input type="txt" name="moneda" class="form-control input-sm" value="{{$expediente->moneda}}">
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
			    <button type="button" class="btn btn-primary">Cotización</button>      
			    <input type="txt" name="cid_cotizacion" class="form-control input-sm" value="{{$expediente->cid_cotizacion}}">
			</div>
			<div class="form-group">
			    <label>Fecha de Cotización</label>      
			    <input type="txt" name="dfecha" class="form-control input-sm" value="{{$expediente->dfecha}}">
			</div>
			<div class="form-group">
			    <label>Ejecutivo</label>
			    <input type="hidden" name="numempleado" class="form-control input-sm" value="{{$expediente->numempleado}}">      
			    <input type="txt" name="" class="form-control input-sm" value="{{$expediente->inicempleado}}-{{$expediente->nomempleado}}">
			</div>
			<div class="form-group">
			    <label class="col-md-12">Área</label>      
			     <input type="hidden" name="" class="col-md-4 input-sm" value="{{$expediente->nid_area}}"><input type="txt" name="" class="form-control input-sm" value="{{$expediente->nid_area}} {{$expediente->area}}">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
			    <label>Cliente</label>      
			    <input type="txt" name="" class="form-control input-sm" value="{{$expediente->cid_cliente}} {{$expediente->cnombre}} {{$expediente->capellidop}} {{$expediente->capellidom}}">
			</div>
			<div class="form-group">
			    <label></label>      
			    <input type="txt" name="" class="form-control input-sm" value="{{$expediente->cestado}},{{$expediente->cmunicipio}}. TEL.: {{$expediente->clada}} {{$expediente->ctelefono}} {{$expediente->cext}}">
			</div>
			<div class="form-group">
			    <label></label>      
			    <input type="txt" name="" class="form-control input-sm" value="{{$expediente->cid_funcionario}} {{$expediente->fnombre}} {{$expediente->fapellidop}}">
			</div>
			<div class="form-group">
			    <button type="button" class="btn btn-info"> Contactos de Envío</button>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
			    <label>Tipo Cliente</label>      
			    <input type="txt" name="" class="form-control input-sm" value="{{$expediente->ctipocliente}}">
			</div>
			<div class="form-group">
			    <label>Email</label>      
			    <input type="txt" name="" class="form-control input-sm" value="{{$expediente->cmail}}">
			</div>
			<div class="form-group">
			    <label>Fecha de Salida</label>      
			    <input type="txt" name="" class="form-control input-sm" value="{{$expediente->dfechasalida}}">
			</div>
		</div>
	  </div>
	</div>
	<div class="container">
	<div class="container">
	<ul class="nav nav-tabs">
			
				<li><a href="{{url('ver_expediente', [$expediente->cid_expediente, $act=1])}}">Resumen</a></li>
			    <li><a href="{{url('ver_expediente', [$expediente->cid_expediente, $act=2])}}">Pasajeros</a></li>
			    <li><a href="{{url('ver_expediente', [$expediente->cid_expediente, $act=3])}}">Cobranza</a></li>
			    <li><a href="#">Menu 3</a></li>
		</ul>
		  <br>


	@yield('content')
	<footer class="container-fluid text-center">
  <p>MEGA TRAVEL </p>  
  
</footer>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
