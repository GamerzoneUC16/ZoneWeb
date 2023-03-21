<?php
include "conn/connect.php";
include 'admin/acesso_com.php';

$ListaProd = $conn->query("select * from produtos");
$rowListaProd = $ListaProd->fetch_assoc();
$numRows = $ListaProd->num_rows;

$ListaTipo = $conn->query('select * from tipos order by rotulo');
$row_tipos = $ListaTipo->fetch_all();

// Buscar images

$ListaImg = $conn->query("select * from images where produto_id = id");
$rowListaImg = $ListaImg->fetch_assoc();
$numRows = $ListaImg->num_rows;

$ImgP = $rowListaImg['principal_img']

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Store Zone</title>
</head>
<style>
 .fundofixo{
  background: url('images/Fundo/Fundo.jpg') no-repeat fixed;
  -webkit-background-size: cover;
  background-size: cover;
 }
 .Img-Prod{
border-radius:15%;

}
.Img-Cor{
border-radius:15%;
}
.h1-Prod
{
  left: 68px;
  position: relative;
  color: blue;
}
.img-Logo
{
    width: 121px;
    position: relative;
}
</style>
<body class="fundofixo">
  <!-- Area o menu -->
  <?php include "menu.php" ?>
  <br>
  <!-- Fim do menu -->
  <main class="container">
    <!--Body da Loja-->
    <!-- Inicio de Atalhos -->
    <div class="container">
      <div class="row justify-content-md-center">
        <?php foreach ($row_tipos as $row) { ?>
          <div class="col-md-auto">
            <a href="produto_por_tipo.php?id=<?php echo $row['0']; ?>" class="btn btn-info" role="button"><?php echo $row['2']; ?></a>
          </div>
        <?php } ?>
      </div>
    </div>
    <br>
    <!-- Fim de Atalhos -->
    <!--Banner da loja-->
    <div id="Carrousel-Loja" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="Carrousel-Loja" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="Carrousel-Loja" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="Carrousel-Loja" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/Razer-Desc.webp" alt="Destaque-1" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="images/mesa.png" alt="Destaque-2" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="images/Lougetch.jpeg" alt="Destaque-3" class="d-block w-100">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="Carrousel-Loja" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="Carrousel-Loja" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br>
    <!--Fim banner da loja-->
    <div class="container">
      <div class="row g-2">
        <div class="col">
          <a href="produtos_geral.php">
            <img src="images/Prod.jpg" alt="Loja-Geral" class="Img-Prod img-fluid">
          </a>
          <h1 class="text-white text-center fs-1 fw-bold">Produtos da Loja<h1>
        </div>
        <div class="col">
          <a href="corujao.php">
            <img src="images/man-wearing-smart-glasses-touching-virtual-screen-futuristic-technology-digital-remix.jpg" class="Img-Cor img-fluid">
          </a>

          <div class="text-center">
            <h1 class="text-white text-center fs-1 fw-bold">Planos de Corujão</h1>
          </div>
        </div>
      </div>

      <!-- Inicio Destaques -->

      <div class="row g-2">
        <?php do { ?>
          <div class="col d-flex">
            <div class="card" style="width: 18rem;">
              <?php

              $ListaImg = $conn->query("select * from images where produto_id = " . $rowListaProd['id']);
              $rowListaImg = $ListaImg->fetch_all();
              $numRows = $ListaImg->num_rows;
              foreach ($rowListaImg as $img) {

                // print_r($img);
              ?>
                <?php if ($img[2] == 1) { ?>
                  <a href="produto_detalhe.php?id=<?php echo $rowListaProd['id']; ?>">
                    <img class="card-img-top" src="images/Produtos/<?php echo $img[1]; ?>">
                  </a>
              <?php }
              } ?>


              <div class="card-body">
                <h4 class="card-title">
                  <strong><?php echo $rowListaProd['titulo']; ?></strong>
                </h4>
                <br>
                <p class="card-text">
                  <?php echo mb_strimwidth($rowListaProd['descricao'], 0, 60, '...'); ?>
                </p>
                <br>
                <p class="card-text">
                  <?php echo "R$" . number_format($rowListaProd['preco'], 2, ',', '.'); ?>
                </p>
              </div>
              <div class="d-grid gap-2">
                <a href="carinho.php?id=<?php echo $rowListaProd['id'] ?>" class="btn btn-success" role="button" data-bs-toggle="button">Adicionar ao Carinho</a>
              </div>
            </div>
          </div>
        <?php } while ($rowListaProd = $ListaProd->fetch_assoc()); ?>
      </div>
    </div>
    <!-- Fim Destaques -->
    <!--fim do Body da Loja-->
  </main>

</body>
<footer class="panel-footer" style="background-color: none;">
  <?php include 'rodape.php' ?>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>