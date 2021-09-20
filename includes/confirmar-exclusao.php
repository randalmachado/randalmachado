<?php
//echo "<pre>"; print_r(); echo "</pre>"; exit;
use \App\Entity\Vaga;
use \App\Session\Login;

date_default_timezone_set('America/Sao_Paulo');
$data = date('d/m/Y à\s H:i:s');

?>

<h2 class="mt-3 text-center">Excluir entrega</h2>

<form method="post">
    <div class="form-group w-25 d-block mx-auto mt-5">
        <div class="form-group">
            <label class="text-center d-block mx-auto">Responsável pela retirada</label><br/>
            <input type="text" class="form-control" name="responsavel" require>
        </div>
        <div class="form-group  mt-2 mx-auto d-block ">
            <button type="submit" name="enviar" class="btn btn-primary mx-auto d-block" style="width:250px">Gravar nome do responsavel</button>
        </div>
    </div>
</form>

<form method="post">

	<div class="form-group mt-5">
	    <div class="card w-75 d-block mx-auto bg-light">
		<p class="card-text p-2 mx-auto text-center"><?=ucfirst($usuarioLogado['usuario'])?>, você deseja excluir a entrega de <strong><?=$obVaga->morador?></strong>, Condomínio <strong><?php if ($obVaga->condominio == 1) {
                echo "Costa rica";
            } elseif ($obVaga->condominio == 2) {
                echo "Ilha de Bali";
            } elseif ($obVaga->condominio == 3) {
                echo "Manhattan";
            } elseif ($obVaga->condominio == 4) {
                echo "Torre do Vale";
            } elseif ($obVaga->condominio == 5) {
                echo "Vila Imperial";
            } elseif ($obVaga->condominio == 6) {
                echo "Vox Dei";
            }

            ?></strong>, armário <strong><?=$obVaga->armario?>,</strong> no dia <strong><?=$data?></strong>, sendo o responsável pela retirada <?=ucwords($responsavel=$_POST['responsavel'] ?? '');?></p></div>
	</div>
<div class="form-group mt-3 mx-auto d-block" style="width:260px">
	<a href="index.php">
		<button type="button" class="btn btn-success">Cancelar</button>
	</a>
	<button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
</div>
</form>
