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
    <title>Dirección General de Salud Ambiental</title>
</head>
<body class=" min-width-index">

    <!-- ******************************************************* -->
    <!-- Cabecera -->
    <header id="inicio-pag">
        <?php
        include('php/logos.php')
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



<!-- **************************************************************************************************** -->
<!-- QUIENES SOMOS  -->

    <!-- LISTA PARA ELEGIR TEMA -->
    <!-- <nav class="ms-5 me-5">
        <div class="container-fluid p-3 my-3  bg-azul-claro-cromatico5 box-shadow-nav text-center rounded">
            
            <ul class="list-group list-group-horizontal">
                <a class="list-group-item bg-azul-claro-cromatico5" href='index.php'><img src='assets/icon/botones/inicio2.png' id='' class='w-50'></a>
                <button class="list-group-item list-group-item-action bg-azul-claro-cromatico5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOrganigrama" aria-expanded="false" aria-controls="collapseExample">Organigrama</button>
                <button class="list-group-item list-group-item-action bg-azul-claro-cromatico5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResena" aria-expanded="false" aria-controls="collapseExample">Reseña Histórica</button>
                <button class="list-group-item list-group-item-action bg-azul-claro-cromatico5" type="button" data-bs-toggle="collapse" data-bs-target="#DGSA_Mis_Vis" aria-expanded="false" aria-controls="collapseExample">Misión y Visión</button>
                <button class="list-group-item list-group-item-action bg-azul-claro-cromatico5" type="button" data-bs-toggle="collapse" data-bs-target="#Objetivo" aria-expanded="false" aria-controls="collapseExample">Objetivo</button>
                <button class="list-group-item list-group-item-action bg-azul-claro-cromatico5" type="button" data-bs-toggle="collapse" data-bs-target="#DGSA_Funciones" aria-expanded="false" aria-controls="collapseExample">Funciones</button>
        
            </ul>
            
        
        </div>
    </nav> -->

    <div class="accordion mb-5" id="accordionExample">
        <nav class="navbar navbar-expand-lg navbar-light bg-barra py-4">
            <div class="container-lg text-center">
                <!-- <h4 class="me-5" >Nosotros</h4> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
                    <!-- <div> -->
                        <a href="index.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50"></a>

                        <li class="nav-item my-2">
                            <button class="btn bg-barra btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOrganigrama" aria-expanded="true" aria-controls="collapseOrganigrama">
                                <b>Organigrama</b>
                            </button>
                        </li>
                        <li class="nav-item my-2">
                            <button class="btn bg-barra btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseResena" aria-expanded="false" aria-controls="collapseResena">
                                <b>Reseña Histórica</b>
                            </button>
                        </li>
                        <li class="nav-item my-2">
                            <button class="btn bg-barra btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#DGSA_Mis_Vis" aria-expanded="false" aria-controls="DGSA_Mis_Vis">
                                <b>Misión y Visión</b>
                            </button>
                        </li>
                        <li class="nav-item my-2">
                            <button class="btn bg-barra btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Objetivo" aria-expanded="false" aria-controls="Objetivo">
                                <b>Objetivo</b>
                            </button>
                        </li>
                        <li class="nav-item my-2">
                            <button class="btn bg-barra btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#DGSA_Funciones" aria-expanded="false" aria-controls="DGSA_Funciones">
                                <b>Funciones</b>
                            </button>
                        </li>
                    <!-- </div> -->
                </ul>
                </div>
            </div>
        </nav>
        
        <hr class="my-5">
    
        <!-- ******************************************************************************* -->
        <!-- CONTENIDO -->
        <!-- Organigrama -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse show" id="collapseOrganigrama" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="row accordion-body"  aria-expanded="true">
                    <h2 id="DGSA_Organigrama" class="bold text-start mb-4"><u>Organigrama</u></h2>
                    <div class="col-4">
                        <p class=" py-3 text-justify sangria">
                            La Dirección General de Salud Ambiental, es un ente encargado de prevenir, vigilar y controlar los acontecimientos que pueden poner en riesgo la salud de cualquier comunidad del país, de igual manera se busca mantener un sistema capaz de prevenir o detectar de manera precoz cualquier problema que pueda ser ocasionado por una mala ejecución de tareas en cuanto al medio ambiente, es por esto que busca certificar el cumplimiento de las normas técnicas, por parte de las entidades privadas y públicas con todo lo relacionado a la gestión sanitario-ambiental de edificaciones, aguas, urbanismos, materiales y equipos para uso en salud pública, doméstico e industrial, agrícola; de igual forma con, sustancias, residuos y desechos, productos químicos y biológicos.
                        </p>
                    </div>
                    <div class="col-8 text-center">
                        <img src="assets/documentos/DGSA/organigrama/Estructura organizativa DGSA.png" alt="DGSA Organigrama" class="w-100 border-radius-15 box-shadow">
                    </div>
                </div>
            </div>
        </section>

        <!-- Reseña Historica -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse" id="collapseResena" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="card card-body">
                    <h2 id="DGSA_Res_Hist" class="text-start mb-4"><u>Reseña Histórica</u></h2>

                    <p class="px-3 py-3 text-justify sangria">
                        En todas las naciones y a lo largo de todos los tiempos los organismos responsables de la salud pública siempre han reconocido el papel preponderante que el ambiente sano ha desempeñado en la conservación y fomento de la salud de los ciudadanos y han ejercido, de un modo u otro, funciones de control en esa materia. En Venezuela el Estado, como garantede la salud de los ciudadanos, siempre entendió así esta obligación de controlar el saneamiento ambiental de acuerdo a criterios sanitarios y desde muy temprano estableció las leyes, reglamentos, normas y organismos ejecutores de su responsabilidad en este campo.
                    </p>

                    <p class="px-3 py-3 text-justify sangria">
                        En relación a acciones de Ingeniería Sanitaria, entendiéndola como disciplina, en la época colonial se promulgaron gran cantidad de ordenanzas basadas en las Leyes de Indias, promulgadas por Fernando VII para organizar la conquista y establecimiento de poblados, que de forma directa o indirecta hacen referencia a la salubridad de las construcciones y los ambientes. Así se reglamenta en detalle la fundación de las ciudades, desde su localización y selección del lugar, hasta el trazado de las calles, ancho de las mismas, tamaño de los solares, así como las características de las construcciones, tamaño de sus patios y servicios básicos. Igualmente se dictan disposiciones precisas y muy rígidas sobre la disposición de las basuras, los sistemas de abastecimiento de agua potable y disposición de excretas en las viviendas. Así vemos que ya en 1600 se abren en Caracas las primeras cañerías domiciliarias de agua limpia y en 1612 el Cabildo crea el cargo de Alguacil de Aguas y Acequias. En 1777 se crea el Protomedicato, con lo que se rebasa el carácter Municipalista, local, del control sanitario del ambiente y se le da una amplitud nacional.
                    </p>
                    <p class="px-3 py-3 text-justify sangria">
                        Ya dentro de la época republicana, en 1825 se crean las Juntas de Salud, verdaderas precursoras de los modernos servicios integrales de salud. Entre sus atribuciones siempre se encuentran aspectos relacionados con el cuidado y control sanitario del ambiente, de las viviendas y de las construcciones para uso público. Se puede resumir la historia de la Dirección General de Salud Ambiental, dentro de la salud pública de Venezuela, en los siguientes momentos históricos: De principios del siglo hasta 1911, el período se distingue por una dispersión de organismos y sobresale entre ellos la Dirección de Higiene y Estadística Demográfica, teniendo entre sus atribuciones las que se refieren al Control Sanitario de Inmuebles y a las Epidemias en General.
                    </p>
                    <div class="text-center">
                        <img src="assets/informacion/DGSA informa/inicio.jpg" alt="DGSA" class="images-md border-radius-15">
                    </div>
                </div>

            </div>
        </section>

        <!-- Mision - Vision -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse" id="DGSA_Mis_Vis" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="row accordion-body"  aria-expanded="true">
                    <div class="card card-body mb-5">
                        <h2 id="DGSA_Mis_Vis" class="bold  text-start mb-4"><u>Misión</u></h2>
                        <p class="py-3 text-justify sangria">
                            Ejercer el ejercicio de la función Rectora del Ministerio de Poder Popular para la Salud (MPPS); en materia Sanitario Ambiental, mediante la normalización, la supervisión, la investigación operativa, la capacitación, la asesoría y asistencia técnica, para lograr el desarrollo de planes y programas de control y prevención de enfermedades asociadas a factores físicos, químicos y biológicos presentes en el entorno humano.
                        </p>
                        
                    </div>
                    
                    <div class="card card-body">
                        <h2 id="DGSA_Vis" class="bold text-start mb-4"><u>Visión</u></h2>
                        <p class="py-3 text-justify sangria">
                            Somos una dependencia exitosa del Ministerio de Poder Popular para la Salud (MPPS); reconocida nacional e Internacionalmente en materia de Salud Ambiental, que fomenta y contribuye al logro de un estado óptimo de Salud humana, permitiendo el desarrollo económico y social del país. Con un recurso humano proactivo altamente capacitado, formado bajo los valores de constancia exactitud, interés en el trabajo, solidaridad, estimación y lealtad para los compañeros, con alto sentido de la ética y la mística de trabajo.
                        </p>
                    </div> 
                </div>
            </div>
        </section>

        <!-- Objetivo -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse" id="Objetivo" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="card card-body">
                    <h2 id="DGSA_objetivos" class="bold text-start mb-4"><u>Objetivo</u></h2>
                    <div class="">
                        <p class="py-3 text-justify sangria">
                            Contribuir con las condiciones sanitario ambientales, en los ambientes de trabajo, vivienda y recreación se mantengan a niveles compatibles con la actividad humana en todo el territorio nacional, mediante la vigilancia de los factores de riesgo que afectan o pueden afectar la salud pública.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Funciones -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse" id="DGSA_Funciones" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                <div class="">
                    <h2 id="DGSA_Funciones" class="bold text-start mb-4"><u>Funciones</u></h2>
                    <table class="table table-bordered" id="">
                        <thead class="bg-primary text-light">
                            <tr class="">
                                <th class="col-6"></th>
                                <th class="col-6"></th>
                            </tr>
                        </thead>
                        <tbody id="">
                            <tr>
                                <td class="p-3">1 º - Elaborar, actualizar y garantizar la difusión de las normas técnicas, en materia de gestión de riesgos sanitario ambiental de acuerdo a los lineamientos y bases legales que rige la competencia.</td>

                                <td class="p-3">2 º - Establecer el subsistema de vigilancia de factores de riesgos ambientales y generar información para alimentar el Sistema de Vigilancia Epidemiológica Ambiental.</td>
                            </tr>
                            <tr>
                                <td class="p-3">3 º - Apoyar técnicamente a las dependencias estadales en la ejecución de los programas, planes y proyectos en el área de gestión de riesgos ambientales.</td>

                                <td class="p-3">4 º - Realizar evaluaciones diagnósticos y perfiles sanitarios, en los ámbitos donde se desarrolla la actividad humana para constatar el cumplimiento de las normas en materia de riesgos ambientales.</td>
                            </tr>
                            <tr>
                                <td class="p-3">5 º - Diseñar los planes de capacitación  del personal profesional, técnico y comunidades,  en el área sanitario ambiental conjuntamente con la Dirección General de Investigación y Educación.</td>

                                <td class="p-3">6 º - Promover y ejecutar proyectos de investigación operativa en factores de riesgos que fortalezcan la vigilancia sanitario ambiental.</td>
                            </tr>
                            <tr>
                                <td class="p-3">7 º - Establecer los planes de atención de emergencias y desastres en materia sanitario ambiental, y coordinar su ejecución con el ente rector en materia de protección civil.</td>

                                <td class="p-3">8 º - Autorizar productos, equipos, materiales, sustancias, proyectos o cualquier otro elemento, que pueda constituir un factor de riesgo ambiental.</td>
                            </tr>
                            <tr>
                                <td class="p-3">9 º - Aprobar o autorizar: productos, equipos, materiales, sustancias, proyectos o cualquier otro elemento, que pueda constituir un factor de riesgo ambiental.</td>

                                <td class="p-3">10 º - Otorgar permisos, registros, conformidades, certificaciones y autorizaciones de aplicación Nacional en las área de gestión de riesgos sanitario ambiental.</td>
                            </tr>
                            <tr>
                                <td class="p-3">11 º - Suspender y revocar conformidades, permisos, registros, certificaciones y autorizaciones, cuando no se cumplan los requisitos en materia de riesgos ambientales.</td>

                                <td class="p-3">12 º - Establecer las normas, pautas y procedimientos sobre las determinaciones analíticas, a  utilizar en los laboratorios a nivel nacional con competencia en las áreas de la gestión de riesgos sanitario ambiental, dirigidas a la cuantificación y cualificación de contaminantes en sustancias, productos, materiales y muestras biológicas humanas, así como, ejecutar las actividades analíticas correspondientes, en materia física, química y biológica.</td>
                            </tr>
                            <tr>
                                <td class="p-3">13 º - Ejecutar las políticas, estrategias y planes nacionales en materia de gestión de riesgos sanitario ambiental y otorgar permisos y registros para el ingreso de mercancías al País, de conformidad al Arancel de Aduanas, para prevenir impactos en la salud.</td>

                                <td class="p-3">14 º - Aplicar las medidas cautelares y sancionatorias establecidas en las Leyes, normas y demás instrumentos legales vigentes aplicables en materia de riesgos ambientales.</td>
                            </tr>
                            <tr>
                                <td class="p-3">15 º - Desarrollar e implementar acciones en materia de factores ambientales con impacto en salud, en el marco de lo establecido en convenios internacionales ratificados por la República de Venezuela.</td>

                                <td class="p-3">16 º - Las demás que le atribuyen las leyes, reglamentos y resoluciones.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>
<?php
    include("php/subir_flecha.php");
?>
    <!-- JS en Bootstrap -->

    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bottom.js"></script>

</html>