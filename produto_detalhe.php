<?php 
include 'conn/connect.php';
$idGet = $_GET['id'];
$ProdutoGet = $conn->query("select * from produtos where id = $idGet");
$rowProd = $ProdutoGet->fetch_assoc();
$numRows = $ProdutoGet->num_rows;

// $ImagesGet = $conn->query("select * from images where produto_id = $idGet");
// $rowImage = $ImagesGet->fetch_assoc();
// $numRowsImg = $ImagesGet->num_rows;


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title><?php echo $rowProd['titulo']?></title>
</head>
<?php include 'menu.php'?>
<body>
    <main>
    <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner product-images">
    <div class="carousel-item active">
      <img src="images/Produtos/" class="d-block w-100" alt="Imagem 1">
    </div>
    <div class="carousel-item">
      <img src="images/Produtos" class="d-block w-100" alt="Imagem 2">
    </div>
    <div class="carousel-item">
      <img src="images/Produtos" class="d-block w-100" alt="Imagem 3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>
<div class="row">
<?php
$ListaImg = $conn->query("select * from images where produto_id = $idGet");
$rowListaImg = $ListaImg->fetch_all();
$numRows = $ListaImg->num_rows;
foreach ($rowListaImg as $img) {
?>
  <div class="col d-flex">
  <?php if ($img[2] == 1) { ?>
      <img class="img-fluid w-100 rounded float-start" src="images/Produtos/<?php echo $img[1]; ?>">
<?php } ?>
  <?php if ($img[3] == $idGet) { ?>
      <img class="img-fluid w-100  rounded float-end flex-column" src="images/Produtos/<?php echo $img[1]; ?>">
<?php }
}    print_r($img);?>
  </div>
  <div class="col d-flex">
    <h1>Informaçoes do produto</h1>
  </div>
</div>            
    </main>
    <footer class="panel-footer">
    <?php include 'rodape.php' ?>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>