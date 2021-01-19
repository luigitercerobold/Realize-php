<!DOCTYPE html>
<html lang="en">

<head>
<title>Realize Service | Consultoría de Negocios	</title>
<meta name="description" content="Es un consultor que te ayuda a crecer tu negocio atravez de inteligencia artificial, optimiza procesos, compras y la logística de tu negocio, transforma tu negocio a la era digital"/>
    <?include 'include/meta.php'?>

</head>

<body class="specific-page">

    <?include 'include/header.php'?>

    <div >
        <div>
         
            <div class="container" style="margin-top: 125px;">
                <h1 class="subtitulo">¿A dónde puede llevarnos la información?</h1>
                <div class="headline-description">
                    <h2 class="textopeque" onclick="location.href='./herramientas.php';">Vamos a descubrirlo.</h2>
                </div>
            </div>
        </div>
        <div class="dos">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" onclick="location.href='smart.php';">
                        <!--                        <div class="blackbox"></div>-->
                        <!--                        <span class="popuptext" id="myPopup">Descripcion ejemplo</span>-->
                        <h2>Revenue management</h2>
                        <img src="./assets/img/smar.png" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='supply.php';">
                        <!--                        <div class="blackbox"></div>-->
                        <h2>Supply chain management</h2>
                        <img src="./assets/img/supply.png" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='loyalty.php';">
                        <!--                        <div class="blackbox"></div>-->
                        <h2>Loyalty</h2>
                        <img src="./assets/img/loyal.png" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='madurez.php';">
                        <h2>Madurez digital</h2>

                        <img src="./assets/img/madurez.png" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='tool-waste.php';">
                        <h2>Warehouse management</h2>

                        <img src="./assets/img/waste.png" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='./tool-rutas.php';">
                        <h2>Optimizador de rutas</h2>

                        <img src="./assets/img/rutas.png" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='./tool-mapping.php';">
                        <h2>Mapping</h2>

                        <img src="./assets/img/mapping.jpeg" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide">
                        <div class="gray" style="width: 100%;height: 100%;">
                            <p>Vamos a optimizar.</p>
                            <p>Descubra todo el potencial de su empresa.</p>
                            <a href="contacto.php" class="yellow-button">Inicie su prueba</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- Add Pagination -->
                <!--                <div class="swiper-pagination"></div>-->
            </div>
        </div>
    </div>


    <!-- Initialize Swiper -->
    <script>
        $(document).ready(
            function(e) {
                var swiper = new Swiper('.swiper-container', {
                    // autoplay: {
                    //     delay: 3000,
                    // },
                    slidesPerView: 3,
                    loop: true,
                    breakpoints: {
                        // when window width is >= 320px
                        320: {
                            slidesPerView: 1,
                        },
                        // when window width is >= 640px
                        900: {
                            slidesPerView: 3
                        }
                    },
                    mousewheel: true,
                    grabCursor: true,
                    spaceBetween: 0,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                });
            });
    </script>
    <?include 'include/footer.php'?>
    <?include 'include/end.php'?>
</body>
<style>

</style>

</html>