<?php
//echo "<pre>"; print_r(); echo "</pre>"; exit;
date_default_timezone_set('America/Sao_Paulo');
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;
use \App\Db\Pagination;
use \App\Session\Login;

Login::requireLogin();

define('TITLE','Cadastrar entrega');
define('BUTTON','Cadastrar entrega');

$obVaga = new Vaga;

if(isset($_POST['condominio'],$_POST['armario'],$_POST['apto'],$_POST['morador'],$_POST['empresa'],$_POST['notas'])){

	$obVaga->condominio = $_POST['condominio'];
	$obVaga->armario = $_POST['armario'];
	$obVaga->apto = $_POST['apto'];
	$obVaga->morador = ucwords($_POST['morador']);
	$obVaga->empresa = $_POST['empresa'];
	$obVaga->notas = $_POST['notas'];
	$obVaga->IsAtivo = 0;
    $obVaga->cadastrar();
    header('location: index.php?status=success');
    exit;
}


//filtro de buscas
$filtroCondominio = filter_input(INPUT_GET, 'condominio', FILTER_SANITIZE_STRING);
$filtroCondominio = in_array($filtroCondominio,['1','2','3','4','5','6']) ? $filtroCondominio : '';

$buscaArmario = filter_input(INPUT_GET, 'buscaArmario', FILTER_SANITIZE_STRING);
$buscaMorador = filter_input(INPUT_GET, 'buscaMorador', FILTER_SANITIZE_STRING);
$buscaApto = filter_input(INPUT_GET, 'buscaApto', FILTER_SANITIZE_STRING);
$buscaEmpresa = filter_input(INPUT_GET, 'buscaEmpresa', FILTER_SANITIZE_STRING);


$condicoes = [
	strlen($buscaMorador) ? 'morador LIKE "%'.str_replace(' ','%',$buscaMorador).'%"' : null,
	strlen($buscaArmario) ? 'armario LIKE "%'.str_replace(' ','%',$buscaArmario).'%"' : null,
	strlen($buscaApto) ? 'apto LIKE "%'.str_replace(' ','%',$buscaApto).'%"' : null,
	strlen($buscaEmpresa) ? 'empresa LIKE "%'.str_replace(' ','%',$buscaEmpresa).'%"' : null,
	strlen($filtroCondominio) ? 'condominio = "'.$filtroCondominio.'"' : null
];

$condicoes = array_filter($condicoes);

$where = implode(' AND ',$condicoes);

//paginação

$quantidadeVagas = Vaga::getQuantidadeVagas($where);

$obPagination = new Pagination($quantidadeVagas, $_GET['pagina'] ?? 1, 25);

$vagas = Vaga::getVagas($where,null,$obPagination->getLimit());

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-cadastro.php';
include __DIR__.'/includes/Listagem.php';
include __DIR__.'/includes/footer.php';