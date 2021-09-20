<?php
//echo "<pre>"; print_r(); echo "</pre>"; exit;

use \App\Entity\Vaga;
use \App\Session\Login;

Login::requireLogin();

date_default_timezone_set('America/Sao_Paulo');
require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar entrega');
define('BUTTON','Cadastrar entrega');
$usuarioLogado = Login::getUsuarioLogado();

// $obVaga = new Vaga;

// if(isset($_POST['condominio'],$_POST['armario'],$_POST['apto'],$_POST['morador'],$_POST['empresa'],$_POST['notas'])){

// 	// $obVaga->condominio = $_POST['condominio'];
// 	// $obVaga->armario = $_POST['armario'];
// 	// $obVaga->apto = $_POST['apto'];
// 	// $obVaga->morador = $_POST['morador'];
// 	// $obVaga->empresa = $_POST['empresa'];
// 	// $obVaga->notas = $_POST['notas'];
// 	// $obVaga->usuario = $usuarioLogado["usuario"];
//     $obVaga->cadastrar();

//     header('location: index.php?status=success');
//     exit;
// }
// }

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';