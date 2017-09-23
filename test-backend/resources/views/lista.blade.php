<!DOCTYPE html>
<html ng-app="lista">
<head>
	<title>Lista de Contatos</title>
	<!-- documentos de estilo e js sendo carregado com as tags de  notação alterada do blade -->
	<link rel="stylesheet" type="text/css" href="<% url('css/style.css') %>">

	<script src="https://code.jquery.com/jquery-1.11.3.js" integrity="sha256-IGWuzKD7mwVnNY01LtXxq3L84Tm/RJtNCYBfXZw3Je0=" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

	<script type="text/javascript" src="<% url('js/listaController.js') %>"></script>


</head>
<body ng-controller="listaController">
	<div class="lista">
		<h3>Lista de Contatos</h3>
		
		<div id="novo"><a href="">Novo contato</a></div>

		<div class="add">
			<label>Nome:</label>
			<input type="text" ng-model="contato.nome" name="nome" placeholder="João"><br>
			<label>E-mail:</label>
			<input type="text" ng-model="contato.email" name="email" placeholder="ex: e-mail@email.com"><br>
			<label>Telefone:</label>
			<input type="number" ng-model="contato.telefone" name="telefone" placeholder="99999-9999"><br>

			<button>salvar</button>
		</div>
		<table>
			<tr>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Telefone</th>
				<th>Ação</th>
			</tr>
			<tr ng-repeat="contato in contatos">
				<td>{{ contato.NOME }}</td>
				<td>{{ contato.EMAIL }}</td>
				<td>{{ contato.TELEFONE }}</td>
				<td><a href="">alterar</a> | <a href="">excluir</a> </td>
			</tr>
		</table>
	</div>
</body>
</html>