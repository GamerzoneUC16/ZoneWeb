<?php 


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
    <form action="processa-formulario.php" method="post">
        <!-- Cadastro Cliente -->
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nome">
        </div>
        <div class="mb-3">
            <label for="sobrenome" class="form-label">Sobrenome:</label>
            <input name="sobrenome" type="text" class="form-control" id="sobrenome" aria-describedby="sobrenome">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">Cpf:</label>
            <input name="cpf" type="text" class="form-control" id="cpf" aria-describedby="cpf">
        </div>
    
        <!-- Fim Cadastro Cliente -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>