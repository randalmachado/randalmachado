<?php
//echo "<pre>"; print_r(); echo "</pre>"; exit;
namespace App\Entity;

use \App\Db\Database;
use \App\Session\Login;
use \PDO;

class Vaga {

	public $id;

	public $condominio;

	public $armario;

	public $apto;

	public $morador;

	public $empresa;

	public $data;

	public $notas;

public function cadastrar(){
	$usuarioLogado = Login::getUsuarioLogado();
	$this->data = date('Y-m-d H:i:s');

	$obDatabase = new Database('armarios');
	$this->id = $obDatabase->insert([
		'condominio' 	=> $this->condominio,
		'armario'		=> $this->armario,
		'apto'			=> $this->apto,
		'morador'		=> $this->morador,
		'empresa'		=> $this->empresa,
		'data'			=> $this->data,
		'notas'			=> $this->notas
	]);

	$obDatabaseCon = new Database('consultas');
	$this->id = $obDatabaseCon->insert([
		'condominio' 	=> $this->condominio,
		'armario'		=> $this->armario,
		'apto'			=> $this->apto,
		'morador'		=> $this->morador,
		'empresa'		=> $this->empresa,
		'data'			=> $this->data,
		'notas'			=> $this->notas,
		'usuario'		=> $usuarioLogado["usuario"]
	]);

	return true;

}

	public function atualizar(){
		return (new Database('armarios'))->update('id = '.$this->id, [
			'condominio' 	=> $this->condominio,
			'armario'		=> $this->armario,
			'apto'			=> $this->apto,
			'morador'		=> $this->morador,
			'empresa'		=> $this->empresa,
			'data'			=> $this->data,
			'notas'			=> $this->notas
							]);
	}

	public function excluir(){
		$responsavel = $_POST['responsavel'];
		$usuarioLogado = Login::getUsuarioLogado();
		$excluir_id = new Database('armarios');
		$excluir_id->delete('id = '.$this->id);

		$insert_excluido = new Database('excluidos');
		
		$insert_excluido->insert([
			'condominio' 	=> $this->condominio,
			'armario'		=> $this->armario,
			'apto'			=> $this->apto,
			'morador'		=> $this->morador,
			'empresa'		=> $this->empresa,
			'data'			=> $this->data,
			'notas'			=> $this->notas,
			'data_exclusao'	=> date('Y-m-d H:i:s'),
			'responsavel'   => $this->responsavel,
			'usuario'		=> $usuarioLogado["usuario"]
		]);
		
		return true;
	}


	public static function getVagas($where = null, $order = null, $limit = null){
		return (new Database('armarios'))->select($where,$order,$limit)
										->fetchAll(PDO::FETCH_CLASS,self::class);

	}

	public static function getQuantidadeVagas($where = null){
		return (new Database('armarios'))->select($where,null,null,'COUNT(*) as qtd')
										->fetchObject()
										->qtd;

	}

	public static function getVaga($id){
		return (new Database('armarios'))->select('id = '.$id)
										->fetchObject(self::class);

	}

}

