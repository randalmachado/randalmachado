<?php

define('ACAO','Histórico');
define('EXCLUSOES', 'Exclusões');

?>

<h1 class="w-75  m-auto text-center">Sistema para gerenciamento de armários - Citigate</h1>
<div class="w-75 mx-auto mt-3">
    <section class="row w-25 ml-5">
        <a href="historico.php" class="col">
            <button class="btn btn-danger"><?=ACAO?></button>
        </a>
        <a href="exclusoes.php" class="ml-3 col">
            <button class="btn btn-danger"><?=EXCLUSOES?></button>
        </a>
    </section>
</div>

<form method="post" class="w-75 mx-auto">

    <div class="row my-3">
    <div class="form-group col">
    <select name="condominio" class="form-control" value="<?=$obVaga->condominio?>" required>
        <option selected="true" disabled="disabled">Condomínio</option>
            <option value="1" <?=$obVaga->condominio == '1' ? 'selected' : ''?>>Costa Rica</option>
            <option value="2" <?=$obVaga->condominio == '2' ? 'selected' : ''?>>Ilha de Bali</option>
            <option value="3" <?=$obVaga->condominio == '3' ? 'selected' : ''?>>Manhattan</option>
            <option value="4" <?=$obVaga->condominio == '4' ? 'selected' : ''?>>Torre do Vale</option>
            <option value="5" <?=$obVaga->condominio == '5' ? 'selected' : ''?>>Vila Imperial</option>
            <option value="6" <?=$obVaga->condominio == '6' ? 'selected' : ''?>>Vox Dei</option>
        </select>  
    </div>  
    
    <div class="form-group col">
    
        <select name="armario" class="form-control" required>
        </select>   

    </div>
    <div class="hidden armario-f1">
    <option selected="true" disabled="disabled">Armário</option>
            <option value="CR-01-G"<?=$obVaga->armario == 'CR-01-G' ? 'selected' : ''?>>CR-01-G</option>
            <option value="CR-02-G"<?=$obVaga->armario == 'CR-02-G' ? 'selected' : ''?>>CR-02-G</option>
            <option value="CR-03-G"<?=$obVaga->armario == 'CR-03-G' ? 'selected' : ''?>>CR-03-G</option>
            <option value="CR-04-M"<?=$obVaga->armario == 'CR-04-M' ? 'selected' : ''?>>CR-04-M</option>
            <option value="CR-05-M"<?=$obVaga->armario == 'CR-05-M' ? 'selected' : ''?>>CR-05-M</option>
            <option value="CR-06-M"<?=$obVaga->armario == 'CR-06-M' ? 'selected' : ''?>>CR-06-M</option>
            <option value="CR-07-M"<?=$obVaga->armario == 'CR-07-M' ? 'selected' : ''?>>CR-07-M</option>
            <option value="CR-08-M"<?=$obVaga->armario == 'CR-08-M' ? 'selected' : ''?>>CR-08-M</option>
            <option value="CR-09-P"<?=$obVaga->armario == 'CR-09-P' ? 'selected' : ''?>>CR-09-P</option>
            <option value="CR-10-P"<?=$obVaga->armario == 'CR-10-P' ? 'selected' : ''?>>CR-10-P</option>
            <option value="CR-11-P"<?=$obVaga->armario == 'CR-11-P' ? 'selected' : ''?>>CR-11-P</option>
            <option value="CR-12-P"<?=$obVaga->armario == 'CR-12-P' ? 'selected' : ''?>>CR-12-P</option>
            <option value="CR-13-P"<?=$obVaga->armario == 'CR-13-P' ? 'selected' : ''?>>CR-13-P</option>
            <option value="CR-14-P"<?=$obVaga->armario == 'CR-14-P' ? 'selected' : ''?>>CR-14-P</option>
            <option value="CR-15-P"<?=$obVaga->armario == 'CR-15-P' ? 'selected' : ''?>>CR-15-P</option>

    </div>
    <div class="hidden armario-f2">
    <option selected="true" disabled="disabled">Armário</option>
            <option value="IB-01-G"<?=$obVaga->armario == 'IB-01-G' ? 'selected' : ''?>>IB-01-G</option>
            <option value="IB-02-G"<?=$obVaga->armario == 'IB-02-G' ? 'selected' : ''?>>IB-02-G</option>
            <option value="IB-03-G"<?=$obVaga->armario == 'IB-03-G' ? 'selected' : ''?>>IB-03-G</option>
            <option value="IB-04-M"<?=$obVaga->armario == 'IB-04-M' ? 'selected' : ''?>>IB-04-M</option>
            <option value="IB-05-M"<?=$obVaga->armario == 'IB-05-M' ? 'selected' : ''?>>IB-05-M</option>
            <option value="IB-06-M"<?=$obVaga->armario == 'IB-06-M' ? 'selected' : ''?>>IB-06-M</option>
            <option value="IB-07-M"<?=$obVaga->armario == 'IB-07-M' ? 'selected' : ''?>>IB-07-M</option>
            <option value="IB-08-M"<?=$obVaga->armario == 'IB-08-M' ? 'selected' : ''?>>IB-08-M</option>
            <option value="IB-09-P"<?=$obVaga->armario == 'IB-09-P' ? 'selected' : ''?>>IB-09-P</option>
            <option value="IB-10-P"<?=$obVaga->armario == 'IB-10-P' ? 'selected' : ''?>>IB-10-P</option>
            <option value="IB-11-P"<?=$obVaga->armario == 'IB-11-P' ? 'selected' : ''?>>IB-11-P</option>
            <option value="IB-12-P"<?=$obVaga->armario == 'IB-12-P' ? 'selected' : ''?>>IB-12-P</option>
            <option value="IB-13-P"<?=$obVaga->armario == 'IB-13-P' ? 'selected' : ''?>>IB-13-P</option>
            <option value="IB-14-P"<?=$obVaga->armario == 'IB-14-P' ? 'selected' : ''?>>IB-14-P</option>
            <option value="IB-15-P"<?=$obVaga->armario == 'IB-15-P' ? 'selected' : ''?>>IB-15-P</option>
    
    </div>
    <div class="hidden armario-f3">
    <option selected="true" disabled="disabled">Armário</option>
            <option value="MA-01-G"<?=$obVaga->armario == 'MA-01-G' ? 'selected' : ''?>>MA-01-G</option>
            <option value="MA-02-G"<?=$obVaga->armario == 'MA-02-G' ? 'selected' : ''?>>MA-02-G</option>
            <option value="MA-03-G"<?=$obVaga->armario == 'MA-03-G' ? 'selected' : ''?>>MA-03-G</option>
            <option value="MA-04-M"<?=$obVaga->armario == 'MA-04-M' ? 'selected' : ''?>>MA-04-M</option>
            <option value="MA-05-M"<?=$obVaga->armario == 'MA-05-M' ? 'selected' : ''?>>MA-05-M</option>
            <option value="MA-06-M"<?=$obVaga->armario == 'MA-06-M' ? 'selected' : ''?>>MA-06-M</option>
            <option value="MA-07-M"<?=$obVaga->armario == 'MA-07-M' ? 'selected' : ''?>>MA-07-M</option>
            <option value="MA-08-M"<?=$obVaga->armario == 'MA-08-M' ? 'selected' : ''?>>MA-08-M</option>
            <option value="MA-09-P"<?=$obVaga->armario == 'MA-09-P' ? 'selected' : ''?>>MA-09-P</option>
            <option value="MA-10-P"<?=$obVaga->armario == 'MA-10-P' ? 'selected' : ''?>>MA-10-P</option>
            <option value="MA-11-P"<?=$obVaga->armario == 'MA-11-P' ? 'selected' : ''?>>MA-11-P</option>
            <option value="MA-12-P"<?=$obVaga->armario == 'MA-12-P' ? 'selected' : ''?>>MA-12-P</option>
            <option value="MA-13-P"<?=$obVaga->armario == 'MA-13-P' ? 'selected' : ''?>>MA-13-P</option>
            <option value="MA-14-P"<?=$obVaga->armario == 'MA-14-P' ? 'selected' : ''?>>MA-14-P</option>
            <option value="MA-15-P"<?=$obVaga->armario == 'MA-15-P' ? 'selected' : ''?>>MA-15-P</option>
    
    </div>
    <div class="hidden armario-f4">
    <option selected="true" disabled="disabled">Armário</option>
            <option value="TV-01-G"<?=$obVaga->armario == 'TV-01-G' ? 'selected' : ''?>>TV-01-G</option>
            <option value="TV-02-G"<?=$obVaga->armario == 'TV-02-G' ? 'selected' : ''?>>TV-02-G</option>
            <option value="TV-03-G"<?=$obVaga->armario == 'TV-03-G' ? 'selected' : ''?>>TV-03-G</option>
            <option value="TV-04-M"<?=$obVaga->armario == 'TV-04-M' ? 'selected' : ''?>>TV-04-M</option>
            <option value="TV-05-M"<?=$obVaga->armario == 'TV-05-M' ? 'selected' : ''?>>TV-05-M</option>
            <option value="TV-06-M"<?=$obVaga->armario == 'TV-06-M' ? 'selected' : ''?>>TV-06-M</option>
            <option value="TV-07-M"<?=$obVaga->armario == 'TV-07-M' ? 'selected' : ''?>>TV-07-M</option>
            <option value="TV-08-M"<?=$obVaga->armario == 'TV-08-M' ? 'selected' : ''?>>TV-08-M</option>
            <option value="TV-09-P"<?=$obVaga->armario == 'TV-09-P' ? 'selected' : ''?>>TV-09-P</option>
            <option value="TV-10-P"<?=$obVaga->armario == 'TV-10-P' ? 'selected' : ''?>>TV-10-P</option>
            <option value="TV-11-P"<?=$obVaga->armario == 'TV-11-P' ? 'selected' : ''?>>TV-11-P</option>
            <option value="TV-12-P"<?=$obVaga->armario == 'TV-12-P' ? 'selected' : ''?>>TV-12-P</option>
            <option value="TV-13-P"<?=$obVaga->armario == 'TV-13-P' ? 'selected' : ''?>>TV-13-P</option>
            <option value="TV-14-P"<?=$obVaga->armario == 'TV-14-P' ? 'selected' : ''?>>TV-14-P</option>
            <option value="TV-15-P"<?=$obVaga->armario == 'TV-15-P' ? 'selected' : ''?>>TV-15-P</option>
    
    </div>
    <div class="hidden armario-f5">
    <option selected="true" disabled="disabled">Armário</option>
            <option value="VI-01-G"<?=$obVaga->armario == 'VI-01-G' ? 'selected' : ''?>>VI-01-G</option>
            <option value="VI-02-G"<?=$obVaga->armario == 'VI-02-G' ? 'selected' : ''?>>VI-02-G</option>
            <option value="VI-03-G"<?=$obVaga->armario == 'VI-03-G' ? 'selected' : ''?>>VI-03-G</option>
            <option value="VI-04-M"<?=$obVaga->armario == 'VI-04-M' ? 'selected' : ''?>>VI-04-M</option>
            <option value="VI-05-M"<?=$obVaga->armario == 'VI-05-M' ? 'selected' : ''?>>VI-05-M</option>
            <option value="VI-06-M"<?=$obVaga->armario == 'VI-06-M' ? 'selected' : ''?>>VI-06-M</option>
            <option value="VI-07-M"<?=$obVaga->armario == 'VI-07-M' ? 'selected' : ''?>>VI-07-M</option>
            <option value="VI-08-M"<?=$obVaga->armario == 'VI-08-M' ? 'selected' : ''?>>VI-08-M</option>
            <option value="VI-09-P"<?=$obVaga->armario == 'VI-09-P' ? 'selected' : ''?>>VI-09-P</option>
            <option value="VI-10-P"<?=$obVaga->armario == 'VI-10-P' ? 'selected' : ''?>>VI-10-P</option>
            <option value="VI-11-P"<?=$obVaga->armario == 'VI-11-P' ? 'selected' : ''?>>VI-11-P</option>
            <option value="VI-12-P"<?=$obVaga->armario == 'VI-12-P' ? 'selected' : ''?>>VI-12-P</option>
            <option value="VI-13-P"<?=$obVaga->armario == 'VI-13-P' ? 'selected' : ''?>>VI-13-P</option>
            <option value="VI-14-P"<?=$obVaga->armario == 'VI-14-P' ? 'selected' : ''?>>VI-14-P</option>
            <option value="VI-15-P"<?=$obVaga->armario == 'VI-15-P' ? 'selected' : ''?>>VI-15-P</option>
    
    </div>
    <div class="hidden armario-f6">
    <option selected="true" disabled="disabled">Armário</option>
            <option value="VD-01-G"<?=$obVaga->armario == 'VD-01-G' ? 'selected' : ''?>>VD-01-G</option>
            <option value="VD-02-G"<?=$obVaga->armario == 'VD-02-G' ? 'selected' : ''?>>VD-02-G</option>
            <option value="VD-03-G"<?=$obVaga->armario == 'VD-03-G' ? 'selected' : ''?>>VD-03-G</option>
            <option value="VD-04-M"<?=$obVaga->armario == 'VD-04-M' ? 'selected' : ''?>>VD-04-M</option>
            <option value="VD-05-M"<?=$obVaga->armario == 'VD-05-M' ? 'selected' : ''?>>VD-05-M</option>
            <option value="VD-06-M"<?=$obVaga->armario == 'VD-06-M' ? 'selected' : ''?>>VD-06-M</option>
            <option value="VD-07-M"<?=$obVaga->armario == 'VD-07-M' ? 'selected' : ''?>>VD-07-M</option>
            <option value="VD-08-M"<?=$obVaga->armario == 'VD-08-M' ? 'selected' : ''?>>VD-08-M</option>
            <option value="VD-09-P"<?=$obVaga->armario == 'VD-09-P' ? 'selected' : ''?>>VD-09-P</option>
            <option value="VD-10-P"<?=$obVaga->armario == 'VD-10-P' ? 'selected' : ''?>>VD-10-P</option>
            <option value="VD-11-P"<?=$obVaga->armario == 'VD-11-P' ? 'selected' : ''?>>VD-11-P</option>
            <option value="VD-12-P"<?=$obVaga->armario == 'VD-12-P' ? 'selected' : ''?>>VD-12-P</option>
            <option value="VD-13-P"<?=$obVaga->armario == 'VD-13-P' ? 'selected' : ''?>>VD-13-P</option>
            <option value="VD-14-P"<?=$obVaga->armario == 'VD-14-P' ? 'selected' : ''?>>VD-14-P</option>
            <option value="VD-15-P"<?=$obVaga->armario == 'VD-15-P' ? 'selected' : ''?>>VD-15-P</option>
         
    </div>
    </div>

    <div class="row my-3">
        <div class="form-group col">
            <input type="number" class="form-control" name="apto" placeholder="Apto" required>
        </div>

         <div class="form-group col">
            <input type="text" class="form-control" name="morador" placeholder="Morador" required>
        </div>

        <div class="form-group col">
            <input type="text" class="form-control" name="empresa" placeholder="Empresa" required>
         </div>
    </div>
    
    <div class="form-group mt-3">
        <textarea class="form-control" name="notas" rows="2" placeholder="Notas"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success mt-3" style="width:200px"><?=BUTTON?></button>
    </div>
</form>

<script>
$(function(){
    $('.hidden').hide();
    $('select[name=armario]').html($('div.armario-f1').html());
    $('select[name=condominio]').change(function(){ 
        var id = $('select[name=condominio]').val();
    $('select[name=armario]').empty();
    $('select[name=armario]').html($('div.armario-f' + id).html());
    });
});
</script>
