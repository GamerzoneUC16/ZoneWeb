<?php

include "../conn/connect.php";
$inicio = "../inicio.php";
$loja = "../loja.php";
// Cadastrar
$BuscaEmail = $conn->query("select * from cliente");
$rowEmail = $BuscaEmail->fetch_assoc();


$caminho = "Controlers/func.php";

if ($_POST) {
  $username = $_POST['username'];
  $senha = $_POST['senha'];

  $loginRes = $conn->query("select * from usuarios where username = '$username' and senha = md5('$senha')");
  $rowLogin = $loginRes->fetch_assoc();

  $Consulta_fk    =     "select * from niveis order by rotulo asc";
  $lista_fk       =     $conn->query($Consulta_fk);
  $row_fk         =     $lista_fk->fetch_assoc();

  $numRow = mysqli_num_rows($loginRes);

  if (!isset($_SESSION)) {
    $sessaoAntiga = session_name('GamerZone');
    session_start();
    $session_name_new = session_name();
  }
  if ($numRow > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['nivel_id'] = $row_fk['id'];
    $_SESSION['nome_da_sessao'] = session_name();
    if ($row_fk['rotulo'] == 'sup') {
      echo "<script>window.open('$inicio','.self')</script>";
    } elseif ($row_fk['rotulo'] == 'com') {
      echo "<script>window.open('$loja','.self')</script>";
    }
  } else {
    echo "<script>
      window.onload = function() {
        alert('Senha incorreta!!! Tente Novamente');
      }
    </script>";
  }
}

$condição = $conn->query("select * from ")

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Tela de login</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      /* background-image: linear-gradient(45deg, cyan, blue ); */
    }

    .tela-login {
      background-color: rgba(0, 0, 0, 0.9);
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 80px;
      border-radius: 15px;
      color: white;
    }

    input {
      padding: 15px;
      border: none;
      outline: none;
      font-size: 15px;
    }

    button {
      background-color: dodgerblue;
      border: none;
      padding: 15px;
      width: 100%;
      border-radius: 10px;
      color: white;
      font-size: 15px;
      cursor: pointer;
    }

    button:hover {
      background-color: deepskyblue;
    }

    .Space {
      position: absolute;
      bottom: 75%;
      left: 50%;
      transform: translate(-60%, -40%);
    }

    .Space2 {
      position: static;
      padding-top: 15%;
      padding-bottom: 5%;
      padding-left: 23%;
    }

    .img-lg-rodapé {
      width: 60%;
      height: 100%;
      position: relative;
      left: px;
      top: 20px;
    }

    .form__group {
      position: relative;
      padding: 20px 0 0;
      margin-top: 10px;
      width: 100%;
      max-width: 965px;
    }

    .form__field {
      font-family: inherit;
      width: 100%;
      border: none;
      border-bottom: 2px solid #9b9b9b;
      outline: 0;
      font-size: 17px;
      color: #fff;
      padding: 7px 0;
      background: transparent;
      transition: border-color 0.2s;
    }

    .form__field::placeholder {
      color: transparent;
    }

    .form__field:placeholder-shown~.form__label {
      font-size: 17px;
      cursor: text;
      top: 20px;
    }

    .form__label {
      position: absolute;
      top: 0;
      display: block;
      transition: 0.2s;
      font-size: 17px;
      color: #9b9b9b;
      pointer-events: none;
    }

    .form__field:focus {
      padding-bottom: 9px;
      font-weight: 700;
      border-width: 3px;
      border-image: linear-gradient(to right, #116399, #38caef);
      border-image-slice: 1;
    }

    .form__field:focus~.form__label {
      position: absolute;
      top: 0;
      display: block;
      transition: 0.2s;
      font-size: 17px;
      color: #38caef;
      font-weight: 700;
    }

    /* reset input */
    .form__field:required,
    .form__field:invalid {
      box-shadow: none;
    }

    .fundofixo {
      background: url('../images/Fundo/Fundo.jpg') no-repeat fixed;
      -webkit-background-size: cover;
      background-size: cover;
    }
  </style>
</head>

<body>
  <div class="tela-login fundofixo">
    <div class="Space">
      <h1>Login</h1>
    </div>
    <div class="Space2 d-flex img-right position-relative">
      <img src="../images/Logo/GamerZone_logo-2-removebg-preview.png" alt="Logo" class="img-responsive  img-lg-rodapé  rounded float-end img-fluid">
    </div>
    <br>
    <form action="login.php" name="form_login" id="form_login" method="POST" enctype="multipart/form-data">
      <div class="form__group field">
        <input name="username" id="username" autofocus required placeholder="Name" autocomplete="off" class="form__field" type="text">
        <label class="form__label" for="username">Name</label>
      </div>
      <br>
      <div class="form__group field">
        <input name="senha" id="senha" required placeholder="Senha" autocomplete="off" class="form__field" type="password">
        <label class="form__label" for="senha">Senha</label>
      </div>
      <br>
      <p class="text-right">
        <input type="submit" value="Entrar" class="btn btn-primary">
      </p>
    </form>
    <br>
    <br>

    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Cadastrar</button>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title" id="exampleModalLabel">Cadastre-se</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body fundofixo">
          <form action="processa-login.php" id="form_usuarios_insere" name="form_usuarios_insere" method="POST" enctype="multipart/form-data">
            <div class="form__group field">
              <input class="form__field" type="text" name="username" id="username" placeholder="Nome" maxlength="100" required>
              <label class="form__label" for="username">Name</label>
              <br>
            </div>
            <div class="form__group field">
              <input class="form__field" type="email" name="email" id="email" placeholder="Email" maxlength="100" required>
              <label class="form__label" for="email">Email</label>
              <br>
            </div>
            <div class="form__group field">
              <input class="form__field" type="password" name="senha" id="senha" placeholder="Senha" maxlength="100" required>
              <label class="form__label" for="senha">Senha</label>
              <br>
            </div>
            <input type="submit" value="Cadastrar" name="enviar" id="enviar" class="btn btn-success btn-block">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>

        </div>
      </div>
    </div>
  </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#email').blur(function()

      {
        var email = $('#email').val();
        $.ajax({
          type: 'GET',
          url: '../Controlers/func.php?email=' + email,
          data: {
            email: email
          },
          success: function(data) {
            console.log(data)
            $('#id').val(data.id);
            $('#nome').val(data.nome);
            $('#email').val(data.email);
            $('#cpf').val(data.cpf);
            $('#nivel').val(data.nivel);
          }
        });
      });
  });
</script> -->

</html>