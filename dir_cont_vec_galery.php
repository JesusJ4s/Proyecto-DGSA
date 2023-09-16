<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Control Vectores y Reserv. y Fauna Nociva</title>
</head>

<!-- DESPUES DE LOS 1150PX YA NO SE COMPRIME MÁS, SOLO HAY QUE QUITAR max-width-mio PARA QUE FUNCIONE NORMAL (PERO ES UN DESASTRE), NECESITO APRENDER MÁS SOBRE RESPONSIVE -->
<body class=" min-width-index">



    <!-- ******************************************************* -->
    <!-- Cabecera -->
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
            Dirección Control de vectores
        </p>
    </div>

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <?php
        include("php/index_nav.php");
        echo dir_cont_vec_nav();

       
    ?>
    
    <hr>

    <!-- ****************************************************** IMAGENES ************************************************ -->
    <!-- ********************* PROGRAMA CHAGAS ************************* -->
    <section class="container-xxl p-0">
        
        <div class="container-fluid ps-4">
            <h1 class="my-5 ms-5 text-center"><u>Programa Chagas</u></h1>

        <!-- *************************** 2013 ************************** -->
            <h1 class="my-5 ms-5"><i>Aedes Aegypti</i></h1>
            <div class="text-center">
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Aedes Aegypti/aedes aegypti.jpg" alt="DGSA" class="card-img-top py-4-5">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Aedes Aegypti/Imagen4.jpg" alt="DGSA" class="card-img-top py-4">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>
                             
                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Aedes Aegypti/FOTOS/103.JPG" alt="DGSA" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>
            
                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Aedes Aegypti/FOTOS/107.JPG" alt="DGSA" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>
                        
                    </div>
                </div>
            </div>
            <!-- *************************** -->
            <h1 class="my-5 ms-5">Entomología - Hylesia</h1>
            <div class="text-center">
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Fotos entomologia/Hylesia/Postura emergiendo.JPG" alt="DGSA" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Fotos entomologia/Hylesia/Imagen244.jpg" alt="DGSA" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Fotos entomologia/Hylesia/Imagen237.jpg" alt="DGSA" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Fotos entomologia/Hylesia/Imagen110.jpg" alt="DGSA" class="card-img-top py-3">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
            </div>
            <!-- *************************** -->
            <h1 class="my-5 ms-5">Entomología - Malaria</h1>
            <h3 class="my-5 ms-5">Entomología - Malaria - Amazonas</h3>
            <div class="text-center">
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Fotos entomologia/Malaria/Amazonas/P1010177.JPG" alt="DGSA" class="card-img-top py-4">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Fotos entomologia/Malaria/Amazonas/P1010244.JPG" alt="DGSA" class="card-img-top py-4">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Fotos entomologia/Malaria/Amazonas/P1010293.JPG" alt="DGSA" class="card-img-top py-4">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Fotos entomologia/Malaria/Amazonas/P1010306.JPG" alt="DGSA" class="card-img-top py-4">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <h3 class="my-5 ms-5">Entomología - Malaria - Bolivar</h3>
            <div class="text-center">
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Fotos entomologia/Malaria/Bolívar/P1120012.JPG" alt="DGSA" class="card-img-top py-4">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Fotos entomologia/Malaria/Bolívar/P1130095.JPG" alt="DGSA" class="card-img-top py-4">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Fotos entomologia/Malaria/Bolívar/P1180228.JPG" alt="DGSA" class="card-img-top py-4">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>

                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <img src="assets/gallery/DCVFN/Fotos entomologia/Malaria/Bolívar/P1220540.JPG" alt="DGSA" class="card-img-top py-4">
                        <h2 class="card-title"></h2>
                        <p class="card-text"></p>
                    </div>
                </div>
                <div class="card bg-light wh-gallery d-inline-block">
                    <div class="card-body border-css">
                        <video src="assets/gallery/DCVFN/Fotos entomologia/Malaria/Bolívar/P1180243.mp4" controls class="card-img-top"></video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a href="#inicio-pag"><img src="assets/icon/botones/bottom.png" id="bottomArriba"> </a>

<!-- JS en Bootstrap -->

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bottom.js"></script>
</body>

<footer>
    <?php 
       
    ?>
</footer>
</html>