<?php 
include "../conn/connect.php";
include "acesso_com.php";

$ListaUser = $conn->query("select * from usuarios");
$rowUser = $ListaUser->fetch_all();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-LG.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Usuarios</title>
</head>
<style>
    .conteudo {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .Tabela {
        background-color: white;
        width: 1200px;
    }
</style>

<body class="fundofixo">
    <?php include 'menu_adm.php' ?>
    <div class="conteudo">
        <div class="table-responsive">
            <div class="Tabela">
                <table class="table table-striped table-hover table-condensed tb-opacidade">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Nivel</th>
                            <th scope="col">
                                <a href="login.php" class="text-decoration-none">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-success">Cadastrar</button>
                                </div>
                                </a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($rowUser as $GZH) { 
                            $id = $GZH['4'];
                            $ListaNivel = $conn->query("select * from niveis where id = $id");
                            $rownivel = $ListaNivel->fetch_assoc();
                            ?>

                            
                            <tr>
                                <th scope="row"><?php echo $GZH['0'] ?></th>
                                <td><?php echo $GZH['1'] ?></td>
                                <td><?php echo $GZH['2'] ?></td>
                                <td><?php echo $GZH['3'] ?></td>
                                <?php if($GZH['4'] == $rownivel['id']) { ?>
                                <td><?php echo $rownivel['rotulo'] ?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <footer>
        <?php include 'rodape_adm.php' ?>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>