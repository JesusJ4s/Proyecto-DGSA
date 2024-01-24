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

    <title>Dirección Ingeneria Sanitaria</title>
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
        <!-- Barra de navegación -->
        <!-- <nav class="ms-4 me-4">
            <div class="container-fluid p-3 my-4  bg-azul-claro-cromatico5 box-shadow-nav text-center rounded">
                
        <ul class="list-group list-group-horizontal">
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DIS_Res_Hist">Reseña Histórica</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DIS_Mis_Vis">Misión y Visión</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DIS_Estructura">Estructura organizativa</a>
            <a class="list-group-item list-group-item-action bg-azul-claro-cromatico5" href="#DIS_Funciones">Funciones</a>
            <a class="list-group-item  bg-azul-claro-cromatico5" href='dir_ing_sanit.php'><img src='assets/icon/inicio2.png' id='PaginaPrin' class='w-50x50'></a>
        </ul>
            </div>
        </nav> -->
       

    <div class="accordion mb-5" id="accordionAbout">

        <div class="d-flex justify-content-center bg-barra py-4">

            <a href="dir_ing_sanit.php"><img src="assets/icon/botones/flecha-hacia-atras-mora.png" class="w-50x50 mx-2"></a>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DIS_Res_Hist" aria-expanded="true" aria-controls="DIS_Res_Hist">
                <b>Reseña Histórica</b>
            </button>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DIS_Mis_Vis" aria-expanded="false" aria-controls="DIS_Mis_Vis">
                <b>Misión y Visión</b>
            </button>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DIS_Estructura" aria-expanded="false" aria-controls="DIS_Estructura">
                <b>Estructura organizativa</b>
            </button>

            <button class="btn bg-barra btn-outline-primary mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#DIS_Funciones" aria-expanded="false" aria-controls="DIS_Funciones">
                <b>Funciones</b>
            </button>
        </div>

        <hr>

        <!-- ******************************************************************************* -->
        <!-- CONTENIDO -->
        <!-- RESEÑA HISTÓRICA -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse show" id="DIS_Res_Hist" aria-labelledby="headingTwo" data-bs-parent="#accordionAbout">
                <div class="card card-body">
                    <h2 id="" class="text-start mb-4"><u>Reseña Histórica</u></h2>

                    <p class="px-3 py-3">
                        Colocar info
                    </p>
            </div>
        </section> 

        <!-- MISIÓN Y VISIÓN -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse" id="DIS_Mis_Vis" aria-labelledby="headingThree" data-bs-parent="#accordionAbout">
                <div class="accordion-body"  aria-expanded="true">
                    <div class="card card-body mb-5">
                        <h2 id="" class="my-4"><u>Misión</u></h2>
                        <p class="px-3 py-3 sangria">Proveer los instrumentos legales, técnicos y administrativos a los sistemas regionales de salud, para el desarrollo de los planes y programas que permitan el control de los factores de riesgos sanitario ambientales que puedan alterar la salud de la población venezolana, procurándole una mejor calidad de vida.</p>
                    </div>
                    <div class="card card-body">
                        <h3 class="my-4"><u>Visión</u></h3>
                        <p class="px-3 py-3 sangria">Ser la dependencia del Ministerio del Poder Popular para la Salud, reconocida en el ámbito nacional e internacional en materia sanitario ambiental, que contribuya al logro de la salud integral para alcanzar el desarrollo económico y social del país.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Estructura Organizativa -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse" id="DIS_Estructura" aria-labelledby="headingOne" data-bs-parent="#accordionAbout">
                <div class="row accordion-body"  aria-expanded="true">
                    <h2 id="" class=" text-start mb-5"><u>Estructura Organizativa</u></h2>
                    <div class="text-center">
                        <img src="assets\documentos\DIS\organigrama/Modelos Organigramas Gestion Riesgos Sanitarios.jpg" class="w-75 border-radius-15 box-shadow">
                    </div>

                    <p class=" py-3 text-justify sangria">
                    </p>
                </div>
            </div>
        </section>

        <!-- FUNCIONES DE LA DIS -->
        <section class="container-fluid w-95 my-5">
            <div class="accordion-collapse collapse" id="DIS_Funciones" aria-labelledby="headingFive" data-bs-parent="#accordionAbout">
                <div class="card card-body">
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
                                <td class="p-3">1. Establecer las políticas, estrategias y planes nacionales en materia de Gestión de Riesgos Sanitario Ambientales.  
                                </td>
                                <td class="p-3">2. Apoyar técnicamente en los programas de Gestión de Riesgos Sanitario Ambientales a las dependencias estadales con competencia en el área sanitario ambiental.  
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3">3. Elaborar, actualizar y garantizar la difusión de las normas técnicas, en materia de Gestión de Riesgos Sanitario Ambientales.  
                                </td>
                                <td class="p-3">4. Establecer los planes de atención de emergencia y desastres en materia sanitario ambiental y coordinar su ejecución con el ente rector en materia de protección civil.  
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3">5. Establecer el Sub- Sistema de vigilancia de factores de riesgos sanitario ambientales y generar información para alimentar el sistema de vigilancia epidemiológica ambiental.    
                                </td>
                                <td class="p-3">6. Consolidar la información estadística del sub-sistema de Vigilancia Sanitario Ambiental y suministrarla a  la Dirección de Epidemiología Ambiental.    
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3">7. Promover la elaboración de proyectos de investigación operativa de factores de riesgos, en materia de salud ambiental conjuntamente con la Dirección General de Investigación y Educación.  
                                </td>
                                <td class="p-3">8. Aplicar las medidas cautelares y sancionatorias  establecidas en las leyes, normas y demás instrumentos legales vigentes aplicables.
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3">9. Suspender y revocar conformidades, permisos, registros, certificaciones y autorizaciones, cuando no se cumplan los requisitos en materia de sanitario ambiental.    
                                </td>
                                <td class="p-3">10. Apoyar técnicamente en los programas de Gestión de Riesgos Sanitario Ambientales a las dependencias estadales con competencia en el área sanitario ambiental.  
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3">11. Realizar inspecciones y valuaciones que permitan constatar el cumplimiento de las normas en materia sanitario ambiental.   
                                </td>
                                <td class="p-3"> 12. Las demás que le atribuyen las leyes y reglamentos.  
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
</footer> 
</html>