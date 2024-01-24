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

    <title>Dirección Epidemiología Ambiental</title>
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
            Dirección Salud Radiologica
        </p>
    </div>

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->  
    <div class="accordion mb-5" id="accordionAbout">
        
        <!-- Barra de navegación -->
        <div class="d-flex justify-content-center bg-barra py-4">

            <a href="dir_salud_rad.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50 mx-2"></a>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DSR_Vigilancia_Radiologica" aria-expanded="true" aria-controls="DSR_Vigilancia_Radiologica">
                <b>Coordinación Vigilancia Salud Radiologica</b>
            </button>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DSR_Regulacion_Radiaciones" aria-expanded="false" aria-controls="DSR_Regulacion_Radiaciones">
                <b>Coordinación Nacional de Regulación y Control de las Radiaciones</b>
            </button>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DSR_Vigilancia_Radiaciones" aria-expanded="false" aria-controls="DSR_Vigilancia_Radiaciones">
                <b>Coordinación Nacional de Vigilancia de las Radiaciones</b>
            </button>
        </div>

        <hr class="my-5">
        <!-- ******************************************************************************* -->
        <!-- CONTENIDO -->
        <!-- COORDINACIONES -->
        <section class="container-fluid w-75 my-5">
            <div class="accordion-collapse collapse show" id="DSR_Vigilancia_Radiologica" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
            <!-- VIGILANCIA EPIDEMIOLÓGICA -->
                <div class="accordion-body mb-5 p-0 text-start" aria-expanded="true">
                    <h2 class="bold text-center mb-5 mt-5"><u>Coordinación Vigilancia Salud Radiologica</u></h2>
                    <h3>Objetivo</h3>
                    <p class="fs-6 text-justify sangria">
                        Controlar y vigilar los riesgos inherentes al manejo de sustancias o equipos que emiten o son capaces de emitir radiaciones, utilizadas en las prácticas médicas, odontológicas y veterinaria. Así como prestar asesorías y asistencias técnicas en el manejo seguro de las fuentes de radiación al sistema público nacional de salud y a las comunidades.
                    </p>
                    <hr class="my-3">

                    <h3>Funciones</h3>
                    <div class="container-lg mb-5 p-0 w-95 text-start">
                        <br>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                            1. Diseñar y desarrollar políticas, normas, principios, criterios y guías relativas en materia de seguridad y protección  a las radiaciones de uso médico, odontológico y veterinario tanto en instituciones públicas como privadas.              
                            </li>
                        
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                            2. Establecer el sistema de vigilancia, control y supervisión en la aplicación de las normas en materia de seguridad y protección  a las radiaciones de uso médico, odontológico y veterinario tanto en instituciones públicas como privadas.                </li>
                            
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                            3. Otorgar y revalidar conformidades sanitarias y permisos requeridos en materia de seguridad y protección  a las radiaciones de uso médico, odontológico y veterinario tanto en instituciones públicas como privadas. 

                            </li>
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                            4. Suspender y revocar conformidades sanitarias y permisos cuando no se cumplan los requisitos en materia de seguridad y protección  a las radiaciones de uso médico, odontológico y veterinario tanto en instituciones públicas como privadas.
                            </li>
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                            5. Realizar inspecciones y evaluaciones que permitan constatar el cumplimiento de las normas de seguridad y protección  a las radiaciones de uso médico, odontológico y veterinario tanto en instituciones públicas como privadas.
                            </li>
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                            6. Aplicar las medidas preventivas establecidas en los documentos jurídicos respectivos a todo usuario o institución de salud, que no cumplan con los requisitos en materia de seguridad y protección  a las radiaciones de uso médico, odontológico y veterinario.
                            </li>
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                            7.Coordinar acciones con otros organismos gubernamentales y no gubernamentales,  con competencia en materia de seguridad y protección  a las radiaciones, en áreas tales como: gestión de desecho, emergencias, contaminación ambiental, de alimentos y otras.
                            </li> 
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                            8. Las demás que le atribuyen las leyes y reglamentos.                  
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- COORDINACIÓN NACIONAL DE REGULACIÓN Y CONTROL DE LAS RADIACIONES -->
        <section class="container-fluid w-75 my-5">
            <div class="accordion-collapse collapse" id="DSR_Regulacion_Radiaciones" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
            <!-- PROMOCIÓN EN SALUD AMBIENTAL -->
                <div class="accordion-body mb-5 p-0 text-start" aria-expanded="true">
                    <div class="container-lg mb-5 p-0 w-95 text-start">
                        <h2 id="" class="bold text-center mb-5 mt-5"><u>Coordinación Nacional de Regulación y Control de las Radiaciones</u></h2>
                        <h3>Objetivo</h3>
                        <p class="fs-6 text-justify sangria">
                            Gestionar la vigilancia y control  de los riesgos inherentes al manejo en Centros de Salud de sustancias y equipos que emiten radiaciones de uso médico, odontológico y veterinario.        
                        </p>
                        <hr class="my-3">

                        <h3>Funciones</h3>
                        <div class="container-lg mb-5 p-0 w-95">
                            <br>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                1. Otorgar a los entes públicos y privados conformidades sanitarias para la importación de fuentes y equipos generadores de radiaciones  en prácticas médicas, odontológicas y veterinarios tales como: Radiodiagnóstico, Radioterapia y Medicina Nuclear y cualquier otra que requiera el uso de radiación.
                                </li>
                                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                2. Certificar la calidad de diseño, fabricación y funcionamiento de fuentes y equipos generadores de radiaciones ionizantes.                </li>
                                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">

                                3. Otorgar a entes públicos y privados las conformidades sanitarias de los ambientes radiológicos de los Centros de Salud que manejen fuentes y equipos que emiten radiaciones a Nivel Nacional.
                                </li>
                                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                4. Otorgar a entes públicos y privados permisos para el funcionamiento de prácticas de Radiodiagnóstico, Radioterapia, Medicina Nuclear y cualquier otra que involucre el uso de fuentes o equipos generadores de radiaciones.                
                                </li>
                                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                5.  Elaborar y revisar normas técnicas sobre protección radiológica, para el uso de equipos, certificación y prestación del servicio. 
                                </li>
                                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                6.  Brindar Asistencia técnica a las Direcciones Estadales, en las evaluaciones  de los ambientes donde se realizan las prácticas médicas, odontológicas y veterinarias con radiaciones.                
                                </li>
                                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                7.  Asesorar a entes públicos y privados en protección radiológica, para el uso de fuentes y equipos generadores de radiaciones de uso médico, odontológico y veterinario.               
                                </li>
                                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                8. Diseñar y mantener el sistema de información nacional de las prácticas médicas, odontológicas y veterinarias con radiaciones.   
                                </li>
                                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                9. Las demás que le atribuyen las leyes y reglamentos.       
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- *********************************************************************************************************************************** -->
        <!-- COORDINACIÓN NACIONAL DE VIGILANCIA DE LAS RADIACIONES -->
        <section class="container-fluid w-75 my-5">
            <div class="accordion-collapse collapse" id="DSR_Vigilancia_Radiaciones" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
            <!-- PROMOCIÓN EN SALUD AMBIENTAL -->
                <div class="accordion-body mb-5 p-0 text-start" aria-expanded="true">
                    <h2 id="" class="bold text-center mb-5"><u>Coordinación Nacional de Vigilancia de las Radiaciones</u></h2>
                    <h3>Objetivo</h3>
                    <p class="fs-6 text-justify sangria">
                        Prestar auditorias, asesorías  y prestación de servicio directo a las áreas del sistema público nacional de salud que maneja fuentes de radiaciones de uso medico, odontológico y veterinario.
                    </p>
                    <hr class="my-3">

                    <h3>Funciones</h3>
                    <div class="container-lg mb-5 p-0 w-95">
                    <br>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                1. Garantizar el servicio de Dosimetría Personal a los trabajadores del  Sistema Público Nacional de Salud.
                            </li>
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                            2. Evaluar y supervisar los controles de calidad de equipos y fuentes de hospitales, ambulatorios y otros centros de salud públicos.                    
                            </li>
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                3. Elaborar y revisar normas técnicas sobre protección radiológica e higiene de las radiaciones.                    
                            </li>
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                4. Asesorar a entes públicos y privados en aspectos dosimétricos: pruebas de aceptación, calibraciones, controles de calidad, dosimetría clínica, ocupacional y ambiental.                    
                            </li>
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                5. Diseñar y mantener la Actualización del sistema de información  de la Dosimetría Personal del Sistema Público Nacional de Salud.
                            </li>
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                6. Diseñar los planes de capacitación para los funcionarios de Salud Radiológica a nivel regional conjuntamente con la Dirección General de Investigación y Educación.
                            </li>
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                7. Promover y coordinar proyectos de investigación en materia de Salud Radiológica conjuntamente con la Dirección General de Investigación y Educación.
                            </li>
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                8. Crear e implantar sistemas de evaluación para la dosimetría clínica nacional.
                            </li>
                            <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                                9. Las demás que le atribuyen las leyes y reglamentos.                    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>



        
         <a href="#inicio-pag"><img src="assets/icon/botones/bottom.png" id="bottomArriba"> </a>
</footer>
        <!-- JS en Bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bottom.js"></script>
</body>
<footer>
    <?php 
       
    ?>
</footer>
</html>
