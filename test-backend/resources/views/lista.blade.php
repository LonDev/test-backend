@extends('header')
@section('content')
	<div class="lista">
		<div align="right" class="header">
			Bem-vindo {{ Auth::user()->name }} <a href="{{ url('logout') }}">Logout</a>
		</div>
	
		<h3>Lista de Contatos</h3>
		
		<div id="novo"><a href="" ng-click="novo()">Novo</a></div>

		<div class="add">
			@if($errors->any())
				<div class="alert">
					<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
					</ul>	
				</div>
			@endif
			<form>
				{{ csrf_field() }}
				<input hidden ng-model="contato.id" name="id">
				
				<label>Nome:</label>
				<input type="text" ng-model="contato.nome" name="nome" placeholder="João"><br>
				
				<label>E-mail:</label>
				<input type="text" ng-model="contato.email" name="email" placeholder="ex: e-mail@email.com"><br>
				
				<label>Telefone:</label>
				<input type="text" ng-model="contato.telefone" name="telefone" placeholder="99999-9999"><br>

				<button ng-click="save(contato)">salvar</button>
			</form>
			<div id="cancelar"><a href="" ng-click="cancelar()">Cancelar</a></div>
		</div>
		<hr>
		<table>
			<tr>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Telefone</th>
				<th>Ação</th>
			</tr>
			<tr ng-repeat="contato in contatos">
				<td><span ng-bind="contato.nome"></span></td>
				<td><span ng-bind="contato.email"></span></td>
				<td><span ng-bind="contato.telefone"></span></td>
				<td><a href="" ng-click="find( contato.id )">Editar</a> <a href="" ng-click="delete( contato )" >Apagar</a> </td>
			</tr>
		</table>
	</div>
</body>
</html>
@endsection