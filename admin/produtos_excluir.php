<?php 
include '../conn/connect.php';
$excluido = $conn->query("delete from produtos where id=".$_GET['id']);
header("location: produtos_lista.php");
?>