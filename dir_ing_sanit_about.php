<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Dirección Ingeneria Sanitaria</title>
</head>
<body class=" min-width-index">

    

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
                Dirección Ingeneria Sanitaria
            </p>
        </div>
    
        <!-- **************************************************************** -->
        <!-- Barra de navegación -->
        <nav class="ms-4 me-4">
            <div class="container-fluid p-3 my-4  bg-azul-claro-cromatico5 box-shadow-nav text-center rounded">
                
        <ul class="list-group list-group-horizontal">
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DIS_Res_Hist">Reseña Histórica</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DIS_Mis_Vis">Misión y Visión</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DIS_Estructura">Estructura organizativa</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DIS_Funciones">Funciones</a>
            <a class="list-group-item  bg-azul-claro-cromatico5" href='dir_ing_sanit.php'><img src='assets/icon/inicio2.png' id='PaginaPrin' class='w-50x50'></a>
        </ul>
            </div>
        </nav>
       


    <hr>

<!-- ******************************************************************************* -->
<!-- CONTENIDO -->
    <!-- RESEÑA HISTÓRICA -->
    <section>
        <div class="container-lg mb-5 p-0 w-95">
            <h2 id="DIS_Res_Hist" class="text-start mb-4"><u>Reseña Histórica</u></h2>

            <p class="px-3 py-3">
                Colocar info
            </p>
            

        </div>
    </section> 
    
    <hr>
     <!-- MISIÓN Y VISIÓN -->
     <section>
        <div class="container-lg mb-5 p-0 w-95">
       
        <h3 id="DIS_Mis_Vis" class="my-4"><u>Misión</u></h3>
            <br>
            <p class="px-3 py-3 sangria">Proveer los instrumentos legales, técnicos y administrativos a los sistemas regionales de salud, para el desarrollo de los planes y programas que permitan el control de los factores de riesgos sanitario ambientales que puedan alterar la salud de la población venezolana, procurándole una mejor calidad de vida.
            </p>
        </p>
        <h3 class="my-4"><u>Visión</u></h3>
        <br>
        <p class="px-3 py-3 sangria">Ser la dependencia del Ministerio del Poder Popular para la Salud, reconocida en el ámbito nacional e internacional en materia sanitario ambiental, que contribuya al logro de la salud integral para alcanzar el desarrollo económico y social del país.
        </p>
    </div>
</section>

<hr>

<!-- Estructura Organizativa -->
<section>
<div class="container-lg mb-5 p-0 w-95 text-center">
        <h2 id="DIS_Estructura" class=" text-start mb-5"><u>Estructura Organizativa</u></h2>
        <img src="assets\documentos\DIS\organigrama/Modelos Organigramas Gestion Riesgos Sanitarios.jpg" class="images-lg">
        <p class="text-justify sangria mt-5">
        </p>
    </div>
</section>

<hr>

<!-- FUNCIONES DE LA DIS -->

<section>
    <div class="container-lg mb-5 p-0 w-95">
        <h2 id="DIS_Funciones" class="bold text-start mb-4"><u>Funciones</u></h2>

        <ul class="list-group list-group-flush">
            <li class="list-group-item py-4 px-3 ps-4 border-primary">
                1. Establecer las políticas, estrategias y planes nacionales en materia de Gestión de Riesgos Sanitario Ambientales.            </li>
            <li class="list-group-item py-4 px-3 ps-4 border-primary">
                2. Apoyar técnicamente en los programas de Gestión de Riesgos Sanitario Ambientales a las dependencias estadales con competencia en el área sanitario ambiental.            
            <li class="list-group-item py-4 px-3 ps-4 border-primary">
                3. Elaborar, actualizar y garantizar la difusión de las normas técnicas, en materia de Gestión de Riesgos Sanitario Ambientales.            </li>
            <li class="list-group-item py-4 px-3 ps-4 border-primary">
                4. Establecer los planes de atención de emergencia y desastres en materia sanitario ambiental y coordinar su ejecución con el ente rector en materia de protección civil.            </li>
            <li class="list-group-item py-4 px-3 ps-4 border-primary">
                5. Establecer el Sub- Sistema de vigilancia de factores de riesgos sanitario ambientales y generar información para alimentar el sistema de vigilancia epidemiológica ambiental.            </li>
            <li class="list-group-item py-4 px-3 ps-4 border-primary">
                6. Consolidar la información estadística del sub-sistema de Vigilancia Sanitario Ambiental y suministrarla a  la Dirección de Epidemiología Ambiental.             </li>
            <li class="list-group-item py-4 px-3 ps-4 border-primary">
                7. Promover la elaboración de proyectos de investigación operativa de factores de riesgos, en materia de salud ambiental conjuntamente con la Dirección General de Investigación y Educación.             </li> 
            <li class="list-group-item py-4 px-3 ps-4 border-primary">
                8. Aplicar las medidas cautelares y sancionatorias  establecidas en las leyes, normas y demás instrumentos legales vigentes aplicables.  </li> 
            <li class="list-group-item py-4 px-3 ps-4 border-primary">
                9. Suspender y revocar conformidades, permisos, registros, certificaciones y autorizaciones, cuando no se cumplan los requisitos en materia de sanitario ambiental.            
             <li class="list-group-item py-4 px-3 ps-4 border-primary">
                10. Apoyar técnicamente en los programas de Gestión de Riesgos Sanitario Ambientales a las dependencias estadales con competencia en el área sanitario ambiental.            
             <li class="list-group-item py-4 px-3 ps-4 border-primary">
                11. Realizar inspecciones y valuaciones que permitan constatar el cumplimiento de las normas en materia sanitario ambiental.          </li>
             <li class="list-group-item py-4 px-3 ps-4 border-primary">
                12. Las demás que le atribuyen las leyes y reglamentos.                  
                </li> 
        </ul>
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