<!DOCTYPE html>
<html lang="en">

<head>

    <title>Realize - Contacto</title>
    <?include 'include/meta.php'?>
</head>

<body data-barba="wrapper">

    <?include 'include/header.php'?>

    <div id="contact">
        <div class="contact-text-container animate-top">
            <h1 class="contact-title">Contáctanos</h1>
        </div>
        <div class="form-container animate-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="form-title">
                            Nos gustaría conocer más sobre ti.
                        </h4>
                    </div>
                    <div class="col-lg-12">
                        <p class="form-instruction">Solo llena el formulario o <a href="mailto:hello@realizeservice.com">envíanos un correo.</a></p>
                    </div>
                    <div class="col-lg-12">
                        <!--<form action='/sendEmail.php' method="post" class="row">-->
                        <form action='/send-email.php' method="post" class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="row">
                                    <div class="form-group col-lg-12 text-area-ct">
                                        <textarea id="message" name="message" type="text" placeholder="Acerca de tu empresa/proyecto" class="form-control"></textarea>

                                        <!-- <label for="file-input" class="add-file">
                                        <i class="fas fa-paperclip"></i>
                                        Adjuntar Archivo  Replace with whatever text or icon you wish to use 
                                        <input type="file" id="file-input">
                                    </label>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="row proportional inputs">
                                    <div class="form-group col-lg-12">
                                        <input id="name" name='name' type="text" placeholder="Nombre" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input id="email" name='email' type="email" placeholder="Correo" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <input id="empresa" name='empresa' type="text" placeholder="Empresa" class="form-control">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <button type="submit" class="form-button">Enviar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script>
        $(function() {
            $("#nav-placeholder").load("nav.html");
        });
    </script>

    <?include 'include/footer.php'?>

    <?include 'include/end.php'?>
</body>

</html>