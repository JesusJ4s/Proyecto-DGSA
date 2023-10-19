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
    <link rel="stylesheet" href="../css/intranet.css">
    <link rel="stylesheet" href="../css/gg2.css">

    <?php
    include('../php/javascript.php');
    ?>

    <title>INTRANET</title>
</head>

<body class="min-width-index">

    <!-- ******************************************************* -->
    <!-- Cabecera -->
    <header id="inicio-pag" class="caja-superior  mx-4">
        <?php
        include('../php/logos_intranet.php')
            ?>
    </header>

    <!-- fondo-intra -->
    <main class="contenedor-grid-index-horizontal">

        <!-- DIV QUE CONTIENE TODO -->
        <div id="contenedor-total-total">

            <!-- PARTE SUPERIOR, REDES, FECHA Y LOGO -->
            <section class="contenedor-grid-index-horizontal border do_contenedor_entrada ">
                <div class="contenedor-grid px-5">
                    <!-- DIV PARA LA IMAGEN Y LA HORA -->
                    <div class="alinear-centro">
                        <img src="../assets/logos/DGSA/intranet.jpg" alt="Intranet" class="d-inline"
                            id="img_entrada_intra">
                        <h4 class="mensajes_entrada wx-auto d-inline">Maracay
                            <?php echo fecha_larga(); ?>
                        </h4>
                    </div>


                    <!-- DIV PARA EL USUARIO -->
                    <div class="text-end row">
                        <div class="col-8">
                            <img src="../assets/icon/users/usuario2.png" alt="usuario" class="expandir"
                                id="icon_entrada_usr">
                            <?php echo "<h4 class='d-inline' id='nombre_usr_entrada'>" . $_SESSION['nombre'] . "</h4><br><h6 class='d-inline'>" . $_SESSION['nombre_rol'] . "</h6>" ?>
                        </div>
                        <div class="col-3 d-flex justify-content-start">
                            <div class="">
                                <button class="btn btn-outline-secondary dropdown-toggle mt-3" data-bs-toggle="dropdown"
                                    id="btn_usr_entrada">Usuario</button>
                                <ul class='dropdown-menu'>
                                    <li><a class='dropdown-item' href='ajustes_de_usuario.php'>Ajustes</a></li>
                                    <li><a class='dropdown-item' href='../php/cerrar_sesion.php'>Cerrar Sesión</a><img
                                            src="../assets/icon/users/turn-off.png" class="wh-logout-icon"></li>
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </section>
            <!-- Marquesina con información -->
            <!-- <section> -->
            <div class="container-fluid bg-amarillito marquesina-intranet w-95 p-2">
                <p class=" text-start m-0">Notificación:</p>
                <marquee scrollamount="10" scrolldelay="25" class="p-2">
                    <h5 class=""><a class=" enlaces_limpios2 text-dark" id="notificaciones"
                            href="correspondencia_jefes.php"></a>
                    </h5>
                    <h5 class=""><a class=" enlaces_limpios2 text-danger" id="notificacionesALERTA"
                            href="correspondencia_jefes.php"></a>
                    </h5>
                    <h5 class=""><a class=" enlaces_limpios2" id="notificaciones3"
                            href="soporte_tecnico_notifi.php"></a>
                    </h5>

                    <!-- <h5>hola</h5> -->
                    <!-- <h5>hola2</h5> -->
                    <!-- <h5><a class=" enlaces_limpios2 text-dark" id="notificaciones"
                            href="correspondencia_jefes.php"></h5> -->
                </marquee>
            </div>
            <!-- </section> -->

            <?php

            include("../php/modulos_index.php");
            Modulos_Navegacion();

            ?>
        </div>
    </main>
    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
    include('../php/barra_lateral_principal.php');
    barra_lateral_principal();
    ?>

    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/correspondencia.js"></script>
    <script src="../js/consultar_soportes.js"></script>

</body>

</html>