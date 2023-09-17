<?php
// CREANDO UNA VARIABLE GLOBAL
session_start();
ob_start();

if ($_SESSION["recuperar_contraseña"] <> 1) {

    header('location: ../intranet/intranet.php');

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

    <?php
        include('../php/javascript.php');
    ?>

    <title>Cambiar Contraseña</title>
</head>

<body class="m-0 p-0 min-width-index">
    <!-- Modal para mostrar información-->
    <div class="modal fade" id="CambioContr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Notificación:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="ContrC">
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
            <div class="contenedor-grid-3">
                <div></div>
                <div class="mx-auto">
                    <form class="p-4 text-center wh-login bg-blanco box-shadow-intra rounded" method="POST"
                        id="formulario_recuperar">



                        <div class="formulario__grupo mb-5" id="grupo__password">
                            <div class="text-start">
                                <label class="formulario__label" for="password">Contraseña:</label>
                                <div class=" formulario__grupo-input">

                                    <input class="form-control formulario__input" placeholder="********" type="password"
                                        id="contraseña" name="contraseña" minlength="8" maxlength="15" required>

                                    <button type="button"
                                        class="form-control btn btn-secondary my-2 mx-auto text-center"
                                        onclick="toggleInput(this)">mostrar</button>


                                </div>
                                <p class="formulario__input-error px-3">La contraseña debe ser de 8 a 15 dígitos. Al
                                    menos una letra mayúscula. Al menos una letra minúscula. Al menos un dígito. No
                                    espacios en blanco. Al menos 1 caracter especial</p>
                            </div>
                        </div>
                        <!-- Grupo Contraseña -->
                        <div class="formulario__grupo" id="grupo__password2">
                            <div class="text-start">
                                <label class="formulario__label" for="password2">Repetir Contraseña:</label>
                                <div class="formulario__grupo-input">
                                    <input class="form-control formulario__input" placeholder="Repita la contraseña"
                                        type="password" id="contraseña2" name="contraseña2" minlength="8" maxlength="15"
                                        required>
                                </div>
                                <p class="formulario__input-error px-3">Ambas contraseñas deben ser iguales</p>
                            </div>
                        </div>

                        <input type="hidden" id="ingreso" name="ingreso" value="cambio">


                        <!-- RECUPERACIÓN -->
                        <div class="formulario__grupo formulario__grupo-btn-enviar">
                            <button type="submit" class="text-center btn btn-primary my-3 w-100" id="cambiar"
                                name="cambiar" disabled>Cambiar contraseña</button>

                            <a class="btn btn-secondary mb-2" href="intranet.php">Volver</a>

                            <div id="respuesta"></div>

                        </div>

                    </form>
                </div>
                <div></div>
            </div>
        </div>
    </div>

    <script src="../js/recuperacion_final.js"></script>
    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="../js/editar_mostrar_datos.js"></script>



</body>

</html>