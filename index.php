<!DOCTYPE html>
<html lang="en">
<head>
    
   
    <title>Realize - Home</title>
    <?include 'include/meta.php'?>

</head>
<body class="specific-page" >
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRR4D7F"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



    <?include 'include/header.php'?>

   
 
    <div  class="wrapper">
        <div class="uno">
            <!--            <div class="blackboxjeje">-->
            <!--            </div>-->
            <div class="container">
                <h1 class="subtitulo">¿A dónde puede llevarnos la información?</h1>
                <div class="headline-description">
                    <h2 class="textopeque" onclick="location.href='./herramientas.php';">Vamos a descubrirlo.</h2>
                </div>
            </div>
        </div>
        <div class="dos">
            <div class="swiper-container animate-left">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" onclick="location.href='smart.php';">
                        <!--                        <div class="blackbox"></div>-->
                        <!--                        <span class="popuptext" id="myPopup">Descripcion ejemplo</span>-->
                        <h1>Revenue management</h1>
                        <img src="./assets/img/smar.png" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='supply.php';">
                        <!--                        <div class="blackbox"></div>-->
                        <h1>Supply chain management</h1>
                        <img src="./assets/img/supply.png" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='loyalty.php';">
                        <!--                        <div class="blackbox"></div>-->
                        <h1>Loyalty</h1>
                        <img src="./assets/img/loyal.png" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='madurez.php';">
                        <h1>Madurez digital</h1>

                        <img src="./assets/img/madurez.png" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='tool-waste.php';">
                        <h1>Warehouse management</h1>

                        <img src="./assets/img/waste.png" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='./tool-rutas.php';">
                        <h1>Optimizador de rutas</h1>

                        <img src="./assets/img/rutas.png" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide" onclick="location.href='./tool-mapping.php';">
                        <h1>Mapping</h1>

                        <img src="./assets/img/mapping.jpeg" style="width: 100%;height: 100%;" alt="">
                    </div>
                    <div class="swiper-slide">
                        <div class="gray"style="width: 100%;height: 100%;">
                            <h2>Vamos a optimizar.</h2>
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
        navigation:{
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
<?include 'include/end.php'?>
</body>
<style>

</style>
</html>
