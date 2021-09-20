<?php
//echo "<pre>"; print_r(); echo "</pre>"; exit;
$mensagem = '';
if(isset($_GET['status'])){
	switch ($_GET['status']){
		case 'success' :
		$mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
		break;

		case 'error' :
		$mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
		break;

	} 
}

$resultados = '';
foreach($vagas as $vaga){
	$resultados .='<tr>					
<td>'.($vaga->condominio =='1' ? 'Costa Rica' : 
              ($vaga->condominio =='2' ? 'Ilha de Bali' : 
                        ($vaga->condominio =='3' ? 'Manhattan' : 
                          ($vaga->condominio =='4' ? 'Torre do Vale' : 
                            ($vaga->condominio =='5' ? 'Vila Imperial' : 'Vox Dei'))))).'</td>

						<td>'.$vaga->armario.'</td>
						<td>'.$vaga->apto.'</td>
						<td>'.ucwords($vaga->morador).'</td>
						<td>'.ucwords($vaga->empresa).'</td>
						<td>'.ucfirst($vaga->notas).'</td>
						<td>'.date('d/m/Y <\b\\r> H:i:s', strtotime($vaga->data)).'</td>
						<td class="">
							<a href="editar.php?id='.$vaga->id.'"><button type="button" class="btn btn-primary " style="width:80px">Editar</button>
							</a>
							
							<a href="avisar.php?id='.$vaga->id.'"><button type="button" class="btn btn-warning " style="width:80px">Avisar</button>
							</a>
							
							<a href="excluir.php?id='.$vaga->id.'"><button type="button" class="btn btn-danger" style="width:80px">Excluir</button>
							</a>


						</td>
					</tr>';
}

$resultados = strlen($resultados) ?  $resultados : '<tr>
													<td colspan="9" class="text-center">Nenhuma entrega cadastrada.
													</tr>';
//gets
unset($_GET['status']);
unset($_GET['pagina']);
$gets = http_build_query($_GET);



//paginaçao
$paginacao = '';
$paginas = $obPagination->getPages();
foreach($paginas as $key=>$pagina){
	$class = $pagina['atual'] ? 'btn-outline-dark' : 'btn-light';
	$paginacao .= '<a href="?pagina='.$pagina['pagina'].'&'.$gets.'">
	<button type="button" class="btn '.$class.'" style="width:40px">'.$pagina['pagina'].'</button>
	</a>
	';
}



?>

<main>
<section id="mensagem"class="mt-3">
<?=$mensagem?>
</section>

<section>
	<form method="get">
		<div class="row">

			<div class="col">
				<label>Buscar Condominio</label>
				<select name="condominio" class="form-control">
				<option value="">Condominio</option>
				<option value="1" <?=$filtroCondominio == '1' ? 'selected' : ''?>>Costa Rica</option>
				<option value="2" <?=$filtroCondominio == '2' ? 'selected' : ''?>>Ilha de Bali</option>
				<option value="3" <?=$filtroCondominio == '3' ? 'selected' : ''?>>Manhattan</option>
				<option value="4" <?=$filtroCondominio == '4' ? 'selected' : ''?>>Torre do Vale</option>
				<option value="5" <?=$filtroCondominio == '5' ? 'selected' : ''?>>Vila Imperial</option>
				<option value="6" <?=$filtroCondominio == '6' ? 'selected' : ''?>>Vox Dei</option>
				</select>
			</div>

			<div class="col">
				<label>Buscar Armario</label>
				<input type="text" name="buscaArmario" class="form-control" value="<?=$buscaArmario?>">
			</div>

			<div class="col">
				<label>Buscar Apto</label>
				<input type="text" name="buscaApto" class="form-control" value="<?=$buscaApto?>">
			</div>
			
			<div class="col">
				<label>Buscar Morador</label>
				<input type="text" name="buscaMorador" class="form-control" value="<?=$buscaMorador?>">
			</div>

			<div class="col">
			<label>Buscar empresa</label>
				<input type="text" name="buscaEmpresa" class="form-control" value="<?=$buscaEmpresa?>">
			</div>

			<div class="col d-flex align-items-end">
				<button type="submit" class="btn btn-primary">Filtrar</button>
			</div>

		</div>
	</form>
</section>

<section class="w-100">
	<table id="lista-cadastros" class="table mt-3 sortable table-striped w-100">
		<thead>
			<tr>
				<th>CONDOMINIO</th>
				<th>ARMÁRIO</th>
				<th>APTO</th>
				<th>MORADOR</th>
				<th>EMPRESA</th>				
				<th>NOTAS</th>
				<th>DATA</th>
				<th>AÇÕES</th>
			</tr>
		</thead>
		<tbody>
			<?=$resultados?>
		</tbody>
	</table>
</section>
<section>
	<?=$paginacao?>
</section>
</main>