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
    <title>Soporte Técnico</title>
</head>

<body class="min-width-index">

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
                        Consulte las solicitudes hechas o haga una solicitud.
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
                            class="mx-2 enlaces_limpios d-inline" href="index_intranet.php">Inicio</a>
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

            <?php
            include("../php/modulos_soporte.php");
            Modulos_Navegacion_soporte();

            ?>
        </div>
    </main>


    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
    include('../php/barra_lateral.php');
    barra_lateral_principal();
    ?>
    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/consultar_soportes.js"></script>

</body>

</html>