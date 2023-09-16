<?php
// CREANDO UNA VARIABLE GLOBAL
    session_start();
    ob_start();
    //Comprobante para las preguntas de seguridad durante el registro
    $_SESSION["paso2"]=0;
    //Permite llegar al segundo paso de la recuperación
    $_SESSION["recuperar_contraseña"]=0;
    //Almacena la cedula durante la recuperación
    $_SESSION["comprobante"]=0;
$_SESSION['sesion_exito'] = 0; //error 4 cerro sesion exitosamente

?>
<script src="../js/reenvio.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/style_usr.css">

        <script src="../jquery/jquery-3.6.4.min.js"></script>

    <title>Login</title>
</head>
<body class="m-0 p-0 min-width-index">

    <!-- Modal para mostrar información-->
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5>Notificación:</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
                <!-- AQUÍ VA EL TÍTULO -->
            </div>
            <div class="modal-body" id="LoginModalC">
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>


<div class="m-0 p-0 background-intra-login">
    <div class="container-fluid position-absolute"> 
        
        
<!-- ******************************************************* -->
        <div class="contenedor-grid">
            <div class="text-end">
                <img src="../assets/logos/DGSA/Imagen1.png" alt="Intranet" class="wh-logo-intranet">
            </div>
            <div class="mx-auto"> 
                <div class="text-center wh-login bg-blanco box-shadow-intra rounded">                           
                    <form class="text-center" method="POST" id="formularioIngreso">
                        <img src="../assets/logos/DGSA/intranet.jpg" alt="Intranet" class="w-65"> 
                        
                        <h6>Inicie Sesion</h6> 
                        <div class=" formulario__grupo"  id="grupo__usuario">
                            <div class="text-start">
                                <label class="ms-4 formulario__label" for="usuario">Usuario:</label>
                            </div>
                            <div class="w-85 formulario__grupo-input">
                                <input class="form-control ms-4 formulario__input" placeholder="Usuario" id="usuario" name="usuario" required maxlength="16">    
                            </div>
                        </div>
                        <div class="formulario__grupo"  id="grupo__password">
                            <div class="text-start">
                                <label class="ms-4 formulario__label" for="contraseña">Contraseña:</label>
                            </div>
                            <div class="w-85  formulario__grupo-input">
                                <input class="form-control ms-4 formulario__input" placeholder="********" type="password" id="contraseña" name="contraseña" required maxlength="15" minlength="4">
                            </div>
                        </div>
                        <input type="hidden" id="ingreso" name="ingreso" value="log">

                        <div class="col-12 mt-1">
                            <button type="submit" class="btn btn-primary me-5" id="ingresar" name="ingresar">Iniciar Sesion</button>
                            <div class="d-inline ms-5"></div>
                                <a class="btn btn-secondary" href="../index.php">Volver</a>
                            </div>
                            <div class="text-start ms-3 mt-4">
                                <a class="" href="crear_usuario_intra.php">Crear Usuario</a>
                            </div>
                            <div class="text-start ms-3">
                                <a class="" href="recuperacion.php">Olvide mi contraseña</a>
                            </div>
                        </div>
                    </form>
                </div> 
            </div>
        </div> 
    </div>
</div>

<!-- <script src="../js/login.js"></script> -->

<script src="../js/login2.js"></script>


    <!-- JS en Bootstrap -->
<script src="../js/bootstrap.bundle.min.js"></script>

</body>
</html>