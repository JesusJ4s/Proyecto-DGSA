<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Dirección de Salud Radiológica</title>
</head>

<!-- DESPUES DE LOS 1150PX YA NO SE COMPRIME MÁS, SOLO HAY QUE QUITAR max-width-mio PARA QUE FUNCIONE NORMAL (PERO ES UN DESASTRE), NECESITO APRENDER MÁS SOBRE RESPONSIVE -->
<body class="min-width-index">

    <header id="inicio-pag">
        <?php
            include("php/logos.php")
        ?>
    </header>

<!-- ******************************************************* -->
    <!-- Carrusel -->
    <div class="container-fluid mb-2 p-0 box-shadow-nav w-95">

        <div id="carousel-id" class="carousel slide mt-3" data-bs-ride="carousel">

        <!-- Botones para pasar imagenes (inferiores) -->
            <div class="carousel-indicators">
                <button data-bs-target="#carousel-id" data-bs-slide-to="0" class="active"></button>
                <button data-bs-target="#carousel-id" data-bs-slide-to="1"></button>
                <button data-bs-target="#carousel-id" data-bs-slide-to="2"></button>
                <button data-bs-target="#carousel-id" data-bs-slide-to="3"></button>
            </div>

            <!-- Contenedor de las imágenes en carrousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/banner/DGSA/BANNER 1.jpg" alt="DGSA" class="d-block w-100 width-carousel ">
                </div>

                <div class="carousel-item">
                    <img src="assets/banner/DGSA/BANNER 2.jpg" alt="DGSA" class="d-block w-100 width-carousel ">
                </div>

                <div class="carousel-item">
                    <img src="assets/banner/DGSA/BANNER 3.jpg" alt="DGSA" class="d-block w-100 width-carousel ">
                </div>

                <div class="carousel-item">
                    <img src="assets/banner/DGSA/BANER OFICIAL.jpg" alt="DGSA" class="d-block w-100 width-carousel ">
                </div>
            </div>

        <!-- Botones para cambiar imágenes (altura normal) -->
            <button class="carousel-control-prev" data-bs-target="#carousel-id" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" data-bs-target="#carousel-id" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
 

<!-- *********************************************** -->
    <!-- Marquesina -->
    <?php
        include("php/marquesina.php")
    ?>


    <!-- **************************************************************** -->
    <!-- TITULO PAGINA -->
    <div class="container-fluid text-center">
        <p class="display-4 bold-title">
            Dirección Salud Radiologica
        </p>
    </div>

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <?php
        include("php/index_nav.php");
        echo dir_salud_radi_nav();
       
    ?>
    <hr>

    <!-- ****************************************************** IMAGENES ************************************************ -->
    <!-- ********************* RANDOM ************************* -->
    <section class="container-xxl p-0">
        
        <div class="container-fluid ps-4">
            <h1 class="my-5 ms-5 text-center"><u>Dirección</u></h1>

        <!-- *************************** xxxx ************************** -->
            <div class="text-center">
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/mic/IMG_20151125_141028.jpg" alt="DSR" class="card-img-top py-4-5">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/mic/IMG_20151125_141046.jpg" alt="DSR" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>
                             
                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/mic/IMG_20151125_141050.jpg" alt="DSR" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>
            
                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/mic/IMG_20151125_141100.jpg" alt="DSR" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>
                        
                    </div>
                </div>

                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/mic/IMG_20151125_141107.jpg" alt="DSR" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/mic/IMG_20151125_141124.jpg" alt="DSR" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/mic/IMG_20151125_141345.jpg" alt="DSR" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/mic/IMG_20151125_141352.jpg" alt="DSR" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
            </div>
            <!-- *************************** -->
            <div class="text-center">
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/reunion/IMG-20151208-WA0002.jpg" alt="DSR" class="card-img-top py-5">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/reunion/IMG-20151208-WA0003.jpg" alt="DSR" class="card-img-top py-5">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/reunion/IMG-20151208-WA0004.jpg" alt="DSR" class="card-img-top py-5">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/reunion/IMG_0054.JPG" alt="DSR" class="card-img-top py-2">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <!-- *********************************************** -->

            <div class="text-center">
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/reunion/IMG_0052.JPG" alt="DSR" class="card-img-top py-1">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/reunion/IMG_0104.JPG" alt="DSR" class="card-img-top py-4-5">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DSR/reunion/IMG_0107.JPG" alt="DSR" class="card-img-top py-5">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
            </div>
        </div>
    </section>
     <a href="#inicio-pag"><img src="assets/icon/botones/bottom.png" id="bottomArriba"> </a>
</footer>
    <!-- JS en Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bottom.js"></script>
</body>

<footer>
    <?php 
       
    ?>
</footer>
</html>