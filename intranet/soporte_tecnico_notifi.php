<!-- TODA LA INFORMACIÓN SE SOLICITA DESDE LA PAGINA DE INICIAR SESION EN LA INTRANET, SE SOLICITA, LLEGA Y SE VERIFICA EN LA BASE DE DATOS -->
<?php

include("../php/verificacion_login.php");
Login_ING_Admin();
include("../php/date_time.php");
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/intranet.css">
    <link rel="stylesheet" href="../css/gg3.css">
    <?php
    include('../php/javascript.php');
    ?>

    <title>Notificaciones</title>
</head>

<body class="min-width-index color-fondo">
    <!-- Modal para mostrar información-->
    <div class="modal fade" id="Modal_Notifi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Notificación:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="Modal_NotifiC">
            
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal para enviar a EN ESPERA-->
    <div class="modal fade" id="ModalComponentes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Faltan Componentes:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="ModalComponentesC">
                    <p>Indique la razón de porqué, se envía a el apartado <i>Faltan Componentes</i>, para que conozca la razón más adelante.</p>
                    <textarea id="descripcion_compo" name="descripcion_compo" class="descripcion"></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" data-bs-dismiss="modal" onclick="enviarEspera();">Enviar</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL PARA SOLICITAR ELIMINACIÓN DE SOLICITUD -->
    <div class="modal fade" id="mi-modal-rechazo" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>¿Desea eliminar la solicitud?:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Si accede a realizar esta acción, se enviará la solicitud al apartado de <i>Solicitudes
                            Rechazadas</i>, y deberá ir a concluir la acción.
                    </p>
                    <h5>¿Seguro de rechazar la solicitud?:</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" id="modalRechazo"
                        data-bs-dismiss="modal">Rechazar</button>
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

    <!-- SPINNER QUE SE MUESTRA EN LA CARGA DE DATOS -->
    <div class=" d-flex justify-content-center position-absolute top-50 start-50">
        <div class="ocultar-spinner spinner-border text-secondary" role="status">
        </div>
    </div>
    <!-- ******************************************************* -->
    <!-- Cabecera -->
    <header id="inicio-pag" class="caja-superior  mx-4">
        <?php
        include('../php/logos_intranet.php')
            ?>
    </header>

    <main class="contenedor-grid-index-horizontal">

        <!-- DIV QUE CONTIENE TODO -->
        <div id="contenedor-total-total">
            <section class="container-fluid my-2 w-95 mb-5 px-0 bg-blanco box-shadow-plano border-radius-15" id="centro-id">

                <div class="row">
                    <div class="col-3 mt-2 ms-4">
                        <a href="soporte_tecnico_notifi.php"><img src="../assets/intranet/recargar.png" class="w-10"></a>
                    </div>
                </div>

                <div class="w-85 mx-auto">
                    <!-- SOLICITUDES EN ESPERA -->
                    <div class="px-2 ocultar-div" id="parte1">
                        <h3 class="text-center p-2 mb-0">Solicitudes de soporte técnico:</h3>
                        <hr>
                        <div class="mb-3 ocultar-class">
                            <div id="tabla_soportes">
                                <!-- AQUÍ SE IMPRIME LA TABLA DE LAS SOLICITUDES HECHAS -->
                                <div class="my-4">
                                    <div id="mostrar_soportes" class="bg-blanco p-2">

                                    </div>
                                </div>

                                <!-- AQUÍ DEBERÍA HABER UN BOTÓN QUE INDIQUE CÓMO HACERLO -->

                            </div>
                            <!-- AQUÍ SERÁ LA MEGA CONSULTA PARA VER LAS SOLICITUDES Y COMENZAR LA REVISIÓN -->
                            <div id="formulario_mostrar" class="ocultar-div">

                                <form id="form_aceptar_soli">
                                    <!-- AQUÍ SE GUARDAN LOS DATOS DE LA SOLICITUD -->
                                    <div class="row mx-auto bg-grey-claro mt-2 mb-5 p-3 border-radius-15">
                                        <div class="col-3 my-2">
                                            <label><b>Tipo de Uso</b></label>
                                            <input class="form-control" readonly id="soporteUso" name="soporteUso">

                                        </div>
                                        <div class="col-3 my-2">
                                            <label><b>Nivel Soporte</b></label>
                                            <input class="form-control" readonly id="soporteNivel" name="soporteNivel">

                                        </div>
                                        <div class="col-4 my-2">
                                            <label><b>Fecha de la Solicitud</b></label>
                                            <input class="form-control" readonly id="soporteFecha" name="soporteFecha">

                                        </div>
                                        <div class="col-2 my-2" id="soporteEst_div">
                                            <label><b>Estado</b></label>
                                            <input class="form-control" id="soporteEst" name="soporteEst" readonly>

                                        </div>
                                        <div class="col-9 my-2">
                                            <label><b>Descripción</b></label>
                                            <input class="form-control py-2" readonly id="soporteDesc"
                                                name="soporteDesc">

                                        </div>
                                        <div class="col-2 my-2">
                                            <label><b>Nro de Caso</b></label>
                                            <input class="form-control  text-end" id="id_soporte" name="id_soporte"
                                                readonly>

                                        </div>


                                        <div class="col-4 my-2">
                                            <label><b>Departamento</b></label>
                                            <input class="form-control" readonly id="depto_mostrar"
                                                name="depto_mostrar">
                                            <input class="form-control" readonly id="id_dep" name="id_dep"
                                                type="hidden">
                                        </div>
                                        <div class="col-4 my-2">
                                            <label><b>Division</b></label>
                                            <input class="form-control" readonly id="division_mostrar"
                                                name="division_mostrar">
                                            <input class="form-control" readonly id="id_div" name="id_div"
                                                type="hidden">

                                        </div>
                                        <div class="col-4 my-2">
                                            <label><b>Dirección en línea</b></label>
                                            <input class="form-control" readonly id="direccion_mostrar"
                                                name="direccion_mostrar">
                                            <input class="form-control" readonly id="id_dir" name="id_dir"
                                                type="hidden">

                                        </div>
                                        <div class="col-3 my-2">
                                            <label><b>Responsable del Equipo</b></label>
                                            <input class="form-control" readonly id="responsable_edit"
                                                name="responsable_edit">
                                        </div>
                                        <div class="col-3 my-2">
                                            <label><b>Supervisor inmediato</b></label>
                                            <input class="form-control" readonly id="supervisor_dpto_edit"
                                                name="supervisor_dpto_edit">
                                        </div>

                                        <div class="col-2 my-2">
                                            <label><b>Dirección IP</b></label>
                                            <input class="form-control" readonly id="ip_edit" name="ip_edit">
                                        </div>
                                        <div class="col-2 my-2">
                                            <label><b>Nombre Equipo</b></label>
                                            <input class="form-control" readonly id="nombre_equipo"
                                                name="nombre_equipo">
                                        </div>
                                        <div class="col-2 my-2">
                                            <label><b>Versión Windows</b></label>
                                            <input class="form-control" readonly id="vr_win_edit" name="vr_win_edit">
                                        </div>
                                        <br>
                                        <?php
                                        if ($_SESSION['nivel_usuario'] == 1) {
                                            echo '
                                                <div class="col-3">
                                                    <label><b>Técnico para el Soporte</b></label>
                                                    <select class="form-select" id="ingeniero_selector" name="ingeniero_selector" required>';

                                                    include("../php/abrir_conexion.php");

                                                    $consulta = "SELECT * FROM $tabla_db1 WHERE usuario_rol_id = 2";
                                                    $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                                                    include("../php/cerrar_conexion.php");

                                                    foreach ($ejecutar as $opciones) {
                                                        echo '
                                                        <option value="' . $opciones["id_usuario"] . '">Ingeniero ' . $opciones["nombre"] . '</option>';
                                                    }

                                                    echo '
                                                        </select>
                                                </div>';
                                        } else {
                                            echo
                                            '
                                                <input type="hidden" id="ingeniero_selector" name="ingeniero_selector">
                                            
                                            ';
                                        }
                                        ?>

                                        <div class="col-2 mt-4">
                                            
                                            <button type="button" class="btn btn-success" id="aceptarSolicitud"
                                                name="aceptarSolicitud">Aceptar Solicitud</button>

                                        </div>

                                        <div class="col-3 mt-4">
                                            <button type="button" class="btn btn-danger" id="rechazar_solicitud"
                                                name="rechazar_solicitud" data-bs-toggle="modal"
                                                data-bs-target="#mi-modal-rechazo">Iniciar rechazo de la
                                                Solicitud</button>
                                        </div>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <!-- SOPORTES EN PROCESO -->
                    <div class="px-2 mt-3 ocultar-div" id="parte2">

                        <div class="accordion" id="accordionSoliProc">
                            <div class="ocultar-class">
                                <div id="tabla_soportes2">
                                    <div class="my-3 text-start">
                                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseSolicitudes" aria-expanded="true"
                                            aria-controls="collapseSolicitudes">
                                            <b>Solicitudes - Proceso</b>
                                        </button>
                                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseComponentes" aria-expanded="true"
                                            aria-controls="collapseComponentes">
                                        <input  id="compoCampana" class="bold w-10 limpiador-botones2" disabled >
                                            <b>Solicitudes - Faltan Componentes</b>
                                        </button>
                                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseFinalizadas" aria-expanded="true"
                                            aria-controls="collapseFinalizadas">
                                            <b>Solicitudes - Finalizadas</b>
                                        </button>
                                    </div>
                                    <hr>
                                    <!-- SOPORTES POR FINALIZAR -->
                                    <div class="mb-3">
                                        <div class="accordion-collapse collapse show" id="collapseSolicitudes"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionSoliProc">
                                            <div class="accordion-body" aria-expanded="true">
                                                <h3 class="text-center p-2 mb-3">Soportes en Proceso</h3>

                                                <div id="mostrar_soportes_final" class="bg-blanco p-2 border-radius-15">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SOPORTES A LOS QUE LES FALTAN COMPONENTES -->
                                    <div class="mb-3">
                                        <div class="accordion-collapse collapse" id="collapseComponentes"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionSoliProc">
                                            <div class="accordion-body" aria-expanded="true">
                                                <h3 class="text-center p-2 mb-3">Soportes No Finalizados</h3>

                                                <div id="mostrar_soportes_componentes"class="bg-blanco p-2 border-radius-15">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SOPORTES FINALIZADOS -->
                                    <div class="mb-3">
                                        <div class="accordion-collapse collapse" id="collapseFinalizadas"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionSoliProc">
                                            <div class="accordion-body" aria-expanded="true">
                                                <h3 class="text-center p-2 mb-3">Soportes Finalizados</h3>

                                                <div id="mostrar_soportes_Ingenieros"
                                                    class="bg-blanco p-2 border-radius-15">

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- PARTE DEL FORMULARIO, CUANDO SE VA A FINALIZAR -->
                                <div id="formulario_Final" class="ocultar-div">
                                    <form id="formu_finalizar_soli">
                                        <!-- AQUÍ MOSTRAREMOS ALGUNOS DATOS PARA FINALIZAR LA SOLICITUD -->
                                        <div class="row mx-auto bg-grey-claro mb-4 p-3 border-radius-15">
                                            <!-- UBICACIÓN FÍSICA -->
                                            <div class="col-4 my-2">
                                                <label><b>Dirección</b></label>
                                                <input class="form-control" id="direccion_mostrar2"
                                                    name="direccion_mostrar2" readonly>
                                            </div>
                                            <div class="col-4 my-2">
                                                <label><b>Division</b></label>
                                                <input class="form-control" id="division_mostrar2"
                                                    name="division_mostrar2" readonly>
                                            </div>
                                            <div class="col-4 my-2">
                                                <label><b>Departamento</b></label>
                                                <input class="form-control" id="depto_mostrar2" name="depto_mostrar2"
                                                    readonly>
                                            </div>
                                            <!-- ESPECÍFICACIONES -->
                                            <div class="col-4 my-2">
                                                <label><b>Responsable</b></label>
                                                <input class="form-control" id="responsable_edit2"
                                                    name="responsable_edit2" readonly>
                                            </div>
                                            <div class="col-4 my-2">
                                                <label><b>Nombre Equipo</b></label>
                                                <input class="form-control" id="nombre_equipo2" name="nombre_equipo2"
                                                    readonly>
                                            </div>
                                            <div class="col-4 my-2">
                                                <label><b>IP</b></label>
                                                <input class="form-control" id="ip_edit2" name="ip_edit2" readonly>
                                            </div>
                                            <!-- SOLICITUD ESPECÍFICACIONES -->
                                            <div class="col-3 my-2">
                                                <label><b>Nro Soporte</b></label>
                                                <input class="form-control" id="id_soporte2" name="id_soporte2"
                                                    readonly>
                                            </div>
                                            <div class="col-3 my-2">
                                                <label><b>Nivel Soporte</b></label>
                                                <input class="form-control" id="soporteNivel2" name="soporteNivel2"
                                                    readonly>
                                            </div>
                                            <div class="col-3 my-2">
                                                <label><b>Fecha Solicitud</b></label>
                                                <input class="form-control" id="soporteFecha2" name="soporteFecha2"
                                                    readonly>
                                            </div>
                                            <div class="col-3 my-2">
                                                <label><b>Estado</b></label>
                                                <input class="form-control" id="soporteEst2" name="soporteEst2"
                                                    readonly>
                                            </div>
                                            <!-- ÚLTIMAS ESPECÍFICACIONES -->
                                            <div class="col-4 my-2">
                                                <label><b>Fecha Aceptación</b></label>
                                                <input class="form-control" id="fecha_aceptacion"
                                                    name="fecha_aceptacion" readonly>
                                            </div>
                                            <div class="col-4 my-2">
                                                <label><b>Fecha Finalización</b></label>
                                                <input class="form-control" id="fecha_final" name="fecha_final" readonly
                                                    value="<?php echo fecha_inventario(); ?>">
                                            </div>
                                            <div class="col-12">
                                                <label for="explicacion2">Comentario sobre el Soporte:</label>
                                                <textarea required class="bg-blanco-hsl descripcion" id="descripcion"
                                                    name="descripcion" minlength="20" maxlength="200"></textarea>
                                                <!-- <div id="charCount"></div>    -->
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-success" type="button" id="finalizar_solicitud"
                                                    name="finalizar_solicitud">Finalizar Solicitud</button>
                                            </div>
                                            <div class="col-3 mt-4">
                                                <button class="btn btn-warning" type="button" id="falta_componentes"
                                                    name="falta_componentes"  data-bs-toggle="modal"
                                                data-bs-target="#ModalComponentes">Enviar a Faltan Componentes</button>
                                            </div>                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- SOPORTES RECHAZADOS -->
                    <div class="px-2 mt-3 ocultar-div" id="parte3">

                        <div class="ocultar-class">
                            <div id="tabla_soportes3">
                                <div class="accordion" id="accordionSoliRech">
                                    <div class="my-3 text-start">
                                        <button class="btn btn-outline-danger" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseNegadas" aria-expanded="true"
                                            aria-controls="collapseNegadas">
                                            <b>Solicitudes por Rechazar</b>
                                        </button>
                                        <button class="btn btn-outline-danger" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseRechazadas" aria-expanded="true"
                                            aria-controls="collapseRechazadas">
                                            <b>Solicitudes Rechazadas</b>
                                        </button>
                                    </div>
                                    <hr>
                                    <!-- SOPORTES POR FINALIZAR -->
                                    <div class="mb-3">
                                        <div class="accordion-collapse collapse show" id="collapseNegadas"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionSoliRech">
                                            <div class="accordion-body" aria-expanded="true">
                                                <h3 class="text-center p-2 mb-3">Soportes por Rechazar</h3>

                                                <div id="mostrar_soportes_rechazado"
                                                    class="bg-blanco p-2 border-radius-15">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- SOPORTES POR FINALIZADOS -->
                                    <div class="mb-3">
                                        <div class="accordion-collapse collapse" id="collapseRechazadas"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionSoliRech">
                                            <div class="accordion-body" aria-expanded="true">
                                                <h3 class="text-center p-2 mb-3">Soportes Rechazados</h3>

                                                <div id="mostrar_soportes_rechazado_vista"
                                                    class="bg-blanco p-2 border-radius-15">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- FORMULARIO DONDE SE IMPRIMEN LOS DATOS PARA RECHAZAR -->
                            <div id="formulario_rechazo" class="ocultar-div">

                                <form id="formu_rechazar_soli">

                                    <div class="row mx-auto bg-grey-claro mb-4 p-3 border-radius-15">
                                        <!-- UBICACIÓN FÍSICA -->
                                        <div class="col-4 my-2">
                                            <label><b>Dirección</b></label>
                                            <input class="form-control" id="direccion_mostrar3"
                                                name="direccion_mostrar3" readonly>
                                        </div>
                                        <div class="col-4 my-2">
                                            <label><b>Division</b></label>
                                            <input class="form-control" id="division_mostrar3" name="division_mostrar3"
                                                readonly>
                                        </div>
                                        <div class="col-4 my-2">
                                            <label><b>Departamento</b></label>
                                            <input class="form-control" id="depto_mostrar3" name="depto_mostrar3"
                                                readonly>
                                        </div>


                                        <!-- ESPECÍFICACIONES -->
                                        <div class="col-4 my-2">
                                            <label><b>Responsable</b></label>
                                            <input class="form-control" id="responsable_edit3" name="responsable_edit3"
                                                readonly>
                                        </div>
                                        <div class="col-4 my-2">
                                            <label><b>Nombre Equipo</b></label>
                                            <input class="form-control" id="nombre_equipo3" name="nombre_equipo3"
                                                readonly>
                                        </div>
                                        <div class="col-4 my-2">
                                            <label><b>IP</b></label>
                                            <input class="form-control" id="ip_edit3" name="ip_edit3" readonly>
                                        </div>
                                        <!-- SOLICITUD ESPECÍFICACIONES -->
                                        <div class="col-3 my-2">
                                            <label><b>Nro Soporte</b></label>
                                            <input class="form-control" id="id_soporte3" name="id_soporte3" readonly>
                                        </div>
                                        <div class="col-3 my-2">
                                            <label><b>Nivel Soporte</b></label>
                                            <input class="form-control" id="soporteNivel3" name="soporteNivel3"
                                                readonly>
                                        </div>
                                        <div class="col-3 my-2">
                                            <label><b>Fecha Solicitud</b></label>
                                            <input class="form-control" id="soporteFecha3" name="soporteFecha3"
                                                readonly>
                                        </div>
                                        <div class="col-3 my-2">
                                            <label><b>Estado</b></label>
                                            <input class="form-control" id="soporteEst3" name="soporteEst3" readonly>
                                        </div>
                                        <!-- ÚLTIMAS ESPECÍFICACIONES -->
                                        <div class="col-4 my-2">
                                            <label><b>Fecha Rechazo</b></label>
                                            <input class="form-control" id="fecha_rechazo" name="fecha_rechazo"
                                                readonly>
                                        </div>
                                        <div class="col-4 my-2">
                                            <label><b>Fecha finalizar rechazo</b></label>
                                            <input class="form-control" id="fecha_final" name="fecha_final" readonly
                                                value="<?php echo fecha_inventario(); ?>">
                                        </div>
                                        <div class="col-12">
                                            <label for="explicacion2">Indique la razón del rechazo:</label>
                                            <textarea required class="bg-blanco-hsl descripcion" id="descripcion2"
                                                name="descripcion2" minlength="20" maxlength="200"></textarea>
                                            <!-- <div id="charCount"></div>    -->
                                        </div>
                                        <div class="col-3 mt-4">
                                            <button class="btn btn-warning" type="button"
                                                id="ConfirmarRechazar_solicitud"
                                                name="ConfirmarRechazar_solicitud">Confirmar Rechazo</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- SOPORTES DATOS -->
                    <div class="px-2" id="parte4">
                        <div class="ocultar-class">
                            <h1>Estadísticas</h1>
                                <!-- ESTADISTICA SOLICITUDES BARRAS -->
                            <div class="border-radius-15 d-flex justify-content-center row mt-3 bg-blanco">
                                <div class="col-9">
                                    <canvas class="" id="solicitudesProm"></canvas>

                                </div>
                                <div class="col-auto">
                                    <p id="total" class="bold"></p>
                                    <p id="numF" class="bold"></p>
                                    <p id="numRech" class="bold"></p>
                                    <p id="numRep" class="bold"></p>

                                </div>
                            </div>
                            <hr>
                            <!-- ESTADISTICAS SOLICITUDES POR FECHA -->
                            <div class="border-radius-15 d-flex justify-content-center mt-3 bg-blanco">
                                <canvas class="" id="lineal"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ÚLTIMO DIV -->
        </div>
    </main>

    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
    include('../php/barra_lateral.php');
    barra_lateral_soporte_notifi();
    ?>
    <!-- CONTIENE LAS LISTAS DE SOLICITUDES - AMBOS TRABAJAN DE LA MANO USANDO LA MAC-->
    <script src="../js/consultar_soportes.js"></script>
    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.js"></script>

    <!-- CONSULTAR ESPECIFICACIONES DEL EQUIPO - AMBOS TRABAJAN DE LA MANO USANDO LA MAC-->
    <script src="../js/consulta_equipos.js"></script>

    <!-- MOSTRAR OCULTAR PESTAÑAS -->
    <script src="../js/editar_mostrar_datos.js"></script>

    <!-- VERIFICACIONES DENTRO DE LOS FORMULARIOS -->
    <script>
        // GENERADO POR LA IA Y PERMITE VERIFICAR LA CONTRASEÑA PARA ACEPTAR SOLICITUDES


        // ACEPTAR SOLICITUD Y SUBIR AL SISTEMA
        let aceptar_solicitud = document.getElementById("aceptarSolicitud");

        aceptar_solicitud.addEventListener('click', Aceptar_Soli);


        // FINALIZAR SOLICITUD EN EL SISTEMA
        let finalizarSolicitud = document.getElementById("finalizar_solicitud");

        finalizarSolicitud.addEventListener('click', FinalizarSolicitud);

        // RECHAZAR SOLICITUD (DESDE EL MODAL)
        let RechazoSoli = document.getElementById("modalRechazo");

        RechazoSoli.addEventListener('click', enviarRechazo);

        // RECHAZAR SOLICITUD (DEFINITIVA)

        let rechazar_solicitud = document.getElementById("ConfirmarRechazar_solicitud");

        rechazar_solicitud.addEventListener('click', rechazar_solicitudFunction);

    </script>

    <script src="../chart/dist/chart.umd.js"></script>

    <script src="../js/estadisticasSoporte.js" type="module"></script>


</body>
<?php
    include('../php/javascript_Footer.php');
    ?>
</html>