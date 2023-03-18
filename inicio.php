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
<style>
  @media screen and (max-width: 744.17px){
    .items{
      flex-wrap: wrap;
    }

  }
  .container-flex{
    display: flex;
    align-items: center;
    
  }
  .left-side {
    display: flex;
    flex-direction: column;
    width: 100%;
  }
  .items{
    display: flex;
    align-self: flex-end;
    gap: 17px;
  }
  .items h1{
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-size: 40px;
   
  }
  .items h2{
    font-size: 20px;

  }
    .options{
      display: flex;
      gap: 20px;
    }
    .icon{
      display: flex;
      align-items: center;
    }
</style>

<?php include "menu.php" ?>

<body class="fundofixo">

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
  <div>
    <br>
    <div class="col">
      <h4 class="h4-1 text-light" style="text-align: left;">CORUJÃO GZH</h4>
      <h3 class="h3-3 text-light" style="text-align: left;">Reserve já</h3>
      <br>
      <br>
    </div>
    <section class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6 d-flex align-itens-stretch" data-aos="fade-up">
            <h1 class="h1-2 text-light" style="text-align: left;">Reserve agora mesmo o seu corujão na GZH, nosso corujão <br> começa às 22 horas e termina às 6 da manhã. <br>
              <br>
              Para comprar click no botão abaixo e você será redirecionado <br> para a GZH Store, nossa loja virtual, lá você poderá escolher o <br> mês e o dia que gostaria de reservar!!
            </h1>
            <br><br>
            <div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 d-flex align-itens-stretch" data-aos="fade-up" data-aos-delay="100">
            <div>
              <br><br>
              <img class="img-fluid img-1" src="./images/jogadores_no_escuro.jpeg" alt="Jogadores GZH" width="500">
              <br><br>
            </div>
            <br>
            <br>
          </div>
        </div>
      </div>
  </div>
  </section>
  <button type="button" class="btn btn-lg button--sla btn-outline-light">RESERVE JÁ</button>

  </div>
  <div class="fundobranco">
    <h3 class="font h3-4" style="text-align: center;">A LAN</h3>
    <div class="row">
      <div class="col">
        <h3 class="font h3-5">O desempenho é algo que levamos a sério!</h3>
      </div>
    </div>
    <div class="container-flex">
      <div class="left-side">
      <div class="items">
        <div class="items-2">
      <h1>Especificações Técnicas</h1>
      <h2>Processador Intel i7 8700 <br>
        Vídeo RTX 2070 <br>
        SSD 240 GB <br>
        ASUS TUF B360M Plus Gaming <br>
        16 Gb RAM Corsair <br> 3.000Mhz</2>
        </div>
      <div class="items-3">
        <h1>Monitor e Cadeira</h1>
    
        <h2>Monitor Benq ZOWIE XL2546 240Hz Dyac <br>
          Cadeiras Gamer DT3 Elise</h2>
          </div>
       <div class="item-4">
       <div class="options">
        <div class="icon">
        
        </div>
       </div>
        <h1>Periféricos</h1>
     
        <h2>Mouse Zowie ZA12 <br>
          HeadSet Corsair HS50 <br>
          Teclado Mecânico CK104 MotoSpeed <br>
          MousePad HyperX <br> Fury S Large</h2>
          </div>

    <div class="item-5">
        <h1>Horários</h1>
 
        <h2>Todos os dias <br>
          10:00 am - 06:00 am <br>
          Corujão TODOS os dias!</h2>
          </div>

          <div class="item-6">
    <h1>Valores</h1>
    <h2>Avulso <br>
      R$ 10,00 <br>
      Pacote 3 horas
      R$ 27,00 <br>
      Pacote 6 horas
      R$ 50,00 <br>
      Pacote 8 horas
      R$ 65,00 <br>
      Corujão
      R$ 85,00</h2>
   
    </div>
    </div>
</div>
    </div>
  </div>
  </div>
 
  </div>
  <br>
  <div id="dov">
    <button type="button" class="btn btn-lg button2 text-light">Reserve já</button>
  </div>
  <footer class="panel-footer">
    <?php include "rodape.php" ?>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>