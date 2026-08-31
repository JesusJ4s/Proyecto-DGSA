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

    <title>Dirección General de Salud Ambiental</title>

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
    <!-- Barra de navegación -->

    <?php
    include("php/index_nav.php");
    echo index_nav();
    ?>


    <!-- **************************************************************************************************************** -->
    <!-- Comienza lo bueno -->
    <main id="gg" class="container-fluid row px-0 mx-0">

        <!-- Primera sección -->
        <section class=" col-8">
            <!-- **************************************** -->
            <!-- Carrusel -->
            <div class="container-lg mb-2 p-0" id="carrousel-info-index">
                <h1>HistoriaA</h1>

                <div id="carousel-info" class="carousel slide mt-3" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                            aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                            aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"
                            aria-label="Slide 6"></button>
                    </div>

                    <!-- Contenedor de las imágenes en carrousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/informacion/DGSA informa/historia1.jpg" alt="DGSA"
                                class="d-block width-carousel-info border-radius-15">
                        </div>
                        <div class="carousel-item ">
                            <img src="assets/informacion/DGSA informa/estrella.jpg" alt="DGSA"
                                class="d-block width-carousel-info border-radius-15">
                        </div>
                        <div class="carousel-item ">
                            <img src="assets/informacion/DGSA informa/inicio2.jpg" alt="DGSA"
                                class="d-block width-carousel-info border-radius-15">
                        </div>
                        <div class="carousel-item ">
                            <img src="assets/informacion/DGSA informa/inicio6.jpeg" alt="DGSA"
                                class="d-block width-carousel-info border-radius-15">
                        </div>
                        <div class="carousel-item ">
                            <img src="assets/informacion/DGSA informa/inicio4.jpeg" alt="DGSA"
                                class="d-block width-carousel-info border-radius-15">
                        </div>
                        <div class="carousel-item ">
                            <img src="assets/informacion/DGSA informa/inicio.jpg" alt="DGSA"
                                class="d-block width-carousel-info border-radius-15">
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
                <p class="p-3 text-justify ">
                    Según la Organización Mundial de la Salud (O.M.S), Salud Ambiental es "la disciplina que comprende
                    aquellos aspectos de la salud humana, incluñida la calidad de vida y el bienestar social, que son
                    determinados por factores ambientales físicos, químicos, biológicos, sociales y psico-sociales.
                    También se refiere a la teoría y prñactica de evaluar, corregir, controlar y prevenir aquellos
                    factores en el medio ambiente que pueden potencialmente afectar adversamente la salud de presentes y
                    futuras generaciones".
                    <br>
                    <br>
                    Parte de la salud pública que se ocupa de las formas de vida, las sustancias, las fuerzas y
                    condiciones del entorno del hombre, que pueden ejercer una influencia sobre su salud y bienestar
                    (OMS,1992).
                    <br>
                    <br>
                    Por salud ambiental también se entiende el concepto general que incorpora aquellos planteamientos o
                    actividades relacionados con los problemas de salud asociados con el ambiente, teniendo en cuenta
                    que el ambiente humano abarca un complejo contexto de factores y elementos de variada naturaleza que
                    actúan favorable o desfavorablemente sobre el individuo.

                </p>
            </div>
        </section>


        <!-- ****************************************************************************************** -->
        <!-- Extras -->
        <aside class="col-3 mb-3">
            <!-- YA TENGO EL CÓDIGO PHP... FALTA IMPLEMENTAR -->
            <section>
                <div class="mt-5">
                    <p class="fs-4 text-center text-secondary">
                        <?php
                        require_once("php/date_time.php");
                        echo fecha_larga();
                        ?>
                    </p>
                </div>
                <div>
                    <div class="mt-5">
                        <h1 id="horaActual" class="text-center"></h1>
                    </div>
                </div>
            </section>
            <!-- INTRANET -->
            <div class="bg-medio-cromatico4 mt-5 border-radius-15">
                <!-- <p class="text-white fs-5 p-1 ps-3"></p> -->
                <a target="_blank" href="intranet/intranet.php"
                    class="enlaces_limpios2 fs-4 p-1 ps-3 text-light">Intranet</a>
            </div>
            <div class="text-center">
                <a target="_blank" href="intranet/intranet.php" class="">
                    <img src="assets/logos/DGSA/intranet.jpg" alt="Intranet" class="mt-4 w-65 border-radius-15 p-4"
                        id="caja-intranet">
                </a>
            </div>
            <!-- Redes Sociales -->
            <!-- estilos en style_web -->
            <div class="bg-medio-cromatico4 mt-5 border-radius-15">
                <p class="text-white fs-5 p-1 ps-3">Redes Sociales</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="" id="contenedor-redes">
                        <a class="" href="https://twitter.com/Dgsa2023" target="_blank"><img
                                src="assets/icon/Redes/gorjeo.png" class="mini_iconos_redes m-1"></a>
                        <a href="https://twitter.com/Dgsa2023" target="_blank" class="enlaces_limpios2 text-dark"
                            id="letras_redes">@Dgsa2023</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="" id="contenedor-redes">
                        <a class="" href="https://www.tiktok.com/@dgsa_salud.ambiental" target="_blank"><img
                                src="assets/icon/Redes/tik-tok.png" class="mini_iconos_redes m-1"></a>
                        <a href="https://www.tiktok.com/@dgsa_salud.ambiental" target="_blank"
                            class="enlaces_limpios2 text-dark" id="letras_redes">@Dgsa_salud.ambiental</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="" id="contenedor-redes">
                        <a class="" href="https://www.instagram.com/maracaysaludambiental/?hl=es" target="_blank"><img
                                src="assets/icon/Redes/instagram.png" class="mini_iconos_redes m-1"></a>
                        <a href="https://www.instagram.com/maracaysaludambiental/?hl=es" target="_blank"
                            class="enlaces_limpios2 text-dark" id="letras_redes">@Maracaysaludambiental</a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="" id="contenedor-redes">
                        <a class="" href="https://www.youtube.com/@direcciongeneralsaludambie7558" target="_blank"><img
                                src="assets/icon/Redes/youtube.png" class="mini_iconos_redes m-1"></a>
                        <a href="https://www.youtube.com/@direcciongeneralsaludambie7558" target="_blank"
                            class="enlaces_limpios2 text-dark" id="letras_redes"> @Direcciongeneralsaludambie7558</a>
                    </div>
                </div>

            </div>




        </aside>

         <!-- Primera sección -->
         <section class="col-8">
            <!-- **************************************** -->
            <!-- Carrusel -->
            <div class="container-lg mb-2 p-0" id="carrousel-info-index">
                <div id="carousel-BoletinDGSA" class="carousel slide mt-3" data-bs-ride="carousel">
                    <!-- Contenedor de las imágenes en carrousel -->
                    <h2 class="display-5">Boletín</h2>

                    <div class="carousel-inner" id="boletines_principales">

                    <!-- BOLETINES DINAMICOS -->


                    </div>

                    <!-- Botones para cambiar imágenes (altura normal) -->
                    <button class="carousel-control-prev" data-bs-target="#carousel-BoletinDGSA" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" data-bs-target="#carousel-BoletinDGSA" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
                
            </div>
        </section>


        <!-- ****************************************************************************************** -->
        <!-- Extras -->
        <aside class="col-3 mb-3">
            <?php

                include("php/abrir_conexion.php");
                $Boletines = mysqli_query($conexion, "SELECT * FROM $tabla_db17 WHERE id_boletin_direccion = 1 AND boletin_visible = 1 ORDER BY RAND() LIMIT 6");
                while ($consulta = mysqli_fetch_array($Boletines)) {
                    // Imprimir el contenido de cada registro
                    $boletinesBD = '

                    <div class="bg-azul-claro-cromatico2 mt-5 border-radius-15 text-center barra_Aside">
                        <p class="text-white fs-5 p-1 ps-3">'.$consulta['titulo_boletin'].'</p>
                    </div>
                    <div class="text-center">
                            <img src="'.$consulta['img1_boletin'].'" alt="" class="informacion_Aside w-50 border-radius-15">
                            <p class="mb-0">'.$consulta['fecha_creacion_bol'].'</p>
                    </div>
                    <div class="text-center">
                        <input type="hidden" id="consulta" name="consulta" value="'.$consulta['id_boletin'].'">
                        <button type="button" class="btn btn-outline-secondary" onclick="verBoletinDGSA(this);">Leer</button>
                    </div>
                        
                    ';
                    echo $boletinesBD;
                }
            ?>
        </aside>

    </main>




</body>

<footer id="dk-footer" class="dk-footer">

    <?php
        include("php/index_foot.php");
        include("php/subir_flecha.php");
        include("php/web_dinamica.php");

    ?>


<!-- JS en Bootstrap -->
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bottom.js"></script>
<script>
        $(document).ready(function(){
            boletinesDGSA();
        })
      </script>

<script>
  function actualizarHora() {
    var horaElement = document.getElementById('horaActual');

    // Obtener la hora actualizada desde PHP
    fetch('php/date_time_interval.php')
      .then(response => response.text())
      .then(data => {
        // Actualizar el contenido en el elemento HTML
        horaElement.innerHTML = data;
      })
      .catch(error => {
        console.error('Error al obtener la hora actual:', error);
      });
  }

  // Actualizar la hora cada segundo
  setInterval(actualizarHora, 1000);
</script>
</footer>
</html>