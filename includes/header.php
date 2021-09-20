<?php

use \App\Session\Login;

$usuarioLogado = Login::getUsuarioLogado();

$usuario = $usuarioLogado ? $usuarioLogado['usuario'] .' <a href="logout.php" class="font-weight-bold ml-2">, deseja  sair</a>' : 'Visitante <a href="login.php" class="font-weight-bold ml-2">, deseja entrar</a>';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Refresh" content="900"> 


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



    <style>button{width:125px;} a{text-decoration:none;}th{cursor:pointer;}</style>

    <title>Citigate - Gerenciamento de armarios</title>
  </head>
  <body class="p-1">
    <div class="d-flex justify-content-start bg-light p-1">
      <?='Olá '. ucfirst($usuario) .'?'?>
    </div>

