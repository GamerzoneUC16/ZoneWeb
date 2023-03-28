<!DOCTYPE html>
<html>
  <head>
    <title>Nossos Serviços</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  </head>
  <style>
    /* Definindo as cores usadas na página */
body {
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
}

header {
  background-color: #333;
  color: #fff;
  padding: 20px;
}

nav {
  background-color: #ddd;
  padding: 10px;
}


li {
  display: inline-block;
  margin-right: 10px;
}

li:last-child {
  margin-right: 0;
}



main {
  padding: 20px;
}

section {
  margin-bottom: 20px;
  padding: 30px;
  background-color: #fff;
  border: 1px solid #ddd;
}

h1, h2 {
  margin-top: 0;
  font-weight: bold;
  text-align: center;
} 

footer {
  background-color: #333;
  
  padding: 10px;
  
}
h3
{
  text-align: center;
  font-size: 35px;
}

.image {
  text-align: center;
  max-width: 250px;
  max-height: 250px;
  display:flex ;
}

p
{
  font-size: 20px;
  text-align: center;
}
  </style>

 <body class="fundofixo">
  <?php
  include 'menu.php'
  ?>
    <header>
      <h1>Nossos Serviços</h1>
    </header>
    <nav>
      
    </nav>
    <main>
      <section id="servico1">

        <h2><i class="bi bi-gear"></i></i>Manutenção e Suporte </h2>
        <p>Analise de performance,avaliação de equipamento instalação de periféricos e suporte,Resolvemos seu problema rapidamente, contamos com técnicos preparados para lhe ajudar.​</p>
      </section>
      <section id="servico2">
      <img class="image" src="images/jogo/steamworks_logo.png" alt="">
      <br>
      <br>
        <p>Conta com uma crescente biblioteca de licenças comerciais do Steam e títulos SteamVR, além de um conjunto de ferramentas para gerenciar tudo.​
        Acesso instantâneo a uma coleção de centenas de licenças comerciais de jogos.
        Jogos e atualizações só precisam ser baixados da internet uma única vez para toda a rede local.​
        Uma única conta Steam para comprar licenças de jogos adicionais e as compartilhar com os seus usuários através da rede local.
        </p>
      </section>
      <section id="servico3">
        <h2><i class="bi bi-headset"></i>Consultoria e orientação</h2>
        <p>Contamos com profissionais certificados prontos para orientar e sanar suas duvidas.</p>
      </section>
    </main>


    <footer>
    <h3 style="color:#fff ">Solicite o Suporte</h3>
    <i class="bi bi-arrow-down"></i>
      <!-- modal -->

      <div class="text-center">
      <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#chamadomodal" data-bs-whatever="@mdo">Abrir Chamado</button>
    </div>
    <div class="modal fade" id="chamadomodal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
           
            <br>
            <h3 class="modal-title fs-5" id="ModalLabel" style="color:#000"> <span class="bi bi-headset fs-3"></span>Chamado</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="servicos.php " method="POST">
              <div class="mb-3">
                <label for="titulo" class="col-form-label fw-bold" style> Titulo:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" required>
                <br>
                <label for="motivo" class="col-form-label fw-bold"  style="color:#000">Motivo:</label>
                <select for="motivo" class="form-select" aria-label="" name="motivo" id="motivo" required>
                  <option value="Troca">Troca</option>
                  <option value="Defeito">Defeito</option>
                  <option value="Duvida">Dúvida</option>
                  <option value="Sup_tecnico">Suporte Tecnico</option>
                </select>
                <br>
                <div class="mb-3">
                  <label for="assunto" class="col-form-label fw-bold" style="color:#000"> Descreva o seu Problema:</label>
                  <textarea type="text" name="assunto" id="assunto" class="form-control" required></textarea>
                </div>
                <br>
                <div class="form-group">
                  <label for="anexo" class="fw-bold"  style="color:#000">Anexo:</label>
                  <br>
                <input type="file" class="form-control-file" name="anexo" id="anexo">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>

                  <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
    </footer>

  <?php 
include 'rodape.php'
  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>