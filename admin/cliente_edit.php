<?php 
include "acesso_com.php";
include "../conn/connect.php";



if($_POST){



$id      =    $_POST['id']; 
$nome       = $_POST['nome'];
$sobrenome  = $_POST['sobrenome'];
$email      = $_POST['email'];
$cpf        = $_POST['cpf'];

$idCli = $_POST['id'];

$updateSql = "update cliente set id = '$id', nome = '$nome',sobrenome = '$sobrenome', email = '$email',cpf = '$cpf' where id = $idCli";

$resultado = $conn->query($updateSql);
if ( $resultado ) {
    header("Location: http://localhost:8080/ZoneWeb/admin/client.php");
}
};



?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-LG.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Cliente Edição</title>
</head>
<body class="fundofixo">
    <?php include "menu_adm.php";?>
<main class="container">
    <form action="cliente_edit.php" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-label" id="nome" name="nome">
        </div>
        <div class="mb-3">
            <label for="sobrenome" class="form-label">Sobrenome:</label>
            <input type="text" class="form-label" id="sobrenome" name="sobrenome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-label" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF:</label>
            <input type="text" class="form-label" id="cpf" name="cpf">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>