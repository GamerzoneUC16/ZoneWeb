<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css\style.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>GamerZone</title>
</head>

<body class="fundofixo">
  <?php include "menu.php" ?>
  <!-- inicio navbar -->
  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <img class="img-Logo" src="images/Logo/GamerZone_logo-2-removebg-preview.png" alt="Logotipo GamerZone">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="quemsomos.php">Quem Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="loja.php">Loja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="servicos.php">Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="login.php" tabindex="-1" aria-disabled="false">Cadastre-se | Iniciar sessão</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
  <!-- fim navbar -->
  <!-- inicio introdução -->
  <div class="img img-responsive elemento">
    <h1 class="h1-1 text-light">GamerZone a LanHouse <br> feita para você</h1>
    <h3 class="h3-1 text-light">Venha bater aquela gameplay avançada e evoluir suas <br>
      mecânicas em equipamentos de alto desempenho!</h3>
    <br>
    <br>
    <a href="loja.php">
      <button type="button" class="btn btn-lg button1 text-light">COMPRE AGORA</button>
    </a>
  </div>
  <!-- fim introdução -->
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <br>
        <br>
        <h4 class="h4-1 text-light">CORUJÃO GZH</h4>
      </div>
        <h3 class="h3-3 text-light">Reserve já</h3>
      <div class="col">
        <h1 class="h1-2 text-light">Reserve agora mesmo o seu corujão na GZH, nosso corujão <br> começa às 22 horas e termina às 6 da manhã. <br>
          <br>
          Para comprar click no botão abaixo e você será redirecionado <br> para a GZH Store, nossa loja virtual, lá você poderá escolher o <br> mês e o dia que gostaria de reservar!!
        </h1>
        <button type="button" class="btn btn-lg button2 text-light" data-bs-toggle="modal" data-bs-target="#exampleModal">RESERVE JÁ!</button>

        <img class="rounded float-end img-fluid" src="./images/jogadores_no_escuro.jpeg" alt="Jogadores GZH">
      </div>
    </div>
  </div>

  <div class="card-body1">
    <div class="container">
      <h3 class="h3-4">A LAN</h3>
      <div class="row">
        <div class="col">
          <h3 class="h3-5">O desempenho é algo que levamos a sério!</h3>
        </div>
      </div>
      <div class="container" style="background-color: transparent;">
        <div class="row ajuste-1">
          <div class="col">
            <h3 class="h3-6">Especificações Técnicas</h3>
            <h3 class="h3-11">Processador Intel i7 8700 <br>
              Vídeo RTX 2070 <br>
              SSD 240 GB <br>
              ASUS TUF B360M Plus Gaming <br>
              16 Gb RAM Corsair <br> 3.000Mhz</h3>
          </div>
          <div class="col">
            <h3 class="h3-7 ">Monitor e Cadeira</h3>
            <h3 class="h3-12">Monitor Benq ZOWIE XL2546 240Hz Dyac <br>
              Cadeiras Gamer DT3 Elise</h3>
          </div>
          <div class="col">
            <h3 class="h3-8">Periféricos</h3>
            <h3 class="h3-15">Mouse Zowie ZA12 <br>
              HeadSet Corsair HS50 <br>
              Teclado Mecânico CK104 MotoSpeed <br>
              MousePad HyperX <br> Fury S Large</h3>
          </div>

          <div class="col">
            <h3 class="h3-9">Horários</h3>
            <h3 class="h3-13">Todos os dias <br>
              10:00 am - 06:00 am <br>
              Corujão TODOS os dias!</h3>
          </div>
          <div class="col">
            <h3 class="h3-10">Valores</h3>
            <h3 class="h3-14">Avulso <br>
              R$ 10,00 <br>
              Pacote 3 horas
              R$ 27,00 <br>
              Pacote 6 horas
              R$ 50,00 <br>
              Pacote 8 horas
              R$ 65,00 <br>
              Corujão
              R$ 85,00</h3>
            <br>
            <br>
            <button type="button" class="btn btn-lg button3 text-light">Reserve já</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="panel-footer">
  <?php include "rodape.php" ?>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>