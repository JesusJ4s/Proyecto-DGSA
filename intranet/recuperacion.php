<?php
// CREANDO UNA VARIABLE GLOBAL
session_start();
ob_start();

//COMPROBANTE DE QUE PASÓ EL PASO 1
$_SESSION["recuperar_contraseña"] = 0;
//ESTO CONTENDRÁ LA CEDULA 
$_SESSION["comprobante"] = 0;

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
    <link rel="stylesheet" href="../css/style_usr.css">

    <script src="../jquery/jquery-3.6.4.min.js"></script>


    <title>Recuperar Usuario</title>
</head>

<body class="m-0 p-0 min-width-index">
    <!-- Modal para mostrar información-->
    <div class="modal fade" id="CambCont" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Notificación:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="CambioC">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="background-intra-login m-0 p-0">
        <div class="container-fluid position-absolute">
            <!-- ******************************************************* -->
            <div class="container d-flex justify-content-center gap-0">

                <form class="text-center box-shadow-intra rounded formulario__usr-crear row p-4" method="post"
                    id="recuperacion">
                    <h3 class="m-0" id="title_recuperacion">Para recuperar su usuario, ingrese sus datos</h3>
                    <!-- Grupo Cedula -->
                    <div class="col-6">
                        <div class="formulario__grupo m-0" id="grupo__cedula">
                            <div class="text-start">
                                <label class="ms-4 formulario__label w-50 p-0" for="cedula">Cedula</label>
                                <div class="ms-4" id="mostrar_mensaje_ci"></div>
                                <div class="w-85 formulario__grupo-input" id="div_cedula">
                                    <input type="text" class="form-control ms-4 formulario__input w-65" id="cedula"
                                        name="cedula" placeholder="*Obligatoria*" maxlength="9" minlength="7" required
                                        onblur="ListPreg();">
                                </div>
                                <p class="formulario__input-error px-3">La cédula debe ser de un máximo de 9 dígitos y
                                    un
                                    mínimo de 7</p>
                            </div>
                        </div>
                        <!-- Grupo botones de salida y envío -->
                        <div class="formulario__grupo formulario__grupo-btn-enviar d-flex justify-content-start">
                            <button type="submit" class="btn btn-primary btn-lg" id="verificar"
                                name="verificar">Verificar</button>
                            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado
                                correctamente</p>

                            <div class='container-fluid text-center ocultar-div' id="div_cambiar"><a id='cambiar'
                                    class='btn btn-secondary mt-2' href='recuperacion_contr.php'>Cambiar Contraseña</a>
                            </div>

                            <a id="salir" class="btn btn-secondary mt-2" href="intranet.php">Volver</a>
                        </div>
                    </div>
                    <div class="col-6">
                        <!-- PREGUNTA 1 -->
                        <div class="col-10 formulario__grupo m-0" id="">
                            <div class="text-start">
                                <label class="ms-4 formulario__label" for="pregunta1">Pregunta 1:</label>
                                <select class="form-select" id="pregunta1" name="pregunta1">
                                    <option value="0">-- opciones --</option>

                                </select>
                                <!-- <input id="pregunta1" name="pregunta1" readonly> -->

                            </div>
                        </div>

                        <!-- RESPUESTA1 -->
                        <div class="col-10 formulario__grupo m-0" id="grupo__respuesta1">
                            <div class="text-start">
                                <label class="ms-4 formulario__label" for="respuesta1">Respuesta:</label>
                                <div class="w-85 formulario__grupo-input">
                                    <input type="text" class="form-control ms-4 formulario__input"
                                        placeholder="respuesta" id="respuesta_1" name="respuesta_1" required
                                        pattern="[a-zA-ZÀ-ý%\s]+" minlength="3" maxlength="18">
                                </div>
                                <p class="formulario__input-error px-3">Responda a la pregunta con solo letras.</p>
                            </div>
                        </div>

                        <!-- PREGUNTA 2 -->
                        <div class="col-10 formulario__grupo m-0" id="">
                            <div class="text-start">
                                <label class="ms-4 formulario__label" for="pregunta2">Pregunta 2:</label>
                                <select class="form-select" id="pregunta2" name="pregunta2">
                                    <option value="0">-- opciones --</option>
                                </select>
                                <!-- <input id="pregunta2" name="pregunta2" readonly> -->
                            </div>
                        </div>

                        <!-- RESPUESTA 2 -->
                        <div class="col-10 formulario__grupo m-0" id="grupo__respuesta2">
                            <div class="text-start">
                                <label class="ms-4 formulario__label" for="respuesta2">Respuesta</label>
                                <div class="w-85 formulario__grupo-input">
                                    <input type="text" class="form-control ms-4 formulario__input"
                                        placeholder="respuesta" id="respuesta_2" name="respuesta_2" required>
                                </div>
                                <p class="formulario__input-error px-3">Responda a la pregunta con solo letras.</p>
                            </div>
                        </div>

                    </div>

                    <!-- TODO: -->
                    <input type="hidden" id="ingreso" name="ingreso" value="verificacion">

                </form>

            </div>
        </div>
    </div>
    <!-- para verificar las casillas con JS -->
    <!-- <script src="../js/datos_extras.js"></script> -->
    <script src="../js/preguntas_seguridad.js"></script>

    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="../js/recuperacion.js"></script>

</body>

</html>