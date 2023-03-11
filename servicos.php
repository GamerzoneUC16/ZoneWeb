<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Serviços</title>
</head>
                    <style>
                      body {
                        /*  background: url(../images/images.jpg) ; */
                        font-family: Arial, Helvetica, sans-serif;
                        /*  background-image: linear-gradient(to right, rgb(34, 78, 140),rgb(108, 163, 240), rgb(52, 91, 235));   */
                      }

                      h1 {
                        text-align: center;
                        font-size: 90px;
                        font-weight: bold
                      }

                      p {
                        text-align: center;
                        font: size;
                        font-weight: bold;
                      }

                      h2 {
                        font-weight: bold;
                      }

                      .servicos {

                        text-align: center;
                        background: no-repeat;
                        background-size: cover;

                      }

                      .colunas {
                        display: flex;
                      }

                      .servicos article {
                        background: rgba(242, 242, 242, 0.9);
                        color: #222;
                        padding: 60px;
                        margin: 20px 6px;
                        position: relative;
                        font-weight: bold
                      }

                      /* Parte esquerdo e inferior */
                      .servicos article::before {
                        content: "";
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        width: 0;
                        height: 0;
                        background: transparent;
                        border: 4px solid transparent;
                      }

                      .servicos article:hover::before {
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

                      .servicos article::after {
                        content: "";
                        position: absolute;
                        top: 0px;
                        left: 0px;
                        width: 0;
                        height: 0;
                        background: transparent;
                        border: 4px solid transparent;
                      }

                      .servicos article:hover::after {
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

                      }


                      h5 {
                        text-align: center;
                        font-size: 34px;
                        font-weight: bold
                      }

                      .close {
                        text-decoration: none;
                      }
                      .img{
                        width: 150px;
                        position: relative;
                      }
                      
                    </style>

<body class="fundofixo">
  <?php
  include 'menu.php'
  ?>
  <br>
  <!-- Serviços-->
  <h1 class="text-white"><b>Serviços</b></h1>
  <p class="text-white">GamerZone a Melhor LanHouse da Zona Leste!!</p>
  <div class="text-center">
   <!--  <span class="bi bi-controller fs-1"></span> -->
   <img  class="img" src="images/Logo/GamerZone_logo-2-removebg-preview.png" alt="">
  </div>
  <!-- CARDS -->
  <section class=" servicos ">
    <div class="colunas">

      <a class="close" href="contato.php">
        <article>
          <!-- <img src="" alt="">  -->
          <div class="icon"><i class="bi bi-gear-fill fs-1"></i></div>
          <h2>Serviços</h2>
          <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </p>
        </article>
      </a>

      <a class="close" href="produtos_geral.php">
        <article>
          <!-- <img src="" alt="">  -->
          <div class="i"><i class="bi bi-controller fs-1"></i></div>
          <h2>Jogos</h2>
          <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </p>
        </article>
      </a>
      <a class="close" href="loja.php">
        <article>
          <!--  <img src="" alt=""> -->
          <div class="icon"><i class="bi bi-shop fs-1"></i></div>
          <h2>Vendas</h2>
          <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </p>
        </article>
      </a>
    </div>

  </section>

  <!--  implementando o Modal -->

  <!-- borda em processo -->

  <div class="card-body">
    <h5 class="card-title text-black">Problema com produto ou com sua máquina solicite nosso suporte!</h5>
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
            <form>
              <div class="mb-3">
                <label for="Nome" class="col-form-label"><b> Completo:</b></label>
                <input type="text" class="form-control" id="Nome" required>

                <label for="Email" class="col-form-label"><b>E-mail:</b></label>
                <input type="email" class="form-control" id="Email" required>

                <label for="Telefone" class="col-form-label"><b>Telefone:</b></label>
                <input type="tel" name="telefone" class="form-control" id="Telefone" required>

                <label for="Titulo" class="col-form-label"><b>Título:</b></label>
                <input type="titulo" name="titulo" class="form-control" id="Titulo" required>
              </div>
              <label for="form-check" class="col-for-label"><b>Motivo de Contato</b></label>
              <br>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  Problema com produto
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Dúvida
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Solicitação
                </label>
              </div>
              <div class="mb-3">
                <label for="message-text" class="col-form-label ">Descreva o seu Problema:</label>
                <textarea class="form-control" id="message-text" required></textarea>
              </div>
              <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Enviar</button>
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