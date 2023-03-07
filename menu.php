<?php
$current_url = $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Zone</title>
</head>

<body class="fundofixo">
    <!-- Area do Menu -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #007EA7;">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.php">
                <img src="images/GZ-NEW.png" alt="Logo-GZ" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if ($current_url == '/ZoneWeb/loja.php') { ?>
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
            </div>
            </ul>
            <a class="nav-link active" href="carinho.php">
                <span class="bi bi-cart-fill fs-3" style="color: #EAF2EF;"></span>
            </a>
            <a class="nav-link active" href="login.php">
                <span class="bi bi-person-fill fs-3" style="color: #EAF2EF;">Login</span>
            </a>
        </div>
        </div>
    </nav>