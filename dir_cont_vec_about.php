<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <title>Control Vectores y Reserv. y Fauna Nociva</title>
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
            Dirección Control de vectores
        </p>
    </div>

    <!-- **************************************************************** -->
    <!-- Barra de navegación -->
   

    <nav class="ms-3 me-3">
            <div class="container-fluid p-3 my-3 bg-azul-claro-cromatico5 box-shadow-nav text-center rounded">
                
                <ul class="list-group list-group-horizontal">
                    <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DCVFN_Res_Hist">Reseña Histórica</a>
                    <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DSR_Mis_Vis">Misión y Visión</a>
                    <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DCVFN_Funciones">Funciones</a>
                    <a class="list-group-item  bg-azul-claro-cromatico5" href='dir_cont_vec.php'><img src='assets/icon/inicio2.png' id='PaginaPrin' class='w-50x50'></a>
                </ul>
            </div>
        </nav>
    

        
    <hr>
    
    <!-- TITULO PAGINA -->
    <div class="container-fluid text-center">
        <p class="display-4 bold-title">
            Dirección Control de vectores
        </p>
    </div>
    
    <!-- *********************************************************************************** -->
    <!-- LISTA PARA ELEGIR TEMA -->

    <!-- <div class="container-lg mb-2 p-0 w-95">
        <ul class="list-group list-group-horizontal">
            <a class="list-group-item list-group-item-action list-group-item-primary" href="#DCVFN_Res_Hist">Reseña Histórica</a>
            <a class="list-group-item list-group-item-action list-group-item-primary" href="#DSR_Mis_Vis">Misión y Visión</a>
            <a class="list-group-item list-group-item-action list-group-item-primary" href="#DCVFN_Funciones">Funciones</a>
            
        </ul>
    </div> -->

<!-- ******************************************************************************* -->
<!-- CONTENIDO -->

    <section>
        <div class="container-lg mb-5 p-0 w-95">
            <h2 id="DCVFN_Res_Hist" class="bold text-start mb-4"><u>Reseña Histórica</u></h2>

            <p class="px-3 py-3 text-justify sangria">
                Su origen está asociado a la Ley Defensa contra el Paludismo (Gaceta Oficial de los Estados Unidos de Venezuela, nº 19.005), en la cual ordena crear una Dirección Especial de Malariología y la Escuela para la formación de expertos malariólogos.
            </p>
            
            <p class="px-3 py-3 text-justify sangria">
                El Congreso de Venezuela sanciona la “Ley Defensa contra el Paludismo”, Gaceta Oficial de los Estados Unidos de Venezuela, nº 19.005, en el cual ordena crear una Dirección Especial de Malariología y la Escuela para la formación de expertos malariólogos (11-07-1936).
            </p>
            <p class="px-3 py-3 text-justify sangria">
                Primer ejemplar de Tijeretazos sobre Malaria formado por: el editorial, recortes de artículos de revistas, la mayoría publicados originalmente en idiomas extranjeros, así como de libros y noticias de interés para el personal de la División de Malariología (1938).
            </p>
            <p class="px-3 py-3 text-justify sangria">
                Primer curso organizado y dictado para profesionales y estudiantes de medicina, considerado como el más integral de su naturaleza dictado hasta entonces en el país (1938).
                <br>
                Continúa estudios de la Epidemiología de la Malaria y acciones de lucha contra los anofelinos a base de obras de ingeniería antimalárica, así como la distribución masiva de medicamentos antimaláricos (1939).
            </p>
            <p class="px-3 py-3 text-justify sangria">
                El primer rancho rociado con DDT, propiedad de Melecio Castillo y María Pacheco. La cuadrilla fue  comandada por Levi Borges (Jefe de Cuadrilla) y los rociadores: Francisco Solórzano, Valentín Gutiérrez, Juan García y Francisco Gutiérrez (02-12-1945).
            </p>

        </div>
    </section>
    <hr>
    <section>
        <div class="container-lg mb-5 p-0 w-95">
        <h2 id="DSR_Mis_Vis" class="bold text-center mb-4"></h2>
        <h3 class="my-4"><u>Misión</u></h3>
            <br>
            <p class="px-3 py-3 text-justify sangria">
                Fortalecer el manejo integrado de los vectores, reservorios y fauna nociva, mediante la formación y capacitación del personal profesional y técnico, metodologías de investigación, abastecimiento de plaguicidas, equipos de aplicación de insecticidas y de protección personal al servicio de las Direcciones Estadales de Salud Ambiental, desarrollando un Subsistema de Información de Vigilancia y control Entomológico y Reservorios, basado en las necesidades de los Consejos Comunales, a través de la realización de un diálogo participativo coordinados con los Comités de Salud, dirigidas a la aplicación de políticas y estrategias para las actividades de prevención, vigilancia y control de vectores, reservorios y fauna nociva y responder oportuna y acertadamente a los problemas del incremento en las densidades poblacionales de vectores de importancia en salud pública en las comunidades.
            </p>
            <h3 class="my-4"><u>Visión</u></h3>
            <br>
            <p class="px-3 py-3 text-justify sangria">
                Ser una dirección de línea capaz de crear un Manejo Integrado de Vectores, Reservorios y Fauna Nociva en base al conocimiento de la dinámica de transmisión de la enfermedad, biología de vectores, variables socio-económicas y ambientales, políticas y recursos disponibles que permita seleccionar, ejecutar y evaluar las acciones en el control de los vectores, reservorios y fauna nociva. 
            </p>
        </div>
    </section>
    <hr>
    <section>
        <div class="container-lg mb-5 p-0 w-95">
            <h2 id="DCVFN_Funciones" class="bold text-start mb-4"><u>Funciones</u></h2>
            <br>
            <ul class="list-group list-group-flush">
                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                    1. Dictar y hacer cumplir las normas, pautas y procedimientos para las actividades de vigilancia y control de vectores, reservorios y fauna nociva, responsables de la ocurrencia de problemas de salud pública.
                </li>
                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                    2.Planificar, coordinar, asesorar, supervisar y evaluar a nivel nacional, las medidas de vigilancia y control de vectores, reservorios y fauna nociva, responsables de la ocurrencia de problemas de salud pública.
                </li>
                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                   3. Consolidar la información estadística que alimentará el sub-sistema de información de Vigilancia Entomológica y Reservorios y suministrarla a  la Dirección de Epidemiología Ambiental.
                </li>
                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                   4. Promover, diseñar y ejecutar proyectos de investigación en las áreas de vigilancia y control de vectores, reservorios y fauna nociva, responsables de la  ocurrencia de enfermedades a nivel nacional, conjuntamente con la Dirección General de Investigación y Educación.
                </li>
                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                   5. Diseñar los planes de capacitación  del personal profesional y técnico y en la vigilancia y control de vectores, reservorios y fauna nociva, responsables de la ocurrencia de enfermedades, conjuntamente con la Dirección General de Investigación y Educación.
                </li>
                <li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">
                   6. Las demás que le atribuyen las leyes, reglamentos y resoluciones.
                </li>
            </ul>
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