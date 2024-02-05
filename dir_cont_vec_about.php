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
            Dirección Control de vectores
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
                        <a href="dir_cont_vec.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50"></a>

                        <li class="nav-item my-2">
                            <button class="btn bg-barra btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#DCVFN_Res_Hist" aria-expanded="true" aria-controls="DCVFN_Res_Hist">
                                <b>Reseña Histórica</b>
                            </button>
                        </li>
                        <li class="nav-item my-2">
                            <button class="btn bg-barra btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#DSR_Mis_Vis" aria-expanded="false" aria-controls="DSR_Mis_Vis">
                                <b>Misión y Visión</b>
                            </button>
                        </li>
                        <li class="nav-item my-2">
                            <button class="btn bg-barra btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#DCVFN_Funciones" aria-expanded="false" aria-controls="DCVFN_Funciones">
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

        <section class="container-fluid w-75 my-5">
            <div class="accordion-collapse collapse show" id="DCVFN_Res_Hist" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body mb-5 p-0 " aria-expanded="true">
                    <h2 id="" class="bold text-start mb-4"><u>Reseña Histórica</u></h2>

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

        <section class="container-fluid w-75 my-5">
            <div class="accordion-collapse collapse" id="DSR_Mis_Vis" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body mb-5 p-0" aria-expanded="true">
            <h2 id="" class="bold text-center mb-4"></h2>
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

        <section class="container-fluid w-75 my-5">
            <div class="accordion-collapse collapse" id="DCVFN_Funciones" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body mb-5 p-0" aria-expanded="true">
                <h2 id="" class="bold text-start mb-4"><u>Funciones</u></h2>
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