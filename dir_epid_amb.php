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
    <title>Epidemiología Ambiental</title>
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


    <!-- **************************************************************** -->
    <!-- TITULO PAGINA -->
    <!-- <div class="container-fluid text-center">
        <p class="display-4 bold-title">
            Dirección Epidemiología Ambiental
        </p>
    </div> -->

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <?php
        include("php/index_nav.php");
        echo dir_epid_amb_nav();

    ?>

    <!-- **************************************************************************************************************** -->
    <!-- Comienza lo bueno -->
    <main class="container-fluid row m-0 p-0">

        <!-- Primera sección -->
        <section class="col-8">
            <!-- **************************************** -->
            <!-- Carrusel -->
            <div class="container-lg mb-2 p-0" id="carrousel-info-index">

                <div id="carousel-info" class="carousel slide mt-3" data-bs-ride="carousel">

                    <!-- Contenedor de las imágenes en carrousel -->

                    <h2 class="display-5">Boletín</h2>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/informacion/DAE informa/Programa_Chagas.jpg" alt="Chagas" class="d-block width-carousel-info border-radius-15">
                            <p class="display-5">
                                Programa <i>Chagas</i>
                            </p>
                            <p class="px-3 text-justify sangria">
                                Disminuir los factores de riesgo asociados a la Enfermedad de  Chagas, a través de la ejecución de actividades de vigilancia epidemiológica, entomológica y de promoción de la salud a nivel nacional...<br>
                                <a target="_blank" href="en_const.html" class="leer-mas">Leer más...</a>
                            </p>
                        </div>

                        <div class="carousel-item">
                            <img src="assets/informacion/DAE informa/Programa_Esquistosomosis.jpg" alt="Esquistosomosis" class="d-block width-carousel-info border-radius-15">
                            <p class="display-5">
                                Programa <i>Esquistosomosis</i>
                            </p>
                            <p class="px-3 text-justify sangria">
                                Establecer estrategias para la prevención, vigilancia epidemiológica, control y farma-coterapia de los principales helmintos, protozoos intestinales y esquistosomosis... <br>
                                <a target="_blank" href="en_const.html" class="leer-mas text-center">Leer más...</a>
                            </p>
                        </div>

                        <div class="carousel-item">
                            <img src="assets/informacion/DAE informa/Programa_Malaria.jpg" alt="Malaria" class="d-block width-carousel-info border-radius-15">
                            <p class="display-5">
                                Programa <i>Malaria</i>
                            </p>
                            <p class="p-3 text-justify sangria">
                                Establecer estrategias integrales para la prevención, vigilancia epidemiológica, y terapéutica de la malaria, para disminuir la morbilidad y mortalidad en la población venezolana a fin de que no constituya un problema de salud pública.
                                 <br>
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
        </section>


        <!-- ****************************************************************************************** -->
        <!-- Extras -->
        <aside class="col-3 mb-3">
            <div class="bg-azul-claro-cromatico2 mt-5 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Programa Malaria</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/gallery/DEA/Fotos actividades Programa de Chagas/Fotos Varias/100_3050.JPG" alt="Programa Malaria" class="w-50 border-radius-15">
                </a>
            </div>
            <div class="bg-azul-claro-cromatico2 mt-5 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Programa Chagas</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/gallery/DEA/Fotos actividades Programa de Chagas/Capacitación Personal Camatagua, Edo. Aragua/100_1514.JPG" alt="Programa Chagas" class="w-50 border-radius-15">
                </a>
            </div>
            <div class="bg-azul-claro-cromatico2 mt-5 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Programa Esquistosomosis</p>
            </div>
            <div class="text-center">
                <a target="_blank" href="en_const.html" class="">
                    <img src="assets/gallery/DEA/Fotos actividades Programa de Chagas/Evaluación Brote Mérida 2012/100_0403.JPG" alt="Programa Esquistosomosis" class="w-50 border-radius-15">
                </a>
            </div>
            
            <!-- AQUÍ DEBO USAR PHP-->
            <!-- <div class="text-center mt-4">
                <form action="">
                    <input id="Buscar" class="btn btn-outline-primary " type="text" placeholder="Buscar..." required>
                    <br>
                    <input class="btn bg-azul-claro-cromatico5 mt-2" type="submit" placeholder="Buscar">
                </form>
            </div> -->
        </aside>

</body>

<footer id="dk-footer" class="dk-footer">
<?php
    include("php/index_foot.php");
    include("php/subir_flecha.php");
?>
      <script src="js/bootstrap.bundle.js"></script>
      <script src="js/bottom.js"></script>
</footer>
</html>