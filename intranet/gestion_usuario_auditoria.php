<?php
// ESTA VARIABLE GLOBAL ANDA POR AHÍ
// $_SESSION['cedula_var_global'];

// USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
include("../php/verificacion_login.php");
LoginAdmin();
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

    <!-- <script src="../jquery/moment.min.js"></script> -->
    <?php
    include('../php/javascript.php');
    ?>
    <script src="../DataTables/dataTables.dateTime.min.js"></script>
    <script src="../jquery/moment.min.js"></script>
    <link rel="stylesheet" href="../jquery/buttons.dataTables.min.css">
    <script src="../jquery/dataTables.buttons.min.js"></script>
    <script src="../jquery/pdfmake.min.js"></script>
    <script src="../jquery/buttons.html5.min.js"></script>
    <script src="../jquery/buttons.print.min.js"></script>
    <script src="../jquery/vfs_fonts.js"></script>

    <title>Auditoría</title>
</head>

<body class="min-width-index color-fondo">

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
                    <label class="w-50">
                        <b>Acción Realizada:</b>
                        <input class="form-control" id="AccionAudi" name="AccionAudi" readonly>
                    </label>
                    <hr class="mb-3">
                    <div class="">
                        <textarea class="descripcion p-2" id="descripcionAudi" name="descripcionAudi"
                            readonly></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL PARA MOSTRAR INFORMACIÓN -->
    <div class="modal fade" id="BDauditoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Notificación:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="BDauditoriaC">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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

        <section class="w-85 mx-auto mb-5 bg-blanco box-shadow-plano border-radius-15">

                <div class="row">
                    <div class="col-3 mt-2 ms-4">

                        <a href="gestion_usuario_auditoria.php" class="d-inline"><img
                                src="../assets/intranet/recargar.png" class="w-10"></a>
                    </div>
                    <div class="col-auto">

                        <h1>Auditoría del sistema</h1>

                    </div>



                </div>
                <!-- MODIFICAR CARGO CÓDIGO HTML -->
                <!-- BARRA DE EDICIONES -->

                <div class="px-2" id="parte1">
                    <div id="tablaSinAccs">
                        <h2>Usuarios</h2>
                        <div>
                            <label>Fecha Inicial
                                <input type="date" class="form-control" id="inicial">
                            </label>
                            <label>Fecha Final
                                <input type="date" class="form-control" id="final">
                            </label>
                            <button class="btn btn-secondary" type="button" onclick="auditoriaFechaTABLA();">Buscar</button>
                        </div>

                        <div id="auditoriaUsr" class="bg-blanco p-2">
                            <!-- AQUÍ SE IMPRIME LA TABLA -->
                        </div>                        
                        <div id="auditoriaFecha" class="bg-blanco p-2">
                            <!-- AQUÍ SE IMPRIME LA TABLA -->
                        </div>                        
                    </div>
                </div>

                <!-- SEGUNDA TABLA (DATOS INDIVIDUALES) -->
                <div class="px-2 ocultar-div" id="parte2">

                    <h2>Base de datos</h2>
                    <div class="mb-4">

                        <button class="btn btn-secondary" id="btn-ajax" data-bs-toggle="modal"
                            data-bs-target="#BDauditoria">Hacer copia de seguridad de la base de
                            datos</button>
                        <!-- <button class="btn btn-secondary" id="btn-restaurar" data-bs-toggle="modal"
                            data-bs-target="#RestaurarBD">Restaurar copia de seguridad</button> -->
                    </div>
                    <div id="auditoriaBaseDatos" class="bg-blanco p-2">
                        <!-- AQUÍ SE IMPRIME LA TABLA -->
                    </div>

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
<!-- JS DE LA AUDITORIA DE LA BD -->
<script src="../js/bd_auditoria.js"></script>
<script src="../js/auditoria_datos.js"></script>
<?php
    include('../php/javascript_Footer.php');
    ?>
</html>