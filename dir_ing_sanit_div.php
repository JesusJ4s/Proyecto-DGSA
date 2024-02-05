<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include("php/estilosCss.php");
        stile1();
    ?>
    <script src="jquery/jquery-3.6.4.min.js"></script>
    <title>Dirección Ingeneria Sanitarial</title>
</head>
<body class=" min-width-index">

    

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
            Dirección Ingeneria Sanitaria
        </p>
    </div>
    
        <!-- **************************************************************** -->
    <div class="accordion" id="accordionAbout">
        <!-- Barra de navegación -->
        <div class="d-flex justify-content-center bg-barra py-4">

            <a href="dir_ing_sanit.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50 mx-2"></a>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DIS_Coordinacion_Residuos" aria-expanded="true" aria-controls="DIS_Coordinacion_Residuos">
                <b>Coordinacion Nacional Residuos Y Desechos</b>
            </button>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DIS_Coordinacion_Aguas_Aire" aria-expanded="false" aria-controls="DIS_Coordinacion_Aguas_Aire">
                <b>Coordinación Promoción en Salud</b>
            </button>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DIS_Coordinacion_Sustancias" aria-expanded="false" aria-controls="DIS_Coordinacion_Sustancias">
                <b>Coordinacion Nacional Sustancias y Materiales Peligrosos</b>
            </button>
        </div>

        <hr>
        <!-- ******************************************************************************* -->
        <!-- CONTENIDO -->

        <!-- COORDINACIONES DE LA DIS -->
        <!-- RESIDUOS Y DESECHOS -->
        <section class="container-fluid w-75 my-5">
            <div class="accordion-collapse collapse show" id="DIS_Coordinacion_Residuos" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
            <!-- RESIDUOS Y DESECHOS -->
                <div class="accordion-body mb-5 p-0 text-start" aria-expanded="true">
                    <h2 id="" class="bold text-center mb-5 mt-5"><u>Coordinacion Nacional Residuos Y Desechos</u></h2>
                    <h3>Objetivo</h3>
                    
                    <p class="fs-6 text-start sangria">
                        A fin de minimizar los factores de riesgo que afectan a la Salud Pública, esta coordinacion tiene los siguientes objetivos: 
                        Controlar y Vigilar la generación, almacenamiento, recolección, tratamiento, transporte, transferencia, la disposición final de los Residuos y Desechos  o cualquier otra operación que involucre la gestión sanitaria ambiental de éstos de acuerdo a las normas establecidas por los organismos competentes.
                    </p>
                    <hr class="my-3">  
                    <h3>Funciones</h3>
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
            </div>
        </section>
        <!-- PROMOCIÓN EN SALUD AMBIENTAL -->
        <section class="container-fluid w-75 my-5">
            <div class="accordion-collapse collapse" id="DIS_Coordinacion_Aguas_Aire" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
            <!-- RESIDUOS Y DESECHOS -->
                <div class="accordion-body mb-5 p-0 text-start" aria-expanded="true">
                    <h2 id="" class="bold text-center mb-5 mt-5"><u>Coordinacion Nacional Aguas, Aire y Edificaciones</u></h2>
                    <h3>Objetivo</h3>
                    <p class="fs-6 text-start sangria">
                        Controlar y vigilar desde el punto de vista sanitario ambiental, los sistemas de abastecimiento de agua, sistemas de tratamiento de aguas residuales y sus efluentes, las aguas recreacionales, los servicios sanitarios de los desarrollos urbanísticos, las edificaciones y el Aire, a fin de asegurar condiciones apropiadas de salud a la población asentada en estos espacios geográficos.            
                    </p>
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
            </div>
        </section>
        <!-- Coordinacion Nacional Sustancias y Materiales Peligrosos -->
        <section class="container-fluid w-75 my-5">
            <div class="accordion-collapse collapse" id="DIS_Coordinacion_Sustancias" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
                <div class="accordion-body mb-5 p-0 text-start" aria-expanded="true">
                    <h2 id="" class="bold text-center mb-5"><u>Coordinacion Nacional Sustancias y Materiales Peligrosos</u></h2>
                    <h3>Objetivo</h3>
                    <p class="fs-6 text-start sangria">
                        Promover y proteger la salud de las personas de exposiciones no deseadas a sustancias y materiales peligrosos            
                    </p>
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
        include("php/index_foot.php");
        include("php/subir_flecha.php");
        include("php/web_dinamica.php");

    ?>
</footer>
</html>