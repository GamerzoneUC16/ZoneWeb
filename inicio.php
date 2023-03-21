<?php
$current_url = $_SERVER['REQUEST_URI'];



if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    $username = 'Visitante';
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style-LG.css">
  <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">
  <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Gamerzone</title>
</head>

<body>
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
  <div class="container-fluid ">
    <a class="navbar-brand" href="#">
      <img src="images/Logo/GamerZone_logo-2-removebg-preview.png" class="img-Logo" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
          <a class="nav-link active text-info" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="#">Link</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-info" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <a href="admin/login.php">
        <span class="bi bi-person-fill" style="color: #EAF2EF;"><?php echo $username; ?></span>
        </a>
      </ul>
    </div>
  </div>
</nav>
  <header id="showcase">
    <div id="showcase-container">
      <h2>Lorem ipsum dolor sit amet.</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, adipisci?</p>
      <a href="loja.php" class="btn">Nossa loja</a>
    </div>
  </header>

  <!-- about -->
  <section id="clients">
    <div class="headline">a lan</div>
    <div id="clients-container">
      <img src="images/lan2.jpg" class="client" alt="">
      <img src="images/lan3.jpg" class="client" alt="">
      <img src="images/lan4.jpg" class="client" alt="">
      <img src="images/lan5.jpg" class="client" alt="">
    </div>
  </section>

  <section id="features">
    <div class="headline">O que fazemos</div>
    <div id="features-container">
      <div class="feature">
        <i class="fas fa-tachometer-alt fa-3x"></i>
        <span class="feature-title"></span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laboriosam,
          consectetur reiciendis sunt tempore et.</p>
      </div>
      <div class="feature">
        <i class="fas fa-code fa-3x"></i>
        <span class="feature-title"></span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laboriosam,
          consectetur reiciendis sunt tempore et.</p>
      </div>
      <div class="feature">
        <i class="fas fa-layer-group fa-3x"></i>
        <span class="feature-title"></span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente laboriosam,
          consectetur reiciendis sunt tempore et.</p>
      </div>
    </div>
  </section>

  <section id="product">
    <div class="headline">Nosso produto</div>
    <div id="product-container">
      <img src="images/iphone-lan-branco.png" alt="iphone-x" class="iphone-x">
      <div id="items">
        <div class="item">
          <i class="fas fa-map-marked fa-2x color-primary"></i>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At aperiam dolor quaerat, autem ipsa quidem.</p>
        </div>
        <div class="item">
          <i class="fas fa-users fa-2x color-primary"></i>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At aperiam dolor quaerat, autem ipsa quidem.</p>
        </div>
        <div class="item">
          <i class="fas fa-glass-cheers fa-2x color-primary"></i>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At aperiam dolor quaerat, autem ipsa quidem.</p>
        </div>
        <div class="item">
          <i class="fas fa-book-open fa-2x"></i>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At aperiam dolor quaerat, autem ipsa quidem.</p>
        </div>
      </div>
    </div>
  </section>

  <div id="testimonials">
    <div class="headline">O que acham de nós</div>
    <div id="testimonials-container">
      <div class="testimonial">
        <img src="images/person-1.jpeg" alt="" class="testimonial-image">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, impedit. Consectetur vitae numquam exercitationem, nam ipsam quaerat accusamus nobis fugiat?</p>
      </div>
      <div class="testimonial">
        <img src="images/person-2.jpeg" alt="" class="testimonial-image">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, impedit. Consectetur vitae numquam exercitationem, nam ipsam quaerat accusamus nobis fugiat?</p>
      </div>
    </div>
  </div>

  <section id="gallery">
    <div class="headline">Galeria</div>
    <div id="gallery-container">
      <img src="images/lan1.jpg" alt="" class="gallery-image">
      <img src="images/lan2.jpg" alt="" class="gallery-image">
      <img src="images/lan3.jpg" alt="" class="gallery-image">
      <img src="images/lan4.jpg" alt="" class="gallery-image">
      <img src="images/lan5.jpg" alt="" class="gallery-image">
      <img src="images/lan7.jpg" alt="" class="gallery-image">

    </div>
  </section>

  <footer id="footer">
    <p>Copyright 2023 - Todos os direitos.</p>
    <p>Feito por Gamerzone</p>
  </footer>
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/f93dccb0f6.js" crossorigin="anonymous"></script>
</body>

</html>