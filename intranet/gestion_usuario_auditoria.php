<?php
// ESTA VARIABLE GLOBAL ANDA POR AHÍ
// $_SESSION['cedula_var_global'];

// USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
include("../php/verificacion_login.php");
Login_Jef_ING_Admin();
?>
<script src="../js/reenvio.js"></script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/intranet.css">
    <link rel="stylesheet" href="../css/gg3.css">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="../css/style_usr.css">

    <?php
    include('../php/javascript.php');
    ?>


    <title>Auditoría</title>
</head>

<body class="min-width-index ">

    <!-- MODAL PARA MOSTRAR INFORMACIÓN DE LA AUDITORIA -->
    <div class="modal fade" id="AuditoriaDatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Información de la Auditoría:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="AuditoriaDatosC">
                    <label>
                        <b>Nombre del Usuario:</b>
                        <input class="form-control" id="nombreAudi" name="nombreAudi" readonly>
                    </label>
                    <label>
                        <b>Cedula:</b>
                        <input class="form-control" id="cedulaAudi" name="cedulaAudi" readonly>
                    </label>
                    <hr class="mb-3">
                    <label>
                        <b>Usuario:</b>
                        <input class="form-control" id="UsrAudi" name="UsrAudi" readonly>
                    </label>
                    <hr class="mb-3">
                    <label>
                        <b>Fecha de la Acción:</b>
                        <input class="form-control" id="fechaAudi" name="fechaAudi" readonly>
                    </label>
                    <label>
                        <b>Acción Realizada:</b>
                        <input class="form-control" id="AccionAudi" name="AccionAudi" readonly>
                    </label>
                    <hr class="mb-3">
                    <div class="">
                        <textarea class="descripcion p-2" id="descripcionAudi" name="descripcionAudi" readonly></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- SPINNER QUE APARECE EN LA CARGA DE INFORMACIÓN -->
    <div class=" d-flex justify-content-center position-absolute top-50 start-50">
        <div class="ocultar-spinner spinner-border text-secondary" role="status" id="spinner">
        </div>
    </div>

    <!-- ******************************************************* -->
    <!-- Cabecera -->
    <header id="inicio-pag" class="caja-superior mx-4">
        <?php
        include('../php/logos_intranet.php')
            ?>
    </header>

    <main class="contenedor-grid-index-horizontal ocultar-class">

        <!-- ************************************************* -->
        <!-- DIV QUE CONTIENE TODO -->
        <div id="contenedor-total-total">

            <div class="mt-4 mx-5">
                <div class="text-end d-inline mt-2 ms-3">
                    <a href="gestion_usuario_auditoria.php"><img src="../assets/intranet/recargar.png" class="w-02"></a>


                </div>
                <hr>
                <h1><u>Auditoría del sistema</u></h1>
            </div>
            <section class="w-85 mx-auto mb-5">

                <!-- MODIFICAR CARGO CÓDIGO HTML -->
                <!-- BARRA DE EDICIONES -->

                <div class="px-2" id="parte1">
                    <div id="tablaSinAccs">
                        <h2>Usuarios</h2>

                        <div id="auditoriaUsr" class="bg-blanco p-2">
                            <!-- AQUÍ SE IMPRIME LA TABLA -->
                        </div>
                    </div>
                </div>

                <!-- SEGUNDA TABLA (DATOS INDIVIDUALES) -->
                <div class="px-2 ocultar-div" id="parte2">

                    <h2>Base de datos</h2>

                </div>

            </section>



            <!-- ÚLTIMO DIV -->
        </div>
    </main>

    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
    include('../php/barra_lateral.php');
    barra_lateral_auditoria();
    ?>

</body>

<script src="../js/consultar_usuario.js"></script>
<!-- MODIFICAR DATOS DURANTE LA EDICION -->
<script src="../js/editar_mostrar_datos.js"></script>
<!-- JS en Bootstrap -->
<script src="../js/bootstrap.bundle.min.js"></script>

</html>