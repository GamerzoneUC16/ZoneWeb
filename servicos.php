<?php
include "conn/connect.php";
include 'admin/acesso_com.php';
$login = "http://localhost:8080/ZoneWeb/servicos.php";

if ($_POST) {
  $id = $_POST['id'];
  $titulo = $_POST['titulo'];
  $motivo = $_POST['motivo'];
  $assunto = $_POST['assunto'];

  $insertSql = "insert chamados (titulo, motivo, assunto, status_ch, data_in, cliente_id, usuario_id, data_final) values ('$titulo','$motivo','$assunto','Aguardando Atendimento',default,1,1,0)";
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
  }

  h2 {
    font-weight: bold;
    font-size: 40px;
  }

  @media screen and (max-width: 680px) {
    h1 {
      font-size: 50px;
    }

    .services article {
      background: rgba(242, 242, 242, 0.9);
      color: #222;
      padding: 60px;
      margin: 23px 16px;
      position: relative;
      font-weight: bold;

    }

    .colunas {
      display: flex;
      flex-direction: column;
      /*    justify-content: center ; */

    }

    .card-body {
      padding: 50px;
      background: rgba(242, 242, 242, 0.9);
      border: 6px solid;
      border-radius: 40px;
      margin: 50px;

    }


  }

  .services {

    text-align: center;
    background: no-repeat;
    background-size: cover;
  }

  .colunas {
    display: flex;
    /*    position: relative; */


  }

  /* colunas */
  .services article {
    background: rgba(242, 242, 242, 0.9);
    color: #222;
    padding: 100px;
    margin: 20px 6px;
    position: relative;
    font-weight: bold;

  }

  /* Parte esquerdo e inferior */
  .services article::before {
    content: "";
    position: absolute;
    top: 0px;
    left: 0px;
    width: 0;
    height: 0;
    background: transparent;
    border: 4px solid transparent;
  }

  .services article:hover::before {
    animation: animate 0.5s linear forwards;
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
      ;
      border-right-color: rgb(0, 157, 220);
      ;
      border-bottom-color: transparent;
      border-left-color: transparent;
    }
  }

  .services article::after {
    content: "";
    position: absolute;
    top: 0px;
    left: 0px;
    width: 0;
    height: 0;
    background: transparent;
    border: 4px solid transparent;
  }

  .services article:hover::after {
    animation: animates 0.5s linear forwards;
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
      ;
      border-left-color: rgb(0, 157, 220);
      ;
    }

    100% {
      width: 100%;
      height: 100%;
      border-top-color: transparent;
      border-right-color: transparent;
      border-bottom-color: rgb(0, 157, 220);
      ;
      border-left-color: rgb(0, 157, 220);
      ;
    }
  }

  .card-body {
    padding: 50px;
    background: rgba(242, 242, 242, 0.9);
    border: 6px solid blue;
    border-radius: 40px;
    margin: 10px;

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
  }

  .btn1{
    background-color: rgb(0, 157, 220);
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
    <!--  <span class="bi bi-controller fs-1"></span> -->
    <a href="inicio.php">
      <img class="img-logo" src="images/Logo/GamerZone_logo-2-removebg-preview.png" alt="">
  </div>
  </a>
  <!-- CARDS -->
  <section class=" services ">
    <div class="colunas">

      <a class="close" href="contato.php">
        <article>
          <!-- <img src="" alt="">  -->
          <div class="icon"><span class="bi bi-gear-fill fa-2x"></span></div>
          <h2>Serviços</h2>
          <br>
          <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </p>
        </article>
      </a>

      <a class="close" href="produtos_geral.php">
        <article>
          <!-- <img src="" alt="">  -->
          <div class="icon "><span class="bi bi-controller fa-2x"></span></div>
          <h2>Jogos</h2>
          <br>
          <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </p>
        </article>
      </a>
      <a class="close" href="loja.php">
        <article>
          <!--  <img src="" alt=""> -->
          <div class="icon"><span class="bi bi-shop fa-2x"></span></div>
          <h2>Vendas</h2>
          <br>
          <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </p>
        </article>
      </a>
    </div>

  </section>

  <!--  implementando o Modal -->

  <!-- borda em processo -->

  <div class="card-body">
    <h5 class="card-title text-black">Solicite nosso suporte!</h5>
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
            <h3 class="modal-title fs-5 fw-bolder" id="ModalLabel">Chamado</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="servicos.php " method="POST">
              <div class="mb-3">
                <label for="titulo" class="col-form-label fw-bolder"> Titulo:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" required>
                <br>
                <h3 class="fw-bolder">Motivo:</h3>
                <br>

                <div class="dropdown">
                  <button class="btn btn dropdown-toggle btn-sm btn1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Escolha
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item">Troca</a></li>
                    <li><a class="dropdown-item">Defeito</a></li>
                    <li><a class="dropdown-item">Duvida</a></li>
                    <li><a class="dropdown-item">Suporte tecnico</a></li>
                  </ul>
                </div>
                <!-- 
                <label for="assunto" class="col-form-label"><b>Descrição:</b></label>
                <input type="text" name="assunto" class="form-control" id="assunto" required> -->

                <!-- <label for="Titulo" class="col-form-label"><b>Título:</b></label>
                <input type="titulo" name="titulo" class="form-control" id="Titulo" required>
              </div>
              <label for="form-check" class="col-for-label"><b>Motivo de Contato</b></label>
              <br>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="motivo" id="problema">
                <label class="form-check-label" for="problema">
                  Problema com produto
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="motivo" id="duvida" checked>
                <label class="form-check-label" for="duvida">
                  Dúvida
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="motivo" id="solicitacao" checked>
                <label class="form-check-label" for="solicitacao">
                  Solicitação
                </label>
              </div> -->
                <div class="mb-3">
                  <label for="assunto" class="col-form-label fw-bolder"> Descreva o seu Problema:</b></label>
                  <textarea type="text" name="assunto" id="assunto" class="form-control" required></textarea>
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