angular.module('lista',[])
	.controller("listaController",function($scope,$http){

		//carrega a lista de contato no inicio da aplicação
		$scope.load = function() {
			$http.get('contato/listar').then(function(reponse){
			$scope.contatos = reponse.data;
			});
		}

		//recupera um contato para a edição
		$scope.find = function (id) {
				$http.get('contato/find/'+ id).then(function(reponse) {
					$scope.contato = reponse.data;
					//abre o formulário de contatos
					$('.add').slideDown();
				});
		}
		//salva um novo contato quando o ID for zero, e altera quando id maior que zero
		$scope.save = function (contato) {
			data = $('form').serialize();

			if(contato.id > 0){
				//altera um contato e limpa o obj contato do form, atualiza a lista de contatos
				$.post('contato/edit/'+contato.id, data,function(){
					//limpa os campos do formulário
					$scope.contato = '';
					//recarrega lista de contatos
					$scope.load();
					//fecha o formulário
					$('.add').slideUp();
				})
				.fail(function(reponse){
					alert('Falha ao editar o contato.');
				});
				
			}
			else{
				//altera um contato e limpa o obj contato do form, atualiza a lista de contatos
				$.post('contato/add', data,function(){
					$scope.contato = '';
					$scope.load();
					$('.add').slideUp();

				})
				.fail(function(reponse){
					alert('Falha ao cadastrar novo contato.');
				});
				
			}			
		}
		//apaga um contato
		$scope.delete = function(contato){
			if(window.confirm("Deseja apaga o contato "+contato.nome+" ?"))
			{
				$http.get("contato/delete/"+contato.id).then(function(){
					$scope.load();
				});
			}

		}

		//exibe o formulario de criação/alteração de contato
		$scope.novo = function() {
			$('.add').slideDown();
			$('form input[type=text]').val('');
			$scope.contato = 0;
		};
		//fecha o formulario de contatos no link cancelar
		$scope.cancelar = function() {
			$('form input[type=text]').val('');
			$('.add').slideUp();
			$scope.contato = 0;
		};

		//chama função de carregamentos dos dados 
		$scope.load();

	});