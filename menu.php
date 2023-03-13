<?php
$current_url = $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-LG.css">
    <title>Store Zone</title>
</head>
<style>
    .img-border
    {
        border: 1px solid #007EA7;
        padding-right: 60px;
        position:static
    }
</style>
<body>
    <!-- Area do Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-xl  ">
            <a class="navbar-brand  " href="inicio.php">
                <img class="img-Logo" src="images/Logo/GamerZone_logo-2-removebg-preview.png" alt="Logo-GZ">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if ($current_url == '/ZoneWeb/loja.php' ||  $current_url == '/ZoneWeb/produto_detalhe.php' || $current_url == '/ZoneWeb/produto_por_tipo.php' || $current_url == '/ZoneWeb/produtos_busca.php' || $current_url == '/ZoneWeb/produtos_geral.php') { ?>
                        <div class="flex-nowrap">
                            <form action="produtos_busca.php" method="get" name="form-busca" role="search" class="navbar-form d-flex" style="position:relative">
                                <input type="search" name="buscar" size="30" class="form-control " placeholder="Buscar Produto" aria-label="Search" required>
                                <div class="input-group-btn">
                                    <button class="btn btn-outline-success" type="submit">
                                        <span class="bi bi-search"></span>
                                    </button>
                                </div>
                        </div>
                        </form>
                    <?php } else { ?>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="quemsomos.php">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="loja.php">Loja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="servicos.php">Serviços</a>
                    </li>
           
            </ul>
            <a class="nav-link active" href="carinho.php">
                <span class="bi bi-cart-fill fs-3" style="color: #EAF2EF;"></span>
            </a>
            <a class="nav-link active" href="login.php">
                <span class="bi bi-person-fill fs-3" style="color: #EAF2EF;">Login</span>
            </a>
            </div>
        </div>
        </div>
    </nav>