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
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Serviços</title>
</head>
<style>
  .fundofixo {
    background: url('images/Fundo/Fundo.jpg') no-repeat fixed;
    -webkit-background-size: cover;
    background-size: cover;
  }

  @import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
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

  h5 {
    text-align: center;
    font-size: 34px;
    font-weight: bold
  }

.btn {
    display: inline-block;
    padding: 15px 60px;
    font-size: 1.1rem;
    text-transform: uppercase;
    background: rgb(2, 33, 43);
    color: #eee;
    border-radius: 5px;
    transition: background 500ms ease;
}

.btn:hover {
    cursor: pointer;
    background: #000;
}

.headline {
    font-size: 2.2rem;
    text-transform: uppercase;
    font-weight: bold;
    text-align: center;
    padding-bottom: 50px;
    letter-spacing: 2px;
}

/* About */
#features {
    width: 100%;
    background: rgb(21, 21, 99);
    color: #eee;
    padding: 50px;
}

#features-container {
    width: 100%;
    margin: auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-column-gap: 50px;
}

.feature {
    display: flex;
    flex-direction: column;
    background: rgb(2, 33, 43);
    padding: 20px;
    border-radius: 5px;
}

.feature-title {
    font-size: 1.5rem;
    font-weight: bold;
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

  <div class="row">
    <section id="features">
      <div class="headline">sobre a lan</div>
      <div id="features-container">
        <a class="close" href="contato.php">
          <div class="feature">
            <span class="feature-title"></span>
            <p>Serviços</p>
            <p></p>
          </div>
        </a>
        <a class="close" href="produtos_geral.php">
          <div class="feature">
            <p>Loja</p>
            <br>
            <p>Processador Intel i7 8700
              Vídeo RTX 2070
              SSD 240 GB
              ASUS TUF B360M Plus Gaming
              16 Gb RAM Corsair 3.000Mhz.</p>
          </div>
        </a>
        <a class="close" href="loja.php">
          <div class="feature">
            <p>Valores</p>
            <p>Avulso
              R$ 10,00|
              Pacote 3 horas
              R$ 27,00|
              Pacote 6 horas
              R$ 50,00|
              Pacote 8 horas
              R$ 65,00|
              Corujão
              R$ 85,00 |</p>
          </div>
      </div>
    </section>
    </a>
  <!--  implementando o Modal -->

  <!-- borda em processo -->

  <div class="card-body">
    <h5 class="card-title text-black"> Solicite nosso suporte!</h5>
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