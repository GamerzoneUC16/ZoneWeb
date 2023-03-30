<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Steamworks</title>
</head>

<style>
body
{
    font-family: Arial, Helvetica, sans-serif;
}

h2 {

    text-align: center;
    font-weight: bold;
    color: black;
    font-size: 25px;

}

p
{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: 20px;
}
.row {
  display: flex;
  justify-content: center;
  align-items: center;
}

.card {
  border-radius: 5px;
  box-shadow: 7px 7px 13px 0px rgba(50, 50, 50, 0.22);
  padding: 60px;
  margin: 25px;
  width: 400px;

  transition: all 0.3s ease-out;

}

.card:hover {
  transform: translateY(-5px);
  cursor: pointer;
}
 

 
.blue {
  border-left: 6px solid #4895ff;
}
 
.green {
  border-left: 6px solid #3bb54a;
}
 
.red {
  border-left: 6px solid #b3404a;
}

h2
{
    text-align: center;
}


.image {
  text-align: center;
  max-width: 200px;
  max-height: 200px;
}
</style>

<body class="fundofixo">
  <?php
  include 'menu.php'
  ?>

         <div class="row">
   
      <div class="card  blue">
        <br>
      <i  class="bi bi-gear-fill fs-2" style="font-size: 60px; text-align:center"></i>
        <h2 >Manutenção e Suporte</h2>
        <br>
        <p>Analise de performance, 
            avaliação de equipamento, 
            instalação de periféricos e suporte.</p>
      </div>

      <div class="card green ">
      <img class="image" src="images/jogo/steamworks_logo.png" alt="">
      <br>
        <p>O que é o Steamworks? O Steamworks é o conjunto de ferramentas e serviços criados pela Valve que ajudam você a configurar, gerenciar e operar o seu jogo no Steam.</p>
      </div>
 
      <div class="card red">
      <i class="bi bi-headset fs-2" style="font-size: 60px; text-align:center" ></i>
      <br>
        <h2>Consultoria e Orientação</h2>
        <p>Contamos com profissionais certificados prontos para orientar e sanar suas duvidas.</p>
      </div>
    </div>


    
<?php 
include 'rodape.php'
  ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>