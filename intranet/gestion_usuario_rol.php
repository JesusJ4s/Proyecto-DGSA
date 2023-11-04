<?php
        // ESTA VARIABLE GLOBAL ANDA POR AHÍ
    // $_SESSION['cedula_var_global'];

    // USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
    include("../php/verificacion_login.php");
    LoginAdmin();

    $TitlePag = "Asignación de Rol";
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

<body class="min-width-index color-fondo">

    <!-- MODAL PARA MOSTRAR INFORMACIÓN -->
    <div class="modal fade" id="myModal_gestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5>Notificación:</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
                <!-- AQUÍ VA EL TÍTULO -->
            </div>
            <div class="modal-body" id="myModal_gestionC">
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- SEGURO DEBA SER BORRADO POR QUE YA HAY UNO ARRIBA -->
    <div class="modal fade" id="cambioStatus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Notificación:</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>
            <div class="modal-body" id="cambioStatusC">
                <p>Si desea activar al usuario otra vez, presione <i>Activar</i>; tenga en cuenta que deberá cambiar el <b>rol</b> del usuario para permitirle acceso al sistema, dependiendo del área y permisos que posea como empleado de la Institución.</p>
                <input class="form-control" id="datosInpCed" type="hidden">
                <input class="form-control" id="datosInpStat" type="hidden">
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" id="activarUsr" data-bs-dismiss="modal">Activar Usuario</button>
                <button class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
        
        <section class="w-85 mx-auto mt-5 mb-5 bg-blanco box-shadow-plano border-radius-15">
            <div class="row">
                <div class="col-4 mt-3 mb-3 ms-3">
                    <a href="gestion_usuario_rol.php"><img src="../assets/intranet/recargar.png" class="w-10"></a>
                </div>
            </div>

           
            <div class="px-2" id="parte1"> 
                <div class="accordion" id="accordionROL">

                    <div class="my-3 text-start">
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseRegistrados" aria-expanded="true" aria-controls="collapseRegistrados">
                            <b>Registrados</b>
                        </button>
                        <button class="btn btn-outline-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNOconfirmados" aria-expanded="true" aria-controls="collapseNOconfirmados">
                            <b>Usuarios no confirmados</b>
                        </button>
                    </div>
                    <div class="accordion-collapse collapse show" id="collapseRegistrados" aria-labelledby="headingOne" data-bs-parent="#accordionROL">
                        <div class="accordion-body"  aria-expanded="true">
                            <div id="tablaConAccs">
                                <h2 class="">Usuarios del sistema</h2>
                                
                                <div id="tabla_usuarios" class="bg-blanco p-2">
                                    <!-- AQUÍ SE IMPRIME LA TABLA -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-collapse collapse" id="collapseNOconfirmados" aria-labelledby="headingOne" data-bs-parent="#accordionROL">
                        <div class="accordion-body"  aria-expanded="true">
                            <div id="tablaSinAccs">
                                <h2 class="">Usuarios sin acceso</h2>
                                <div id="tabla_usuario2" class="bg-blanco p-2">
                                    <!-- AQUÍ SE IMPRIME LA TABLA -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="formulario_mostrar_Cam" class="ocultar-div">
                        <h2 id="tituloUsr" class="ocultar-div">Datos del usuario:</h2>
                        <form id="cambio_cargo" method="POST">

                            <div class="row mx-auto mt-2 p-3 border-radius-15">
                            <h4 class="mt-4">Datos del Trabajador:</h4>

                                <div class="col-3 my-2">
                                    <label class=""><b>Nombre:</b></label>
                                    <input class="form-control" readonly id="nombreCargo" name="nombreCargo">
                                </div>
                                <div class="col-3 my-2">
                                    <label class=""><b>Cedula:</b></label>
                                    <input class="form-control" readonly id="cedulaCargo" name="cedulaCargo">
                                </div>
                                <div class="col-3 my-2">
                                    <label class=""><b>Usuario:</b></label>
                                    <input class="form-control" readonly id="usuarioCargo" name="usuarioCargo">
                                </div>
                                <div class="col-3 my-2">
                                    <label class=""><b>Anterior Rol:</b></label>
                                        <input class="form-control" readonly id="cargoOrig" name="cargoOrig">
                                </div>
                                <div class="col-4 my-2">
                                    <label class=""><b>Dirección</b></label>
                                        <input class="form-control" readonly id="nombre_dire" name="nombre_dire">
                                    <input type="hidden" id="id_dir" name="id_dir">
                                </div>
                                <div class="col-4 my-2">
                                    <label class=""><b>División</b></label>
                                        <input class="form-control" readonly id="nombre_div" name="nombre_div">
                                    <input type="hidden" id="id_div" name="id_div"> 
                                </div>
                                <div class="col-3 my-2">
                                    <label class=""><b>Departamento</b></label>
                                        <input class="form-control" readonly id="nombre_dpto" name="nombre_dpto">
                                    <input type="hidden" id="id_dep" name="id_dep">
                                </div>
                                
                                <div class="col-4">
                                    <h4 class="mt-4">Rol dentro del Sistema:</h4>
                                    <!-- <label class=""><b>Rol</b></label> -->
                                    <select class="form-select" aria-label="Default select example"  id="cargoSis" name="cargoSis">
                                        <option value="100">-Opciones-</option>
                                        <?php
                                        // BUSCAR LA INFORMACIÓN
                                        include("../php/abrir_conexion.php");

                                        $consulta="SELECT * FROM $tabla_db2 WHERE id_rol <> 5";
                                        $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

                                        include("../php/cerrar_conexion.php");
                                        ?>
                                        <!-- IMPRIMIRLA EN EL OPTION DE UN SELECT. ESTA PARTE VA DIRECTA EN EL HTML-->
                                        <?php foreach ($ejecutar as $opciones): ?>
                                            <option value="<?php echo $opciones['id_rol'] ?>"><?php echo $opciones['nombre_rol'] ?></option>
                                        <?php endforeach; ?>

                                        ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <h4 class="mt-4">¿Empleado Activo o Inactivo?:</h4>
                                    <input type="radio" class="btn-check" name="actInac" id="activo" autocomplete="off" value="1" required checked>
                                    <label class="btn btn-outline-primary" for="activo">Activo</label>

                                    <input type="radio" class="btn-check" name="actInac" id="inactivo" autocomplete="off" value="2" required>
                                    <label class="btn btn-outline-danger" for="inactivo">Inactivo</label>
                                </div>
                                <div class="col-4">
                                    <h4 class="mt-4">¿Cambió de Departamento?:</h4>
                                    <button type="button" class="btn btn-primary" id="si_hay" onclick="cambio_si()" >Si hay cambios</button>
                                    <button type="button" class="btn btn-primary" id="no_hay" onclick="cambio_no()"disabled>No hay cambios</button>

                                </div>
                                    <br>
                                    <div class="col-4 my-2">
                                        <label class=""><b>Dirección</b></label>
                                        <select class="form-select" aria-label="Default select example"  id="direccion_select" name="direccion_select"disabled>
                                            <?php
                                                // BUSCAR LA INFORMACIÓN
                                                include("../php/abrir_conexion.php");

                                                $consulta="SELECT * FROM $tabla_db5";
                                                $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

                                                include("../php/cerrar_conexion.php");
                                            ?>
                                                <!-- IMPRIMIRLA EN EL OPTION DE UN SELECT. ESTA PARTE VA DIRECTA EN EL HTML-->
                                            <?php foreach ($ejecutar as $opciones): ?>
                                                <option value="<?php echo $opciones['id_direcciones'] ?>"><?php echo $opciones['nombre_dire'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-4 my-2">
                                        <label class=""><b>División</b></label>
                                        <div id="div_divisiones_select">
                                            <select class="form-select" aria-label="Default select example" id='division_select' name='division_select' required disabled>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4 my-2">
                                        <label class=""><b>Departamento</b></label>
                                        <div id="div_dpto_select">
                                            <select class="form-select" aria-label="Default select example" id='departamento_select' name='departamento_select' required disabled>
                                                <option value="" id="departamento_option"></option>
                                            </select>
                                        </div>
                                    </div>

                                
                                <input type="hidden" id="ingreso" name="ingreso" value="gestionCargo">

    
                                <button type="submit" class="btn btn-success w-25" id="cambCargo" name="cambCargo">Subir Datos</button>
                            </div>

                        </form>
                    </div>
            </div>

            <!-- SEGUNDA TABLA (DATOS INDIVIDUALES) -->
            <div class="px-2 ocultar-div" id="parte2"> 
                
                <h2 id="tituloUsr" class="ocultar-div">Datos del usuario:</h2>
                <div id="tablaConAccs">
                    <h2 class="">Usuarios Inactivos del Sistema</h2>
                    
                    <div id="tabla_usuariosInactivos" class="bg-blanco p-2">
                        <!-- AQUÍ SE IMPRIME LA TABLA -->
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
        barra_lateral_cambioRol();
    ?>
    <script src="../js/consultar_usuario.js"></script>

    <!-- MODIFICAR DATOS DURANTE LA EDICION -->
    <script src="../js/editar_mostrar_datos.js"></script>

</body>
<script src="../js/division_select.js"></script>
<script src="../js/departamento_select.js"></script>

<!-- Habilitar cambio de Direccion -->
<script type="text/javascript" src="../js/inv_nulos.js"></script>


    <!-- JS en Bootstrap -->
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script>
        const submitButton1 = document.querySelector('#cambCargo');
        const submitCambInactivo = document.getElementById('activarUsr');

        submitCambInactivo.addEventListener('click', (e) => {
            e.preventDefault();

            editActivInacti();

        });
        submitButton1.addEventListener('click', (e) => {
            e.preventDefault();

            editRolUsuarios();

        });
    </script>
        <?php
    include('../php/javascript_Footer.php');
    ?>
</html>