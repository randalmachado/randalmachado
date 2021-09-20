<section class="w-75 mx-auto">
    <a href="index.php">
        <button class="btn btn-warning">Voltar</button>
    </a>
</section>

<h2 class="mt-3 text-center"><?=TITLE?></h2>

<form method="post" class="w-75 mx-auto">

    <div class="row my-3">
        <div class="form-group col">
            <label>Condomínio <?php if ($obVaga->condominio == 1) {
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

            ?></label>
            <select name="condominio" class="form-control">
            <option value="1">Costa Rica</option>
            <option value="2">Ilha de Bali</option>
            <option value="3">Manhattan</option>
            <option value="4">Torre do Vale</option>
            <option value="5">Vila Imperial</option>
            <option value="6">Vox Dei</option>
            </select>  
        </div>  

        <div class="form-group col">
            <label>Armário <?=$obVaga->armario?></label>
            <select name="armario" class="form-control" >
            </select>   
        </div>

        <div class="hidden armario-f1">
        <option value="CR-01-G">CR-01-G</option>
        <option value="CR-02-G">CR-02-G</option>
        <option value="CR-03-G">CR-03-G</option>
        <option value="CR-04-M">CR-04-M</option>
        <option value="CR-05-M">CR-05-M</option>
        <option value="CR-06-M">CR-06-M</option>
        <option value="CR-07-M">CR-07-M</option>
        <option value="CR-08-M">CR-08-M</option>
        <option value="CR-09-P">CR-09-P</option>
        <option value="CR-10-P">CR-10-P</option>
        <option value="CR-11-P">CR-11-P</option>
        <option value="CR-12-P">CR-12-P</option>
        <option value="CR-13-P">CR-13-P</option>
        <option value="CR-14-P">CR-14-P</option>
        <option value="CR-15-P">CR-15-P</option>

    </div>
     <div class="hidden armario-f2">

        <option value="IB-01-G">IB-01-G</option>
        <option value="IB-02-G">IB-02-G</option>
        <option value="IB-03-G">IB-03-G</option>
        <option value="IB-04-M">IB-04-M</option>
        <option value="IB-05-M">IB-05-M</option>
        <option value="IB-06-M">IB-06-M</option>
        <option value="IB-07-M">IB-07-M</option>
        <option value="IB-08-M">IB-08-M</option>
        <option value="IB-09-P">IB-09-P</option>
        <option value="IB-10-P">IB-10-P</option>
        <option value="IB-11-P">IB-11-P</option>
        <option value="IB-12-P">IB-12-P</option>
        <option value="IB-13-P">IB-13-P</option>
        <option value="IB-14-P">IB-14-P</option>
        <option value="IB-15-P">IB-15-P</option>

</div>
     <div class="hidden armario-f3">

        <option value="MA-01-G">MA-01-G</option>
        <option value="MA-02-G">MA-02-G</option>
        <option value="MA-03-G">MA-03-G</option>
        <option value="MA-04-M">MA-04-M</option>
        <option value="MA-05-M">MA-05-M</option>
        <option value="MA-06-M">MA-06-M</option>
        <option value="MA-07-M">MA-07-M</option>
        <option value="MA-08-M">MA-08-M</option>
        <option value="MA-09-P">MA-09-P</option>
        <option value="MA-10-P">MA-10-P</option>
        <option value="MA-11-P">MA-11-P</option>
        <option value="MA-12-P">MA-12-P</option>
        <option value="MA-13-P">MA-13-P</option>
        <option value="MA-14-P">MA-14-P</option>
        <option value="MA-15-P">MA-15-P</option>

</div>
     <div class="hidden armario-f4">

        <option value="TV-01-G">TV-01-G</option>
        <option value="TV-02-G">TV-02-G</option>
        <option value="TV-03-G">TV-03-G</option>
        <option value="TV-04-M">TV-04-M</option>
        <option value="TV-05-M">TV-05-M</option>
        <option value="TV-06-M">TV-06-M</option>
        <option value="TV-07-M">TV-07-M</option>
        <option value="TV-08-M">TV-08-M</option>
        <option value="TV-09-P">TV-09-P</option>
        <option value="TV-10-P">TV-10-P</option>
        <option value="TV-11-P">TV-11-P</option>
        <option value="TV-12-P">TV-12-P</option>
        <option value="TV-13-P">TV-13-P</option>
        <option value="TV-14-P">TV-14-P</option>
        <option value="TV-15-P">TV-15-P</option>

</div>
     <div class="hidden armario-f5">

        <option value="VI-01-G">VI-01-G</option>
        <option value="VI-02-G">VI-02-G</option>
        <option value="VI-03-G">VI-03-G</option>
        <option value="VI-04-M">VI-04-M</option>
        <option value="VI-05-M">VI-05-M</option>
        <option value="VI-06-M">VI-06-M</option>
        <option value="VI-07-M">VI-07-M</option>
        <option value="VI-08-M">VI-08-M</option>
        <option value="VI-09-P">VI-09-P</option>
        <option value="VI-10-P">VI-10-P</option>
        <option value="VI-11-P">VI-11-P</option>
        <option value="VI-12-P">VI-12-P</option>
        <option value="VI-13-P">VI-13-P</option>
        <option value="VI-14-P">VI-14-P</option>
        <option value="VI-15-P">VI-15-P</option>

</div>
     <div class="hidden armario-f6">

        <option value="VD-01-G">VD-01-G</option>
        <option value="VD-02-G">VD-02-G</option>
        <option value="VD-03-G">VD-03-G</option>
        <option value="VD-04-M">VD-04-M</option>
        <option value="VD-05-M">VD-05-M</option>
        <option value="VD-06-M">VD-06-M</option>
        <option value="VD-07-M">VD-07-M</option>
        <option value="VD-08-M">VD-08-M</option>
        <option value="VD-09-P">VD-09-P</option>
        <option value="VD-10-P">VD-10-P</option>
        <option value="VD-11-P">VD-11-P</option>
        <option value="VD-12-P">VD-12-P</option>
        <option value="VD-13-P">VD-13-P</option>
        <option value="VD-14-P">VD-14-P</option>
        <option value="VD-15-P">VD-15-P</option>
         </div>

    </div>

    <div class="row my-3">
        <div class="form-group col">
            <label>Morador</label>
          <input type="text" class="form-control" name="morador" value="<?=$obVaga->morador?>">
       </div>

        <div class="form-group col">
              <label>Apto</label>
              <input type="text" class="form-control" name="apto" value="<?=$obVaga->apto?>">
        </div>

        <div class="form-group col">
            <label>Empresa</label>
            <input type="text" class="form-control" name="empresa" value="<?=$obVaga->empresa?>" required>
        </div>
    </div>

    <div class="form-group">
        <label>Notas</label>
        <textarea class="form-control" name="notas" rows="3"><?=$obVaga->notas?></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success mt-3" style="width:150px"><?=BUTTON?></button>
    </div>

</form>