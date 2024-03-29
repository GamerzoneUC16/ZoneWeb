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

$ImgP = $rowListaImg['principal_img'];

  
?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style-LG.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Store Zone</title>
</head>
<style>
  .button {
    display: inline-block;
    text-decoration: none;
    color: #FEEFDD;
    background-color: #003459;
    width: 100%;
    padding: 10px 35px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 40px;
    font-size: 12px;
    font-weight: 700;
    
  }

  .cart{
    justify-items: center;
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
      <div class="row justify-content-md-center shadow p-3 mb-5 bg-dark rounded">
        <?php foreach ($row_tipos as $row) { ?>
          <div class="col-md-auto ">
            <a href="produto_por_tipo.php?id=<?php echo $row['0']; ?>" class="btn btn-light text-dark" role="button"><?php echo $row['2']; ?></a>
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
          <img src="images/Banners/Banner3.png" alt="Destaque-1" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="images/Banners/banner2.png" alt="Destaque-2" class="d-block w-100">
        </div>
        <div class="carousel-item">
          <img src="images/Banners/banner1.png" alt="Destaque-3" class="d-block w-100">
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
                  <strong class="titulo"><?php echo $rowListaProd['titulo'];?></strong>
                </h4>
                <br>
                <p class="card-text descricao">
                  <?php echo mb_strimwidth($rowListaProd['descricao'], 0, 60, '...'); ?>
                </p>
                <br>
                <p class="card-text valor">
                  <?php echo "R$" . number_format($rowListaProd['preco'], 2, ',', '.'); ?>
                </p>
              </div>
              <div style="text-align: center;">
              <a href="carinho.php?id=<?php echo $rowListaProd['id']?>" class="button fs-5">Adicionar ao carinho</a>
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