<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Serviços</title>
</head>
        <style>

            body 
            {
               /*  background: url(../images/images.jpg) ; */
                 font-family: Arial, Helvetica, sans-serif; 
             background-image: linear-gradient(to right, rgb(66, 206, 245), rgb(66, 206, 245));   
            }
            h1
            {
                text-align: center;
                font-size: 80px;

            }
            p
            {
                text-align: center;
                font:size;
            }   
           .servicos
           {
            
             text-align: center;
             background:  no-repeat;
             background-size: cover;
             
           }
           .colunas
           {
            display:  flex;
           }

           .servicos article
           {
                background:rgba(242, 242, 242, 0.9);
                color: #222;
                padding: 60px;
                margin: 20px 6px;
           }

           
           
           
           
        </style>
<body>
    <br>
        <!-- Serviços-->
        <h1>Serviços</h1>
        <p>GamerZone a Melhor LanHouse da Zona Leste!!</p>
        <div class="text-center">
       <span class="bi bi-controller fs-1"></span>
        </div>
        <br>
           
        <section class= " servicos " >
            <div class="colunas">
                <article>
                    <!-- <img src="" alt="">  -->
                    <span class="bi bi-gear-fill fs-1" ></span>
                    <h2>Serviços</h2>
                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </p>
                </article>
                <article>
                     <!-- <img src="" alt="">  -->
                     <i class="bi bi-controller fs-1"></i>
                    <h2>Jogos</h2>
                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </p>  
                </article>
                <article>
                   <!--  <img src="" alt=""> -->
                   <i class="bi bi-shop fs-1"></i>
                    <h2>Vendas</h2>
                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. </p>
                </article>
                </div>
            </section>
                <br>

                <!--  implementando o Modal -->
                <div class="text-center">  
                <button type="button" class="btn btn-primary btn-lg"  data-bs-toggle="modal" data-bs-target="#chamadomodal" data-bs-whatever="@mdo">Abrir Chamado</button>
                </div>
<div class="modal fade" id="chamadomodal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="bi bi-headset fs-3" ></span>
        <br>
        <h3 class="modal-title fs-5" id="ModalLabel">Chamado</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="Nome" class="col-form-label" >Nome Completo:</label>
            <input type="text" class="form-control" id="Nome" >
          
            <label for="Email" class="col-form-label">E-mail:</label>
            <input type="email" class="form-control" id="Email" >

            <label for="Telefone" class="col-form-label" >Telefone:</label>
            <input type="tel"   name="telefone"class="form-control" id="Telefone" >
          </div>
          <label for="form-check"  class="col-for-label"><b>Motivo de Contato</b></label>
          <br>
          <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
    Problema com produto
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Dúvida
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Solicitação
  </label>
</div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Descreva o seu Problema:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Enviar</button>
      </div>
    </div>
  </div>
</div>
           <!-- Final do Modal -->

           <!-- borda em processo -->
           <div class="card bg-info text-white" style="border-radius: 25px;">
  <div class="card-body">
    <h5 class="card-title">Título do card.</h5>
    <p class="card-text">Texto do card.</p>
  </div>
</div> 
   
        
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>