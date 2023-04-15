<?php 
include "acesso_com.php";
include "../conn/connect.php";

if($_POST) {

    $id      =  $_POST['id'];
    $username    =  $_POST['username'];
    $email       =  $_POST['email'];
    $senha       =  $_POST['senha'];
    $nivel_id    =  $_POST['nivel_id'];   

    $idUser = $_POST['id'];

    $updateSql = "update usuarios set id = '$id', username = '$username',email = '$email', senha = '$senha' where id = $idUser";

    $resultado = $conn->query($updateSql);
    if($resultado) {
        header("Location: http://localhost:8080/ZoneWeb/admin/user_list.php");
    }
};

if ($_GET)
$id_form = $_GET['id'];
else
    $id_form = 0;
$lista      = $conn->query("select * from usuarios where id = $id_form");
$row            =   $lista->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Edit</title>
</head>
<body>
    
</body>
</html>