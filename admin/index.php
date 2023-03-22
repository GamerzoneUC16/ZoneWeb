<?php 
include 'acesso_com.php';
include '../conn/connect.php';

$ListaGZH = $conn->query("select * from chamados");
$rowGZH = $ListaGZH->fetch_all();
$numRows = $ListaGZH->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Administrativa - <?php echo($_SESSION['username']);?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="../css/style-LG.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<style>
    .conteudo{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .Tabela{
       background-color: white;
       width: 1200px;
    }
</style>
</head>
<body class="fundofixo">
    <?php include 'menu_adm.php'?>
    <div class="conteudo">
        <div class="Tabela">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Status</th>
                        <th scope="col">Solicitante</th>
                        <th scope="col">Responsavel</th>
                        <th scope="col">Data</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php foreach ($rowGZH as $GZH) { 
                    $UserList = $conn->query('select * from usuarios');
                    $rowUser = $UserList->fetch_assoc();
                    
                    $ClientList = $conn->query('select * from cliente');
                    $rowClient = $ClientList->fetch_assoc();
                        ?>
                        <tr>
                            <th scope="row"><?php echo $GZH['0']?></th>
                            <td><?php echo $GZH['1']?></td>
                            <td><?php echo $GZH['2']?></td>
                            <td><?php echo $GZH['4']?></td>
                            <?php if($GZH['6'] == $rowClient['id']) {?>
                            <td><?php echo $rowClient['nome']?></td>
                            <?php }?>
                            <?php if($GZH['7'] == $rowUser['id']) {?>
                            <td><?php echo $rowUser['username']?></td>
                            <?php }?>
                            <td><?php echo $GZH['5']?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                    </table>
    </div>
    </div>
    <footer>
        <?php include 'rodape_adm.php'?>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>