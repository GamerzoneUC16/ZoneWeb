<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/style.css">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            /* background-image: linear-gradient(45deg, cyan, blue ); */
        }
        .tela-login{
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
    </style>
</head>
<body>
    <div class="tela-login fundofixo">
        <div class="Space">
        <h1>Login</h1>
        </div>
        <div class="Space2">
        <img src="images/GZ2_resized.png" alt="Logo">
        </div>
        <br>
        <input type="text" placeholder="Nome">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <a href="">
        <button>Entrar</button>
        </a>
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
      <div class="modal-body">
            <input class="form-control" type="text" placeholder="Nome">
        <br>
            <input class="form-control" type="text" placeholder="Sobrenome">
        <br>
            <input class="form-control" type="text" placeholder="Email">
        <br>
            <input class="form-control" type="password" placeholder="Senha">
        <br>
            <input class="form-control" type="password" placeholder="Confirmar senha">
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success">Cadastrar</button>
      </div>
    </div>
  </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
