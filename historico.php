<?php
//echo "<pre>"; print_r(); echo "</pre>"; exit;
date_default_timezone_set('America/Sao_Paulo');
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;
use \App\Db\Pagination;
use \App\Session\Login;

Login::requireLogin();





include __DIR__.'/includes/header.php';
include __DIR__.'/includes/consulta.php';
include __DIR__.'/includes/footer.php';