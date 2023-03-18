<?php 
// Inserir usuário
if($_POST){
    $id     =   $_POST['id'];
    $username  =   $_POST['username'];
    $senha  =   $_POST['senha'];
    $nivel_id  =   $_POST['nivel_id'];

    $insertSQL  =   "insert usuarios (username, senha, nivel_id) values ('$username', '$senha','$nivel_id')";
$resultado  =   $conn->query($insertSQL);
}
// Fim Inserir usuário



?>