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
    <div class="container-fluid text-center">
        <p class="display-4 bold-title">
            Dirección Epidemiología Ambiental
        </p>
    </div>
    <!-- **************************************************************** -->
    <div class="accordion mb-5" id="accordionAbout">
        
        <!-- Barra de navegación -->
        <div class="d-flex justify-content-center bg-barra py-4">

            <a href="dir_epid_amb.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50 mx-2"></a>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVigilancia" aria-expanded="true" aria-controls="collapseVigilancia">
                <b>Coordinacion Vigilancia Epideiológica</b>
            </button>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePromocion" aria-expanded="false" aria-controls="collapsePromocion">
                <b>Coordinación Promoción en Salud</b>
            </button>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMedicamentos" aria-expanded="false" aria-controls="collapseMedicamentos">
                <b>Coordinación Gestión de Medicamentos</b>
            </button>
        </div>
    
        <hr class="my-5">
        <!-- ******************************************************************************* -->
        <!-- CONTENIDO -->
        <!-- COORDINACIONES DE LA DEA -->
        <section class="container-fluid w-75 my-5">
            <div class="accordion-collapse collapse show" id="collapseVigilancia" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
            <!-- VIGILANCIA EPIDEMIOLÓGICA -->
            <div class="accordion-body mb-5 p-0 text-start" aria-expanded="true">
                <h2 id="DEA_Coordinacion_Vigilancia" class="bold text-center mb-5 mt-5"><u>Coordinación Vigilancia Epidemiológica Ambiental</u></h2>
                <h3>Objetivo</h3>
                <p class="fs-6 text-start sangria">
                    Mantener un sistema de vigilancia epidemiológica ambiental que permita la toma de decisiones oportuna para el control de enfermedades y de los factores de riesgos ambientales que ocasionan daños a la salud.
                </p>
                <hr class="my-3">
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
        </section>

        <section class="container-fluid w-75 my-5">
            <div class="accordion-collapse collapse" id="collapsePromocion" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
            <!-- PROMOCIÓN EN SALUD AMBIENTAL -->
            <div class="accordion-body mb-5 p-0 text-start" aria-expanded="true">
                <h2 id="DEA_Promocion_Salud" class="bold text-center mb-5 mt-5"><u>Coordinación en Promoción en Salud Ambiental</u></h2>
                <h3>Objetivo</h3>
                <p class="fs-6 text-start sangria">
                    Mejorar la calidad de vida de la población a través de la promoción de hábitos saludables en armonía con el ambiente.
                </p>
                <hr class="my-3">

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
        </section>

        <section class="container-fluid w-75 my-5">
            <div class="accordion-collapse collapse" id="collapseMedicamentos" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
            <!-- Coordinación Gestión de Medicamentos -->
            <div class="accordion-body mb-5 p-0 text-start">
                <h2 id="DEA_Gestion_Medicamentos" class="bold text-center mb-5"><u>Coordinación Gestión de Medicamentos</u></h2>
                <h3>Objetivo</h3>
                <p class="fs-6 text-start sangria">
                    Gestionar la adquisición, distribución, uso así como la farmacoepidemiología de los medicamentos utilizados en los programas de prevención, control y  tratamiento de las enfermedades Metaxénicas y parasitarias. 
                </p>
                <hr class="my-3">

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

    </div>
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