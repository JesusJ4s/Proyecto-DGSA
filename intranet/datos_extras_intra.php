<?php
// CREANDO UNA VARIABLE GLOBAL
session_start();
ob_start();

// va un 1
if ($_SESSION['paso2'] <> 1) {

    header('location: intranet.php');
}

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

    <title>Datos Extra</title>
</head>

<body class="m-0 p-0 min-width-index">
    <div class="background-intra-login m-0 p-0">

        <!-- MODAL CON INFORMACIÓN DE COMO MOVERSE POR EL FORMULARIO -->
        <div class="modal fade" id="mi-modal-ayuda">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>información:</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p class="sangria text-justify">
                            En esta pestaña debe proceder a ingresar los datos restantes para finalizar la creación del
                            usuario, esta opción también está habilitada en la pestaña "Mi Cuenta". Por favor registrar
                            sus preguntas de seguridad:
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal para mostrar información-->
        <div class="modal fade" id="RegistroPre" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Notificación:</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                        <!-- AQUÍ VA EL TÍTULO -->
                    </div>
                    <div class="modal-body" id="RegistroPreC">
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <!-- ******************************************************* -->

            <form class="text-center box-shadow-intra rounded formulario__usr-crear row p-5" method="POST"
                id="formulario_preguntas">
                <!-- <div class="col-6 formulario__grupo">
                    <img src="../assets/logos/DGSA/intranet.jpg" alt="Intranet" class="w-35">
                </div> -->
                <div class=" text-start row">
                    <button type="button" class="boton_toast_ayuda d-inline " data-bs-toggle="modal"
                        data-bs-target="#mi-modal-ayuda"><img src="../assets/intranet/pregunta.png"
                            class="img_toast"></button>
                    <div class="align-middle col-auto">

                        <h3 class="">Preguntas de Seguridad</h3>
                    </div>
                </div>
                <br>
                <!-- Grupo color favorito -->
                <div class="col-6 formulario__grupo" id="">
                    <div class="text-start">
                        <label class="ms-4 formulario__label" for="pregunta1">Pregunta 1:</label>
                        <select class="form-select" id="pregunta1" name="pregunta1">
                            <option value="0">-- opciones --</option>
                            <?php
                            include("../php/abrir_conexion.php");

                            $consulta = "SELECT * FROM $tabla_db2_1";
                            $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                            include("../php/cerrar_conexion.php");
                            ?>
                            <?php foreach ($ejecutar as $opciones): ?>
                                <option value="<?php echo $opciones['id_pregunta'] ?>">
                                    <?php echo $opciones['pregunta'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <br>
                <!-- Grupo color favorito -->
                <div class="col-6 formulario__grupo" id="grupo__respuesta1">
                    <div class="text-start">
                        <label class="ms-4 formulario__label" for="respuesta1">Respuesta:</label>
                        <div class="w-85 formulario__grupo-input">
                            <input type="text" class="form-control ms-4 formulario__input" placeholder="respuesta"
                                id="respuesta1" name="respuesta1" required pattern="[a-zA-ZÀ-ý%\s]+" minlength="3"
                                maxlength="18">
                        </div>
                        <p class="formulario__input-error px-3">Responda a la pregunta con solo letras.</p>
                    </div>
                </div>
                <br>
                <!-- Grupo lugar_nacimiento -->
                <div class="col-6 formulario__grupo" id="">
                    <div class="text-start">
                        <label class="ms-4 formulario__label" for="pregunta2">Pregunta 2:</label>
                        <select class="form-select" id="pregunta2" name="pregunta2">
                            <option value="0">-- opciones --</option>
                            <?php
                            include("../php/abrir_conexion.php");

                            $consulta = "SELECT * FROM $tabla_db2_1";
                            $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                            include("../php/cerrar_conexion.php");
                            ?>
                            <?php foreach ($ejecutar as $opciones): ?>
                                <option value="<?php echo $opciones['id_pregunta'] ?>">
                                    <?php echo $opciones['pregunta'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <br>
                <!-- Grupo lugar_nacimiento -->
                <div class="col-6 formulario__grupo" id="grupo__respuesta2">
                    <div class="text-start">
                        <label class="ms-4 formulario__label" for="respuesta2">Respuesta</label>
                        <div class="w-85 formulario__grupo-input">
                            <input type="text" class="form-control ms-4 formulario__input" placeholder="respuesta"
                                id="respuesta2" name="respuesta2" required>
                        </div>
                        <p class="formulario__input-error px-3">Responda a la pregunta con solo letras.</p>
                    </div>
                </div>
                <br>
                <!-- Grupo fruta_favorita -->
                <div class="col-6 formulario__grupo" id="">
                    <div class="text-start">
                        <label class="ms-4 formulario__label" for="pregunta3">Pregunta 3:</label>
                        <select class="form-select" id="pregunta3" name="pregunta3">
                            <option value="0">-- opciones --</option>
                            <?php
                            include("../php/abrir_conexion.php");

                            $consulta = "SELECT * FROM $tabla_db2_1";
                            $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                            include("../php/cerrar_conexion.php");
                            ?>
                            <?php foreach ($ejecutar as $opciones): ?>
                                <option value="<?php echo $opciones['id_pregunta'] ?>">
                                    <?php echo $opciones['pregunta'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <br>
                <!-- Grupo fruta_favorita -->
                <div class="col-6 formulario__grupo" id="grupo__respuesta3">
                    <div class="text-start">
                        <label class="ms-4 formulario__label" for="respuesta3">Respuesta</label>
                        <div class="w-85 formulario__grupo-input">
                            <input type="text" class="form-control ms-4 formulario__input" placeholder="respuesta"
                                id="respuesta3" name="respuesta3" required>
                        </div>
                        <p class="formulario__input-error px-3">Responda a la pregunta con solo letras.</p>
                    </div>
                </div>
                <br>
                <!-- Grupo Telefono -->
                <div class="col-6 formulario__grupo" id="grupo__telefono">
                    <div class="text-start">
                        <label class="ms-4 formulario__label" for="telefono">Teléfono Secundario</label>
                        <div class="w-85 formulario__grupo-input">
                            <input type="text" class="form-control ms-4 formulario__input" placeholder="0412-0008800"
                                id="telefono" name="telefono">
                        </div>
                        <p class="formulario__input-error px-3">El número de teléfono solo puede contener números y el
                            máximo es de 14 dígitos. No obligatorio.</p>
                    </div>
                </div>
                <div class="col-6 mt-3">
                    <div class="formulario__grupo formulario__grupo-btn-enviar">
                        <button type="submit" class="text-center btn btn-primary" id="registrar_extras"
                            name="registrar_extras">Ingresar Datos</button>
                        <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado
                            correctamente
                        </p>
                        <a id="salir" class="btn btn-secondary" href="intranet.php">Volver</a>

                    </div>
                </div>
                <!-- TODO: -->
                <input type="hidden" id="ingreso" name="ingreso" value="DatosExtras">

                <div class="formulario__mensaje" id="formulario__mensaje">
                    <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                </div>
                <!-- Grupo botones de salida y envío -->


                <div id="texto_obligatorio">
                    <p class="text-danger text-start ocultar-div" id="obligatorio">*Obligatorias*</p>
                </div>
            </form>


        </div>
    </div>
    <!-- para verificar las casillas con JS -->
    <script src="../js/formulario_reg_pregu.js"></script>

    <!-- <script src="../js/recuperacion.js"></script> -->


    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>

</body>

</html>