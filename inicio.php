<?php
include "conn/connect.php";
include "admin/acesso_com.php";
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
      <h2>A melhor Lan House do Brasil.</h2>
      <p>Venha bater aquela gameplay avançada e evoluir suas mecânicas em equipamentos de alto desempenho!</p>
      <a href="loja.php" class="btn1">COMPRE AGORA</a>
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
    <div class="headline">sobre a lan</div>
    <div id="features-container">
      <div class="feature">
        <i class="fa-regular fa-clock fa-3x"></i>
        <span class="feature-title"></span>
        <p>Horários</p>
        <p>Todos os dias <br>
          Das 10:00 as 22:00
        </p>
      </div>
      <div class="feature">
        <i class="fas fa-computer fa-3x"></i>
        <span class="feature-title"></span>
        <p>Especificações Técnicas</p>
        <p>Processador Intel i7 8700
          Vídeo RTX 2070
          SSD 240 GB
          ASUS TUF B360M Plus Gaming
          16 Gb RAM Corsair 3.000Mhz.</p>
      </div>
      <div class="feature">
        <i class="fa-regular fa-money-bill-1 fa-3x"></i>
        <span class="feature-title"></span>
        <p>Valores</p>
        <p>Avulso
          R$ 10,00|
          Pacote 3 horas
          R$ 27,00|
          Pacote 6 horas
          R$ 50,00|
          Pacote 8 horas
          R$ 65,00|
        </p>
      </div>
    </div>
  </section>

  <div class="headline">jogos lan</div>
  <div class="row">
    <div class="card">
      <img src="images/jogo/fortnite11.jpg" alt="">
      <br>
      <h2>Fortnite</h2>
      <br>
    </div>

    <div class="card">
      <img src="images/jogo/call.jpg" alt="">
      <br>
      <h2>Call of Duty</h2>
      <br>
    </div>

    <div class="card">
      <img src="images/jogo/resi.jpg" alt="">
      <br>
      <h2>Residente evil</h2>
      <br>

    </div>

  </div>
  
  



<br><br><br><br>
  <div id="testimonials">
    <div class="headline">Responsáveis</div>
    <div id="testimonials-container">
      <div class="testimonial">
        <img src="images/Igor.jpg" alt="" class="testimonial-image">
        <p>Igor: Responsável por boa parte do Back-End e Front-End criou o banco de dados da gamerzone juntos com os demais responsaveis,
          produziu o sistema da loja, login e cadastro.
        </p>
      </div>
      <div class="testimonial">
        <img src="images/Dan.jpg" alt="" class="testimonial-image">
        <p>Danyllo: Responsavel pelo Front-end de Quem Somos no site, e Back-End no projeto de suporte ao web no C# criou classes e metodos e prestou suporte as demais partes do projeto.</p>
      </div>
      <div class="testimonial">
        <img src="images/Vito.jpg" alt="" class="testimonial-image">
        <p>Vitor: Responsavel pela parte de jogos, serviços, e chamados tanto Back-End como Front-End adicionou as imagem no codigo e também criou os cards aonde ficam os jogos.</p>
      </div>
      <div class="testimonial">
        <img src="images/Kaua.jpg" alt="" class="testimonial-image">
        <p>Kauã: Responsavel pelo Front-end do inicio e Back-End no C#/PHP configurando os formularios para listar chamados de suporte e programando a parte aonde o técnico consegue reponder o chamado do cliente, prestou suporte as demais partes do projeto.</p>
      </div>
      <div class="testimonial">
        <img src="images/Caio.jpg" alt="" class="testimonial-image">
        <p>Caio: Responsavel por buscar produtos da loja e adicionar no banco de dados para que podemos mostar na loja com o preço, descrição, e imagem principal dos produtos.</p>
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