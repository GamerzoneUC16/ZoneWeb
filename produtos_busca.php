<?php 
include 'admin/acesso_com.php';
include 'conn/connect.php';
$buscar = $_GET['buscar'];
$ListaPorPalavra = $conn->query("select * from produtos where titulo like '%$buscar%';");
$rowPorPalavra = $ListaPorPalavra->fetch_assoc();
$numRows = $ListaPorPalavra->num_rows;

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Buscar produto <?php echo $buscar;?></title>
</head>
<style>
   .fundofixo{
  background: url('images/Fundo/Fundo.jpg') no-repeat fixed;
  -webkit-background-size: cover;
  background-size: cover;
 }
</style>
<body class="fundofixo">
    <?php include 'menu.php'?>
    <div class="container">
<div class="row g-2">
        <?php do { ?>
          <div class="col d-flex">
            <div class="card" style="width: 18rem;">
              <?php

              $ListaImg = $conn->query("select * from images where produto_id = " . $rowPorPalavra['id']);
              $rowListaImg = $ListaImg->fetch_all();
              $numRows = $ListaImg->num_rows;
              foreach ($rowListaImg as $img) {

                // print_r($img);
              ?>
                <?php if ($img[2] == 1) { ?>
                  <a href="produto_detalhe.php?id=<?php echo $rowPorPalavra['id']; ?>">
                    <img class="card-img-top" src="images/Produtos/<?php echo $img[1]; ?>">
                  </a>
              <?php }
              } ?>


              <div class="card-body">
                <h4 class="card-title">
                  <strong><?php echo $rowPorPalavra['titulo']; ?></strong>
                </h4>
                <br>
                <p class="card-text">
                  <?php echo mb_strimwidth($rowPorPalavra['descricao'], 0, 60, '...'); ?>
                </p>
                <br>
                <p class="card-text">
                  <?php echo "R$" . number_format($rowPorPalavra['preco'], 2, ',', '.'); ?>
                </p>
              </div>
              <div class="d-grid gap-2">
                <a href="carinho.php?id=<?php echo $rowPorPalavra['id'] ?>" class="btn btn-success" role="button" data-bs-toggle="button">Adicionar ao Carinho</a>
              </div>
            </div>
          </div>
        <?php } while ($rowPorPalavra = $ListaPorPalavra->fetch_assoc()); ?>
      </div>
    </div>

    <footer>
        <?php include 'rodape.php'?>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>