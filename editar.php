<?php
//echo "<pre>"; print_r(); echo "</pre>"; exit;

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar entrega');
define('BUTTON','Salvar');

use \App\Entity\Vaga;
use \App\Session\Login;

Login::requireLogin();
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
	header('location: index.php?status=error');
	exit;
}

$obVaga = Vaga::getVaga($_GET['id']);

if(!$obVaga instanceof Vaga){
	header('location: index.php?status=error');
	exit;
}

if(isset($_POST['condominio'],$_POST['armario'],$_POST['apto'],$_POST['morador'],$_POST['empresa'],$_POST['notas'])){

	$obVaga->condominio = $_POST['condominio'];
	$obVaga->armario = $_POST['armario'];
	$obVaga->apto = $_POST['apto'];
	$obVaga->morador = ucwords($_POST['morador']);
	$obVaga->empresa = $_POST['empresa'];
	$obVaga->notas = $_POST['notas'];
    $obVaga->atualizar();


    header('location: index.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-editar.php';
include __DIR__.'/includes/footer.php';