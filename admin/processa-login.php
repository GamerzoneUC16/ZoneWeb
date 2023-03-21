<?php 
include '../conn/connect.php';


$inicio = "http://localhost:8080/ZoneWeb/loja.php";
if($_POST){


    $id     =   $_POST['id'];
    $username  =   $_POST['username'];
    $senha  =   $_POST['senha'];
    $nivel  =   $_POST['nivel'];

    $insertSQL  =   "insert usuarios (username, senha, nivel) values ('$username', '$senha','$nivel')";
$resultado  =   $conn->query($insertSQL);


if(mysqli_insert_id($conn)){
    header("Location: $inicio");
}else{
    header("Location: $inicio");
};
 };
// Fim Cadastrar


?>