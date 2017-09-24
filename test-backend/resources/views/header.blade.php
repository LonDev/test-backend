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
@yield('content')