<?php
include "conn/connect.php";
include "admin/acesso_com.php";
$login = "http://localhost:8080/ZoneWeb/servicos.php";

if ($_POST) {
  $id = $_POST['id'];
  $titulo = $_POST['titulo'];
  $motivo = $_POST['motivo'];
  $assunto = $_POST['assunto'];
  $anexo   = $_POST['anexo'];
  $insertSql = "insert chamados (titulo, motivo, assunto, anexo, status_ch, data_in, cliente_id, usuario_id, data_final) values ('$titulo','$motivo','$assunto','$anexo','Aguardando Atendimento',default,1,1,0)";
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
 <!-- 
  <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobilese.css"> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Serviços</title>
</head>

<body class="fundofixo">
  <?php
  include 'menu.php'
  ?>
  <br>
  <!-- Serviços-->

  <h1 class="text-white">Serviços</h1>
  <br>
  <p class="text-white">GamerZone a Melhor LanHouse da Zona Leste!!</p>
  <div class="text-center">
    <!--  <span class="bi bi-controller fs-1"></span> -->
    <a href="inicio.php">
      <img class="img-logo" style="width: 15%;" src="images/Logo/GamerZone_logo-2-removebg-preview.png" alt="">
  </div>
  </a>
  <!-- CARDS -->

  <div class="row">
    <section id="features">
      <div class="headline">nossos serviços</div>

      <div id="features-container">
        <a class="close" href="contato.php">
          <div class="feature">
            <span class="feature-title"></span>
            <h2 style="text-align: center; color: #324A5F;">Steam Works</h2>
            <br>
            <p style="text-align: center; color: #324A5F;">O Steamworks é o conjunto de ferramentas e serviços criados pela Valve que ajudam você a configurar, gerenciar e operar o seu jogo no Steam.</p>
            <p>CLIQUE PARA VER MAIS</p>
          </div>
        </a>

        <a class="close" href="loja.php">
          <div class="feature">
            <h2 style="text-align: center; color: #324A5F;">Loja</h2>
            <br>
            <p style="text-align: center; color: #324A5F;">Processador Intel i7 8700
              Vídeo RTX 2070
              SSD 240 GB
              ASUS TUF B360M Plus Gaming
              16 Gb RAM Corsair 3.000Mhz.</p>
            <p>CLIQUE PARA VER MAIS</p>
          </div>
        </a>
      </div>
    </section>

    <!--  implementando o Modal -->

    <!-- borda em processo -->

    <div class="card-body">
      <h5 class="card-title text-black" style="text-align: center; color: aliceblue;"> Solicite nosso suporte!</h5>
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