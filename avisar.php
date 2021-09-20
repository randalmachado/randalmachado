<?php
//echo "<pre>"; print_r(); echo "</pre>"; exit;

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;
use \App\Session\Login;

Login::requireLogin();

define('TITLE','Avisar morador');

if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
	header('location: index.php?status=error');
	exit;
}

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

$sql = "SELECT morador FROM armarios WHERE id={$_GET['id']}";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       $morador = ucwords($row["morador"]);
    }
} else {
    echo "0 results";
}

$conn->close();

$whats = $_POST['whatsapp'] ?? '';

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario-avisar.php';
include __DIR__.'/includes/footer.php';

?>