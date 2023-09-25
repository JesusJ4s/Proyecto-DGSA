<?php
// USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
include("../php/verificacion_login.php");
LoginSimple();
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
    <link rel="stylesheet" href="../css/style_usr.css">
    <link rel="stylesheet" href="../css/style.css">

    <?php
    include('../php/javascript.php');
    ?>


    <title>Registro Correspondencia</title>
</head>

<body class=" min-width-index">
    <!-- Modal para mostrar información-->
    <div class="modal fade" id="RegistroCorres" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Notificación:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="RegistroCorresC">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL CON INFORMACIÓN DE COMO MOVERSE POR EL FORMULARIO -->
    <div class="modal fade" id="mi-modal-ayuda">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>información:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>
                        <b>Empresas</b>: Con el rif de la empresa puede cargar los datos ya registrados, de lo contrario
                        llenelos de manera manual y se registrará la empresa para agilizar el proceso a futuro.
                    </p>
                    <p>
                        <b>¿No se envía el formulario?</b>: Si alguna casilla está en <span
                            class="text-danger">rojo</span>, es porque colocó un dato de manera erronea, verifique y
                        siga llenando la información.
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>
    <!-- MODAL CON INFORMACIÓN DE COMO VISUALIZAR LOS REPORTES -->
    <div class="modal fade" id="mi-modal-ayuda2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>información:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>
                        Aquí puede visualizar todas las correspondencias que ha registrado, puede usar la barra de
                        búsqueda para encontrar una solicitud específica.
                        <br>
                        Si el campo de estatus está en <span class="bg-warning">-amarillo-</span>, significa que no ha
                        sido aceptada por el receptor. Si está en <span class="bg-success">-verde-</span>, significa que
                        ya confirmo la llegada de los documentos.
                    </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

    <header id="inicio-pag" class="caja-superior  mx-4">
        <?php
        include('../php/logos_intranet.php')
            ?>
    </header>

    <main class="contenedor-grid-index-horizontal">

        <!-- DIV QUE CONTIENE TODO -->
        <div id="contenedor-total-total">

            <!-- ************************************************* -->
            <!-- AGREGAR NUEVO EQUIPO -->
            <div class="container-fluid text-center px-5 mx-0 mb-0" id="parte1">

                <div class="border-radius-15 py-3">

                    <div class="container-fluid text-center mx-2  p-2 bg-blanco border-radius-15">
                        <form id="formCorrespondencia" method="POST" class="px-5 pt-2 row">
                            <!-- PARTE SUPERIOR DEL FORMULARIO -->
                            <!-- TOAST CON INFORMACIÓN DE NAVEGACIÓN -->
                            <button type="button" class="boton_toast_ayuda d-inline " data-bs-toggle="modal"
                                data-bs-target="#mi-modal-ayuda"><img src="../assets/intranet/pregunta.png"
                                    class="img_toast"></button>
                            <div class="col-auto pt-3">
                                <h2 class="">Registrar Correspondencia</h2>
                            </div>
                            <!-- <button type="button" class="btn btn-secondary" id="btnVerificar">Hola</button> -->

                            <div class="col-12 px-3">
                                <h3>Datos:</h3>
                                <p class="text-end mb-0"><b>Fecha Actual</b></p>
                                <div class="border-bottom text-end">
                                    <?php
                                    include("../php/date_time.php");
                                    echo fecha_inventario();
                                    ?>
                                </div>
                                <div class="text-center row my-3 bg-blanco-hsl p-3 border-radius-15">
                                    <!-- MUESTRA LOS INGENIEROS DISPONIBLES -->
                                    <div class="col-12">
                                        <table class="table table-hover table-striped">
                                            <thead class="bg-grey text-light">
                                                <tr class="align-middle text-center">
                                                    <th>Nro de oficio</th>
                                                    <th>Fecha</th>
                                                    <th>Procedencia</th>
                                                    <th>Asunto</th>
                                                    <th>Nro de adm.</th>
                                                    <th>Fecha llegada</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="col-2">
                                                        <div class=" formulario__grupo" id="grupo__nroOficio"><input
                                                                class="form-control  formulario__input" type="number"
                                                                required id="nroOficio" name="nroOficio"></div>
                                                    </td>

                                                    <td class="col-1">
                                                        <div class=" formulario__grupo" id="grupo__fecha_salida"><input
                                                                class="form-control  formulario__input" type="date"
                                                                required id="fecha_salida" name="fecha_salida"
                                                                oninput="this.value = validarFecha(this.value)"></div>
                                                    </td>

                                                    <td class="col-2">
                                                        <div class=" formulario__grupo" id="grupo__procedencia"><input
                                                                class="form-control  formulario__input" type="text"
                                                                readonly disabled value="" id="procedencia"
                                                                name="procedencia"></div>
                                                    </td>

                                                    <td class="">
                                                        <div class=" formulario__grupo" id="grupo__asunto"><input
                                                                class="form-control  formulario__input" type="text"
                                                                required id="asunto" name="asunto"></div>
                                                    </td>

                                                    <td class="col-1"><input class="form-control" type="number"
                                                            id="contador" disabled readonly></td>

                                                    <td class="col-1">
                                                        <div class=" formulario__grupo" id="grupo__fecha_llegada"><input
                                                                class="form-control  formulario__input" type="date"
                                                                required id="fecha_llegada" name="fecha_llegada"
                                                                oninput="this.value = validarFecha(this.value)"></div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>


                                    <!-- *********************************************************************************************************************** -->
                                    <hr class="mt-2 mb-4">
                                    <div class="col-12 row">
                                        <h4 class="text-start">Procedencia</h4>
                                        <div class="col-2">
                                            <h5>Registrado?</h5>
                                            <label>Sí
                                                <input type="radio" id="radiosi" name="regis" value="si" checked>
                                            </label>
                                            <label>No
                                                <input type="radio" id="radiono" name="regis" value="no">
                                            </label>
                                        </div>
                                        <!-- TODO: FORMUALRIO DE REGISTRO -->
                                        <div class="col-3">
                                            <label class="formulario__label">Rif</label>
                                            <div class="row">
                                                <div class="col-4">
                                                    <select class="form-select" id="identificador" name="identificador"
                                                        onchange="empresas_fun();">
                                                        <option value="V">V-</option>
                                                        <option value="E">E-</option>
                                                        <option value="J">J-</option>
                                                        <option value="G">G-</option>
                                                    </select>
                                                </div>
                                                <div class="col-7" id="registrado">
                                                    <div class="formulario__grupo" id="grupo__rif_empresa">
                                                        <input class="form-control formulario__input" id="rif_empresa"
                                                            name="rif_empresa" required onblur="empresas_fun();">
                                                    </div>
                                                </div>
                                                <div class="col-7 ocultar-div" id="registrar">
                                                    <div class="formulario__grupo" id="grupo__rif_empresa_regis">
                                                        <input class="form-control formulario__input"
                                                            id="rif_empresa_regis" name="rif_empresa_regis">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="registration-form" class="col-7">
                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="form-group formulario__grupo" id="grupo__nombre_emp">
                                                        <label class="formulario__label">Nombre de la Empresa</label>
                                                        <input class="form-control formulario__input" type="text"
                                                            id="nombre_emp" name="nombre_emp">
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="form-group formulario__grupo" id="grupo__dedicacion">
                                                        <label class="formulario__label">Dedicacion Empresa</label>
                                                        <input class="form-control formulario__input" type="text"
                                                            id="dedicacion" name="dedicacion">
                                                    </div>
                                                </div>
                                                <div class="col-auto d-flex align-items-end mb-1">
                                                    <button type="button" class="btn btn-secondary " id="regisEmpresa"
                                                        name="regisEmpresa">Registrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- *********************************************************************************************************************** -->

                                    <!-- SELECCIONAR LOS DEPARTAMENTOS -->
                                    <hr class="mt-2 mb-4">
                                    <h4 class="text-start">Oficina a la que será enviado:</h4>
                                    <div class="col-6">
                                        <label class="formulario__label">Dirección</label>
                                        <select class="form-select" aria-label="Default select example"
                                            id="direccion_select" name="direccion_select">
                                            <?php
                                            // BUSCAR LA INFORMACIÓN
                                            include("../php/abrir_conexion.php");

                                            $consulta = "SELECT * FROM $tabla_db5 WHERE id_direcciones <> 6";
                                            $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                                            include("../php/cerrar_conexion.php");
                                            ?>
                                            <!-- IMPRIMIRLA EN EL OPTION DE UN SELECT. ESTA PARTE VA DIRECTA EN EL HTML-->
                                            <?php foreach ($ejecutar as $opciones): ?>
                                                <option value="<?php echo $opciones['id_direcciones'] ?>">
                                                    <?php echo $opciones['nombre_dire'] ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <div class="col-6">
                                        <label class="formulario__label">División</label>
                                        <div id="div_divisiones_select">
                                            <select class="form-select" aria-label="Default select example"
                                                id='division_select' name='division_select'>
                                            </select>
                                        </div>

                                    </div>
                                    <!-- 
                                <div class="col-4">
                                    <label class="formulario__label">Oficina Destino</label>
                                        <div id="div_dpto_select">
                                            <select class="form-select" aria-label="Default select example" id='departamento_select' name='departamento_select'>
                                            </select>
                                        </div>
                                </div> 
                                -->
                                </div>

                            </div>
                            <hr class="mt-2 mb-4">
                            <div class="formulario__mensaje my-3" id="formulario__mensaje">
                                <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                            </div>

                            <div class="text-start">
                                <button type="button" class="btn btn-success" id="corres_registro_btn"
                                    name="corres_registro_btn">Enviar</button>

                            </div>

                            <input type="hidden" id="correspondencia" readonly name="correspondencia"
                                value="registroCorres">
                            <div class="formulario__grupo" id="grupo__idEmpresa">
                                <input type="hidden" id="idEmpresa" readonly name="idEmpresa" class="formulario__input">
                            </div>


                        </form>
                    </div>
                </div>
            </div>
            <div class="container-fluid text-center px-5 mx-0 mb-0 ocultar-div" id="parte2">
                <div class="border-radius-15 py-3">
                    <div class="container-fluid text-center mx-2  p-2 bg-blanco border-radius-15 row">
                        <div class="px-5 pt-2 row bg-blanco">
                            <button type="button" class="boton_toast_ayuda d-inline " data-bs-toggle="modal"
                                data-bs-target="#mi-modal-ayuda2"><img src="../assets/intranet/pregunta.png"
                                    class="img_toast"></button>
                            <div class="col-auto">
                                <h2 class="pt-3">Correspondencia</h2>
                            </div>
                            <hr class="my-3">
                            <div id="tabla_correspondencia">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
    include('../php/barra_lateral.php');
    barra_lateral_corr();
    ?>
    <script src="../js/corresp_form_nuevo.js"></script>
    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- FILTRA LAS DIVISIONES Y DEPARTAMENTOS -->
    <script src="../js/division_select.js"></script>
    <!-- <script src="../js/departamento_select.js"></script> -->

    <script src="../js/editar_mostrar_datos.js"></script>
    <script src="../js/correspondencia.js"></script>

    <script src="../js/corresp_form_hideYshow.js"></script>
    <!-- EVITAR COLOCAR FECHAS FUTURAS -->
    <script>
        function validarFecha(fecha) {
            var fechaActual = new Date();
            var fechaIngresada = new Date(fecha);

            if (fechaIngresada > fechaActual) {
                fecha = fechaActual;
            }

            return fecha;
        }
    </script>

</body>


</html>