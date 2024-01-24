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
    <script src="jquery/jquery-3.6.4.min.js"></script>

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
    <?php
        include("php/index_carrousel.php");
    ?>

    <!-- *********************************************** -->
    <!-- Marquesina -->
    <?php
        include("php/marquesina.php")
    ?>

    <!-- Barra de navegación -->
    <?php
        include("php/index_nav.php");
        echo dir_cont_vec_nav();
  
    ?>


    <!-- **************************************************************************************************************** -->
    <!-- Comienza lo bueno -->
    <main class="container-fluid row m-0 p-0">

        <!-- Primera sección -->
        <section class="col-8">
            <div class="container-lg w-85">
                <h2 class="bold">
                    Vigilancia Entomológica
                </h2>
                <p class="text-justify sangria">
                    Proceso donde se realizan actividades orientadas a la búsqueda de vectores, dentro o fuera de la vivienda, antes, durante y después de haber realizado acciones de prevención y control. (Tegucigalpa, Honduras, 2010).
                </p>
            </div>
            <!-- **************************************** -->
            <!-- Carrusel -->
            <div class="container-lg mb-2 p-0 w-75">

                <div id="carousel-info" class="carousel slide mt-3" data-bs-ride="carousel">

                <!-- Contenedor de las imágenes en carrousel -->

                    <h2 class="display-5">Boletín</h2>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/informacion/DCVFN informa/aedes aegypti.jpg" alt="Aedes" class="d-block width-carousel-info">
                            <p class="display-5">
                                <i>Aedes Aegypti</i>
                            </p>
                            <p class="px-3 text-justify sangria">
                                Es un mosquito que se diferencia de otros en que sus patas posteriores presentan anillos blancos. <br>
                                Esta especie es más tolerante de las bajas temperaturas y mantiene una amplia variedad de criaderos, tanto en recipientes artificiales como naturales inclusive e n ambientes silvestres. <br>
                                <a target="_blank" href="en_const.html" class="leer-mas">Leer más...</a>
                            </p>
                        </div>

                        <div class="carousel-item">
                            <img src="assets/informacion/DCVFN informa/Hylesia.JPG" alt="Hylesia" class="d-block width-carousel-info">
                            <h2 class="display-5"><i>Hylesia</i></h2>
                            <p class="px-3 text-justify sangria">
                                <i>Hylesia metabus</i> (Cramer, 1.775), es una mariposa nocturna (Lepidoptera: Saturniidae), conocida como “Palometa Peluda”, la misma se encuentra distribuida en el nor-este de Venezuela, principalmente en los estados Sucre, Delta Amacuro y Monagas. Este insecto posee en el abdomen espículas urticantes que al entrar en contacto con la piel del ser humano y partirse libera una sustancia urticante responsable de causar prolongadas dermatitis y reacciones alérgicas conocidas como Lepidopterismo. <br>
                                <a target="_blank" href="en_const.html" class="leer-mas text-center">Leer más...</a>
                            </p>
                        </div>

                        <div class="carousel-item">
                            <img src="assets/informacion/DCVFN informa/Malaria.JPG" alt="Malaria" class="d-block width-carousel-info">
                            <h2 class="display-5"><i>Malaria</i></h2>
                            <p class="px-3 text-justify sangria">                              
                                La malaria es la enfermedad parasitaria más importante en el mundo, debido a su amplia distribución geográfica, morbilidad, mortalidad e impacto socio-económico que produce en los países afectados por la misma (WHO,1997), considerándose uno de los mayores problemas de salud pública en el mundo, estimándose que el total de casos clínicos pueden alcanzar entre 300 a 500 millones al año (WHO,1994) y ocasionar entre 3 a 5 millones de muertes. <br>
                                <a target="_blank" href="en_const.html" class="leer-mas text-center">Leer más...</a>
                            </p>
                        </div>
                    </div>

                <!-- Botones para cambiar imágenes (altura normal) -->
                    <button class="carousel-control-prev" data-bs-target="#carousel-info" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" data-bs-target="#carousel-info" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>
        
            <hr class="my-5">

        </section>


        <!-- Extras  -->
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
                <p class="text-white fs-5 p-1 ps-3">Fauna</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/gallery/DCVFN/Fotos entomologia/Hylesia/DSCN0017.JPG" alt="Fauna Nociva" class="w-50 border-radius-15">
                </a>
            </div>

        </aside>


            <!-- Segunda Sección -->
            <!-- Video Aegyptis -->
            <div class="container-lg  row">
                <div class="col-4 ms-5">
                    <p class="display-5">
                        <i>Aedes Aegypti</i>
                    </p>
                    <p class=" text-justify">
                        - Los mosquitos adultos hembra pican a las personas y los animales. Los mosquitos necesitan sangre para producir huevos. <br>
                        - Después de alimentarse, los mosquitos hembra buscan fuentes de agua para poner los huevos.<br>
                        - Los Aedes aegypti y Aedes albopictus no vuelan distancias largas. En toda su vida, un mosquito solo volará unas pocas cuadras de distancia.<br>
                        - Los mosquitos Aedes aegypti prefieren vivir cerca de las personas a las que pican. <br>
                        - Debido a que los Aedes albopictus pican a las personas y a los animales, pueden vivir dentro de las casas o cerca de ellas y en bosques cercanos.<br>
                        - Los mosquitos Ae. aegypti viven adentro y afuera de las casas, mientras que los mosquitos Ae. albopictus  afuera de las casas.<br>
                        <a target="_blank" href="https://www.cdc.gov/mosquitoes/es/about/life-cycles/aedes.html" class="leer-mas">Leer más...</a>
                        <br>
                    </p>
                </div>
                <div class="text-center col-7">
                    <video src="assets/videos/DCVFN/Venezuela ataca al mosquito portador de Zika, Chicungunya y Dengue.mp4" class="video-normal box-shadow" controls></video>
                </div>
            </div>

    </main>
</body>
<br>
<?php
    include("php/index_foot.php");
    include("php/subir_flecha.php");

?>
      <script src="js/bootstrap.bundle.js"></script>
      <script src="js/bottom.js"></script>
</footer>
</html>