<?php 
include "../conn/connect.php";
$excluir = $conn->query("delete from cliente where id=".$_GET['id']);
header("location: client.php");

?>