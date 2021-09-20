<section class="w-75 mx-auto">
	<a href="index.php">
		<button class="btn btn-warning">Voltar</button>
	</a>
</section>

<h2 class="mt-3 text-center"><?=TITLE?></h2>

<form method="POST" class="w-75 mx-auto">

	<div class="row">
		<div class="form-group col">
			<label>Morador</label><br/>
			<label class="form-control"><?=ucfirst($morador);?></label><br/>
		</div>
		
		<div class="form-group col ">
			<label>Whatsapp</label>
			<input type="number" class="form-control" name="whatsapp" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" require>
		</div>
	</div>

	<div class="row">
		
		<div class="form-group col ">
		<button type="submit" name="enviar" class="btn btn-primary " style="width:200px">Gravar whatsapp</button>
		</div>

		<div class="form-group col">
			
		<button class="btn btn-success" style="width:200px"><a href='https://www.wppredirect.tk/go/?p=55<?=$whats?>&m=Olá%20<?=$morador?>%20sua%20encomenda%20acabou%20de%20ser%20entregue.%20Entre%20em%20contato%20com%20a%20portaria%20assim%20que%20chegar%20em%20seu%20condom%C3%ADnio' target="_blank" class="text-light">Enviar mensagem</a></button>
		</div>
	
	</div>
</form>

			


