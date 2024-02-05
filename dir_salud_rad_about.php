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

    <title>Dirección Salud Radiológica</title>
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
    <div class="accordion" id="accordionAbout">

        <div class="d-flex justify-content-center bg-barra py-4">

            <a href="dir_salud_rad.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50 mx-2"></a>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DSR_Res_Hist" aria-expanded="true" aria-controls="DSR_Res_Hist">
                <b>Reseña Histórica</b>
            </button>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DSR_Mis_Vis" aria-expanded="false" aria-controls="DSR_Mis_Vis">
                <b>Misión y Visión</b>
            </button>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DSR_Estructura" aria-expanded="false" aria-controls="DSR_Estructura">
                <b>Estructura organizativa</b>
            </button>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DSR_Funciones" aria-expanded="false" aria-controls="DSR_Funciones">
                <b>Funciones</b>
            </button>
        </div>

        <hr>
        <!-- ******************************************************************************* -->
        <!-- CONTENIDO -->
        <!-- RESEÑA HISTÓRICA -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse show" id="DSR_Res_Hist" aria-labelledby="headingTwo" data-bs-parent="#accordionAbout">
                <div class="card card-body">
                    <h2 id="" class="bold text-start mb-4"><u>Reseña Histórica</u></h2>

                    <p class="px-3 py-3 text-justify sangria">
                    La utilización de las radiaciones ionizantes en medicina ha dado paso a tres especialidades distintas: el Radiodiagnóstico, la Radioterapia y la Medicina Nuclear. El radiodiagnóstico se puso en práctica, desde que Roentgen descubrió los rayos-x en 1895. La radiografía clínica es una herramienta indispensable para el diagnóstico médico de muchas enfermedades. La Radioterapia es utilizada para el tratamiento de enfermedades malignas y se ha dividido en: la Teleterapia y la Braquiterapia. </p>

                    <p class="px-3 py-3 text-justify sangria"> En la Teleterapia se realiza el tratamiento externo de la enfermedad mediante equipos como: telecobaltos, aceleradores lineales de fotones o electrones, rayos grenz, ortovoltaje y terapia superficial. En la Braquiterapia se emplean isótopos radiactivos colocados a corta distancia del tumor o dentro del mismo, empleando aplicadores intracavitarios, interticiales o de superficie, ofreciendo la posibilidad de un alto grado de localización de la dosis a nivel de tumor, pero con el riesgo adicional de exposición a las radiaciones del personal que labora en el servicio.</p>
                </div>
            </div>
        </section> 

        <!-- MISIÓN Y VISIÓN -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse" id="DSR_Mis_Vis" aria-labelledby="headingThree" data-bs-parent="#accordionAbout">
                <div class="accordion-body"  aria-expanded="true">
                    <div class="card card-body mb-5">
            
                        <h3 id="" class="my-4"><u>Misión</u></h3>
                        <br>
                        <p class="px-3 py-3 sangria">
                            Proveer los instrumentos legales, técnicos y administrativos  para el desarrollo de los planes y programas que permitan el control del uso de radiaciones y su manejo adecuado por los usuarios del sector salud y las comunidades; que  garanticen que las dosis colectivas nacionales inherentes a su uso estén por debajo de los limites de dosis nacionales para los trabajadores y público,  y se utilicen los niveles orientativos en pacientes;  logrando disminuir los efectos biológicos que puedan afectar la salud de la población venezolana,  procurando una mejor calidad de vida.
                    
                        </p>
                    </div>
                    <div class="card card-body">
                        <h3 class="my-4"><u>Visión</u></h3>
                        <br>
                        <p class="px-3 py-3 sangria">
                            Ser una entidad del Ministerio del Poder popular para la Salud,  sólida, autónoma, calificada, eficiente y con alto nivel de preparación, que apoye en el mejoramiento de la calidad de los servicios que manejan radiaciones; que controle el manejo seguro de las fuentes de radiación y las dosis recibidas por trabajadores, pacientes y público en general.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Estructura Organizativa -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse" id="DSR_Estructura" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
                <div class="accordion-body"  aria-expanded="true">                
                    <h2 id="" class="bold text-center mb-5"><u>Estructura Organizativa</u></h2>
                    <div class="text-center">
                        <img src="assets/documentos/DSR/organigrama/Diagrama Salud Radiologica.jpg" class="w-75 border-radius-15 box-shadow">
                    </div>
                </div>
            </div>
        </section>

        <!-- FUNCIONES DE LA DSR -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse" id="DSR_Funciones" aria-labelledby="headingFive" data-bs-parent="#accordionAbout">
                <div class="card card-body">
                    <h2 id="" class="bold text-start mb-4"><u>Funciones</u></h2>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item py-4 px-3 ps-4 border-primary">
                            1. Diseñar y desarrollar políticas, normas, principios, criterios y guías relativas en materia de seguridad y protección  a las radiaciones de uso médico, odontológico y veterinario tanto en instituciones públicas como privadas.              
                        </li>
                    
                        <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        2. Establecer el sistema de vigilancia, control y supervisión en la aplicación de las normas en materia de seguridad y protección  a las radiaciones de uso médico, odontológico y veterinario tanto en instituciones públicas como privadas.                </li>
                        
                        <li class="list-group-item py-4 px-3 ps-4 border-primary">
                            3. Otorgar y revalidar conformidades sanitarias y permisos requeridos en materia de seguridad y protección  a las radiaciones de uso médico, odontológico y veterinario tanto en instituciones públicas como privadas. 

                        </li>
                        <li class="list-group-item py-4 px-3 ps-4 border-primary">
                            4. Suspender y revocar conformidades sanitarias y permisos cuando no se cumplan los requisitos en materia de seguridad y protección  a las radiaciones de uso médico, odontológico y veterinario tanto en instituciones públicas como privadas.
                        </li>
                        <li class="list-group-item py-4 px-3 ps-4 border-primary">
                        5. Realizar inspecciones y evaluaciones que permitan constatar el cumplimiento de las normas de seguridad y protección  a las radiaciones de uso médico, odontológico y veterinario tanto en instituciones públicas como privadas.
                        </li>
                        <li class="list-group-item py-4 px-3 ps-4 border-primary">
                            6. Aplicar las medidas preventivas establecidas en los documentos jurídicos respectivos a todo usuario o institución de salud, que no cumplan con los requisitos en materia de seguridad y protección  a las radiaciones de uso médico, odontológico y veterinario.
                        </li>
                        <li class="list-group-item py-4 px-3 ps-4 border-primary">
                            7. Coordinar acciones con otros organismos gubernamentales y no gubernamentales,  con competencia en materia de seguridad y protección  a las radiaciones, en áreas tales como: gestión de desecho, emergencias, contaminación ambiental, de alimentos y otras.
                        </li> 
                        <li class="list-group-item py-4 px-3 ps-4 border-primary">
                            8. Las demás que le atribuyen las leyes y reglamentos.                  
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
        include("php/index_foot.php");
        include("php/subir_flecha.php");
        include("php/web_dinamica.php");

    ?>
</footer>
</html>