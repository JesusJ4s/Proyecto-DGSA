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


<?php
      
      include("php/index_pagprin.php");
           echo index_vectores();
  
        ?>
        <hr>
    <!-- **************************************************************************************************************** -->
    <!-- Comienza lo bueno -->
    <main class="container-fluid row m-0 p-0">

        <!-- Primera sección -->
        <section class="col-8">
            <div class="container-lg w-85">
                <h2 class="bold">
                   Vectores
                </h2>
                <p class="text-justify sangria">
                Un vector es un organismo vivo que transmite un agente infeccioso de un animal infectado a un ser humano o a otro animal. Los vectores suelen ser artrópodos, a saber, mosquitos, garrapatas, moscas, pulgas y piojos.
                </p>
            </div>
            <div class="container-lg mb-2 p-0 w-75">
            <img src="assets/informacion/DCVFN informa/programa/vectores.jpg" alt="Aedes" class="d-block width-carousel-info">
            </div>
            <hr>
            <div class="container-lg w-85">
                <h2 class="bold">
                  Reservorios
                </h2>
                <p class="text-justify sangria">
                El reservorio natural o nido se refiere al hospedador de largo plazo de un patógeno que causa una enfermedad infecciosa zoonótica. A menudo ocurre que el hospedador no es afectado por la enfermedad que este patógeno causa en otros organismos, o permanece asintomático y no está en riesgo su vida. Una vez descubierto el reservorio natural de un organismo patogénico, se elucida su ciclo de vida, lo cual hace más sencillo el desarrollar programas de prevención y control.
                </p>
            </div>
            <div class="container-lg mb-2 p-0 w-75">
            <img src="assets/informacion/DCVFN informa/programa/reservorio.png" alt="Aedes" class="d-block width-carousel-info">
            </div>
        </section>
            
        <aside class="col-3 mb-3">
            <div class="bg-azul mt-5 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Vectores</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/gallery/DCVFN/Fotos entomologia/Hylesia/DSCN0001.JPG" alt="Vectores" class="w-50 border-radius-15">
                </a>
            </div>
            <div class="bg-azul mt-5 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Reservorios</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/gallery/DCVFN/Aedes Aegypti/Imagen5.jpg" alt="Reservorios" class="w-50 border-radius-15">
                </a>
            </div>
            <div class="bg-azul mt-5 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Vectores</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/gallery/DCVFN/Fotos entomologia/Hylesia/DSCN0017.JPG" alt="Fauna Nociva" class="w-50 border-radius-15">
                </a>
            </div>
           
            <div class="bg-azul mt-5 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Triatominos</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                <img src="assets/informacion/DCVFN informa/programa/triatominos.jpg" alt="Fauna Nociva" class="w-50 border-radius-15">
                </a>
            </div>
            <div class="bg-azul mt-5 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">entomología</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                <img src="assets/informacion/DCVFN informa/programa/entomología.jpg" alt="Fauna Nociva" class="w-50 border-radius-15">
                </a>
            </div>
            </aside>
            </main>
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