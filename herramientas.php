<!DOCTYPE html>
<html lang="en">

<head>

    <title>Realize Services | Herramientas	         </title>
    <meta name="description" content="Realize Service, ofrece múltiples tipos de herramientas que te ayuda optimizar en cada área de tu negocio, encuentra como optimizar las ventas, encuentra el perfil de tu cliente, aumenta la utilidad, pérdidas de venta y tiempo por inventario"/>

    <?include 'include/meta.php'?>
</head>

<body>
    <?include 'include/header.php'?>
    
    <section class="ini cards-container">
        <div class="container">
            <div class="row animate-top">
                <div class="col-lg-12">
                    <h1>Herramientas</h1>
                    <p>
                        Automatización y planeación de inventarios con el apoyo de inteligencia artificial, digitalización de datos, y una optimización relevante en uso de recursos, nuestras herramientas cumplen con el objetivo de brindarle a su empresa la accesibilidad a la tecnología que resuelve y mejora los procesos en todas las áreas de su negocio.
                    </p>
                    <br>
                    <br>
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
                    <div class="swiper-slide" onclick="location.href='./tool-web-scraping.php';">
                        <h2>Web Scraping</h2>

                        <img src="./assets/img/scrapy1.jpg" style="width: 100%;height: 100%;" alt="">
                    </div>
    
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- Add Pagination -->
                <!--                <div class="swiper-pagination"></div>-->
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
                            slidesPerView: 4
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
            <div class="row" style="padding-top: 8em; padding-bottom: 4em;">
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="infoDesc3" style="margin-right: 15%; ">
                        <h1>Determine la madurez digital de su empresa.</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="infoDesc3">
                        <p>Nos encantaría mostrarle lo que nuestras herramientas pueden hacer por su empresa.</p>

                        <a href="contacto.php" class="yellow-button" style="margin-left: 0;color: white;">Inicie su prueba</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
   
    <?include 'include/footer.php'?>

    <?include 'include/end.php'?>

</body>

</html>