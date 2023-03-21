<?php
include "conn/connect.php";
include 'admin/acesso_com.php';
$current_url = $_SERVER['REQUEST_URI'];



if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
} else {
  $username = 'Visitante';
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<?php include "menu.php" ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style-LG.css">
  <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Gamerzone</title>
</head>

<body>
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

  <section id="galeria">
    <div class="headline">Galeria</div>
    <div id="galeria-container">
      <img src="images/lan1.jpg" alt="" class="galeria-image">
      <img src="images/lan2.jpg" alt="" class="galeria-image">
      <img src="images/lan3.jpg" alt="" class="galeria-image">
      <img src="images/lan4.jpg" alt="" class="galeria-image">
      <img src="images/lan5.jpg" alt="" class="galeria-image">
      <img src="images/lan7.jpg" alt="" class="galeria-image">

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