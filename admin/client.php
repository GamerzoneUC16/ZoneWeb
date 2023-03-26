<?php
include "../conn/connect.php";
include "acesso_com.php";

$ListaClient = $conn->query("select * from cliente");
$rowClient = $ListaClient->fetch_all();
$numRows = $ListaClient->num_rows;

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style-LG.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Clientes</title>
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
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">Email</th>
                            <th scope="col">CPF</th>
                            <th scope="col" style="width: fit-content;">
                                <a href="cadastro.php" class="text-decoration-none">
                                    <button type="button" class="btn btn-outline-success">Cadastrar</button>
                                </a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($rowClient as $GZH) { ?>
                            <tr>
                                <th scope="row"><?php echo $GZH['0'] ?></th>
                                <td><?php echo $GZH['1'] ?></td>
                                <td><?php echo $GZH['2'] ?></td>
                                <td><?php echo $GZH['3'] ?></td>
                                <td><?php echo $GZH['4'] ?></td>
                                <td class="d-frid gap-2 d-md-flex justify-content-md-end">
                                    <a href="cliente_edit.php?id=<?php echo $GZH['0'];?>" class="text-decoration-none">
                                        <button type="button" class="btn btn-outline-success me-md-2">
                                            Ediatr
                                        </button>
                                    </a>
                                
                                    <a href="client_exluir.php" class="text-decoration-none">
                                        <button type="button" class="btn btn-outline-danger">
                                            Excluir
                                        </button>
                                    </a>
                                </td>
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