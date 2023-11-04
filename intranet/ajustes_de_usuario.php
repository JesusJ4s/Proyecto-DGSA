<?php
        // ESTA VARIABLE GLOBAL ANDA POR AHÍ
    // $_SESSION['cedula_var_global'];

    // USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
    include("../php/verificacion_login.php");
    LoginSimple();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../js/reenvio.js"></script>

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

    <title>Modificar Datos</title>
</head>

<body class="min-width-index color-fondo" id="bodySesion">

    <!-- MODAL PARA MOSTRAR INFORMACIÓN -->
    <div class="modal fade" id="myModal_ajustes" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5>Notificación:</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
                <!-- AQUÍ VA EL TÍTULO -->
            </div>
            <div class="modal-body" id="myModal_ajustesC">
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- SPINNER QUE APARECE EN LA CARGA DE INFORMACIÓN -->
    <div class=" d-flex justify-content-center position-absolute top-50 start-50">
        <div class="ocultar-spinner spinner-border text-secondary" role="status">
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

        <section class="w-85 mx-auto mt-5">
            
            <!-- MODIFICAR USUARIO CÓDIGO HTML -->
            <!-- BARRA DE EDICIONES -->
            <div class="px-2" id="parte1">  
            
                <form id="formulario_ajustesUSR" method="post" action="" class="p-3 mb-4 bg-blanco box-shadow-plano border-radius-15">
                <h2 class="my-2 text-start">Modificar Usuario</h2>  
                    <h3>INFORMACIÓN DE LA CUENTA</h3>
                        <div class="form-group text-start my-2">
                            <label for="nombre" class="formulario__label">Nombre Completo</label>
                            <div>
                                <input type="text" name="nombre" id="nombre" class="form-control w-50 fondo-readonly-all d-inline formulario__input" readonly >
                                <img src="../assets/icon/multi/bloquear.png" class="position-relative iconos-modificacion pt-1">
                            </div>
                        </div>
                    <br>
                    <div class="contenedor-grid gap-5">
                        <div class="form-group text-start my-2 formulario__grupo" id="grupo__usuario">
                            <div id="mostrar_mensaje_name"></div>
                            <label for="usuario" class="d-block formulario__label">Nombre de Usuario</label>
                            <input type="text" name="usuario" id="usuario" class="form-control upper w-50 d-inline bg-secondary text-light formulario__input" onchange="verificar_name();" readonly required>

                            <button type="button" class="form-control w-20 d-inline" onclick="toggleInput2(this)">Editar</button>

                            <p class="formulario__input-error px-3">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener números, letras y guion bajo.</p>

                        </div>
                        <div class="text-start my-2 formulario__grupo" id="grupo__pinSeguridad">
                            <label for="pinSeguridad" class="d-block formulario__label">Pin de Seguridad</label>
                            <input type="password" name="pinSeguridad" id="pinSeguridad" class="w-50 d-inline formulario__input form-control bg-secondary text-light" required minlength="4" maxlength="6">

                            <button type="button" class="form-control w-20 d-inline" onclick="toggleInput(this)">Mostrar</button>

                            
                            <p class="formulario__input-error px-3">Ingrese un PIN para comprobaciones de seguridad. De 4 a 6 digitos, solo números.</p>

                        </div>
                        <div class="form-group text-start my-2 formulario__grupo" id="grupo__contraseña">
                            <label for="contraseña" class="formulario__label">Contraseña: <i>Debe ingresar una nueva si desea cambiarla.</i></label>
                            <input type="password" name="contraseña" id="contraseña" class="form-control w-50 d-inline formulario__input bg-secondary text-light" minlength="4" maxlength="16">

                            <button type="button" class="form-control w-20 d-inline" onclick="toggleInput(this)">Mostrar</button>

                            <p class="formulario__input-error px-3">La contraseña debe ser de 8 a 15 dígitos. Al menos una letra mayúscula. Al menos una letra minúscula. Al menos un dígito. No espacios en blanco. Al menos 1 caracter especial</p>

                            
                            <!-- <img src="../assets/icon/multi/visible.png" class="position-relative iconos-modificacion pt-1"> -->
                        </div>
                        <div class="text-start my-2 formulario__grupo" id="grupo__telefono">
                            <label for="telefono" class="d-block formulario__label">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" class="w-50 d-inline formulario__input form-control bg-secondary text-light" readonly>

                            <button type="button" class="form-control w-20 d-inline" onclick="toggleInput2(this)">Editar</button>

                            
                            <p class="formulario__input-error px-3">El número de teléfono solo puede contener números y el máximo es de 14 dígitos.</p>

                        </div>
                        <div class="form-group text-start my-2 formulario__grupo" id="grupo__telefono2">
                            <label for="telefono2"class="formulario__label">Teléfono secundario</label>
                            <input type="text" name="telefono2" id="telefono2" class="form-control d-inline w-50 formulario__input bg-secondary text-light" readonly>

                            <button type="button" class="form-control w-20 d-inline" onclick="toggleInput2(this)">Editar</button>

                            
                            <p class="formulario__input-error px-3">El número de teléfono solo puede contener números y el máximo es de 14 dígitos.</p>

                        </div>
                        <div class="form-group text-start my-2 formulario__grupo" id="grupo__correo">
                            <label for="correo" class="d-block formulario__label">Correo</label>
                            <input type="correo" name="correo" id="correo" class=" form-control w-50 d-inline formulario__input  bg-secondary text-light" readonly>

                            <button type="button" class="form-control w-20 d-inline" onclick="toggleInput2(this)">Editar</button>

                            <p class="formulario__input-error px-3">El correo solo puede contener letras, números, puntos, guiones y guion bajo.</p>
                            
                            
                        </div>
                        
                        <!-- <input type="hidden" id="ingreso" name="ingreso" value="AjustesUsr"> -->

                    </div>
                    <div class="formulario__mensaje" id="formulario__mensaje">
                        <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                    </div>
                    <div class="ocultar-class text-end pt-5">
                        <!-- <button type="button" class="btn btn-success" id="ver_ajustes" name="ver_ajustes">Revisar</button> -->
                        <button type="submit" class="btn btn-success" id="submit_ajustes" name="submit_ajustes">Enviar</button>
                    </div>
                </form>
            </div>





<!-- *********************************************************************************************************************************** -->

            <!-- PREGUNTAS DE SEGURIDAD -->
            <div class="px-2 ocultar-div" id="parte2">   
                <form method="post" class="p-3 mb-4 bg-blanco box-shadow-plano border-radius-15" id="AjustesPreguntas" action="">
                    <h2 class="my-2 text-start">Modificar Preguntas de Seguridad</h2>  
                    <!-- <h3>Preguntas de Seguridad</h3> -->
                    <br>
                    <div class="row gap-2">
                        <div class="col-4">
                            <label class="ms-4 formulario__label">Pregunta 1</label>
                            <select class="form-select" id="pregunta1" name="pregunta1">
                            <?php
                            
                                include("../php/abrir_conexion.php");
                                $idUSR = $_SESSION['id_usr'];

                                $consulta="SELECT * FROM $tabla_db1 us INNER JOIN $tabla_db2_1 pr ON us.id_pregunta1 = pr.id_pregunta WHERE id_usuario = '$idUSR'";
                                $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

                                include("../php/cerrar_conexion.php");
                            
                            ?>
                                <?php foreach ($ejecutar as $opciones): ?>

                                <option value="<?php echo $opciones['id_pregunta'] ?>"><?php echo $opciones['pregunta'] ?></option>

                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <div class="text-start">
                                <label class="ms-4 formulario__label" for="respuesta1">Respuesta</label>
                                <div class="w-85 formulario__grupo-input">
                                    <input type="text" class="form-control ms-4 formulario__input" placeholder="respuesta" id="respuesta_1" name="respuesta_1" required>     
                                </div>
                                <p class="formulario__input-error px-3">Responda a la pregunta con solo letras.</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <label class="ms-4 formulario__label">Pregunta 2</label>
                            <select class="form-select" id="pregunta1" name="pregunta1">
                            <?php
                            
                                include("../php/abrir_conexion.php");
                                $idUSR = $_SESSION['id_usr'];

                                $consulta="SELECT * FROM $tabla_db1 us INNER JOIN $tabla_db2_1 pr ON us.id_pregunta2 = pr.id_pregunta WHERE id_usuario = '$idUSR'";
                                $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

                                include("../php/cerrar_conexion.php");
                            
                            ?>
                                <?php foreach ($ejecutar as $opciones): ?>

                                <option value="<?php echo $opciones['id_pregunta'] ?>"><?php echo $opciones['pregunta'] ?></option>

                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <div class="text-start">
                                <label class="ms-4 formulario__label" for="respuesta2">Respuesta</label>
                                <div class="w-85 formulario__grupo-input">
                                    <input type="text" class="form-control ms-4 formulario__input" placeholder="respuesta" id="respuesta_2" name="respuesta_2" required>     
                                </div>
                                <p class="formulario__input-error px-3">Responda a la pregunta con solo letras.</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <label class="ms-4 formulario__label">Pregunta 3</label>
                            <select class="form-select" id="pregunta1" name="pregunta1">
                            <?php
                            
                                include("../php/abrir_conexion.php");
                                $idUSR = $_SESSION['id_usr'];

                                $consulta="SELECT * FROM $tabla_db1 us INNER JOIN $tabla_db2_1 pr ON us.id_pregunta3 = pr.id_pregunta WHERE id_usuario = '$idUSR'";
                                $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

                                include("../php/cerrar_conexion.php");
                            
                            ?>
                                <?php foreach ($ejecutar as $opciones): ?>

                                <option value="<?php echo $opciones['id_pregunta'] ?>"><?php echo $opciones['pregunta'] ?></option>

                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-6">
                            <div class="text-start">
                                <label class="ms-4 formulario__label" for="respuesta3">Respuesta</label>
                                <div class="w-85 formulario__grupo-input">
                                    <input type="text" class="form-control ms-4 formulario__input" placeholder="respuesta" id="respuesta_3" name="respuesta_3" required>     
                                </div>
                                <p class="formulario__input-error px-3">Responda a la pregunta con solo letras.</p>
                            </div>
                        </div>
                        
                        <input type="hidden" id="ingreso" name="ingreso" value="datosExtrAjustes">

                        
                        
                        
                    <div class="ocultar-class text-end">
                        <button type="submit" class="btn btn-success" id="extr_submit" name="extr_submit">Enviar</button>
                    </div>

                    <div class="formulario__mensaje" id="formulario__mensaje2">
                            <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                        </div>
                </form>
            </div>


        </section>
        

    
    <!-- ÚLTIMO DIV -->
    </div>
    </main>

    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
        include('../php/barra_lateral.php');
        barra_lateral_ajustes_usuario();
    ?>

    <!-- CÓDIGOS PARA LLENAR INPUTS Y LIMPIAR CONTRASEÑA -->
    <script src="../js/modificar_usuario.js"></script>
   <!-- VERIFICACIÓN DE LA CÉDULA Y EL NOMBRE DE USUARIO -->
    <script src="../js/verificacion_datos.js"></script>
    <!-- para verificar las casillas con JS -->
    <!-- <script src="../js/datos_extras.js"></script> -->


    <!-- MODIFICAR DATOS DURANTE LA EDICION -->
    <script src="../js/editar_mostrar_datos.js"></script>
    <!-- <script src="../js/editar_mostrar_datos_edi_usr.js"></script> -->

    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <!-- COMPRUEBA POR EXPRESIONES REGULARES LOS INPUTS PARA LUEGO PERMITIR SUBIR LOS DATOS -->
    <script src="../js/formulario_ajustes_usuario.js"></script>
</body>
    <?php
    include('../php/javascript_Footer.php');
    ?>

</html>