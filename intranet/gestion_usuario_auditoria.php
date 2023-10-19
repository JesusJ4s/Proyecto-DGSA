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
    <!-- MODAL PARA RESTAURAR LA BASE DE DATOS -->
    <div class="modal fade" id="RestaurarBD" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Notificación:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="RestaurarBDC">
                    <h4 class="mb-3">Restaurar Base de Datos</h4>
                    <form action="../php/Restore.php" method="POST">

                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="submit">Restaurar</button>
                            <input type="file" class="form-control" id="restorePoint" name="restorePoint"
                                aria-describedby="inputGroupFileAddon03" aria-label="Upload" accept=".sql">
                        </div>

                    </form>
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

            <div class="mt-4 mx-5">
                <div class="row">
                    <div class="col-4 ms-4">

                        <a href="gestion_usuario_auditoria.php" class="d-inline"><img
                                src="../assets/intranet/recargar.png" class="w-10"></a>
                    </div>
                    <div class="col-4">

                        <h1>Auditoría del sistema</h1>

                    </div>



                </div>
                <hr>
            </div>
            <section class="w-85 mx-auto mb-5">

                <!-- MODIFICAR CARGO CÓDIGO HTML -->
                <!-- BARRA DE EDICIONES -->

                <div class="px-2" id="parte1">
                    <div id="tablaSinAccs">
                        <h2>Usuarios</h2>
                        <div>
                            <label>Fecha Inicial
                                <input type="datetime-local" class="form-control" id="min">
                            </label>
                            <label>Fecha Final
                                <input type="datetime-local" class="form-control" id="max">
                            </label>
                        </div>

                        <div id="auditoriaUsr" class="bg-blanco p-2">
                            <!-- AQUÍ SE IMPRIME LA TABLA -->
                        </div>
                            <script>
                                // Create date inputs
                                const minDate = new DateTime('#min', {
                                    format: 'YYYY-MM-DD',
                                });
                                const maxDate = new DateTime('#max', {
                                    format: 'YYYY-MM-DD',
                                });

                                // Custom filtering function which will search data in column four between two values
                                DataTable.ext.search.push(function (settings, data, dataIndex) {
                                    const min = minDate.val();
                                    const max = maxDate.val();
                                    const date = new Date(data[4]);

                                    if (
                                        (min === null && max === null) ||
                                        (min === null && date <= max) ||
                                        (min <= date && max === null) ||
                                        (min <= date && date <= max)
                                    ) {
                                        return true;
                                    }
                                    return false;
                                });

                                var moviT = $('#dataTable_AuditoUsr').DataTable({
                                    "processing": false,
                                    "scrollY": 370,
                                    dom: 'Bfrtip',
                                    buttons: [
                                        'pdf'
                                    ],
                                    language: {
                                        "decimal": "",
                                        "emptyTable": "No hay información",
                                        "info": "Mostrando START a END de TOTAL Entradas",
                                        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                                        "infoFiltered": "(Filtrado de MAX total entradas)",
                                        "infoPostFix": "",
                                        "thousands": ",",
                                        "lengthMenu": "Mostrar MENU Entradas",
                                        "loadingRecords": "Cargando...",
                                        "processing": "Procesando...",
                                        "search": "Buscar:",
                                        "zeroRecords": "Sin resultados encontrados",
                                        "paginate": {
                                            "first": "Primero",
                                            "last": "Ultimo",
                                            "next": "Siguiente",
                                            "previous": "Anterior"
                                        }
                                    },
                                });

                                // Refilter the table
                                $('#min, #max').on('change', function () {
                                    moviT.draw();
                                });
                            </script>

                        
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

</html>