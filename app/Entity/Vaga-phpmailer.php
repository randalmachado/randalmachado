<?php
//echo "<pre>"; print_r(); echo "</pre>"; exit;
namespace App\Entity;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

use \App\Db\Database;
use \PDO;

class Vaga {

	public $id;

	public $condominio;

	public $armario;

	public $morador;

	public $apto;

	public $notas;

	public $data;

public function cadastrar(){
	
	$this->data = date('Y-m-d H:i:s');

	$obDatabase = new Database('armarios');
	$this->id = $obDatabase->insert([
		'condominio' 	=> $this->condominio,
		'armario'		=> $this->armario,
		'morador'		=> $this->morador,
		'apto'			=> $this->apto,
		'notas'			=> $this->notas,
		'data'			=> $this->data
	]);

	$msg = "<b>CONDOMÍNIO :</b><br/>".$this->condominio."<br/><b>ARMARIO :</b><br/>".$this->armario."<br/><b>MORADOR :</b><br/>".$this->morador."<br/><b>APTO :</b><br/>".$this->apto."<br/><b>NOTAS :</b><br/>".$this->notas."<br/><b>DATA/HORARIO :</b><br/>".$this->data;

	$mail = new PHPMailer();
    $mail->SMTPSecure = 'tls';
		$mail->Username = "contato@bruslifecentromedico.com.br";
		$mail->Password = "Senha654321.";
    $mail->AddAddress("randalmachado@gmail.com");
    $mail->FromName = "Novo cadastro";
    $mail->Subject = "";
    $mail->Body = $msg;
    $mail->IsHTML(true); 
 $mail->Host = "mail.bruslifecentromedico.com.br"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Port = 587;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->From = $mail->Username;
    $mail->SMTPOptions = array(
       'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        ); 

	if(!$mail->Send())
	{
		exit("nao foi possivel cadastrar");	
	}

	else{
		return true;
	}
		

}

public function atualizar(){
	return (new Database('armarios'))->update('id = '.$this->id, [
						'condominio' 	=> $this->condominio,
						'armario'		=> $this->armario,
						'morador'		=> $this->morador,
						'apto'			=> $this->apto,
						'notas'			=> $this->notas,
						'data'			=> $this->data
						]);
}

public function excluir(){
	return (new Database('armarios'))->delete('id = '.$this->id);
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

