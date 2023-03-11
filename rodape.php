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
        background-image: linear-gradient(to right, rgb(0, 11, 12),rgb(10, 11, 12),rgb(0, 11, 12));
    }

    .map-container {
        height: 400px;
    }
</style>

<body >
    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top fundo">
        <div class="col my-2">
            <h1>Siga-nos</h1>
            <a href="https://pt-br.facebook.com/">
                <span class="bi bi-facebook"></span>
            </a>
            <a href="https://wa.me/5511970617855">
                <span class="bi bi-whatsapp"></span>
            </a>
            <a href="">
                <span class="bi bi-envelope-open"></span>
            </a>
            <a href="">
                <span class="bi bi-github"></span>
            </a>
        </div>
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