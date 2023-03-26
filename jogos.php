<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/reset.css">
  <!--   <link rel="stylesheet" href="css/style.css"> -->
  <title>Jogos</title>
</head>

<style>
  .fundofixo {
    background: url('images/Fundo/Fundo.jpg') no-repeat fixed;
    -webkit-background-size: cover;
    background-size: cover;
  }

  h1 {
    text-align: center;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 50px;
    color: white;
    font-weight: bold;
  }

  h2 {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 22px;
    text-align: center;
    
  }


  p {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 25px;
  }

  .row {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .card {
    border-radius: 5px;
    box-shadow: 7px 7px 13px 0px rgba(50, 50, 50, 0.22);
    padding: 20px;
    margin: 25px;
    width: 250px;
    

  }

  .img-logo {
    width: 150px;
    position: relative;
  }

</style>

<body class="fundofixo">

<?php
  include 'menu.php'
  ?>
  <br>

  <h1> CATALÁGO DE JOGOS</h1>
  <br>
  <div class="text-center">
    <a href="inicio.php">
      <img class="img-logo" src="images/Logo/GamerZone_logo-2-removebg-preview.png" alt="">
  </div>
  </a>

  <div class="row ">

    <div class="card ">
      <img src="images/jogo/fortnite1.2.jpg" alt="">
      <br>
      <h2>Fortnite</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>


    <div class="card ">
      <img src="images/jogo/call.jpg" alt="">
      <br>
      <h2>Call of Duty</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <div class="card ">
      <img src="images/jogo/resi.jpg" alt="">
      <br>
      <h2>Residente evil 4</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <div class="card ">
      <img src="images/jogo/rocket.jpg" alt="">
      <br>
      <h2>Rocket League</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>
    <!-- ############################################### coluna1 ########################################## -->

    <div class="card ">
      <img src="images/jogo/fifa.jpg" alt="">
      <br>
      <h2>FIFA 23</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <div class="card ">
      <img src="images/jogo/god1.jpg" alt="">
      <br>
      <h2>God of War</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <div class="card ">
      <img src="images/jogo/last.jpg" alt="">
      <br>
      <h2>The last of us</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <div class="card ">
      <img src="images/jogo/gta5.jpg" alt="">
      <br>
      <h2>Gta 5</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <!-- ############################################### coluna2 ############################################# -->

    <div class="card ">
      <img src="images/jogo/free.jpg" alt="">
      <br>
      <h2>Free Fire</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <div class="card ">
      <img src="images/jogo/rambow.jpg" alt="">
      <br>
      <h2>Rambow Six</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <div class="card ">
      <img src="images/jogo/red.jpg" alt="">
      <br>
      <h2>Read Dead 2</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <div class="card ">
      <img src="images/jogo/forza.jpg" alt="">
      <br>
      <h2> Forza Horizon 4</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <!-- ################################### coluna3 ################################################## -->

    <div class="card ">
      <img src="images/jogo/CS.jpg" alt="">
      <br>
      <h2>CS:GO</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>


    <div class="card ">
      <img src="images/jogo/W2k.jpg" alt="">
      <br>
      <h2>WWE 2K23</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <div class="card ">
      <img src="images/jogo/mort.jpg" alt="">
      <br>
      <h2>Mortal Kombate 11</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <div class="card ">
      <img src="images/jogo/dota2.jpg" alt="">
      <br>
      <h2>DOTA 2</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <!-- ################################### coluna4 ################################################## -->

    <div class="card ">
      <img src="images/jogo/hot.jpg" alt="">
      <br>
      <h2>Hogwarts Legacy</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>


    <div class="card ">
      <img src="images/jogo/zero.jpg" alt="">
      <br>
      <h2>Horizon Zero Dawn</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <div class="card ">
      <img src="images/jogo/hero_capsule.jpg" alt="">
      <br>
      <h2>SEKIRO</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <div class="card ">
      <img src="images/jogo/spider.jpg" alt="">
      <br>
      <h2>Marvel Spider-Man</h2>
      <br>
      <a href="#" class="btn btn-success">Jogar</a>
    </div>

    <?php
  include 'rodape.php'
  ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>