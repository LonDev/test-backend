<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Models\Contato;

Class ContatoController extends Controller{

	public function __construct(){

	}
	public function index(){
		return view('lista');
	}

	public function listar(){

		$lista = Contato::All();

		return $lista;

	}
}