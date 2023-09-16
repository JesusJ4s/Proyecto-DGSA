<?php
        // ESTA VARIABLE GLOBAL ANDA POR AHÍ
    // $_SESSION['cedula_var_global'];

    // USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
    include("../php/verificacion_login.php");
    Login_Jef_ING_Admin();
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


    <title>Asignación de Cargo</title>
</head>

<body class="min-width-index ">

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
    <div class="modal fade" id="myModal_MODIFY" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5>Notificación:</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
                <!-- AQUÍ VA EL TÍTULO -->
            </div>
            <div class="modal-body" id="myModal_MODIFYC">
            </div>
            <div class="modal-footer">
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

        <div class="mt-4 mx-5">
            <div class="text-end d-inline mt-2 ms-3">
                <a href="gestion_usuario_rol.php"><img src="../assets/intranet/recargar.png" class="w-02"></a>
            </div>
        </div>

        <section class="w-85 mx-auto mt-5">
            
            <!-- MODIFICAR CARGO CÓDIGO HTML -->
            <!-- BARRA DE EDICIONES -->
<h1>DEBE SER MODIFICADO DESPUÉS DE HACER EL HISTORIAL DE CAMBIOS DE LOS USUARIOS DEL SISTEMA</h1>
            <form method="post" class="pt-4 mb-5 col-4" id="input_buscar">
                <div class="form-group text-start my-2">
                    <label for="cedula">Consultar por Cédula</label>
                    <input type="number" name="cedula_usr" id="cedula_usr" class="form-control w-50" onkeypress="consultar_ci();" required>
                </div>
            </form>
            

            <div class="px-2" id="parte1"> 

                <h2 class="">Usuarios del sistema</h2>

                <div id="mostrar_mensaje_ci" class="bg-blanco border border-radius-15">
                    <!-- AQUÍ SE IMPRIME LA TABLA CUANDO SE BUSCA POR CÉDULA -->
                </div>
                
                <div id="tabla_usuarios" class="bg-blanco border border-radius-15">
                    <!-- AQUÍ SE IMPRIME LA TABLA -->
                </div>

                

                

                <div id="formulario_mostrar_Cam" class="ocultar-div">
                    <form id="cambio_cargo" method="POST">

                        <div class="row mx-auto bg-blanco-hsl mt-2 p-3 border-radius-15">
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
                                <label class=""><b>Anterior Cargo:</b></label>
                                    <input class="form-control" readonly id="cargoOrig" name="cargoOrig">
                                
                            </div>
                            

                            <div class="col-3 my-2">
                                <label class=""><b>Departamento</b></label>
                                    <input class="form-control" readonly id="nombre_dpto" name="nombre_dpto">
                                <input type="hidden" id="id_dep" name="id_dep">

                                
                            </div>
                            <div class="col-4 my-2">
                                <label class=""><b>División</b></label>
                                    <input class="form-control" readonly id="nombre_div" name="nombre_div">
                                <!-- <input type="hidden" id="id_div" name="id_div">        -->

                                
                            </div>
                            <div class="col-4 my-2">
                                <label class=""><b>Dirección</b></label>
                                    <input class="form-control" readonly id="nombre_dire" name="nombre_dire">
                                <!-- <input type="hidden" id="id_dir" name="id_dir">        -->

                                
                            </div>


                            <h4 class="mt-4">Elija el Cargo dentro del Sistema:</h4>
                                <div class="col-3 my-2">
                                    <label class=""><b>Cargo</b></label>
                                        <select class="form-select" aria-label="Default select example"  id="cargoSis" name="cargoSis">
                                            <option value="100">-Opciones-</option>
                                            <option value="4">Empleado</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Ing. Informática</option>
                                            <option value="3">Jefe de Departamento</option>
                                            <option value="5">Quitar Acceso</option>


                                        </select>
                                    <input type="hidden" id="cargoID" name="cargoID">
                                    
                                </div>

                            <h4 class="mt-4">Indique si el empleado cambió de Departamento:</h4>
                                <div>
                                    <button type="button" class="btn btn-danger" id="si_hay" onclick="cambio_si()" >Si hay cambios</button>
                                    <button type="button" class="btn btn-danger" id="no_hay" onclick="cambio_no()"disabled>No hay cambios</button>

                                </div>
                                <br>
                                <div class="col-4 my-2">
                                    <label class=""><b>Dirección</b></label>
                                    <select class="form-select" aria-label="Default select example"  id="direccion_select" name="direccion_select" disabled>
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


            </div>

        </section>
        

    
    <!-- ÚLTIMO DIV -->
    </div>
    </main>

    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
        include('../php/barra_lateral.php');

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
</html>