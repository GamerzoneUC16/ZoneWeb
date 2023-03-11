<?php 

$host = "localhost";
$database = "gamerzonedb";
$user = "root";
$pass = "";
$charset = "utf8";
$port = "3306";

$connwb = new mysqli($host, $user, $pass, $database, $port);

mysqli_set_charset($conn, $charset);


if ($conn->connect_error) {
    echo "Atenção ERRO: ".$connect_error;
}
?>