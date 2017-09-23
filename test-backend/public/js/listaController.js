angular.module('lista',[])
	.controller("listaController",
		function($scope,$http){

			$http.get('contato/listar').then(function(reponse){
				$scope.contatos = reponse.data;
			});





		});