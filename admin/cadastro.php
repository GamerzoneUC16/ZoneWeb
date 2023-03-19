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
        <!-- Cadastro Telefone  -->
        <div class="mb-3">
            <label for="numero_tel" class="form-label">Telefone:</label>
            <input name="numero_tel" type="text" class="form-control" id="numero_tel" aria-describedby="numero_tel">
        
            <label for="tipo_tel" class="form-label">Tipo:</label>
            <input name="tipo_tel" type="text" class="form-control" id="tipo_tel" aria-describedby="tipo_tel">
        </div>
        <!-- Fim Cadastro Telefone -->
        <!-- Cadastro Endereço -->
        <div class="mb-3">
            <label for="logradouro" class="form-label">Logradouro:</label>
            <input name="logradouro" type="text" class="form-control" id="logradouro" aria-describedby="logradouro">
        </div>
        <div class="mb-3">
            <label for="numero_end" class="form-label">Numero:</label>
            <input name="numero_end" type="text" class="form-control" id="numero_end" aria-describedby="numero_end">
        </div>
        <div class="mb-3">
            <label for="bairro" class="form-label">Bairro:</label>
            <input name="bairro" type="text" class="form-control" id="bairro" aria-describedby="bairro">
        </div>
        <div class="mb-3">
            <label for="cidade" class="form-label">Cidade:</label>
            <input name="cidade" type="text" class="form-control" id="cidade" aria-describedby="cidade">
        </div>
        <div class="mb-3">
            <label for="uf" class="form-label">UF:</label>
            <input name="uf" type="text" class="form-control" id="uf" aria-describedby="uf">
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">Cep:</label>
            <input name="cep" type="text" class="form-control" id="cep" aria-describedby="cep">
        </div>
        <div class="mb-3">
            <label for="complemento" class="form-label">Complemento:</label>
            <input name="complemento" type="text" class="form-control" id="complemento" aria-describedby="complemento">
        </div>
        <div class="mb-3">
            <label for="tipo_end" class="form-label">Tipo:</label>
            <input name="tipo_end" type="text" class="form-control" id="tipo_end" aria-describedby="tipo_end">
        </div>
        <!-- Fim Cadastro Endereço -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>