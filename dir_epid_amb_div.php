<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Epidemiología Ambiental</title>
</head>
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
            <!-- <div class="carousel-indicators">
                <button data-bs-target="#carousel-id" data-bs-slide-to="0" class="active"></button>
                <button data-bs-target="#carousel-id" data-bs-slide-to="1"></button>
                <button data-bs-target="#carousel-id" data-bs-slide-to="2"></button>
                <button data-bs-target="#carousel-id" data-bs-slide-to="3"></button>
            </div>-->

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
            Dirección Epidemiología Ambiental
        </p>
    </div>

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <nav class="ms-5 me-5">
            <div class="container-fluid p-3 my-4  bg-azul-claro-cromatico5 box-shadow-nav text-center rounded">
            <ul class="list-group list-group-horizontal">
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DEA_Coordinacion_Vigilancia">Coordinacion Vigilancia Epideiológica</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DEA_Promocion_Salud">Coordinación Promoción en Salud<a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DEA_Gestion_Medicamentos">Coordinación Gestión de Medicamentos</a>
            <a class="list-group-item bg-azul-claro-cromatico5" href='dir_epid_amb.php'><img src='assets/icon/inicio2.png' id='PaginaPrin' class='w-50x50'></a>
        </ul>
</div>  
</nav>


    

    

<!-- ******************************************************************************* -->
<!-- CONTENIDO -->
<hr>
    <!-- COORDINACIONES DE LA DEA -->
    <section>

        <!-- VIGILANCIA EPIDEMIOLÓGICA -->

        <div class="container-lg mb-5 p-0 w-95 text-start">
            <h2 id="DEA_Coordinacion_Vigilancia" class="bold text-center mb-5 mt-5"><u>Coordinación Vigilancia Epidemiológica Ambiental</u></h2>
            <h3>Objetivo</h3>
            <p class="fs-6 text-start sangria">
                Mantener un sistema de vigilancia epidemiológica ambiental que permita la toma de decisiones oportuna para el control de enfermedades y de los factores de riesgos ambientales que ocasionan daños a la salud.
            </p>
            <h3>Funciones</h3>
            <div class="container-lg mb-5 p-0 w-95 text-start">
                <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        1. Dictar y hacer cumplir las normas, pautas y procedimientos para la prevención, vigilancia, diagnóstico y tratamiento de las enfermedades transmitidas por artrópodos, reservorios y fauna nociva.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       2. Diseñar y actualizar las normas, pautas y procedimientos para el registro, análisis y distribución de información estadística en materia de salud ambiental.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       3. Cooperar con los órganos rectores del sistema de estadística nacional en lo relativo a la producción y divulgación de información relevante en materia sanitario ambiental. 
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       4. Analizar y evaluar a nivel nacional las enfermedades relacionadas a los factores de riesgos sanitarios ambientales que ocasionan daños a la salud.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       5. Promover el desarrollo de investigaciones con la finalidad de generar el conocimiento para garantizar la salud ambiental conjuntamente con la Dirección General de Investigación y Educación.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       6. Establecer normas, pautas y procedimientos para la prevención, vigilancia, control integral y confirmación diagnostica de enfermedades transmitidas por vectores, reservorios y fauna nociva, así como aquellas relacionadas con riesgos sanitario ambiental a nivel nacional.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       7. Brindar asistencia técnica y operativa a los estados en situaciones de emergencia o que rebasen la capacidad de respuesta local. 
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       8. Las demás que le atribuyan las leyes, reglamentos y resoluciones.
                    </li>
                </ul>
            </div>
        </div>

        <hr>

        <!-- PROMOCIÓN EN SALUD AMBIENTAL -->

        <div class="container-lg mb-5 p-0 w-95 text-start">
            <h2 id="DEA_Promocion_Salud" class="bold text-center mb-5 mt-5"><u>Coordinación en Promoción en Salud Ambiental</u></h2>
            <h3>Objetivo</h3>
            <p class="fs-6 text-start sangria">
                Mejorar la calidad de vida de la población a través de la promoción de hábitos saludables en armonía con el ambiente.
            </p>
            <h3>Funciones</h3>
            <div class="container-lg mb-5 p-0 w-95 text-start">
                <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        1. Establecer las normas, pautas y procedimientos que en materia de  promoción para la salud ambiental determinen los lineamientos y planes de acción a seguir por las Direcciones Estadales de Salud. 

                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       2. Planificar, coordinar, asesorar, supervisar y evaluar a nivel nacional la ejecución de proyectos preventivos en salud ambiental, con enfoque intercultural, basados en la  realidad sanitaria y social de cada estado.

                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       3. Brindar asesoría en materia de promoción para la salud ambiental a entes  públicos, privados y comunidades. 

                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       4. Planificar, coordinar, asesorar y promover con entes públicos, privados y comunidades organizadas el diseño y evaluación de actividades de control y prevención de amenazas a la salud originadas por factores sanitario ambiental.

                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       5. Coordinar y revisar el contenido de los instrumentos educativos e informativos en materia de educación para la salud ambiental, así como el contenido del nuevo diseño curricular del sistema educativo venezolano.

                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       6. Coordinar y desarrollar estrategias para la difusión audiovisual de los logros y avances en materia de promoción para la salud ambiental.

                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       7. Las demás que le atribuyan las leyes, reglamentos y resoluciones.

                    </li>
                </ul>
            </div>
        </div>

        <hr>

        <!-- Coordinación Gestión de Medicamentos -->

        <div class="container-lg mb-5 p-0 w-95 text-start  mt-5">
            <h2 id="DEA_Gestion_Medicamentos" class="bold text-center mb-5"><u>Coordinación Gestión de Medicamentos</u></h2>
            <h3>Objetivo</h3>
            <p class="fs-6 text-start sangria">
                Gestionar la adquisición, distribución, uso así como la farmacoepidemiología de los medicamentos utilizados en los programas de prevención, control y  tratamiento de las enfermedades Metaxénicas y parasitarias. 
            </p>
            <h3>Funciones</h3>
            <div class="container-lg mb-5 p-0 w-95 text-start">
                <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        1. Planificar y gestionar la adquisición de los medicamentos requeridos por las Direcciones Estadales de Salud Ambiental, para la prevención, control y  tratamiento de las enfermedades metaxénicas y parasitarias, así como enfermedades  degenerativas del colágeno e infecciones oportunistas.

                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        2. Consolidar la información sobre los requerimientos y uso adecuado de los medicamentos por las Direcciones Estadales de Salud Ambiental, determinados por los programas nacionales de prevención y control: malaria, chagas, parasitosis intestinales, esquistosomiosis, toxoplasmosis, leishmaniosis y otras enfermedades como colagenosis e infecciones oportunistas.

                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        3. Coordinar y gestionar la distribución adecuada y oportuna de los medicamentos a las Direcciones Estadales de Salud Ambiental. 

                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        4. Estructurar, coordinar la farmacovigilancia, y monitorear la determinación temprana de la farmacoresistencia y principio activo de los medicamentos utilizados en los programas de prevención, control y  tratamiento de las enfermedades Metaxénicas y parasitarias.

                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        5. Asesorar y supervisar a las Direcciones Estadales de Salud Ambiental en cuanto al: almacenamiento seguro, distribución y utilización de los medicamentos suministrados para el tratamiento de las enfermedades metaxénicas y parasitarias. 

                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        6. Desarrollar un sistema de información para la gestión de los medicamentos empleados en los programas de prevención, control y tratamiento de las enfermedades metaxénicas y parasitarias.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        7. Las demás funciones que señalen las leyes, reglamentos, decretos, resoluciones y actos normativos en materia de su competencia; así como aquellas que le instruya o delegue el Director o Directora de Epidemiologia Ambiental. 
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