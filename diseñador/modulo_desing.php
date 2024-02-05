<!-- TODA LA INFORMACIÓN SE SOLICITA DESDE LA PAGINA DE INICIAR SESION EN LA INTRANET, SE SOLICITA, LLEGA Y SE VERIFICA EN LA BASE DE DATOS -->
<?php
include("../php/verificacion_login.php");
LoginSimple();
include("../php/date_time.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_soporte.css">
    <link rel="stylesheet" href="../css/intranet.css">
    <link rel="stylesheet" href="../css/gg2.css">

    <?php
    include('../php/javascript.php');
    ?>
    <title>Página Web</title>
</head>

<body class="min-width-index color-fondo">

    <!-- MODAL PARA MOSTRAR AYUDA -->
    <div class="modal fade" id="mi-modal-ayuda" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Ayuda:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>
                        En este modulo puede modificar la información que se muestra en la página web de la Dirección General de Salud Ambiental.
                    </p>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>



    <!-- ******************************************************* -->
    <!-- Cabecera -->
    <header id="inicio-pag" class="caja-superior mx-4">
        <?php
        include('../php/logos_intranet.php')
            ?>
    </header>
    <!-- fondo-intra -->
    <main class="contenedor-grid-index-horizontal">


        <!-- DIV QUE CONTIENE TODO -->
        <div id="contenedor-total-total">

            <!-- PARTE SUPERIOR, INICIO -->
            <section class=" border mx-4 my-3 px-3 bg-secondary ">
                <div class="row px-5 py-3 alinear-centro">
                    <div class="col-1"></div>
                    <!-- DIV PARA LA IMAGEN Y LA HORA -->
                    <div class="col-3">
                        <img src="../assets/icon/multi/home-automation.png" class="wh-inconos-intra pb-2-5"><a
                            class="mx-2 enlaces_limpios d-inline" href="../intranet/index_intranet.php">Inicio</a>
                    </div>
                    <div class="col-4"></div>
                    <!-- DIV PARA LAS REDES -->
                    <div class="col-4 text-end">
                        <button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#mi-modal-ayuda">
                            Ayuda
                        </button>
                    </div>
                </div>
            </section>

            <!-- SECCIÓN PRINCIPAL -->
            <section class="border my-3 mx-4 bg-blanco box-shadow-plano mb-5">
                <h6 class="my-3 mx-5 fondo-readonly" id="mensajes_entrada">Bienvenido, a continuación se muestran las aplicaciones disponibles, puede acceder a la que desee utilizar haciendo click en el botón "Acceder"</h6>
            

                <!-- BOTONES ASPECTO 2 -->
                <section class="container-fluid contenedor-grid-3">

                    <!-- INGRESO SOLICITUD -->
                    <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                        <h3 class="border text-center p-2 mb-3">Galería y Descargas</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/diseñador/galeria.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" p-2 text-center contenedores_modulos_info_mini">
                            <p class="text-justify">Agregue Imágenes, Videos o Documentos a la página web para el dominio público.</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="pagina_web.php">Acceder</a>
                        </div>
                        
                    </div>
                    <!-- BASE DE CONOCIMIENTO -->
                    <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                        <h3 class="border text-center p-2 mb-3">Coordinaciones</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/diseñador/elige-tema.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" p-2 text-center contenedores_modulos_info_mini">
                            <p class="text-justify">Modifique la información mostrada en las Coordinaciones y los Programas de cada División.</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="coordinaciones_programas.php">Acceder</a>
                        </div>
                    </div>
                    <!-- VER SOLICITUDES -->
                    <div class="border mx-3 altura-app mb-5 box-shadow-plano">
                                
                        <h3 class="border text-center p-2">Boletines e Información</h3>

                        <div class="text-center">
                            <img src="../assets/intranet/diseñador/programas.png" class="wh-logos-app p-2">
                        </div>
                        <div class=" p-2 text-center contenedores_modulos_info_mini">
                            <p class="text-justify">Modifique la información que se muestra en los Boletínes de las páginas principales, los documentos de Instrumentos Legales y los Temas de Interés.</p>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary w-65 hover-boton" href="BoletinTemasInstru.php">Acceder</a>
                        </div>
                    </div>
        
                </section>

            </section>
        </div>
    </main>


    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
    include('../php/barra_lateral_principal.php');
    barra_lateral_diseno();
    ?>
    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.js"></script>
</body>
    <?php
    include('../php/javascript_Footer.php');
    ?>
</html>