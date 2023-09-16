<?php
        // ESTA VARIABLE GLOBAL ANDA POR AHÍ
    // $_SESSION['cedula_var_global'];

    // USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
    include("../php/verificacion_login.php");
    LoginAdmin();

    $TitlePag = "Recuperación";
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
    
    <?php
        include('../php/javascript.php');
    ?>


    <title><?php echo $TitlePag ?></title>
</head>

<body class="min-width-index ">

    <!-- MODAL PARA MOSTRAR INFORMACIÓN -->
    <div class="modal fade" id="recuperacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5>Notificación:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <!-- AQUÍ VA EL TÍTULO -->
            </div>
            <div class="modal-body" id="recuperacionC">
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
            <div class="text-end d-inline mt-2 ms-3">
                <a href="gestion_usuario_recup.php"><img src="../assets/intranet/recargar.png" class="w-02"></a>
            </div>
        </div>

        <section class="w-85 mx-auto my-5">
            <!-- MODIFICAR CARGO CÓDIGO HTML -->
            <!-- BARRA DE EDICIONES -->
            <div class="px-2" id="parte1"> 
                
    

            <h2 class="">Usuario a Modificar:</h2>

                <div id="mostrar_mensaje_ci" class=" border-radius-15">
                    <!-- AQUÍ SE IMPRIME LA TABLA CUANDO SE BUSCA POR CÉDULA -->
                </div>
                <div id="formulario_mostrar_Cam" class="ocultar-div">
                    <form id="cambio_cargo" method="POST">

                        <div class="row mx-auto bg-blanco-hsl mt-2 p-3 border-radius-15">
                        <h4 class="mt-4">Datos del Trabajador:</h4>
                            <div class="col-2 my-2">
                                <label  class="formulario__label">Nombre:</label>
                                <input type="text" class="form-control" readonly id="nombreCargo" name="nombreCargo">                             
                            </div>
                            <div class="col-2 my-2">
                                <label  class="formulario__label">Cedula:</label>
                                <input type="text" class="form-control" readonly id="cedulaCargo" name="cedulaCargo">                               
                                <input class="form-control" type="hidden" id="cedulaid" name="cedulaid">                               
                            </div>
                            <div class="col-2 my-2">
                                <label  class="formulario__label">Usuario:</label>
                                <input type="text" class="form-control" readonly id="usuarioCargo" name="usuarioCargo">                               
                            </div>
                            <div class="col-5 my-2">
                                <div class="form-group text-start formulario__grupo" id="grupo__contraseña">
                                    <label for="contraseña" class="formulario__label">Contraseña: <i>Ingrese para cambiarla.</i></label>
                                    <input type="password" name="contraseña" id="contraseña" class="form-control w-50 d-inline formulario__input bg-secondary text-light" minlength="4" maxlength="16">
                                    <button type="button" class="form-control w-20 d-inline" onclick="toggleInput(this)">Mostrar</button>

                                    <p class="formulario__input-error px-3">La contraseña debe ser de 8 a 15 dígitos. Al menos una letra mayúscula. Al menos una letra minúscula. Al menos un dígito. No espacios en blanco. Al menos 1 caracter especial</p>
                                </div>                           
                            </div>
                            <div>
                                <button type="button" class="btn btn-success" id="verUSR" name="verUSR"  data-bs-toggle="modal" data-bs-target="#myModal_gestion">Cambiar contraseña del usuario</button>
                            </div>   
                                <!-- MODAL PARA MOSTRAR INFORMACIÓN SOBRE RECUPERACIÓN DE USUARIO -->
                                <div class="modal fade" id="myModal_gestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5>Verificación:</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body" id="myModal_gestionC">
                                            <div class="col-5 my-2 d-inline">
                                                <h6>Ingese su Pin de Seguridad:</h6>
                                                <p id="mensaje_contraseña"></p>
                                                <input class="form-control" type="password" id="pin_se" name="pin_se"  onkeyup="verificacion()">
                                            </div>
                                            <div class="col-5 my-2 d-inline">
                                                <p>Ingrese el Pin de seguridad para verificar el cambio de contraseña.</p>                  
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-success" id="aceptar" name="aceptar" disabled data-bs-dismiss="modal">Aceptar</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>  
                            <!-- TODO: -->
                            <input type="hidden" id="ingreso" name="ingreso" value="RecuperacionUSR">
                        </div>

                    </form>
                </div>

            </div>

            <!-- SEGUNDA TABLA (DATOS INDIVIDUALES) -->
            <div class="px-2 ocultar-div" id="parte2"> 


            </div>

        </section>
        

    
    <!-- ÚLTIMO DIV -->
    </div>
    </main>

    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
        include('../php/barra_lateral.php');
        barra_lateral_individual($TitlePag);
    ?>
    <script src="../js/consultar_usuario.js"></script>
    <script src="../js/formulario_cont_recuperacion.js"></script>

    <!-- MODIFICAR DATOS DURANTE LA EDICION -->
    <script src="../js/editar_mostrar_datos.js"></script>

</body>

    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>
</html>