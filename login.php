<?php
//echo "<pre>"; print_r(); echo "</pre>"; exit;

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Usuario;
use \App\Session\Login;

Login::requireLogout();

$alertaLogin = '';

if(isset($_POST['acao'])){

	switch($_POST['acao']){
		case 'logar':
			
		$obUsuario = Usuario::getUsuarioPorUsuario($_POST['usuario']);
			if(!$obUsuario instanceof Usuario || !password_verify($_POST['senha'],$obUsuario->senha)){
				$alertaLogin = 'Usuario ou senha invalido/s';
				break;
			}

			Login::login($obUsuario);

			break;

		case 'cadastrar':
			if(isset($_POST['usuario'],$_POST['senha'])){

				$obUsuario = Usuario::getUsuarioPorUsuario($_POST['usuario']);
				if($obUsuario instanceof Usuario){
					$alertaCadastro = 'O usuario ja esta em uso';
					break;
				}

				$obUsuario = new Usuario;
				$obUsuario->usuario = $_POST['usuario'];
				$obUsuario->senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
				$obUsuario->cadastrar();

				Login::login($obUsuario);

			}


			break;
	}

}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-login.php';
include __DIR__.'/includes/footer.php';