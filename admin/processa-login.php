<?php 
include '../conn/connect.php';


$inicio = "http://localhost:8080/ZoneWeb/loja.php";
if($_POST){


    $id         =   $_POST['id'];
    $username   =   $_POST['username'];
    $email      =   $_POST['email'];
    $senha      =   $_POST['senha'];
    

    $insertSQL  =   "insert usuarios (username, email, senha, nivel_id) values ('$username','$email', md5('$senha'),3)";
$resultado  =   $conn->query($insertSQL);


if(mysqli_insert_id($conn)){
    header("Location: $inicio");
}else{
    header("Location: $inicio");
};
 };
// Fim Cadastrar


?>