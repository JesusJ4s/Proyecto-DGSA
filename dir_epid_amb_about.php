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
    <!-- Barra de navegación -->
    <div class="accordion" id="accordionExample">    

        <nav class="navbar navbar-expand-lg navbar-light bg-barra py-4">
            <div class="container-lg text-center">
                <!-- <h4 class="me-5" >Nosotros</h4> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                    <!-- <div> -->
                        <a href="dir_epid_amb.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50"></a>

                        <li class="nav-item my-2">
                            <button class="btn bg-barra btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOrganigrama" aria-expanded="true" aria-controls="collapseOrganigrama">
                                <b>Organigrama</b>
                            </button>
                        </li>
                        <li class="nav-item my-2">
                            <button class="btn bg-barra btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#DEA_Mis_Vis" aria-expanded="false" aria-controls="DEA_Mis_Vis">
                                <b>Misión y Visión</b>
                            </button>
                        </li>
                        <li class="nav-item my-2">
                            <button class="btn bg-barra btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#DEA_Objetivo" aria-expanded="false" aria-controls="DEA_Objetivo">
                                <b>Objetivo</b>
                            </button>
                        </li>
                        <li class="nav-item my-2">
                            <button class="btn bg-barra btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#DEA_Funciones" aria-expanded="false" aria-controls="DEA_Funciones">
                                <b>Funciones</b>
                            </button>
                        </li>
                    <!-- </div> -->
                    </ul>
                </div>
            </div>
        </nav> 
           
        <hr class="my-5">
        
        <!-- CONTENIDO -->
        
        <!-- Estructura Organizativa -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse show" id="collapseOrganigrama" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="row accordion-body text-center"  aria-expanded="true">
                    <h2 id="DEA_Organigrama" class="bold text-start mb-4"><u>Organigrama</u></h2>
                    <div class="col-12">
                        <img src="assets/documentos/DEA/organigrama/DEA_organigrama.jpg" alt="Estructura Organizativa" class="w-65 box-shadow border-radius-15">
                        <p class="text-justify sangria mt-5">
                            
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mision Vision -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse" id="DEA_Mis_Vis" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="row accordion-body"  aria-expanded="true">
                    <div class="card card-body mb-5">
                        <h3 id="DEA_Mis" class="bold  text-start mb-4"><u>Misión</u></h3>
                        <div class="">
                            <p class="py-3 text-justify sangria">
                                Ejercer funciones de vigilancia de las enfermedades endemo-epidémicas y de los riesgos sanitario ambientales, en concordancia con las políticas nacionales, para mejorar el estado de salud de la población.
                            </p>
                        </div>
                    </div>
                    <div class="card card-body mb-5">
                        <h3 id="DEA_Mis" class="bold  text-start mb-4"><u>Visión</u></h3>
                        <div class="">
                            <p class="py-3 text-justify sangria">
                                Establecer estrategias para la vigilancia, prevención y control de enfermedades relacionadas con el ambiente y sus determinantes a fin de que no constituyan un problema de salud pública a nivel nacional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Historia -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse" id="DEA_Objetivo" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="card card-body">
                    <div class="container-lg mb-5 p-0 w-95">
                        <h2 id="DEA_Obj" class="bold text-start mb-4"><u>Objetivo</u></h2>
                        <div>
                            <p class="py-3 text-justify sangria">
                                Establecer estrategias para la vigilancia, prevención, diagnóstico y control de enfermedades metaxénicas  y otras relacionadas con el ambiente y sus determinantes, a fin que no constituyan un problema de salud pública a nivel nacional.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Funciones -->
        <section class="container-fluid w-85 my-5">
            <div class="accordion-collapse collapse" id="DEA_Funciones" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="">
                    <h2 id="" class="bold text-start mb-4"><u>Funciones</u></h2>
                    <table class="table table-bordered" id="">
                        <thead class="bg-primary text-light">
                            <tr class="">
                                <th class="col-6"></th>
                                <th class="col-6"></th>
                            </tr>
                        </thead>
                        <tbody id="">
                            <tr>
                                <td class="p-3">1 º - Planear y evaluar a nivel nacional las actividades de vigilancia epidemiológica en el área de salud ambiental, con la finalidad de detectar los problemas de salud pública, notificarlas, analizarlas y sugerir las actividades de intervención sanitaria necesarias para controlar o minimizar el impacto de los mismos.</td>

                                <td class="p-3">2 º - Desarrollar y conducir el sistema de vigilancia epidemiológica en salud ambiental, que alimente el sistema de información en salud ambiental, recomendar y acompañar la aplicación de las debidas medidas de intervención sanitaria en el área de salud ambiental.</td>
                            </tr>
                            <tr>
                                <td class="p-3">3 º - Coordinar con las Direcciones Estadales de Salud, los procedimientos e información epidemiológica, necesarios para garantizar el funcionamiento del sistema de vigilancia epidemiológica en salud ambiental y sus consecutivas actualizaciones.</td>

                                <td class="p-3">4 º - Establecer las políticas, planes, proyectos y estrategias, que direccionen las acciones de promoción de la salud  ambiental, orientadas al mejoramiento de la calidad de vida.</td>
                            </tr>
                            <tr>
                                <td class="p-3">5 º - Evaluar previo conocimiento de la situación prevalente, las estrategias de intervención sanitaria, actividades inherentes al reglamento sanitario internacional, la producción o aparición de fenómenos de la naturaleza que suceden por si solos sin intervención directa del hombre, u otros tipos de fenómenos o condiciones ambientales, que se producen o aparecen ocasionando problemas de salud pública.  
</td>

                                <td class="p-3">6 º - Formular planes, programas y proyectos de investigación en las áreas de vigilancia, prevención y control de las enfermedades metaxénicas y otras asociadas al ambiente y sus determinantes. </td>
                            </tr>
                            <tr>
                                <td class="p-3">7 º - Establecer normas, pautas,  procedimientos y protocolos para la prevención; control integral, confirmación diagnóstica y tratamiento de las enfermedades metaxénicas y otras patologías relacionadas con el ambiente y sus determinantes.</td>

                                <td class="p-3">8 º - Asesorar sobre el procedimiento de adquisición, conservación y almacenamiento  de medicamentos, reactivos e insumos de laboratorio necesarios, para el diagnóstico y tratamiento de las enfermedades metaxénicas y otras asociadas al ambiente y sus determinantes en muestras biológicas.</td>
                            </tr>
                            <tr>
                                <td class="p-3">9 º - Desarrollar las respectivas intervenciones sanitarias e implementar políticas de seguimiento y evaluación ajustadas a las necesidades en salud a nivel nacional, acorde a las diversas situaciones de las enfermedades metaxénicas y otras del ambiente y sus determinantes, jerarquizando los problemas en atención a las necesidades de la población, considerando ciclos de vida, género, territorios sociales y enfoque de etnias.</td>

                                <td class="p-3">10 º - Desarrollar planes estratégicos para garantizar el bienestar de la población, con base en el análisis de la situación de salud, estableciendo prioridad según los problemas y riesgos ambientales.</td>
                            </tr>
                            <tr>
                                <td class="p-3">11 º - Coordinar con las Direcciones Estadales de Salud, las estrategias necesarias para garantizar la detección de situaciones especiales que permitan prevenir, diagnosticar y controlar brotes epidémicos, relacionados con las enfermedades metaxénicas y otras asociadas al ambiente.</td>

                                <td class="p-3">12 º - Las demás funciones que señalen las leyes, reglamentos, decretos, resoluciones y actos normativos en materia de su competencia; así como aquellas que le instruya o delegue el Director o Directora General de Salud Ambiental.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

    
    </div>
    <!-- JS en Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bottom.js"></script>
    <?php
        include("php/index_foot.php");
        include("php/subir_flecha.php");
        include("php/web_dinamica.php");

    ?>
</body>
</html>