<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <?php
        include("php/estilosCss.php");
        stile1();
    ?>
    <title>Dirección General de Salud Ambiental</title>
</head>

<!-- DESPUES DE LOS 1150PX YA NO SE COMPRIME MÁS, SOLO HAY QUE QUITAR max-width-mio PARA QUE FUNCIONE NORMAL (PERO ES UN DESASTRE), NECESITO APRENDER MÁS SOBRE RESPONSIVE -->
<body class="min-width-index">
    <!-- ******************************************************* -->
    <!-- Cabecera -->
    <header id="inicio-pag">
        <?php
        include('php/logos.php')
        ?>
    </header>

    <!-- ******************************************************* -->
    <!-- Carrusel -->
    <?php
        include("php/index_carrousel.php");
    ?>

        <!-- *********************************************** -->
    <!-- Marquesina -->
    <?php
        include("php/marquesina.php")
    ?>

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <?php
        include("php/index_nav.php");
        echo index_nav();
    ?>

    <!-- ****************************************************** IMAGENES ************************************************ -->
    <section class="d-flex justify-content-center">
        
        <div class="mt-5 w-85">
            <!-- Galeria Normal -->
            <div class="mb-5">           
                <div>
                    <h1 class="text-start my-3 bold"><u>Galería</u></h1>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="card p-0 col-3 m-3 sombraCard">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/gallery/DGSA/20221129_133338.jpg" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <!-- <p class="card-text"></p> -->
                            <!-- <a href="" class="card-link btn btn-sm mb-2 btn-outline-primary">Tik Tok</a> -->
                            <!-- <a href="" class="card-link btn btn-sm mb-2 btn-outline-primary">Instagram</a> -->
                            <!-- <a href="" class="card-link btn btn-sm mb-2 btn-outline-primary">Twitter</a> -->
                            <button class="d-block col-12 btn btn-outline-success">Información</button>
                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/gallery/DGSA/20221129_134032.jpg" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>

                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/gallery/DGSA/20221129_135211.jpg" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>

                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/gallery/DGSA/DGSA.jpg" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>

                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/icon/pregunta.png" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>
  
                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/icon/pregunta.png" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>
  
                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/icon/pregunta.png" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>
  
                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/icon/pregunta.png" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>
  
                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/icon/pregunta.png" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>
  
                        </div>
                    </div>
                </div>
            </div>
                <!-- ****************** ARNOLDO GABALDON ********************* -->
            <div class="mb-5">
                <div>
                    <h1 class="text-start my-3"><u>Dr. Arnoldo Gabaldon</u></h1>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="card p-0 col-3 m-3 sombraCard">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/gallery/DGSA/Antiguo/01.jpeg" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <!-- <p class="card-text"></p> -->
                            <!-- <a href="" class="card-link btn btn-sm mb-2 btn-outline-primary">Tik Tok</a> -->
                            <!-- <a href="" class="card-link btn btn-sm mb-2 btn-outline-primary">Instagram</a> -->
                            <!-- <a href="" class="card-link btn btn-sm mb-2 btn-outline-primary">Twitter</a> -->
                            <button class="d-block col-12 btn btn-outline-success">Información</button>
                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/gallery/DGSA/Antiguo/02.jpg" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>

                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/gallery/DGSA/Antiguo/4.jpg" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>

                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/gallery/DGSA/Antiguo/5.jpg" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>

                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/gallery/DGSA/Antiguo/5.1.jpg" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>
  
                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/gallery/DGSA/Antiguo/6.jpg" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>
  
                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/gallery/DGSA/Antiguo/7.jpg" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>
  
                        </div>
                    </div>
                    <div class="card p-0 col-3 m-3">
                        <div class="card-body border-css">
                            <div class="centrar" id="centrar">
                                <img src="assets/gallery/DGSA/Antiguo/8.jpg" alt="catedral" class="ImagenesWidth">
                            </div>
                            <!-- WIDTH-100 NO ESTÁ EN CSS -->
                            <h6 class="card-title my-3"></h6>
                            <button class="d-block col-12 btn btn-outline-success">Información</button>
  
                        </div>
                    </div>
                    
                </div>
                <!-- <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DGSA/Antiguo/01.jpeg" alt="DGSA" class="card-img-top ">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>
                        
                        
                    </div>
                </div> -->
                
            </div>
        </div>
    </section>


    <!-- JS en Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bottom.js"></script>
</body>
<?php
    include("php/subir_flecha.php");
?>
</html>