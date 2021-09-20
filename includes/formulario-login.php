<?php

$alertaLogin = strlen($alertaLogin) ? '<div class="alert alert-danger">'.$alertaLogin.'</div>' : '';

?>

<div class="w-50 d-flex mx-auto">
	<div class="col">
		<form method="post">
			<h2>Login</h2>
			<?=$alertaLogin?>
			<div class="form-group">
				<label>Usuario</label>
				<input type="text" name="usuario" class="form-control" required>
			</div>
			<div class="form-group">
				<label>Senha</label>
				<input type="password" id="senha" name="senha" class="form-control" required>
			</div>
			<div class="form-group">
				<button type="submit" name="acao" value="logar" class="btn btn-primary mt-3">Entrar</button><br/>
				<input type="checkbox" onClick="mostrarOcultarSenha()" class="mt-4"> Mostrar senha 
			</div>
		</form>
	</div>

	</div>
</div>
