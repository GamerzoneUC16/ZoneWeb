<?php
include "conn/connect.php";
$ListaProd = $conn->query("select * from produtos");
$rowListaProd = $ListaProd->fetch_assoc();
$numRows = $ListaProd->num_rows;

$ListaTipo = $conn->query('select * from tipos order by rotulo');
$row_tipos = $ListaTipo->fetch_all();

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Store Zone</title>
</head>

<body class="fundofixo">
  <!-- Area o menu -->
  
  <?php include "menu-loja.php" ?>
  <!-- Fim do menu -->

  <!--Body da Loja-->
  <!-- Inicio de Atalhos -->
  <div class="row justify-content-md-center">
    <?php foreach ($row_tipos as $row) { ?>
      <div class="col-md-auto">
        <a href="produto_por_tipo.php?id=<?php echo $row['0']; ?>" class="btn btn-info" role="button"><?php echo $row['2']; ?></a>
      </div>
    <?php } ?>

  </div>
  <!-- Fim de Atalhos -->
  <!--Banner da loja-->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--Fim banner da loja-->
  
    <div class="row">
      <div class="col-sm-7">
        <a href="produtos_geral.php">
          <img src="images/Prod.jpg" alt="Loja-Geral" class=" Img-Prod  img-respousive img-rounded " style="height:20em;">
        </a>
        <h1 class="h1-Prod">Produtos da Loja<h1>
      </div>
      <div class="col-sm-5">
        <a href="corujão.php">
          <img src="images/man-wearing-smart-glasses-touching-virtual-screen-futuristic-technology-digital-remix.jpg" alt="" class="Img-Prod  img-respousive img-rounded Img-Cor" style="height:20em;">
        </a>
        <div class="text-center">
          <h1>Planos de Corujão</h1>
        </div>
      </div>
    </div>
  <!-- Inicio Destaques -->
  <div class="row">
    <?php do { ?>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <a href="produto_detalhe.php?id=<?php echo $rowListaProd['id']; ?>">
            <img src="images/<?php echo $rowListaProd['image']; ?>" class="img-responsive img-rounded" style="height:20em">
          </a>
          <div class="caption text-right">
            <h4 class="text-danger">
              <strong><?php echo $rowListaProd['titulo']; ?></strong>
            </h4>
            <p class="text-left">
              <?php echo mb_strimwidth($rowListaProd['descricao'], 0, 42, '...'); ?>
            </p>
            <p class="text-end">
              <?php echo "R$" . number_format($rowListaProd['preco'], 2, ',', '.'); ?>
            </p>
          </div>
        </div>
      </div>
    <?php } while ($rowListaProd = $ListaProd->fetch_assoc()); ?>
  </div>
  <!-- Fim Destaques -->
  <!--fim do Body da Loja-->
  <footer class="painel-footer" style="background: none;">
    <?php include "rodape.php" ?>
  </footer>
  </main>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>