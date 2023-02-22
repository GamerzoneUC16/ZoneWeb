<?php 
include "conn/connect.php";
$listaGeral = $conn->query("select * from produtos");
$row_geral = $listaGeral->fetch_assoc();
$num_linhas = $listaGeral->num_rows
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body class="fundofixo">
    <div class="container">
        <h2 class="breadcrumb alert-info">Produtos</h2>
        <div class="row">
            <?php do { ?>
            <div class="col-sm col-md-4">
                <div class="thumbnail">
                    <a href="produto_detalhe.php?id=<?php echo $row_geral['id']?>">
                        <img src="images/<?php echo $row_geral['image']; ?>" class="img-responsive img-rounded" sryle="height:20em">
                    </a>
                    <div class="caption text-right">
                        <h3 class="text-dark">
                            <strong><?php echo $row_geral['titulo'] ?></strong>
                        </h3>
                        <p class="text-lrft">
                            <?php echo mb_strimwidth($row_geral['descricao'],0,42,'...');?>
                        </p>
                        <p class="text-warning">
                            <?php echo "R$" . number_format($row_geral['preco'],2, ',', '.');?>
                        </p>
                        <button>Adicionar ao carrinho</button>
                    </div>
                </div>
            </div>
        </div>
        <?php } while ($row_geral = $listaGeral->fetch_assoc()); ?>
    </div>
</body>
</html>