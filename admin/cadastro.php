<?php 
include '../conn/connect.php';

$ListaCli = $conn->query("select * from cliente");
$rowListaCli = $ListaCli->fetch_assoc();
$numRows = $ListaCli->num_rows;


$inicio = "http://localhost:8080/ZoneWeb/admin/index.php";  


if($_POST){
    // Cadastro Cliente
        $id         = $_POST['id'];
        $nome       = $_POST['nome'];
        $sobrenome  = $_POST['sobrenome'];
        $email      = $_POST['email'];
        $cpf        = $_POST['cpf'];
       
        $insertCli = "insert cliente (nome, sobrenome,email, cpf) values ('$nome','$sobrenome','$email','$cpf');";
        $resultadoCli = $conn->query($insertCli);
    // Fim Cadastro Cliente

    if(mysqli_insert_id($conn)){
        header("Location: http://localhost:8080/ZoneWeb/admin/client.php");
    }else{
        header("Location: http://localhost:8080/ZoneWeb/admin/cadastro.php");
    };
} 

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            /* background-image: linear-gradient(45deg, cyan, blue ); */
        }
        .tela-cadastro{
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }
        button:hover{
            background-color: deepskyblue;
        }
        .Space
        {
            position: absolute;
            bottom: 75%;
            left: 50%;
            transform: translate(-60%, -40%);  
        }
        .Space2
        {
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

.form__field:placeholder-shown ~ .form__label {
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

.form__field:focus ~ .form__label {
  position: absolute;
  top: 0;
  display: block;
  transition: 0.2s;
  font-size: 17px;
  color: #38caef;
  font-weight: 700;
}

/* reset input */
.form__field:required, .form__field:invalid {
  box-shadow: none;
}
.fundofixo{
  background: url('../images/Fundo/Fundo.jpg') no-repeat fixed;
  -webkit-background-size: cover;
  background-size: cover;
 }
    </style>
</head>
<body>
    <div class="tela-cadastro fundofixo">
        <div class="Space">
            <h1>Cadastro</h1>
        </div>
        <div class="Space2 d-flex img-right position-relative">
        <img src="../images/Logo/GamerZone_logo-2-removebg-preview.png" alt="Logo" class="img-responsive  img-lg-rodapé  rounded float-end img-fluid">
        </div>
        <form action="cadastro.php" method="POST" name="form_login" id="form_login" enctype="multipart/form-data">
        <!-- Cadastro Cliente -->
        <div class="form__group field">
            <input name="nome" type="text" class="form__field" id="nome" aria-describedby="nome">
            <label for="nome" class="form__label">Nome:</label>
        </div>
        <div class="form__group field">
            <input name="sobrenome" type="text" class="form__field" id="sobrenome" aria-describedby="sobrenome">
            <label for="sobrenome" class="form__label">Sobrenome:</label>
        </div>
        <div class="form__group field">
            <input name="email" type="text" class="form__field" id="email" aria-describedby="email">
            <label for="email" class="form__label">Email:</label>
        </div>
        <div class="form__group field">
            <input name="cpf" type="text" class="form__field" id="cpf" aria-describedby="cpf">
            <label for="cpf" class="form__label">Cpf:</label>
        </div>
        <!-- Fim Cadastro Cliente -->
        <br>
        <br>
        <br>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>