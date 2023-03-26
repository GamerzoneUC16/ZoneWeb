<?php 

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
} else {
  $username = 'Visitante';
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Área Administrativa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>

   </style>
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgba(0, 0, 50, 0.5);">
  <div class="container-fluid">
    <a class="navbar-brand" href="../inicio.php">
        <img class="img-Logo" src="../images/Logo/GZ_logo.png">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav  ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-info" aria-current="page" href="client.php">Clientes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-info" href="user_list.php">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-info" href="produtos_list.php">Produtos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="admin/login.php">
                <span class="bi bi-person-fill" style="color: #EAF2EF;">&nbsp;<?php echo $username; ?></span>
            </a>
            <li class="nav-item">
            <a href="logout.php">
                    <span class="bi bi-door-open-fill" style="color: #EAF2EF;"></span>
                </a>
            </li>
      </ul>
    </div>
  </div>
</nav>