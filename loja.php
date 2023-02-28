


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>Store Zone</title>
</head>
<body class="fundofixo">
  <!-- Area do Menu -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #003459;">
  <div class="container-fluid">
    <a class="navbar-brand" href="inicio.php">
        <img src="images/GZ-NEW.png" alt="Logo-GZ" srcset="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <div class="input-group flex-nowrap">
            <form class="d-flex">
                <input type="search" class="form-control me-2" placeholder="Buscar Produto" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="carinho.php">
            <span class="bi bi-cart-fill"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="login.php">
            <span class="bi bi-person-fill"></span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>   
<!-- Fim de Menu -->
     <main class="container">
     <!--Body da Loja-->
        <!-- Inicio de Atalhos -->
        <div class="row justify-content-md-center">
          <div class="col-md-auto">
            <a href="" class="btn btn-info" role="button">HARDWARE</a>   
          </div>
          <div class="col-md-auto">
            <a href="" class="btn btn-info" role="button">PERIFÉRICOS</a> 
          </div>
          <div class="col-md-auto">
           <a href="" class="btn btn-info" role="button">CADEIRAS</a> 
          </div>
          <div class="col-md-auto">
           <a href="" class="btn btn-info" role="button">MONITOR</a> 
          </div>
          <div class="col-md-auto">
           <a href="" class="btn btn-info" role="button">ACESSÓRIOS</a> 
          </div>
          <div class="col-md-auto">
             <a href="" class="btn btn-info  " role="button">GABINETES</a> 
          </div>
        </div>
        <!-- Fim de Atalhos -->
        <!--Banner da loja-->
         <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/Razer-Desc.webp" alt="Destaque-1" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/mesa.png" alt="Destaque-2" class="d-block w-100">
                </div>
                <div class="carousel-item">
                    <img src="images/Lougetch.jpeg" alt="Destaque-3" class="d-block w-100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
         </div>
        <!--Fim banner da loja-->
        <!-- Inicio Destaques -->
        <div class="row">
          <div class="col">
            <img src="" >
          </div>
        </div>
        <!-- Fim Destaques -->  

        <div id="meu-carrossel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <?php for ($i = 0; $i < count($imagens); $i++) { ?>
        <button type="button" data-bs-target="#meu-carrossel" data-bs-slide-to="<?php echo $i ?>" <?php if ($i == 0) { ?>class="active"<?php } ?>></button>
      <?php } ?>
    </div>

    <div class="carousel-inner">
      <?php for ($i = 0; $i < count($imagens); $i++) { ?>
        <div class="carousel-item <?php if ($i == 0) { ?>active<?php } ?>">
          <img src="<?php echo $imagens[$i] ?>" class="d-block w-100">
        </div>
      <?php } ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#meu-carrossel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>

     <!--fim do Body da Loja-->
    </main>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>

