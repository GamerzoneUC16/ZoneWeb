<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodapé</title>
</head>
<style>
    .img-lg {
        width: 60%;
        height: 100%;

    }
    .img-lg-rodapé {
        width: 60%;
        height: 100%;
        position: relative;
        left: 290px;
        top: 20px;
    }

    .fundo {
        /* background-image: linear-gradient(to right, rgb(0, 11, 12), rgb(10, 11, 12), rgb(0, 11, 12)); */
        background: #0b212d;
    }

    .map-container {
        height: 400px;
    }
    iframe
    {
        margin: 20px 6px;
    }
    .close 
    {                 
    text-decoration: none;
    }
    .siga
    {
        font-size: 30px;

    }
    .link
    {
        font-size: 30px;

    }
    .endereco
    {
        font-size: 30px;
    }
</style>

<body>
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top fundo">
            <!-- Contatos -->
            <div class="d-grid gap-2 fs-5">
                <h1 class="siga text-white">Siga-nos</h1>
                <a class="close" href="https://pt-br.facebook.com/">
                    <span class="bi bi-facebook text-info"> Facebook</span>
                </a>
                <a class="close" href="https://wa.me/5511970617855">
                    <span class="bi bi-whatsapp text-info"> Whatsapp</span>
                </a>
                <a class="close" href="mailto:gamerzoneUC16@gmail.com?subject=Contato Site&cc=igor.santiago546@outlook.com">
                    <span class="bi bi-envelope-open text-info"> Email</span>
                </a>
                <a  class="close" href="https://github.com/GamerzoneUC16">
                    <span class="bi bi-github text-info"> Github</span>
                </a>
            </div>
            <!-- Fim Contatos -->
            <!-- Links -->
            <div class="col fs-5">
                <h5 class="link text-white">Links</h5>
                <br>
                <ul class="d-grid gap-2">
                    <li class="nav-item mb-2">
                        <a href="quemsomos.php" class="nav-link p-0 text-info">Quem Somos</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="loja.php" class="nav-link p-0 text-info">Loja</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a href="servicos.php" class="nav-link p-0 text-info">Serviços</a>
                    </li>
                </ul>
            </div>
            <!-- Fim Links -->
            <!-- Endereço -->
            <div class="col enderecos fs-5 text-info">
                <h3 class="endereco text-white">Endereços</h3>
                <br>
                <p>A Melhor Gamerhouse da Zona Leste</p>
                <address>
                    <p>Av. José Pinheiro Borges - Itaquera, São Paulo - SP, 08220-900</p>
                    <br>
                    <span class="bi bi-phone">
                        &nbsp; (11) 4002-8922
                    </span>
                    <br>
                    <a href="mailto:gamerzoneUC16@gmail.com?subject=Contato Site&cc=igor.santiago546@outlook.com">
                        <span class="bi bi-envelope-open-fill">
                            &nbsp; gamerzoneuc16@gmail.com
                        </span>
                    </a>
                </address>
                <!-- Mapa -->
                <!-- <div class="col" >
                    <div class="map-container" >
                        <div id="map" class="img-fluid" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14631.103522626145!2d-46.470643!3d-23.540562!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e622db57c4f%3A0x3de99bb691d3dc68!2sShopping%20Metr%C3%B4%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1678574911407!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                        </div>
                    </div>
                </div> -->
                <!-- Fim Mapa -->
            </div>
            <!-- Fim Endereço -->
            <!-- Logo -->
            <div class="col">
                <a href="inicio.php" class="d-flex img-right position-relative">
                    <img src="images/Logo/GamerZone_logo-2-removebg-preview.png" class=" img-responsive  img-lg-rodapé  rounded float-end img-fluid">
                </a>
            </div>
            <!-- Fim Logo -->
            
        </footer>
    </div>
</body>
<script>
    function initMap() {
        const myLatLng = {
            lat: -23.5505,
            lng: -46.6333
        };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 10,
            center: myLatLng,
        });
        new google.maps.Marker({
            position: myLatLng,
            map,
            title: "Hello World!",
        });
    }
</script>
<script src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.776015081373!2d-46.472831885384444!3d-23.540557166708652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e622db57c4f%3A0x3de99bb691d3dc68!2sShopping%20Metr%C3%B4%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1675906536421!5m2!1spt-BR!2sbr" async defer></script>

</html>