<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Menu</title>
</head>
<body>
    <nav class="fixed navbar fixed-top navbar-light navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapsed" data-target="#menu" aria-expanded="false">
                    <span class="sr-only">TESTE</span>
                </button>
            <a href="inicio.php" class="navbar navbar-brand">
                <img src="images/GZ2.png" alt="logotipogz">
            </a>
            </div>
        </div>
        <div class="collapsed navbar-collapsed" id="menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="inicio.php">
                    <span class="bi bi-house-door"></span>
                    </a>
                </li>
                <li>
                    <a href="quemsomos.php">QUEM SOMOS</a>
                </li>
                <li>
                    <a href="loja.php">LOJA</a>
                </li>
                <li>
                    <a href="contato.php">CONTATOS</a>
                </li>
                <li class="active">
                    <a href="login.php">
                        <span class="bi bi-people">&nbsp;USER</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</body>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</html>