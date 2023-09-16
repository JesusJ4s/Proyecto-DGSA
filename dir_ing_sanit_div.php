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
        <nav class="ms-5 me-5">
            <div class="container-fluid p-3 my-4  bg-azul-claro-cromatico5 box-shadow-nav text-center rounded">
                
        <ul class="list-group list-group-horizontal">
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DEA_Coordinacion_Vigilancia">Coordinacion Nacional Residuos Y Desechos</a>

            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DEA_Promocion_Salud">Coordinacion Nacional Aguas, Aire y Edificaciones</a>

            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DEA_Gestion_Medicamentos">Coordinacion Nacional Sustancias y Materiales Peligrosos</a>
            <a class="list-group-item  bg-azul-claro-cromatico5" href='dir_ing_sanit.php'><img src='assets/icon/inicio2.png' id='PaginaPrin' class='w-50x50'></a>
        </ul>
            </div>
        </nav>
        

  <hr>
   

<!-- ******************************************************************************* -->
<!-- CONTENIDO -->

    <!-- COORDINACIONES DE LA DEA -->
    <section>

        <!-- VIGILANCIA EPIDEMIOLÓGICA -->

        <div class="container-lg mb-5 p-0 w-95 text-start">
            <h2 id="DEA_Coordinacion_Vigilancia" class="bold text-center mb-5 mt-5"><u>Coordinacion Nacional Residuos Y Desechos</u></h2>
            <h3>Objetivo</h3>
            
            <p class="fs-6 text-start sangria">
                A fin de minimizar los factores de riesgo que afectan a la Salud Pública, esta coordinacion tiene los siguientes objetivos: 
                Controlar y Vigilar la generación, almacenamiento, recolección, tratamiento, transporte, transferencia, la disposición final de los Residuos y Desechos  o cualquier otra operación que involucre la gestión sanitaria ambiental de éstos de acuerdo a las normas establecidas por los organismos competentes.
                            </p>
             
             <br>   <h3>Funciones</h3>
            <div class="container-lg mb-5 p-0 w-95 text-start">
                <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       1. Coordinar la ejecución de las políticas, estrategias y planes nacionales en materia de riesgos asociados a la gestión integral de los residuos y desechos.</li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        2. Coordinar la ejecución de las políticas, estrategias y planes nacionales en materia de riesgos asociados a la gestión integral de los residuos y desechos.</li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       3. Diseñar el componente Residuos y Desechos del plan nacional de atención a desastres y emergencias, en materia sanitaria ambiental.  </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       4. Elaborar, actualizar y velar por el cumplimiento de los instrumentos técnicos legales, en materia de Residuos y Desechos. </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       5. Supervisar los planes, programas y actividades que en materia de Residuos y Desechos, son desarrollados por las dependencias regionales con competencia en el área de gestión de riesgos sanitario ambientales.</li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       6. Coordinar con las dependencias regionales con competencia en el área de gestión de riesgos sanitario ambientales, la elaboración de proyectos de investigación operativa y el análisis de factores de riesgo asociados a la gestión integral de los residuos y desechos.lecer normas, pautas y procedimientos para la prevención, vigilancia, control integral y confirmación diagnostica de enfermedades transmitidas por vectores, reservorios y fauna nociva, así como aquellas relacionadas con riesgos sanitario ambiental a nivel nacional.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       7. Establecer las necesidades de capacitación en materia de Residuos y Desechos, para el personal adscrito a las dependencias regionales con competencia en el área de gestión de riesgo sanitario ambiental.</li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                       8. Otorgar conformidades sanitarias de aplicación nacional, relacionadas con la gestión integral de los residuos y desechos. </li>
                </ul>
            </div>
        </div>

        <hr>

        <!-- PROMOCIÓN EN SALUD AMBIENTAL -->

        <div class="container-lg mb-5 p-0 w-95 text-start">
            <h2 id="DEA_Promocion_Salud" class="bold text-center mb-5 mt-5"><u>Coordinacion Nacional Aguas, Aire y Edificaciones</u></h2>
            <h3>Objetivo</h3>
            <p class="fs-6 text-start sangria">
                Controlar y vigilar desde el punto de vista sanitario ambiental, los sistemas de abastecimiento de agua, sistemas de tratamiento de aguas residuales y sus efluentes, las aguas recreacionales, los servicios sanitarios de los desarrollos urbanísticos, las edificaciones y el Aire, a fin de asegurar condiciones apropiadas de salud a la población asentada en estos espacios geográficos.            </p>
            <h3>Funciones</h3>
            <div class="container-lg mb-5 p-0 w-95 text-start">
                <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        1.	Coordinar la ejecución de las políticas, estrategias y planes nacionales en materia de riesgos asociados a las aguas, Aire y Edificaciones.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        2.	Brindar asesoría y asistencia técnica en materia de riesgos asociados a las aguas, el Aire y las edificaciones, a dependencias estadales, comunidades, y a cualquier otro ente público o privado que lo solicite.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        3.	Establecer el componente Aguas, Aire y Edificaciones, del Plan Nacional de Atención a Emergencias y Desastres en materia Sanitario Ambiental.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        4.	Elaborar, actualizar y garantizar la difusión de las normas técnicas en materia de aguas, Aire y Edificaciones
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        5.	Establecer el componente Aguas, Aire y Edificaciones, para alimentar el subsistema de vigilancia de factores de riesgo sanitario ambientales                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        6.	Coordinar con las dependencias estadales la elaboración de proyectos de investigación operativa y análisis de factores de riesgo asociados a las aguas, el Aire y las edificaciones, conjuntamente con la Dirección General de Investigación y Educación del Ministerio. y desarrollar estrategias para la difusión audiovisual de los logros y avances en materia de promoción para la salud ambiental.

                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        7.	Otorgar permisos, registros, conformidades, certificaciones y autorizaciones de aplicación en el ámbito nacional, relacionados con el manejo de las aguas, Aire y Edificaciones.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        8.	Las demás que le atribuyan las leyes, reglamentos y resoluciones.                    </li>
                </ul>
            </div>
        </div>

        <hr>

        <!-- Coordinacion Nacional Sustancias y Materiales Peligrosos -->

        <div class="container-lg mb-5 p-0 w-95 text-start mt-5">
            <h2 id="DEA_Gestion_Medicamentos" class="bold text-center mb-5"><u>Coordinacion Nacional Sustancias y Materiales Peligrosos</u></h2>
            <h3>Objetivo</h3>
            <p class="fs-6 text-start sangria">
                Promover y proteger la salud de las personas de exposiciones no deseadas a sustancias y materiales peligrosos            </p>
            <h3>Funciones</h3>
            <div class="container-lg mb-5 p-0 w-95 text-start">
                <br>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        1. Coordinar la ejecución de las políticas, estrategias y planes nacionales en materia de riesgos sanitario ambientales asociados al manejo de sustancias y materiales peligrosos.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        2. Brindar asistencia técnica en materia de manejo de las sustancias y materiales peligrosos a, dependencias estadales, comunidades y a cualquier otro ente público o privado que lo solicite.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        3. Diseñar el componente de manejo de sustancias y materiales peligrosos del plan nacional de atención a desastres y emergencias en materia sanitario ambiental.
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        4. Elaborar, actualizar y garantizar la difusión de las normas técnicas en materia de manejo de sustancias y materiales peligrosos
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        5. Consolidar la información estadística del subcomponente de las sustancias y materiales peligrosos y suministrarla  a  la Dirección de Epidemiología Ambiental. 
                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        6. Coordinar con las dependencias estadales la elaboración de proyectos de investigación operativa y el análisis de factores de riesgos asociados al manejo de las sustancias y materiales peligrosos, conjuntamente con la Dirección General de Investigación y Educación.                    </li>
                    <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        7. Otorgar conformidades sanitarias relacionadas con el manejo de las sustancias y materiales peligrosos.                    </li>
                
                     <li  class="list-group-item py-4 px-3 ps-4 border-primary">
                            8. Las demás que le atribuyen las leyes y  reglamentos. 
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