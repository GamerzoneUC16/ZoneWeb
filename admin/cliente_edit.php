<?php 
include "acesso_com.php";
include "../conn/connect.php";

if($_POST){



$id         = $_POST['id']; 
$nome       = $_POST['nome'];
$sobrenome  = $_POST['sobrenome'];
$email      = $_POST['email'];
$cpf        = $_POST['cpf'];

$id_prod = $_POST['id'];

$updateSql = "update cliente
            set id        = '$id',
                nome      = '$nome',
                sobrenome = '$sobrenome',
                email     = '$email',
                cpf       = '$cpf'
                where   id = $id_prod ";

$resultado = $conn->query($updateSql);
if ( $resultado ) {
    header("Location: client.php");
}
};

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style-LG.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Cliente Edição</title>
</head>
<body class="fundofixo">
    <?php include "menu_amd.php";?>
<main class="container">
    <form action="client"></form>
</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>