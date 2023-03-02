<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Quem Somos</title>
 <style>
  h1 {
    font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    color: #00BFFF;
  }
h2 {
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    color: #ffffff;
}
  .container {
  display: flex;
  flex-wrap: wrap;
}
/*
.imagem {
  flex: 1;
  margin: 10px;
  text-align: center;
}

.imagem img {
  width: 100%;
  max-width: 200px;
  height: auto;
  margin-bottom: 10px;
}
*/
.titulo {
  font-family:Georgia, 'Times New Roman', Times, serif;
  font-size: 30px;
  font-weight: bold;
  margin-bottom: 5px;
  color: #00BFFF;
}

.subtitulo {
  font-size: 25px;
  color: #fdfdfd;
}

@media screen and (min-width: 768px) {
  .imagem {
    flex-basis: calc(33.33% - 20px);
  }
}
.img-1{
  position: cover;
  width: 500px;
  top: 50%;
  left: 80%;
  text-align: left;
}
.img-2{
  position: cover;
  width: 500px;
  top: 50%;
  left: 80%;
  text-align: center;
}
.img-3{
  position: cover;
  width: 500px;
  top: 50%;
  left: 80%;
  text-align: right;
}
 </style>
</head>
<body class="fundofixo">
    <main class="container">   
    <?php include 'menu.php'?>
    <footer class="panel-footer" style="background: none;">
    <br>
    <h1 class="text-center text-uppercase">QUEM SOMOS</h1>
    <br>
    <h2>A Gamerzone e uma Lan House Gamer e assistência técnica criada em 23 de setembro de 2021 entre um grupo de 5 amigos para possibilitar que os clientes utilizem a tecnologia a favor de suas Gameplay, negócios e entretenimentos.</h2>
<br>   
    <div class="imagem">
  <img src="images/missao.jpg" alt="" class="img-1">
  <div class="titulo">Missão</div>
  <div class="subtitulo">Satisfazer nosso cliente através da tecnologia dos jogos com o maior desempenho e buscar soluções através da melhor manutenção com agilidade e qualidade de serviço.</div>
</div>
<br>
<div class="imagem">
  <img src="images/visao.jpg" alt="" class="img-2">
  <div class="titulo">Visão</div>
  <div class="subtitulo">Em 5 anos queremos atingir ao mercado de melhor empresa de lan house e assistência técnica em um só lugar dentro do território nacional com visibilidade para os grandes eventos dentro do país no conceito de games e manutenção em hardwares e softwares.</div>
</div>
<br>
<div class="imagem">
  <img src="images/valores.jpg" alt="" class="img-3">
  <div class="titulo">Valores</div>
  <div class="subtitulo">Transparência, entregamos resultados, desempenho e performance, exceder as expectativas dos clientes.</div>
</div>
<br>
    <?php include 'rodape.php'?> 
    </footer>
</main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js%22%3E"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
