<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <nav class="nav">
                <div class="menu-toggle" id="menutogglejeje">
                    <i class="fas fa-bars"></i>
                </div>
                <a href="./index.php" >
                    <img class="logo" src="./assets/img/logo.png" alt="">
                </a>
               
                <ul class="nav-list" id="menucontentjeje">
                    <li class="nav-item">
                        <a href="porque.php" class="nav-link" >¿Por qué Realize?</a>
                    </li>

                    <li class="nav-item">
                        <a href="herramientas.php" class="nav-link">Herramientas
                        </a>
                        <div class="dropdown-content " >
                            <div class="col-lg-2 dropheigh">
                                <h3>Comercial</h3>
                                <p><a style="color: #58595B" href="./madurez.php">Madurez Digital</a></p>
                                <p><a style="color: #58595B" href="./loyalty.php">Loyalty</a></p>
                                <p><a style="color: #58595B" href="./smart.php">Revenue Management</a></p>
                                <br>
                            </div>
                            <div class="col-lg-2 dropheigh"  style="justify-content: flex-start;">
                                <h3>Operaciones</h3>
                                <p><a style="color: #58595B" href="./supply.php">Supply Chain Management</a></p>
                                <p><a style="color: #58595B" href="./tool-waste.php">Warehouse Management</a></p>
                                <p><a style="color: #58595B" href="./tool-rutas.php">Optimizador de Rutas</a></p>
                                <p><a style="color: #58595B" href="./tool-mapping.php">Mapping</a></p><br>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="contacto.php" class="nav-link">Contáctanos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="bignotes.php" class="nav-link">Big Notes
                        </a>
                    </li>
                </ul>
            </nav>
        </div>


    </div>
</div>

<script>
    var element = document.getElementById('menucontentjeje');
        $('.menu-toggle').click(function() {
            if(window.getComputedStyle(element).getPropertyValue('opacity')==="0"){
                element.style.maxHeight="160px";
                element.style.height="160px";
                element.style.opacity="1";
                // $('.nav-list').animate({"max-height": "auto"},{duration:200});
                // $('.nav-list').css('opacity','1','1s');
            }else {
                element.style.maxHeight="0";
                element.style.height="0";
                element.style.opacity="0";
            }
        });

</script>
