<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Serviço</title>

    
</head>
<body>
        <section class="content">
    <div class="contato">
        <h1> FALE CONOSCO!!</h1>
        <form class="form" method="POST" action="">
            <input class="field" name="name" placeholder="Nome">
            <input class="field" name="telefone" placeholder="Telefone">
            <input class="field" name="email" placeholder="E-mail">
            <textarea class="field" name="mensagem" placeholder="Digite sua mensagem"></textarea>
            <input  class="field" type="submit" value="Enviar">

        </form>
        
    </div>  
</section>


<style>
        h1{text-align: center }
        body{font-family: Arial, Helvetica, sans-serif}
        .content{display:flex;justify-content: center}
        .contato{width: 100%;max-width: 500px;}
        .form{display: flex;flex-direction: column;}
        .field{padding: 10px;margin-bottom: 15px ;border:1px solid #DDD;border-radius: 5px;font-family: Arial, Helvetica, sans-serif;font-size:16 ;  }
        textarea{height: 150px}
        </style>
</body>
</html>