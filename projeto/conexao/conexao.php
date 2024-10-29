<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "frogtech"; 

$mysqli = mysqli_connect($server, $user, $pass, $database);

if (!$mysqli) {
    die("Falha na conexão: " . mysqli_connect_error());
}

function mensagem($texto, $tipo) {
    echo "<div class='alert alert-$tipo' role='alert'>$texto</div>";
}
?>
