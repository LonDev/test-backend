<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model {

	protected $table = 'contatos';
	protected $fillable = ['NOME', 'TELEFONE', 'EMAIL'];

}