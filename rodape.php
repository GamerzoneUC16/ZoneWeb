<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodapé</title>
</head>
<style>
    .img-lg {
        width: 50%;
        height: 42%;
    }

    .fundo {
        background-color: antiquewhite;
    }

    .map-container {
        height: 400px;
    }
</style>

<body>
<div class="container">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top fundo border-bottom  ">
        <div class="col mb-6">
            <a href="inicio.php" class="d-flex alingn-items-center mb-3 link-dark text-decorantion-none">
                <img src="images/Logo/GamerZone_logo-2-removebg-preview.png" class="img-lg">
            </a>
        </div>
        <div class="col mb-2">
            <h5>Links</h5>
            <br>
            <ul class=" list-unstyled">
                <li class="nav-item mb-2">
                    <a href="quemsomos.php" class="nav-link p-0 text-muted">Quem Somos</a>
                </li>
                <br>
                <li class="nav-item mb-2">
                    <a href="loja.php" class="nav-link p-0 text-muted">Loja</a>
                </li>
                <br>
                <li class="nav-item mb-2">
                    <a href="servicos.php" class="nav-link p-0 text-muted">Serviços</a>
                </li>
            </ul>
        </div>
        <div class="col mb-2">
            <div class="painel-footer" style="background: none;">
                <i>A Melhor Gamerhouse da Zona Leste</i>
                <address>
                    <i>Av. José Pinheiro Borges - Itaquera, São Paulo - SP, 08220-900</i>
                    <br>
                    <span class="bi bi-phone"></span>
                    &nbsp; (11) 4002-8922
                    <br>
                    <span class="bi bi-envelope-open-fill"></span>
                    &nbsp;
                    <a href="">gamerzoneuc16@gmail.com</a>
                    <ul class="list-unstyled">
                        <br>
                        <br>
                        <li class="nav-item mb-2">
                            <div class="map-container">
                                <div id="map" class="img-fluid">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.776015081373!2d-46.472831885384444!3d-23.540557166708652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5e622db57c4f%3A0x3de99bb691d3dc68!2sShopping%20Metr%C3%B4%20Itaquera!5e0!3m2!1spt-BR!2sbr!4v1675906536421!5m2!1spt-BR!2sbr" width="500" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </li>
                    </ul>
            </div>
            </div>
    </footer>
    <div class="panel-footer" style="background: none;">
        <h6 class="text-danger text-center">
            Desenvolvido por Gamerzone&trade; 2023
            <br>
            <a href="http://www.gamerzone.com.br" target="_blank">
                gamerzone.com.br
            </a>
        </h6>
    </div>
    </div>
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