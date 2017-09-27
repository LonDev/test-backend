<!DOCTYPE html>
<html ng-app="lista">
<head>
	<title>Lista de Contatos</title>
	<!-- documentos de estilo e js sendo carregado com as tags de  notação alterada do blade -->
	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>
<body ng-controller="listaController">
	<div class="lista">
		<h3>Lista de Contatos</h3>
		<hr>
		<h4>Login</h4>
		@if($errors->any())
				<div class="alert">
					@foreach($errors->all() as $error)
						<strong><% $error %></strong><br>
					@endforeach
				</div>
			@endif
	<form method="POST" action="{{ url('/login') }}">
   		{!! csrf_field() !!}
       <label class="col-md-2">Nome</label>
       <input type="name" class="form-control" name="name" value="{{ old('name') }}">
       <br>
       <label class="col-md-2">Senha</label>
       <input type="password" class="form-control" name="password">
       <br>
       <button type="submit">Login</button>
	</form>
	</div>
</body>
</html>