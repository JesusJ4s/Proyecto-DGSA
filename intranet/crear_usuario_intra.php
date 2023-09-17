<?php
// CREANDO UNA VARIABLE GLOBAL
session_start();
ob_start();
$_SESSION["paso2"] = 0;

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

    <?php
        include('../php/javascript.php');
    ?>
    <title>Crear Usuario</title>
</head>

<body class="m-0 p-0 min-width-index">
    <!-- Modal para mostrar información-->
    <div class="modal fade" id="RegistroUsr" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Notificación:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                    <!-- AQUÍ VA EL TÍTULO -->
                </div>
                <div class="modal-body" id="RegistroC">
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
            <div class="container d-flex justify-content-center">

                <form class=" box-shadow-intra rounded formulario__usr-crear row p-3 m-0 gap-0" method="POST"
                    id="formulario">
                    <!-- <div class="col-12 formulario__grupo text-center ">
                        <img src="../assets/logos/DGSA/intranet.jpg" alt="Intranet" class="w-35"> 
                    </div> -->

                    <!-- Grupo Usuario -->
                    <div class="col-4 formulario__grupo" id="grupo__usuario">
                        <div class="text-start">
                            <label class="ms-4 formulario__label p-0 pb-1" for="usuario">Usuario:</label>
                            <div class="ms-4" id="mostrar_mensaje_name"></div>
                            <div id="cositas" class="w-85 formulario__grupo-input">
                                <input type="text" class="form-control ms-4 formulario__input" placeholder="Marcos36"
                                    id="usuario" name="usuario" minlength="4" maxlength="16" onblur="verificar_name();"
                                    required pattern="[a-zA-Z0-9\_\-]">
                            </div>
                            <p class="formulario__input-error px-3">El usuario tiene que ser de 4 a 16 dígitos y solo
                                puede contener números, letras y guion bajo.</p>
                        </div>
                    </div>

                    <!-- Grupo Nombre -->
                    <div class="col-4 formulario__grupo " id="grupo__nombre">
                        <div class="text-start">
                            <label class="ms-4 formulario__label p-0 pb-1" for="nombre">Nombre:</label>
                            <div class="w-85 formulario__grupo-input">
                                <input type="text" class="form-control ms-4 formulario__input" placeholder="John"
                                    id="nombre" name="nombre" required pattern="[a-zA-ZÀ-ý\s]+">
                            </div>
                            <p class="formulario__input-error px-3">El nombre debe poseer solo letras.</p>
                        </div>
                    </div>

                    <!-- Grupo Apellido -->
                    <div class="col-4 formulario__grupo " id="grupo__apellido">
                        <div class="text-start">
                            <label class="ms-4 formulario__label p-0 pb-1" for="apellido">Apellido</label>
                            <div class="w-85 formulario__grupo-input">
                                <input type="text" class="form-control ms-4 formulario__input" placeholder="Herrera"
                                    id="apellido" name="apellido" required pattern="[a-zA-ZÀ-ý\s]+">
                            </div>
                            <p class="formulario__input-error px-3">El apellido debe poseer solo letras</p>
                        </div>
                    </div>

                    <!-- Grupo Nacionalidad -->
                    <div class="col-4 formulario__grupo " id="grupo__cedula">
                        <div class="text-start">
                            <!-- <label class="ms-4 formulario__label" for="nacionalidad">Nacionalidad</label> -->

                            <div class=" formulario__grupo-input">
                                <label class="ms-4 formulario__label  p-0 pb-1" for="cedula">Cedula</label>
                                <div class="ms-4" id="mostrar_mensaje_ci"></div>

                                <div class="row">
                                    <div class="col-4 ms-4">
                                        <select class="p-0 formulario__input" id="nacionalidad" name="nacionalidad"
                                            required>
                                            <option class="form-control ms-4 formulario__input" value="V">V</option>
                                            <option class="form-control ms-4 formulario__input" value="E">E</option>
                                        </select>
                                    </div>
                                    <div class="col-6 p-0">
                                        <div class="" id="mostrar_mensaje_ci"></div>
                                        <div class=" formulario__grupo-input">
                                            <input type="text" class="form-control formulario__input"
                                                placeholder="24146515" id="cedula" name="cedula"
                                                onblur="verificar_ci();" maxlength="9" minlength="7" required
                                                pattern="[0-9]+">
                                        </div>
                                    </div>
                                </div>
                                <p class="formulario__input-error px-3">La cédula debe ser de un máximo de 9 dígitos y
                                    un mínimo de 7</p>

                            </div>

                        </div>
                    </div>

                    <!-- Grupo PIN -->
                    <div class="col-4 formulario__grupo " id="grupo__pin">
                        <div class="text-start">
                            <label class="ms-4 formulario__label p-0 pb-1" for="pin">Pin de Seguridad</label>
                            <div class=" formulario__grupo-input ms-4">
                                <input type="password" class="form-control formulario__input d-inline w-55 my-1"
                                    placeholder="******" id="pin" name="pin" maxlength="6" minlength="4" required>

                                <button type="button" class="form-control btn btn-secondary  mb-1 d-inline w-35 px-1"
                                    onclick="toggleInput(this)">Mostrar</button>
                            </div>
                            <p class="formulario__input-error px-3">Ingrese un PIN para comprobaciones de seguridad. De
                                4 a 6 digitos, solo números.</p>
                        </div>
                    </div>


                    <!-- Grupo Contraseña -->
                    <div class="col-4 formulario__grupo " id="grupo__password">
                        <div class="text-start">
                            <label class="ms-4 formulario__label p-0 pb-1" for="contraseña">Contraseña:</label>
                            <div class="formulario__grupo-input ms-4">

                                <input class="form-control formulario__input w-55 d-inline " placeholder="********"
                                    type="password" id="contraseña" name="contraseña" minlength="8" maxlength="15"
                                    required>

                                <button type="button" class="text-center form-control btn btn-secondary mb-1 w-35 px-1"
                                    onclick="toggleInput(this)">Mostrar</button>

                            </div>
                            <p class="formulario__input-error px-3">La contraseña debe ser de 8 a 15 dígitos. Una letra
                                mayúscula, una minúscula, un dígito, un carácter especial. No espacios en blanco.</p>
                        </div>
                    </div>

                    <!-- Grupo Contraseña -->
                    <div class="col-4 formulario__grupo " id="grupo__password2">
                        <div class="text-start">
                            <label class="ms-4 formulario__label p-0 pb-1" for="password2">Repetir Contraseña:</label>
                            <div class="w-85 formulario__grupo-input">
                                <input class="form-control ms-4 formulario__input" placeholder="Repita la contraseña"
                                    type="password" id="password2" name="password2" minlength="8" maxlength="15"
                                    required>
                            </div>
                            <p class="formulario__input-error px-3">Ambas contraseñas deben ser iguales</p>
                        </div>
                    </div>

                    <!-- Grupo Telefono -->
                    <div class="col-4 formulario__grupo " id="grupo__telefono">
                        <div class="text-start">
                            <label class="ms-4 formulario__label p-0 pb-1" for="telefono">Teléfono</label>
                            <div class="w-85 formulario__grupo-input">
                                <input type="text" class="form-control ms-4 formulario__input"
                                    placeholder="0412-0008800" id="telefono" name="telefono">
                            </div>
                            <p class="formulario__input-error px-3">El número de teléfono solo puede contener números y
                                un guion. El máximo es de 11 dígitos. No obligatorio.</p>
                        </div>
                    </div>

                    <!-- Grupo Correo -->
                    <div class="col-4 formulario__grupo " id="grupo__correo">
                        <div class="text-start">
                            <label class="ms-4 formulario__label p-0 pb-1" for="email">Correo Electrónico:</label>
                            <div class="w-85 formulario__grupo-input">
                                <input type="email" class="form-control ms-4 formulario__input"
                                    placeholder="ejemplo@correo.com" id="correo" name="correo"
                                    pattern="[a-zA-Z0-9_.+-]+@[a-zA-Z]+\.[a-z]+">
                            </div>
                            <p class="formulario__input-error px-3">El correo solo puede contener letras, números,
                                puntos, guiones y guion bajo. No obligatorio.</p>
                        </div>
                    </div>
                    <!-- UBICACIÓN DE TRABAJO -->
                    <div class="col-12 row ms-2">

                        <div class="col-4 formulario__grupo " id="">
                            <label><b>Dirección</b></label>
                            <select class="form-select" aria-label="Default select example" id="direccion_select"
                                name="direccion_select">
                                <option value="0">-- Opciones --</option>
                                <?php
                                // BUSCAR LA INFORMACIÓN
                                include("../php/abrir_conexion.php");

                                $consulta = "SELECT * FROM $tabla_db5 WHERE id_direcciones <> 6";
                                $ejecutar = mysqli_query($conexion, $consulta) or die(mysqli_error($conexion));

                                include("../php/cerrar_conexion.php");
                                ?>
                                <!-- IMPRIMIRLA EN EL OPTION DE UN SELECT. ESTA PARTE VA DIRECTA EN EL HTML-->
                                <?php foreach ($ejecutar as $opciones): ?>
                                    <option value="<?php echo $opciones['id_direcciones'] ?>"><?php echo $opciones['nombre_dire'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-4 formulario__grupo " id="">
                            <label><b>División</b></label>
                            <div id="div_divisiones_select">
                                <select class="form-select" aria-label="Default select example" id='division_select'
                                    name='division_select'>
                                </select>
                            </div>
                        </div>
                        <div class="col-4 formulario__grupo " id="">
                            <label><b>Departamento</b></label>
                            <div id="div_dpto_select">
                                <select class="form-select" aria-label="Default select example" id='departamento_select'
                                    name='departamento_select'>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- TODO: -->
                    <input type="hidden" id="ingreso" name="ingreso" value="Registro">


                    <!-- Grupo botones de salida y envío -->
                    <div>

                        <!-- GRUPO: Terminos y condiciones -->
                        <div class="formulario__grupo m-0" id="grupo__terminos">
                            <label class="formulario__label p-0 pb-1">
                                <input class="formulario__checkbox" type="checkbox" name="terminos" id="terminos"
                                    value="1">
                                Acepto los Términos y Condiciones
                            </label>
                        </div>

                        <div class="formulario__mensaje" id="formulario__mensaje">
                            <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                        </div>
                        <div class="formulario__grupo formulario__grupo-btn-enviar m-0" id="finalUsr">
                            <button type="submit" class="btn btn-primary" id="registrar" name="registrar"
                                disabled>Registrar
                                Usuario</button>
                            <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado
                                correctamente</p>
                        </div>
                        <!-- BOTÓN DE SALIDA AL SEGUNDO PASO -->
                        <div id="div_paso2" class="ocultar-div">
                            <div class=" text-center my-auto" id="btn-paso2">
                                <a class="btn btn-primary my-auto" href="datos_extras_intra.php">Preguntas de
                                    Seguridad</a>
                            </div>
                        </div>


                        <!-- SALIDA -->
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-secondary my-auto" href="intranet.php">Volver</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <script src="../js/formulario.js"></script>
    <!-- VERIFICACIÓN DE LA CÉDULA Y EL NOMBRE DE USUARIO -->
    <script src="../js/verificacion_datos.js"></script>
    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="../js/editar_mostrar_datos.js"></script>

    <script type="text/javascript" src="../js/division_select.js"></script>
    <script type="text/javascript" src="../js/departamento_select.js"></script>


</body>

</html>