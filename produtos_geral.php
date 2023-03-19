<?php
include "conn/connect.php";
$listaGeral = $conn->query("select * from produtos");
$row_geral = $listaGeral->fetch_assoc();
$num_linhas = $listaGeral->num_rows;



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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/reset.css"> -->
    <title>Produtos</title>
</head>
<style>
    
</style>
<body class="fundofixo">
    <?php include 'menu.php' ?>
    <h2 class="breadcrumb alert-info">Produtos</h2>
    <div id="Carrousel-Loja" class="carousel slide destaque" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="Carrousel-Loja" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="Carrousel-Loja" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="Carrousel-Loja" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/Razer-Desc.webp" alt="Destaque-1" class="d-block">
        </div>
        <div class="carousel-item">
          <img src="images/mesa.png" alt="Destaque-2" class="d-block">
        </div>
        <div class="carousel-item">
          <img src="images/Lougetch.jpeg" alt="Destaque-3" class="d-block">
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
    </div>
    <main class="container">
        <h2 class="breadcrump">Porduyos</h2>
        <div class="row g-2">
            <?php do { ?>
                <div class="col d-flex">
                    <div class="card" style="width: 18rem;">
                        <?php

                        $ListaImg = $conn->query("select * from images where produto_id = " . $row_geral['id']);
                        $rowListaImg = $ListaImg->fetch_all();
                        $numRows = $ListaImg->num_rows;
                        foreach ($rowListaImg as $img) {

                            // print_r($img);
                        ?>
                            <?php if ($img[2] == 1) { ?>
                                <a href="produto_detalhe.php?id=<?php echo $row_geral['id']; ?>">
                                    <img class="card-img-top" src="images/Produtos/<?php echo $img[1]; ?>">
                                </a>
                        <?php }
                        } ?>


                        <div class="card-body">
                            <h4 class="card-title">
                                <strong><?php echo $row_geral['titulo']; ?></strong>
                            </h4>
                            <br>
                            <p class="card-text">
                                <?php echo mb_strimwidth($row_geral['descricao'], 0, 60, '...'); ?>
                            </p>
                            <br>
                            <p class="card-text">
                                <?php echo "R$" . number_format($row_geral['preco'], 2, ',', '.'); ?>
                            </p>
                        </div>
                        <div class="d-grid gap-2">
                            <a href="carinho.php?id=<?php echo $row_geral['id'] ?>" class="btn btn-success" role="button" data-bs-toggle="button">Adicionar ao Carinho</a>
                        </div>
                    </div>
                </div>
            <?php } while ($row_geral = $listaGeral->fetch_assoc()); ?>
        </div>
    </main>
    <footer>
        <?php include 'rodape.php' ?>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>