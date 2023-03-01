<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Serviço</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        h1 {
            text-align: center
        }

        .content {
            display: flex;
            justify-content: center
        }

        .contato {
            width: 100%;
            max-width: 500px;
        }

        .form {
            display: flex;
            flex-direction: column;
        }

        /* ==.field{padding: 10px;margin-bottom: 15px ; 5px;font-family: Arial, Helvetica, sans-serif;font-size:16 ;  } */
        textarea {
            height: 200px
        }
    </style>

    </body>
</head>

<section class="content">
    <div class="contato">
        <br>
        <h1> FALE CONOSCO!!</h1>
        <form class="form" method="POST" action="">
            <label for="Input1" class="field">Nome Completo</label>
            <input type="nome" class="field" id="nome" placeholder="Rogerio Ceni">
            <br>
            <label for="Input1" class="field">E-mail</label>
            <input type="email" class="field" id="email" placeholder="Exemplo@gmail.com">
            <br>
            <label for="Input1" class="field">Telefone</label>
            <input type="telefone" class="field" id="telefone" placeholder="(11)9999-0000">
            <br>
            <select class="form-select" aria-label="Default select example">
                <option selected>Qual e o problema?</option>
                <option value="1">hardware</option>
                <option value="2">Redes</option>
                <option value="3">Sistema</option>
            </select>
            <br />
            <textarea class="field" name="mensagem" placeholder="Descreva o problema"></textarea>
            <br>
            <button class="btn btn-primary" type="submit">Enviar</button>

        </form>

    </div>

</section>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>