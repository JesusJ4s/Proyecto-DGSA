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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_soporte.css">
    <link rel="stylesheet" href="../css/gg3.css">
    <?php
        include('../php/javascript.php');
    ?>

    <title>Solicitudes</title>
</head>

<body class=" min-width-index color-fondo">

    <!-- MODAL TERMINOS DE SERVICIO (INFORMACIÓN) -->
    <div class="modal fade" id="mi-modal-ayuda" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Términos del Servicio:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>
                            Usted reconoce y acepta que estos <span class="bold">Términos y Condiciones</span>
                            constituyen el acuerdo completo y exclusivo entre la institución respecto al uso que usted
                            haga de la aplicación. y reemplaza y rige cualquier propuesta, acuerdo u otra comunicación
                            anterior.
                        </li><br>
                        <li>
                            Nos reservamos el derecho, según nuestro absoluto criterio, de cambiar estos <span
                                class="bold">Términos y Condiciones</span> en cualquier momento a través de la
                            publicación de dichos cambios en la aplicación y mediante avisos sobre éstos.
                        </li><br>
                        <li>
                            Todo cambio tendrá vigencia de forma inmediata luego de su publicación en la aplicación y el
                            aviso de dichos cambios. Si continúa usando la aplicación a partir de ese momento, se
                            interpretará como una aceptación de todos los <span class="bold">Términos y
                                Condiciones</span> que cambiaron.
                        </li><br>
                        <li>
                            Podemos, con o sin previo aviso, cancelar cualquier de los derechos otorgados por estos
                            <span class="bold">Términos y Condiciones</span>.
                        </li><br>
                        <li>
                            El hecho de que no requiramos que cumpla con cualquier estipulación descrita en este
                            documento no afectará nuestros derechos de requerir dicho cumplimiento en cualquier momento:
                            ni se debe interpretar la exención de un incumplimiento de cualquier estipulación
                            establecida en este documento como una renuncia de la estipulación en si.
                        </li><br>
                        <li>
                            En caso de que cualquier estipulación de estos Términos y Condiciones no sea ejecutable o
                            sea inválida conforme a cualquier ley aplicable o así se establezca en un fallo judicial o
                            decisión de arbitraje aplicable, dicho carácter de inejecutabilidad o invalidez no
                            significará la inejecutabilidad o invalidez de estos <span class="bold">Términos y
                                Condiciones</span> por completo, en cambio la entidad adjudicada modificará estos <span
                                class="bold">Términos y Condiciones</span>. en la medida de lo posible. para que
                            reflejen completamente la intención original de las partes según lo reflejado en la
                            estipulación original.
                        </li>
                    </ol>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

    <!-- MODAL PARA MOSTRAR SOLUCITUD EXITOSA-->
    <div class="modal fade" id="InfoGeneral" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Notificación:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="InfoGeneralC">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <header id="inicio-pag" class="caja-superior mx-4">
        <?php
        include('../php/logos_intranet.php')
            ?>
    </header>
    <main class="">
        <div class="container-fluid mt-5 mb-4 py-2  border-radius-15">
            <div class="w-95 mx-auto bg-blanco px-3 box-shadow-plano border-radius-15">
                <div class="ms-3">
                    <a href="soporte_tecnico.php" class="d-inline text-dark enlaces_limpios2"><u>Inicio</u></a><span
                        class="d-inline"> / </span><a class="d-inline text-dark enlaces_limpios2"
                        href="soporte_tecnico_solicitud.php"><u>Registrar Solicitud</u></a>
                </div>
                <div class="d-flex flex-row-reverse">


                    <button class="btn btn-primary ms-0" onclick="cambio2();cambioPesta2();" id="botonCambiar2"
                        name="botonCambiar2"><img src="../assets/icon/multi/lista_white.png"
                            class="wh-icon-solicitud me-2 mb-1">Seguimiento</button>
                    <button class="btn btn-primary mx-0 me-1" onclick=" cambio1();cambioPesta1();" id="botonCambiar1"
                        name="botonCambiar1"><img src="../assets/icon/multi/cruz_white.png"
                            class="wh-icon-solicitud me-2 mb-1">Aperturar</button>
                    <a href="soporte_tecnico.php" class="btn btn-primary mx-0 me-1 botones-solicitud"><img
                            src="../assets/icon/multi/atras_white.png" class="wh-icon-solicitud me-2 mb-1">Volver</a>
                </div>
                <!-- PHP QUE REGISTRA LA SOLICITUD -->
                <div class="soft-grey">

                    <div class="border mt-3 ocultar-div" id="parte1">
                        <div>
                            <h3 class="m-0 py-4 ps-2 bg-blanco">Registro de Solicitud</h3>
                        </div>
                        <hr class="m-0">
                        <!-- FORMULARIO -->
                        <form class="m-0" method="post"id="formulario_solicitud_sopor" action="">
                            <div class="m-0 py-3 row">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Uso del Equipo</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#toast1"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast1" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">USO</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Indique si el ordenador es propio o pertenece a la institución.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <input type="radio" class="btn-check" name="equipo_propiedad" id="uso_oficial"
                                        autocomplete="off" value="1" required onclick=" habilitar();">
                                    <label class="btn btn-outline-primary" for="uso_oficial">Uso Oficial</label>
    
                                    <input type="radio" class="btn-check" name="equipo_propiedad" id="uso_personal"
                                        autocomplete="off" value="2" required onclick=" habilitar();">
                                    <label class="btn btn-outline-primary" for="uso_personal">Uso Personal</label>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="m-0 py-3 row bg-blanco">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Nombre del Equipo</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#toast2"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast2" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Nombre del Equipo</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Su ordenador debe estar registrado en el sistema, coloque el nombre del equipo.
                                        </div>
                                    </div>
                                </div>
                                <!-- TODO: -->
                                <div class="col-9 formulario__grupo-input">
                                    <input pattern="[0-9a-zA-Z]+" type="text"
                                        class="bg-light border-black w-20 form-control d-inline" id="name_edit"
                                        name="name_edit" required>
                                    <button type="button" class="btn2 btn-secondary mb-1" onclick="ver_equipo_soporte();"
                                        name="boton_buscar" id="boton_buscar">Buscar</button>
                                    <!-- <input name="mac_mostrar" id="mac_mostrar" type="text"> -->
    
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="m-0 py-3 row">
                                <div class="col-2">
    
                                    <p class="my-auto d-inline bold col-2">Dirección:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#toast3"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast3" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Dirección</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Aquí se muestra la dirección a la que pertenece el ordenador.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <input class="btn2 bg-light w-50" id="direccion_mostrar" name="direccion_mostrar"
                                        readonly>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="m-0 py-3 row bg-blanco">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Division:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#toast4"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast4" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">División</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Aquí se muestra la división donde se encuentra el ordenador.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <input class="btn2 bg-light w-50" id="division_mostrar" name="division_mostrar"
                                        readonly>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="m-0 py-3 row ">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Departamento:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#toast5"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast5" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Departamento</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Aquí se muestra el departamento donde se encuentra el ordenador.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <input class="btn2 bg-light w-50" id="depto_mostrar" name="depto_mostrar" readonly>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="m-0 row bg-blanco py-3">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Bien Nacional:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#toast6"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast6" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Bien Nacional</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Identificador del equipo como Bien de la Nación, suele estár colocado a uno de
                                            los lados del equipo.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <input class="btn2 bg-light w-75" id="BN_equipo_mostrar" name="BN_equipo_mostrar"
                                        readonly>
                                </div>
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2 text-end">Serial:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#toast7"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast7" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Serial</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Número de serie del equipo, colocado en la etiqueta de fabrica del mismo.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <input class="btn2 bg-light w-75" id="serial_equipo_mostrar"
                                        name="serial_equipo_mostrar" readonly>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="m-0 row py-3">
                                <div class="col-2">
                                    <p class="my-auto d-inline bold col-2">Nivel de Soporte:</p>
                                    <button type="button" class="boton_toast d-inline "><img
                                            src="../assets/intranet/pregunta.png" class="img_toast"
                                            data-toast="#toast8"></button>
                                    <!-- TOAST -->
                                    <div class="toast position-absolute bg-secondary" role="alert" aria-live="assertive"
                                        aria-atomic="true" id="toast8" data-bs-delay="4000">
                                        <div class="toast-header">
                                            <!-- <img src="..." class="rounded me-2" alt="..."> -->
                                            <strong class="me-auto">Nivel de Soporte</strong>
                                            <!-- <small>11 mins ago</small> -->
                                            <button type="button" class="btn-close" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="toast-body text-white">
                                            Indique si necesita soporte de Software: falla en alguna aplicación o al iniciar
                                            windows; o Hardware: el equipo no enciende o hace ruidos extraños. En caso de no
                                            saber, seleccione una de las 2 y explique en la caja de comentario lo que le
                                            ocurre.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <input type="radio" class="btn-check" name="nivel_soporte" id="nivel_soft"
                                        autocomplete="off" value="1" required onclick=" habilitar();">
                                    <label class="btn btn-outline-primary" for="nivel_soft">Nivel Software</label>
    
                                    <input type="radio" class="btn-check" name="nivel_soporte" id="nivel_hard"
                                        autocomplete="off" value="2" required onclick=" habilitar();">
                                    <label class="btn btn-outline-primary" for="nivel_hard">Nivel Hardware</label>
                                </div>
                            </div>
    
                            <hr class="m-0">
                            <div class="m-0 row bg-blanco py-2">
                                <p class="my-auto bold col-2">Descripción</p>
                                <div class="col-9 ">
                                    <div class="bg-amarillito text-dark border-radius-15 p-3 my-2" role="">
                                        Por favor escriba en letras versales. <i>Ej. Su descripción es necesaria para
                                            resolver el problema.</i>
                                    </div>
                                    <div>
                                        <textarea class="bg-blanco-hsl" id="descripcion" name="descripcion" minlength="15"
                                            maxlength="200" onfocus="habilitar();" required></textarea>
                                        <div id="charCount"></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="my-1 ms-3 row py-2">
                                <div class="col-2">
    
                                </div>
                                <div class="col-9 py-2 formulario__grupo" id="grupo__terminos">
                                    <label class="formulario__label"></label>
                                    <input type="checkbox" class="formulario__checkbox" name="terminos" id="terminos"
                                        value="1" required onclick=" habilitar();">
                                    
                                    <button type="button" class="btn border-0" data-bs-toggle="modal"
                                        data-bs-target="#mi-modal-ayuda">
                                        Acepto los <span class="text-primary">Términos del Servicio</span>
                                    </button>
                                </div>
                            </div>
                            <hr class="m-0">
    
                            <input id="buscar_soporte" name="buscar_soporte" value="RegisSoli" type="hidden" readonly>
    
                            <div class="m-0 row bg-blanco py-2">
                                <div class="col-2">
    
                                </div>
                                <div class="col-9">
                                    <button type="submit" class="btn btn-primary" id="registrar" name="registrar"
                                        disabled>Enviar</button>
                                </div>
                            </div>
                            <input name="id_del_equipo" id="id_del_equipo" type="hidden">
                        </form>
                    </div>
                </div>
                <!-- *************************************************************************************************************************** -->
                <!-- ESTA ES LA PESTAÑA DE SEGUIMIENTO - DONDE COLOCAREMOS LOS REGISTROS HECHOS -->
                <div class="mt-3 ocultar-div " id="parte2">
                    <div class="accordion" id="accordionSoliSoport">

                        <div class="px-2">
                            <h3 class="text-start mt-4"><u>Solicitudes</u></h3>
                            <div class="my-3 text-start">
                                <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSolicitudes" aria-expanded="true"
                                    aria-controls="collapseSolicitudes">
                                    <b>Solicitudes - Proceso</b>
                                </button>
                                <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFinalizadas" aria-expanded="true"
                                    aria-controls="collapseFinalizadas">
                                    <b>Solicitudes - Finalizadas</b>
                                </button>
                            </div>

                            <div class="accordion-collapse collapse show" id="collapseSolicitudes"
                                aria-labelledby="headingOne" data-bs-parent="#accordionSoliSoport">
                                <div class="accordion-body" aria-expanded="true">
                                    <h3 class="text-center p-2 mb-3">Soportes solicitados</h3>
                                    <div id="mostrar_soportes_basico" class="bg-blanco p-2 border-radius-15">

                                    </div>
                                </div>
                            </div>
                            <hr class="my-3">

                            <!-- SOPORTES FINALIZADOS -->
                            <div class="accordion-collapse collapse" id="collapseFinalizadas"
                                aria-labelledby="headingOne" data-bs-parent="#accordionSoliSoport">
                                <div class="accordion-body" aria-expanded="true">
                                    <h3 class="text-center p-2 mb-3">Soportes Finalizados</h3>
                                    <div id="mostrar_soportes_Conocimiento" class="bg-blanco p-2 border-radius-15">

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="ocultar-div" id="parte3"></div>
                <div class="ocultar-div" id="parte4"></div>
            </div>
        </div>

    </main>



    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>

    <!-- PERMITE LLENAR CASILLAS RELACIONADAS AL EQUIPO A TRAVÉS DEL NOMBRE DE USUARIO -->
    <script src="../js/consulta_equipos.js"></script>
    <!-- CONSULTA DE LOS SOPORTES DEL SISTEMA -->
    <script src="../js/consultar_soportes.js"></script>


    <script src="../js/editar_mostrar_datos.js"></script>

    <script>
        function habilitar() {

            if (depto_mostrar.value.length > 0) {
                // PERTECE A SOPORTE TÉCNICO, QUITA EL ATRIBUTO DISABLED DEL BOTÓN DE ENVIAR
                registrar.removeAttribute('disabled');
            } else {
                registrar.setAttribute('disabled', 'disabled');

            }
        }
        // USADO PARA CAMBIAR PESTAÑAS Y BLOQUEARLAS DEPENDIENDO DE LA SELECCIONADA
        function cambio1() {
            document.getElementById("botonCambiar1").disabled = true;
            document.getElementById("botonCambiar2").disabled = false;
        }
        function cambio2() {
            document.getElementById("botonCambiar2").disabled = true;
            document.getElementById("botonCambiar1").disabled = false;

        }
    </script>
    <script>
        var toastButtons = document.querySelectorAll('[data-toast]');
        toastButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var target = this.getAttribute('data-toast');
                var toast = new bootstrap.Toast(document.querySelector(target));
                toast.show();
            });
        });

    </script>
    <script src="../js/consultar_soportes_ingreso.js"></script>
</body>
<?php
    include('../php/javascript_Footer.php');
    ?>
</html>