<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
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
            Dirección Salud Radiologica
        </p>
    </div>

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
    <nav class="ms-5 me-5">
            <div class="container-fluid p-3 my-4  bg-azul-claro-cromatico5 box-shadow-nav text-center rounded">
            <ul class="list-group list-group-horizontal">
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DSR_Res_Hist">Reseña Histórica</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DSR_Mis_Vis">Misión y Visión</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DSR_Estructura">Estructura organizativa</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DSR_Funciones">Funciones</a>
            <a class="list-group-item  bg-azul-claro-cromatico5" href='dir_salud_rad.php'><img src='assets/icon/inicio2.png' id='PaginaPrin' class='w-50x50'></a>
        </ul>
                
            </div>
        </nav>



<!-- *********************************************************************************** -->
<!-- LISTA PARA ELEGIR TEMA -->

    
   

    <hr>

<!-- ******************************************************************************* -->
<!-- CONTENIDO -->
    <!-- RESEÑA HISTÓRICA -->
    <section>
        <div class="container-lg mb-5 p-0 w-95">
            <h2 id="DSR_Res_Hist" class="bold text-start mb-4"><u>Reseña Histórica</u></h2>

            <p class="px-3 py-3 text-justify sangria">
            La utilización de las radiaciones ionizantes en medicina ha dado paso a tres
especialidades distintas: el Radiodiagnóstico, la Radioterapia y la Medicina Nuclear. </p>

<p class="px-3 py-3 text-justify sangria">El radiodiagnóstico se puso en práctica, desde que Roentgen descubrió los rayos-x en
1895. La radiografía clínica es una herramienta indispensable para el diagnóstico médico
de muchas enfermedades. </p> 

<p class="px-3 py-3 text-justify sangria">La Radioterapia es utilizada para el tratamiento de enfermedades malignas y se ha
dividido en: la Teleterapia y la Braquiterapia. </p>
<p class="px-3 py-3 text-justify sangria"> En la Teleterapia se realiza el tratamiento externo de la enfermedad mediante equipos
como: telecobaltos, aceleradores lineales de fotones o electrones, rayos grenz, ortovoltaje
y terapia superficial. </p>

<p class="px-3 py-3 text-justify sangria">En la Braquiterapia se emplean isótopos radiactivos colocados a corta distancia del tumor
o dentro del mismo, empleando aplicadores intracavitarios, interticiales o de superficie,
ofreciendo la posibilidad de un alto grado de localización de la dosis a nivel de tumor, pero
con el riesgo adicional de exposición a las radiaciones del personal que labora en el
servicio.</p>


        </div>
    </section> 
    
    <hr>

    <!-- MISIÓN Y VISIÓN -->
    <section>
        <div class="container-lg mb-5 p-0 w-95">
        
            <h3 id="DSR_Mis_Vis" class="my-4"><u>Misión</u></h3>
            <br>
            <p class="px-3 py-3 sangria">
                Proveer los instrumentos legales, técnicos y administrativos  para el desarrollo de los planes y programas que permitan el control del uso de radiaciones y su manejo adecuado por los usuarios del sector salud y las comunidades; que  garanticen que las dosis colectivas nacionales inherentes a su uso estén por debajo de los limites de dosis nacionales para los trabajadores y público,  y se utilicen los niveles orientativos en pacientes;  logrando disminuir los efectos biológicos que puedan afectar la salud de la población venezolana,  procurando una mejor calidad de vida.
        
            </p>
            <h3 class="my-4"><u>Visión</u></h3>
            <br>
            <p class="px-3 py-3 sangria">
                Ser una entidad del Ministerio del Poder popular para la Salud,  sólida, autónoma, calificada, eficiente y con alto nivel de preparación, que apoye en el mejoramiento de la calidad de los servicios que manejan radiaciones; que controle el manejo seguro de las fuentes de radiación y las dosis recibidas por trabajadores, pacientes y público en general.
        
            </p>
        </div>
    </section>

    <hr>

    <!-- Estructura Organizativa -->
    <section>
        <div class="container-lg mb-5 p-0 w-95 text-center">
            <h2 id="DSR_Estructura" class="bold text-center mb-5"><u>Estructura Organizativa</u></h2>
            <img src="assets/documentos/DSR/organigrama/Diagrama Salud Radiologica.jpg" class="images-md">
            
        </div>
    </section>

    <hr>

    <!-- FUNCIONES DE LA DSR -->

    <section>
        <div class="container-fluid mb-5 px-5 row ">
            <h2 id="DSR_Funciones" class="bold text-start mb-4"><u>Funciones</u></h2>

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