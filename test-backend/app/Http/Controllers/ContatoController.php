<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Request\ContatoRequest;
use App\Http\Models\Contato;

Class ContatoController extends Controller{
	//chama a classe de autenticação na contrução da classe
	public function __construct(){
		$this->middleware('auth');
	}
	//chama a view principal
	public function index(){
		return view('lista');
	}
	//busca a lista de contatos, apenas os campos selecionados por nome
	public function listar(){
		$lista = Contato::select('id','nome','email','telefone')->get();
		return $lista;
	}
	//busca um item para edição
	public function find(){
		$item = Contato::find(request()->id);
		return $item;
	}
	//altera um contato
	public function edit(ContatoRequest $request){
		Contato::find($request->input('id'))->update($request->all());
	}
	//cria um contato
	public function create(ContatoRequest $request){
		Contato::create($request->all());
	}
	//apaga um contato
	public function delete(){
		Contato::destroy(request()->id);
	}
}