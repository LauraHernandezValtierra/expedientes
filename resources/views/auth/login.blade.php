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
</head>
<body>
<heder>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12" id="div">
			<img src="http://lax.megatravel.com.mx/expo/img/logo_mt.png" width="150">
		</div>
	</div>
</div>
</heder>
<section>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3" >
			<div class="panel panel-primary"  id="panel">
				<div class="panel-heading">Login</div>
				<div class="panel-body" >
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">

						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label"></label>
							<div class="col-md-6">
								<select class="form-control" name="email" >
									@foreach($usuario as $user)
									<option value="{{$user->email}}">{{$user->cnombre}}{{$user->capellidop}}</option>
								@endforeach
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</section>

<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

