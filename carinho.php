<?php
include 'admin/acesso_com.php';
include "conn/connect.php";
// $IdCart = $_GET['id'];
$ListaProd = $conn->query("select * from produtos");
$rowListaProd = $ListaProd->fetch_assoc();
$numRows = $ListaProd->num_rows;

$ListaImg = $conn->query("select * from images");
$rowListaImg = $ListaImg->fetch_all();
$numRows = $ListaImg->num_rows;
?>




<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Carinho</title>
    <style>
        .conteudo {
            display: flex;
            gap: 600px;
        }
    </style>
</head>
<?php include 'menu.php'; ?>

<body class="fundofixo">
    <div class="container">
        <div class="conteudo">
            <div class="carinho">
                <div class="cart-quant">
                    <h1>Carrinhos de compras</h1>
                    <div class="row g-2">
        <?php ?>
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
        <?php ?>
      </div>
    </div>
                </div>  
            </div>
            <div class="subtotal">
                <h1>Subtotal(2 itens):</h1>
            </div>
        </div>
    </div>
    <footer>
        <?php include 'rodape.php'; ?>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>