<?php
include "acesso_com.php";
include "../conn/connect.php";



if ($_POST) {



    $id      =    $_POST['id'];
    $nome       = $_POST['nome'];
    $sobrenome  = $_POST['sobrenome'];
    $email      = $_POST['email'];
    $cpf        = $_POST['cpf'];

    $idCli = $_POST['id'];

    $updateSql = "update cliente set id = '$id', nome = '$nome',sobrenome = '$sobrenome', email = '$email',cpf = '$cpf' where id = $idCli";

    $resultado = $conn->query($updateSql);
    if ($resultado) {
        header("Location: http://localhost:8080/ZoneWeb/admin/client.php");
    }
};

if($_GET)

    $id_form    =   $_GET['id'];
else
    $id_form = 0;
$lista          =   $conn->query("SELECT * FROM cliente WHERE id = $id_form");
$row            =   $lista->fetch_assoc();





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
    <?php include "menu_adm.php"; ?>
    <main class="container">
        <div class="thumbnail">
            <div class="alert alert-danger" role="alert">
                <form action="cliente_edit.php" id="form_cliente_edit" name="form_cliente_edit" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="id" id="id" value="<?php echo $row['id']?>">
                    <label for="id">Nome:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-prepend">
                            <span class="input-group-text" aria-hidden="true">
                                <i class="bi bi-person-add fs-3"></i>
                            </span>
                        </span>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o seu nome." value="<?php echo $row['nome'];?>">
                    </div>
                    <br>
                    <label for="id">Sobrenome:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-prepend">
                            <span class="input-group-text" aria-hidden="true">
                                <i class="bi bi-person-add fs-3"></i>
                            </span>
                        </span>
                        <input type="text" name="sobrenome" id="sobrenome" class="form-control" placeholder="Digite o seu sobrenome." value="<?php echo $row['sobrenome'];?>">
                    </div>
                    <br>
                    <label for="id">Email:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-prepend">
                            <span class="input-group-text" aria-hidden="true">
                                <i class="bi bi-envelope-plus fs-3"></i>
                            </span>
                        </span>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Digite o seu email." value="<?php echo $row['email'];?>">
                    </div>
                    <br>
                    <label for="id">CPF:</label>
                    <div class="input-group mb-3">
                        <span class="input-group-prepend">
                            <span class="input-group-text" aria-hidden="true">
                                <i class="bi bi-person-add fs-3"></i>
                            </span>
                        </span>
                        <input type="text" name="cpf" id="cpf" class="form-control" placeholder="Digite o seu cpf." value="<?php echo $row['cpf'];?>">
                    </div>
                    <br>
                    <input type="submit" value="Atualizar" name="enviar" id="enviar" class="btn btn-danger btn-block">
                </form>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>