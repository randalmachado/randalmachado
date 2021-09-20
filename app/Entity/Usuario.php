<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Usuario{
	public $id;

	public $usuario;
//hash
	public $senha;

	public function cadastrar(){
		$obDatabase = new Database('usuarios');

		$this->id = $obDatabase->insert([
			'usuario' => $this->usuario,
			'senha' => $this->senha

		]);

		return true;
	}

	public static function getUsuarioPorUsuario($usuario){
		return (new Database('usuarios'))->select('usuario ="'.$usuario.'"')->fetchObject(self::class);
	}

}

