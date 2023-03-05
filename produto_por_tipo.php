<?php 
include "conn/connect.php";
$idTipo = $_GET['id'];
$ListaPorTipo = $conn->query("select * from produtos where tipos_id = $idTipo");
$rowPorTipo = $ListaPorTipo->fetch_assoc();
$numRows = $ListaPorTipo->num_rows;

print_r($rowPorTipo);

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Buscar por tipo</title>
</head>
<body class="fundofixo">
     <?php include "menu-loja.php"?> 
    <div class="container">
        <!-- Tipo de Produto não encontrado -->
        <?php if ($numRows == 0) { ?>
            <h2 class="breadcrumb alert-danger">
                <a href="javascript:window.history.go(-1)" class="btn btn-danger">
                    <span class="bi bi-arrow-left"></span>
                </a>
                Não há produtos cadastrados deste tipo
            </h2>
            <?php } ?>
            <!-- Fim Tipo de Produto não encontrado -->

            <!-- Tipo de Produto encontrado -->
            <?php if ($numRows > 0) { ?>
            <h2 class="breadcrumb alert-danger">
                <a href="javascript:window.history.go(-1)" class="btn btn-danger">
                    <span class="bi bi-arrow-left"></span>
                </a>
                <strong><?php echo $rowPorTipo['rotulo']?></strong>
            </h2>
            <?php } ?>
            <!-- Fim Tipo de Produto encontrado -->

            <!-- Campo do Produto -->
            <div class="row">
                <?php if ($rowPorTipo > 1) { ?>
      <?php do { ?>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <a href="produto_detalhe.php?id=<?php echo $rowPorTipo['id']; ?>">
              <img src="images/<?php echo $rowPorTipo['image']; ?>" class="img-responsive img-rounded" style="height:15em">
            </a>
            <div class="caption text-right">
              <h4 class="text-danger">
                <strong><?php echo $rowPorTipo['titulo']; ?></strong>
              </h4>
              <p class="text-left">
                <?php echo mb_strimwidth($rowPorTipo['descricao'], 0, 42, '...'); ?>
              </p>
              <p class="text-end">
                <?php echo "R$" . number_format($rowPorTipo['preco'], 2, ',', '.'); ?>
              </p>
            </div>
          </div>
        </div>
      <?php } while ($rowPorTipo = $ListaPorTipo->fetch_assoc()); ?>
      <?php } else {?>
        
        <?php include "produtos_geral.php"?>
        <?php }?>
    </div>
    <!-- Fim Campo do Produto -->
    </div>
      


    <footer>
        <?php include "rodape.php" ?>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>