<?php
include "conn/connect.php";
include "admin/acesso_com.php";
$login = "http://localhost:8080/ZoneWeb/servicos.php";
$string = 'GZH-';
if ($_POST) {
  $id = $_POST['id'];
  $titulo = $_POST['titulo'];
  $motivo = $_POST['motivo'];
  $assunto = $_POST['assunto'];
  $anexo   = $_POST['anexo'];

  $Id = mysqli_insert_id($conn);

  $REAND = rand(1,1000);
  
  $insertSql = "insert chamados (titulo, motivo, assunto, anexo, status_ch, data_in,hashcode,cliente_id, usuario_id, data_final) values ('$titulo','$motivo','$assunto','$anexo','Aguardando Atendimento',default,'$string$REAND',1,1,0)";
  $resultado  =   $conn->query($insertSql);

 

  if (mysqli_insert_id($conn)) {
    header("Location: $login");
  } else {
    header("Location: $login");
  };
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <!-- <link rel="stylesheet" href="css/servicos.css"> -->
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Serviços</title>
</head>
<style>
  body {
    /*  background: url(../images/images.jpg) ; */
    font-family: Arial, Helvetica, sans-serif;
    /*  background-image: linear-gradient(to right, rgb(34, 78, 140),rgb(108, 163, 240), rgb(52, 91, 235));   */
    flex-wrap: wrap;
    align-items: center;
    min-height: 100vh;

  }

  .fundofixo {
    background: url('images/Fundo/Fundo.jpg') no-repeat fixed;
    -webkit-background-size: cover;
    background-size: cover;
    font-weight: bold;
  }

  h1 {
    text-align: center;
    font-size: clamp(7.5em, 5.7em + 8vw, 4.0em);
    font-weight: bold;
    position: relative;
  }

  p {
    text-align: flex;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
    color: black;
  }

  h2 {
    font-weight: bold;
    font-size: 40px;
    text-align: center;
    color: black;
  }

  @media screen and (max-width: 680px) {
    h1 {
      font-size: 50px;
    }

    

    .card-body {
      padding: 50px;
      background: rgba(242, 242, 242, 0.9);
      border: 6px solid;
      border-radius: 40px;
      margin: 50px;

    }


  }

  .row {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .card {
    border-radius: 5px;
    box-shadow: 7px 7px 13px 0px rgba(50, 50, 50, 0.22);
    padding: 60px;
    margin: 30px;
    width: 400px;
    transition: all 0.3s ease-out;
  }

  

  /* colunas */
  /* .row .card{
    background: rgba(242, 242, 242, 0.9);
    color: #222;
    padding: 100px;
    margin: 20px 6px;
    position: relative;
    font-weight: bold;
    transition: all 0.3s ease-out; */

  .row .card:hover {
    transform: translateY(-5px);

  }

  /* Parte esquerdo e inferior */
  .row .card::before {
    content: "";
    position: absolute;
    top: 0px;
    left: 0px;
    width: 0;
    height: 0;
    background: transparent;
    border: 5px solid transparent;
  }

  .row .card:hover::before {
    animation: animate 0.9s linear forwards;
  }

  @keyframes animate {
    0% {
      width: 0;
      height: 0;
      border-top-color: rgb(0, 157, 220);
      border-right-color: transparent;
      border-bottom-color: transparent;
      border-left-color: transparent;
    }

    50% {
      width: 100%;
      height: 0;
      border-top-color: rgb(0, 157, 220);
      ;
      border-right-color: rgb(0, 157, 220);
      ;
      border-bottom-color: transparent;
      border-left-color: transparent;
    }

    100% {
      width: 100%;
      height: 100%;
      border-top-color: rgb(0, 157, 220);
      border-right-color: rgb(0, 157, 220);
      border-bottom-color: transparent;
      border-left-color: transparent;
    }
  }

  .row .card::after {
    content: "";
    position: absolute;
    top: 0px;
    left: 0px;
    width: 0;
    height: 0;
    background: transparent;
    border: 5px solid transparent;
  }

  .row .card:hover::after {
    animation: animates 0.9s linear forwards;
  }

  /* Parte direita e superior */
  @keyframes animates {
    0% {
      width: 0;
      height: 0;
      border-top-color: transparent;
      border-right-color: transparent;
      border-bottom-color: transparent;
      border-left-color: rgb(0, 157, 220);
      ;
    }

    50% {
      width: 0;
      height: 100%;
      border-top-color: transparent;
      border-right-color: transparent;
      border-bottom-color: rgb(0, 157, 220);
      border-left-color: rgb(0, 157, 220);
    }

    100% {
      width: 100%;
      height: 100%;
      border-top-color: transparent;
      border-right-color: transparent;
      border-bottom-color: rgb(0, 157, 220);
      border-left-color: rgb(0, 157, 220);
      
    }
  }

  .card-body {
    padding: 20px;
    background: rgba(242, 242, 242, 0.9);
    border: 6px solid blue;
    border-radius: 40px;
    margin: 80px;

  }


  h5 {
    text-align: center;
    font-size: 34px;
    font-weight: bold
  }

  .close {
    text-decoration: none;
  }

  .img-logo {
    width: 150px;
    position: relative;
  }

  

  .icon {
    font-size: 50px;
    text-align: center;
    color: black;
  }

  .icon-1 {
    font-size: 50px;
    text-align: center;
    color: black;
  }

  .a
  {
    text-align: center;
  }
</style>

<body class="fundofixo">
  <?php
  include 'menu.php'
  ?>
  <br>
  <!-- Serviços-->
  <h1 class="text-white"><b>Serviços</b></h1>
  <br>
  <p class="text-white">GamerZone a Melhor LanHouse da Zona Leste!!</p>
  <div class="text-center">
    <a href="inicio.php">
      <img class="img-logo" src="images/Logo/GamerZone_logo-2-removebg-preview.png" alt="">
  </div>
  </a>
  <!-- ############################################## CARDS  ###################################################-->
  <div class="row ">
   
      <div class="card ">
      <a class="close" href="loja.php">
        <div class="icon"><span class="bi bi-gear-fill fa-2x"></span></div>
        <h2>Serviços</h2>
        <p> O Steamworks é o conjunto de ferramentas e serviços criados pela Valve que ajudam você a configurar, gerenciar e operar o seu jogo no Steam..</p>
       </a>
  </div>


  <div class="card ">
  <a class="close" href="loja.php">
    <div class="icon-1"><span class="bi bi-cart4 fa-2x"></span></div>
    <h2>Vendas</h2>
    <p>Venha conferir a nossa variedades de produtos com tudo que você precisa monitor,gabinite,placa de video placa mãe e muito mais!!</p>
 
    </a>
  </div>

  <div class="card ">
  <a class="close" href="jogos.php">
    <div class="icon "><span class="bi bi-controller fa-2x"></span></div>
    <h2>Jogos</h2>
    <p>Venha ser Diverti com nosso catalogo e variedades de super realista e online não perde tempo vem jogar com a gente e ser diverti na GamerZone </p>
    </a>
  </div>

  </div>

  <!-- ################################################# implementando o Modal  ################################################-->

  <!-- borda em processo -->

  <div class="card-body">
    <h5 class="card-title text-black"> Abertura de Chamado</h5>
    <br>
    <!-- Final da Borda Implemetado com modal -->

    <!--  implementando o Modal -->
    <div class="text-center">
      <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#chamadomodal" data-bs-whatever="@mdo">Abrir Chamado</button>
    </div>
    <div class="modal fade" id="chamadomodal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <span class="bi bi-headset fs-3"></span>
            <br>
            <h3 class="modal-title fs-5" id="ModalLabel">Chamado</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="servicos.php " method="POST">
              <div class="mb-3">
                <label for="titulo" class="col-form-label fw-bold"> Titulo:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" required>
                <br>
                <label for="motivo" class="col-form-label fw-bold">Motivo:</label>
                <select for="motivo" class="form-select" aria-label="" name="motivo" id="motivo" required>
                  <option value="Troca">Troca</option>
                  <option value="Defeito">Defeito</option>
                  <option value="Duvida">Dúvida</option>
                  <option value="Sup_tecnico">Suporte Tecnico</option>
                </select>
                <div class="mb-3">
                  <label for="assunto" class="col-form-label fw-bold"> Descreva o seu Problema:</label>
                  <textarea type="text" name="assunto" id="assunto" class="form-control" required></textarea>
                </div>
                <br>
                <div class="form-group">
                  <label for="anexo" class="fw-bold">Anexo:</label>
                  <br>
                  <br>
                  <input type="file" class="form-control-file" name="anexo" id="anexo">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>

                  <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>


  <br>
  <!-- Final Modal Implemetado com a borda -->

  <?php

  include 'rodape.php'
  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>