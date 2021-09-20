<?php

define('ACAO','Voltar');

//DELETE FROM consultas WHERE DATA < '2021-09-14'

?>
<section class="mt-2">
  <a href="index.php">
    <button class="btn btn-warning"><?=ACAO?></button>
  </a>
</section>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_citigate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT condominio, armario, apto, morador, empresa, data, notas,usuario FROM consultas";
$result = $conn->query($sql);

$resultados = '';

if (isset($result)) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
     
      if ($row["condominio"] == 1){
        $condominio = 'Costa Rica';
      } elseif ($row["condominio"] == 2) {
        $condominio = 'Ilha de Bali'; 
      } elseif ($row["condominio"] == 3) { 
        $condominio = 'Manhattan'; 
      } elseif ($row["condominio"] == 4) { 
        $condominio = 'Torre do Vale'; 
      } elseif ($row["condominio"] == 5) { 
        $condominio = 'Vila Imperial'; 
      } elseif ($row["condominio"] == 6) { 
        $condominio = 'Vox Dei'; }

$resultados .= "
            <tr>
            
            <td class='col-md-1'>". $condominio. "</td>
            <td class='col-md-1'>". $row["armario"]. "</td>
            <td class='col-md-1'>". $row["apto"]. "</td>
            <td class='col-md-2'>". ucwords($row["morador"]). "</td>
            <td class='col-md-2'>". ucwords($row["empresa"]). "</td>
            <td class='col-md-1'>". $row["data"]. "</td>
            <td class='col-md-4'>". ucfirst($row["notas"]). "</td>
            <td class='col-md-4'>". ucfirst($row["usuario"]). "</td>
            
            </tr>
            ";
    }
} else {
    
}

$conn->close();

?>

<table class="table mt-3 sortable table-striped w-100">
    <thead>
      <tr>
        <th class="col-md-1">CONDOMINIO</th>
        <th class="col-md-1">ARMÁRIO</th>
        <th class="col-md-1">APTO</th>
        <th class="col-md-2">MORADOR</th>
        <th class="col-md-2">EMPRESA</th>
        <th class="col-md-1">DATA</th>
        <th class="col-md-4">NOTAS</th>
        <th class="col-md-4">USUÁRIO</th>
      </tr>
    </thead>
    <tbody>
      <?=$resultados = strlen($resultados) ?  $resultados : '<tr>
                          <td colspan="12" class="text-center">Nenhuma entrega cadastrada.
                          </tr>';?>
    </tbody>
  </table>


