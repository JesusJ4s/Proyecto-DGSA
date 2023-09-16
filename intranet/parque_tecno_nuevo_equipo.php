<?php
    // USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
    include("../php/verificacion_login.php");
    Login_ING_Admin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/intranet.css">
    <link rel="stylesheet" href="../css/gg3.css">
    <link rel="stylesheet" href="../css/style_usr.css">
    <script src="../jquery/jquery-3.6.4.min.js"></script>
    <script src="../js/reenvio.js"></script>

    <title>Ingresar Nuevo Equipo</title>
</head>
<body class=" min-width-index">
            <!-- Modal para mostrar información-->
    <div class="modal fade" id="RegistroCPU" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5>Notificación:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <!-- AQUÍ VA EL TÍTULO -->
            </div>
            <div class="modal-body" id="RegistroCPUC">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
    <!-- MODAL CON INFORMACIÓN DE COMO MOVERSE POR EL FORMULARIO -->
    <div class="modal fade" id="mi-modal-ayuda" >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>información:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p>
                        <b>Para llenar los demás apartados del formulario</b>: puede buscar la barrla lateral izquierda y desplazarse usando los botones, o usando la barra de la parte inferior. 
                    </p>
                    <p>
                        <b>¿No se envía el formulario?</b>: Si alguna casilla está en <span class="text-danger">rojo</span>, es porque colocó un dato de manera erronea, verifique y siga llenando la información. 
                    </p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

    <header id="inicio-pag" class="caja-superior  mx-4">
        <?php
        include('../php/logos_intranet.php')
        ?>
    </header>

<main class="contenedor-grid-index-horizontal">

    <!-- DIV QUE CONTIENE TODO -->
    <div id="contenedor-total-total">

        <!-- ************************************************* -->
        <!-- AGREGAR NUEVO EQUIPO -->
        <div class="container-fluid text-center px-5 mx-0 mb-0">   
            <h2 class="">Ingresar Nuevo Equipo</h2> 
           
            <div class="border-radius-15 py-3">
                
                <div class="container-fluid text-center mx-2  p-2 bg-blanco-hsl border-radius-15">
                    <form method="post" class="px-5 pt-2 row" id="formulario_equipo">
                        <!-- PARTE SUPERIOR DEL FORMULARIO -->
                        <!-- TOAST CON INFORMACIÓN DE NAVEGACIÓN -->
                        <button type="button" class="boton_toast_ayuda d-inline " data-bs-toggle="modal" data-bs-target="#mi-modal-ayuda"><img src="../assets/intranet/pregunta.png" class="img_toast"></button>
                                
                        <div class="col-12 px-3" id="parte1">
                        <h3>Ubicación y Responsable</h3>
                            <p class="text-end"><b>Fecha de Inventario</b></p>
                            <div class="border-bottom text-end">
                            <?php
                                include("../php/date_time.php");
                                echo fecha_inventario();
                            ?>
                            </div>
                            <div class="text-center row my-3">
                                <!-- MUESTRA LOS INGENIEROS DISPONIBLES -->
                                <div class="col-3">
                                    <label><b>Técnico Encargado</b></label>
                                    <select class="form-select" id="ingeniero_selector" name="ingeniero_selector">
                                    <?php
                                    
                                        include("../php/abrir_conexion.php");

                                        $consulta="SELECT * FROM $tabla_db1 WHERE usuario_rol_id = 2";
                                        $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

                                        include("../php/cerrar_conexion.php");
                                    
                                    ?>
                                        <?php foreach ($ejecutar as $opciones): ?>

                                        <option value="<?php echo $opciones['id_usuario'] ?>">Ingeniero <?php echo $opciones['nombre'] ?></option>

                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <!-- *********************************************************************************************************************** -->

                                <!-- SELECCIONAR LOS DEPARTAMENTOS -->
                                <div class="col-3">
                                    <label><b>Dirección</b></label>
                                    <select class="form-select" aria-label="Default select example" id="direccion_select" name="direccion_select">
                                        <?php
                                        // BUSCAR LA INFORMACIÓN
                                            include("../php/abrir_conexion.php");

                                            $consulta="SELECT * FROM $tabla_db5 WHERE id_direcciones <> 6";
                                            $ejecutar=mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

                                            include("../php/cerrar_conexion.php");
                                            ?>
                                            <!-- IMPRIMIRLA EN EL OPTION DE UN SELECT. ESTA PARTE VA DIRECTA EN EL HTML-->
                                            <?php foreach ($ejecutar as $opciones): ?>
                                                <option value="<?php echo $opciones['id_direcciones'] ?>"><?php echo $opciones['nombre_dire'] ?></option>
                                            <?php endforeach; ?>
                                    </select>
                                </div>
                                
                                <div class="col-3">
                                    <label><b>División</b></label>
                                        <div id="div_divisiones_select">
                                            <select class="form-select" aria-label="Default select example" id='division_select' name='division_select'>
                                            </select>
                                        </div>
                                        
                                    </div>
                                <div class="col-3">
                                    <label><b>Departamento del Equipo</b></label>
                                        <div id="div_dpto_select">
                                            <select class="form-select" aria-label="Default select example" id='departamento_select' name='departamento_select'>
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="bg-grey-claro border-radius-15 p-3">
                                <div class="container-fluid mt-2">
                                    <div class="text-start form-group formulario__grupo"  id="grupo__supervisor_dpto">
                                        <label for="supervisor_dpto" class=" formulario__label"><b>Supervisor Departamento</b></label>
                                        <div class="form-group text-start  formulario__grupo-input">
                                            <input type="text" name="supervisor_dpto" id="supervisor_dpto" class="form-control w-50 mt-2 formulario__input" required >
                                            <p class="formulario__input-error px-3">El nombre debe poseer solo letras.</p>

                                        </div>
                                    </div>
                                </div>
                            
                                <!-- EQUIPO -->
                                <div class="container-fluid ">
                                    <div class="form-group text-start my-3 formulario__grupo" id="grupo__responsable">
                                        <label for="responsable" class=" formulario__label"><b>Responsable del equipo</b></label>
                                        <div class="formulario__grupo-input">
                                            <input type="text" name="responsable" id="responsable" class="form-control w-65 mt-2 formulario__input" required  placeholder="Quien usa el equipo">
                                            <p class="formulario__input-error px-3">El nombre debe poseer solo letras.</p>

                                        </div>
                                    </div>
                                    <!-- TODO: -->
                                    <div class="form-group text-start my-3 formulario__grupo" id="grupo__nomb_equip">
                                        <label for="nomb_equip" class=" formulario__label"><b>Nombre del equipo</b></label>
                                        <div id="nombre_veri" class="m-0 text-danger bold"></div>
                                        <div class="formulario__grupo-input">
                                            <input type="text" name="nomb_equip" id="nomb_equip" class="form-control w-65 mt-2 formulario__input" required placeholder="ejemplo: MD112DE" onblur="ver();">
                                            <p class="formulario__input-error px-3">Solo letras, números, sin espacios.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SEUNDA PARTE DEL FORMULARIO -->
                        <!-- ESPECIFÍCACIONES -->

                        <div class="container-fluid ocultar-div"  id="parte2">        
                        <h2>Especifícaciones</h2>

                            <div class="col-12 row bg-grey-claro border-radius-15 mx-auto p-2">
                                <div class="col-6 formulario__grupo" id="grupo__BN_equipo">
                                    <div class="form-group text-start">
                                        <label for="BN_equipo" class=" formulario__label">Bien Nacional</label>
                                        <input type="text" name="BN_equipo" id="BN_equipo" class="form-control w-65 mt-2 formulario__input"  maxlength="7">
                                        <p class="formulario__input-error px-3">El Bien Nacional solo puede contener números.</p>

                                    </div>
                                </div>
                                <div class="col-6 formulario__grupo" id="grupo__serial">
                                    <div class="form-group text-start">
                                        <label for="serial" class=" formulario__label">Serial Equipo</label>
                                        <input type="text" name="serial" id="serial" class="form-control w-65 mt-2 formulario__input" placeholder="CNG1476..."  maxlength="20">
                                        <p class="formulario__input-error px-3">El serial solo puede tener letras, numeros, guión y piso.</p>                               
                                    </div>
                                </div>
                                <div class="col-12 formulario__grupo" id="grupo__tipo_equipo">
                                    <div class="form-group text-start">
                                        <label for="tipo_equipo" class=" formulario__label">Tipo de Equipo</label>
                                        <select class="form-select w-50 text-center mt-1" name="tipo_equipo" id="tipo_equipo">
                                            <option value="Escritorio">Escritorio</option>    
                                            <option value="Laptop Oficial">Laptop Oficial</option>
                                            <option value="Laptop Personal">Laptop Personal</option>     
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="form-group text-start col-6 formulario__grupo" id="grupo__cpu_mod">
                                            <label for="cpu_mod" class=" formulario__label">Modelo Procesador</label>
                                            <input type="text" name="cpu_mod" id="cpu_mod" class="form-control w-65 mt-2 formulario__input" required placeholder="ejemplo: Intel Dual Core" max="25">
                                            <p class="formulario__input-error px-3">El Modelo solo puede contener números, letras y espacio.</p>

                                        </div>
                                        <div class="form-group text-start col-6 formulario__grupo" id="grupo__cpu_vel">
                                            <label for="cpu_vel" class=" formulario__label">Velocidad Procesador</label>
                                            <input type="text" name="cpu_vel" id="cpu_vel" class="form-control w-65 mt-2 formulario__input" required placeholder="ejemplo: 3.40GHz">
                                            <p class="formulario__input-error px-3">Recuerde usar el formato para completar la información, ejemplo: 3.40Ghz.</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="form-group text-start col-6 formulario__grupo" id="grupo__ip">
                                            <label for="ip" class=" formulario__label">Dirección IP</label>
                                            <div id="IP_veri" class="m-0 text-danger bold"></div>

                                            <input type="text" name="ip" id="ip" class="form-control w-65 mt-2 formulario__input" placeholder="ejemplo: 192.111.111.1" required onblur="VerificarIP();">
                                            <p class="formulario__input-error px-3">Use el formato adecuado en el llenado de las direcciones IP.</p>

                                        </div>
                                        <div class="form-group text-start col-6 formulario__grupo" id="grupo__mac">
                                            <label for="mac" class=" formulario__label">Dirección MAC</label>
                                            <div id="MAC_veri" class="m-0 text-danger bold"></div>

                                            <input type="text" name="mac" id="mac" class="form-control w-65 mt-2 formulario__input" required placeholder="ejemplo: 08-08-08-08-08-08"  onblur="VerificaMAC();">
                                            <p class="formulario__input-error px-3">Use el formato adecuado en el llenado de la Dirección MAC.</p>

                                        </div>
                                    </div>
                                </div>                
                            </div>
                            <br>
                            <div class="col-12 row bg-grey-claro border-radius-15 mx-auto p-2">
                                <div class="row">
                                    <div class="form-group text-start col-4 formulario__grupo" id="grupo__disco_duro">
                                        <label for="disco_duro" class=" formulario__label">Disco Duro Capacidad</label>
                                        <input type="text" name="disco_duro" id="disco_duro" class="form-control w-85 mt-2 formulario__input" required placeholder="ejemplo: 500Gb o 1Tb">
                                        <p class="formulario__input-error px-3">Recuerde usar el formato para completar la información, ejemplo: 320Gb o 1Tb.</p>

                                    </div>
                                    <div class="form-group text-start col-4 formulario__grupo" id="grupo__disco_duro_marca">
                                        <label for="disco_duro_marca" class=" formulario__label">Disco Duro Marca</label>
                                        <input type="text" name="disco_duro_marca" id="disco_duro_marca" class="form-control w-85 mt-2 formulario__input" required maxlength="15" placeholder="ejemplo: HITACHI">
                                        <p class="formulario__input-error px-3">Solo puede usar letras.</p>

                                    </div>
                                    <div class="form-group text-start col-4 formulario__grupo" id="grupo__disco_duro_serial">
                                        <label for="disco_duro_serial" class=" formulario__label">Disco Duro Serial</label>
                                        <input type="text" name="disco_duro_serial" id="disco_duro_serial" class="form-control w-65 mt-2 formulario__input" required maxlength="20" placeholder="ejemplo: MDS7...">
                                        <p class="formulario__input-error px-3">El serial solo puede tener letras, numeros, guión y piso.</p>
                                    </div>  
                                </div>
                                <div class="col-12">
                                    <div class="row">  
                                        <div class="form-group text-start col-6">
                                            <label for="ram_cant" class=" formulario__label">Cantidad Módulos RAM</label>
                                            <select class="form-select w-50 text-center mt-1 " name="ram_cant" id="ram_cant">
                                                <option value="1">1</option>    
                                                <option value="2">2</option>
                                                <option value="3">3</option>    
                                                <option value="4">4</option>    
                                            </select>
                                        </div>
                                        
                                        <div class="form-group text-start col-6 formulario__grupo" id="grupo__ramVel">
                                            <!-- <label for="ramVel" class=" formulario__label">Velocidad Memoria RAM</label>
                                            <input type="text" name="ramVel" id="ramVel" class="form-control w-50 mt-2 formulario__input" required placeholder="ejemplo: 2Gb" >
                                            <p class="formulario__input-error px-3">La velocidad debe ser escrita en el formato 2Gb o parecido, sin espacios</p> -->

                                            <label for="ramVel" class=" formulario__label">Velocidad Memoria RAM</label>
                                            <input type="text" name="ramVel" id="ramVel" class="form-control w-65 mt-2 formulario__input" required placeholder="ejemplo: 2Gb">
                                            <p class="formulario__input-error px-3">Velocidad Memoria RAM.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="form-group text-center my-3 col-3">
                                            <label for="vr_win" class=" formulario__label">Versión Windows</label>
                                            <select class="form-select text-center" name="vr_win" id="vr_win">
                                                <option value="XP">XP</option>
                                                <option value="Vista">Vista</option>    
                                                <option value="7">7</option>
                                                <option value="10">10</option>    
                                                <option value="11">11</option>    
                                            </select>
                                        </div>
                                        <div class="form-group text-center my-3 col-3">
                                            <label for="conect_red" class=" formulario__label">¿Conectado a la Red?</label>
                                            <select class="form-select text-center" name="conect_red" id="conect_red">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>     
                                            </select>
                                        </div>
                                        <div class="form-group text-center my-3 col-3">
                                            <label for="tipo_conect" class=" formulario__label">Tipo de Conexión</label>
                                            <select class="form-select text-center" name="tipo_conect" id="tipo_conect">    
                                                <option value="Wifi">Wifi</option>
                                                <option value="Cableada">Cableada</option>    
                                                <option value="Ambas">Ambas</option>    
                                            </select>
                                        </div>
                                        <div class="form-group text-center my-3 col-3">
                                            <label for="inter" class=" formulario__label">¿Posee Internet?</label>
                                            <select class="form-select text-center" name="internet" id="internet">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>     
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ********************************************************************************************************************* -->
                        <!-- COMPONENTES -->
                        <!-- Parte 3 -->
                        <div class="container-fluid"  >
                            <div class="col-12 ocultar-div" id="parte3">
                            <h2>Componentes</h2>

                                <div class="row border m-4 p-4 bg-grey-claro border-radius-15">
                                <h6 class="text-start">MOUSE</h6>
                                    <div class="form-group text-center my-3 col-3">
                                        <label for="mouse_selector" class=" formulario__label">Mouse</label>
                                        <select class="form-select text-center" name="mouse_selector" id="mouse_selector">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>     
                                        </select>
                                    </div>
                                    <div class="form-group text-center my-3 col-3  formulario__grupo" id="grupo__mouse_datos">
                                        <label for="mouse_datos" class=" formulario__label">Mouse BN o Serial</label>
                                        <input type="text" name="mouse_datos" id="mouse_datos" class="form-control formulario__input">
                                        <p class="formulario__input-error px-3">El Bien Nacional solo puede contener números. En caso de ser serial tiene permitido el uso de guiones y piso.</p>
                                    </div>
                                    <div class="form-group text-center my-3 col-3">
                                        <label for="mouse_marca" class=" formulario__label">Mouse Marca</label>
                                        <select class="form-select text-center " name="mouse_marca" id="mouse_marca" >
                                            <option value="HP">HP</option>
                                            <option value="Genius">Genius</option>
                                            <option value="Generico">Generico</option>     
                                        </select>
                                    </div>
                                    <div class="form-group text-center my-3 col-3">
                                        <label for="mouse_conexion" class=" formulario__label">Mouse Conexion</label>
                                        <select class="form-select text-center" name="mouse_conexion" id="mouse_conexion">
                                            <option value="USB">USB</option>
                                            <option value="PS/2">PS/2</option>     
                                        </select>
                                    </div>
                                </div>
                                                
                                <!-- ********************************************* -->
                                <div class="row border m-4 p-4 bg-grey-claro border-radius-15">
                                    <h6 class="text-start">MONITOR</h6>
                                    <div class="form-group text-center my-3 col-4">
                                        <label for="monitor_selector" class=" formulario__label">Monitor</label>
                                        <select class="form-select text-center" name="monitor_selector" id="monitor_selector" >
                                            <option value="HP">HP</option>
                                            <option value="Siragon">Siragon</option>
                                            <option value="Generico">Genérico</option> 
                                            <option value="No">No</option>    
                                        </select>
                                    </div>
                                    <div class="form-group text-center my-3 col-4  formulario__grupo" id="grupo__monitor_datos">
                                        <label for="monitor_datos" class=" formulario__label">Monitor BN o Serial</label>
                                        <input type="text" name="monitor_datos" id="monitor_datos" class="form-control formulario__input">
                                        <p class="formulario__input-error px-3">El Bien Nacional solo puede contener números. En caso de ser serial tiene permitido el uso de guiones y piso.</p>
                                    </div>
                                    <div class="form-group text-center my-3 col-4">
                                        <label for="monitor_conexion" class=" formulario__label">Monitor Conexión</label>
                                        <select class="form-select text-center" name="monitor_conexion" id="monitor_conexion">
                                            <option value="VGA">VGA</option>
                                            <option value="HDMI">HDMI</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row border m-4 p-4 bg-grey-claro border-radius-15">
                                    <h6 class="text-start">REGULADOR</h6>
                                    <div class="form-group text-center my-3 col-4">
                                        <label for="regulador_selector" class=" formulario__label">Regulador</label>
                                        <select class="form-select text-center " name="regulador_selector" id="regulador_selector" >
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>      
                                        </select>
                                    </div>
                                
                                    <div class="form-group text-center my-3 col-4  formulario__grupo" id="grupo__regulador_datos">
                                        <label for="regulador_datos" class=" formulario__label">Regulador BN o Serial</label>
                                        <input type="text" name="regulador_datos" id="regulador_datos" class="form-control formulario__input">
                                        <p class="formulario__input-error px-3">El Bien Nacional solo puede contener números. En caso de ser serial tiene permitido el uso de guiones y piso.</p>
                                    </div>
                                    <div class="form-group text-center my-3 col-4  formulario__grupo" id="grupo__regulador_marca">
                                        <label for="regulador_marca" class=" formulario__label">Regulador Marca</label>
                                        <input type="text" name="regulador_marca" id="regulador_marca" class="form-control formulario__input">
                                        <p class="formulario__input-error px-3">Solo puede llevar letras sin espacios.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- ******************************************************************************************************************************************** -->
                            <!-- Parte 4 -->
                            <div class="ocultar-div"  id="parte4">
                            <h2>Otros Componentes</h2>

                                <div class="row border m-4 p-4 bg-grey-claro border-radius-15">
                                    <h6 class="text-start">TECLADO</h6>
                                    <div class="form-group text-center my-3 col-3">
                                        <label for="teclado_selector" class=" formulario__label">Teclado</label>
                                        <select class="form-select text-center" name="teclado_selector" id="teclado_selector" >
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>     
                                        </select>
                                    </div>
                                    <div class="form-group text-center my-3 col-3  formulario__grupo" id="grupo__teclado_datos">
                                        <label for="teclado_datos" class=" formulario__label">Teclado BN o Serial</label>
                                        <input type="text" name="teclado_datos" id="teclado_datos" class="form-control formulario__input">
                                        <p class="formulario__input-error px-3">El Bien Nacional solo puede contener números. En caso de ser serial tiene permitido el uso de guiones y piso.</p>
                                    </div>
                                    <div class="form-group text-center my-3 col-3  formulario__grupo" id="grupo__teclado_marca">
                                        <label for="teclado_marca" class=" formulario__label">Teclado Marca</label>
                                        <input type="text" name="teclado_marca" id="teclado_marca" class="form-control formulario__input">
                                        <p class="formulario__input-error px-3">Solo puede utilizar letras, sin espacios.</p>
                                    </div>
                                    <div class="form-group text-center my-3 col-3">
                                        <label for="teclado_conexion" class=" formulario__label">Teclado Conexion</label>
                                        <select class="form-select text-center" name="teclado_conexion" id="teclado_conexion">
                                            <option value="USB">USB</option>
                                            <option value="PS/2">PS/2</option>     
                                        </select>
                                    </div>
                                </div>
                                <div class="row border m-4 p-4 bg-grey-claro border-radius-15">
                                    <h6 class="text-start">ESCANER</h6>
                                    <div class="form-group text-center my-3 col-3">
                                        <label for="escaner_selector" class=" formulario__label">Escaner</label>
                                        <select class="form-select text-center" name="escaner_selector" id="escaner_selector" >
                                            <option value="HP">HP</option>
                                            <option value="Siragon">Canon</option>   
                                            <option value="No">No</option>     
                                        </select>
                                    </div>
                                    <div class="form-group text-center my-3 col-3  formulario__grupo" id="grupo__escaner_datos">
                                        <label for="escaner_datos" class=" formulario__label">Escaner BN o Serial</label>
                                        <input type="text" name="escaner_datos" id="escaner_datos" class="form-control formulario__input">
                                        <p class="formulario__input-error px-3">El Bien Nacional solo puede contener números. En caso de ser serial tiene permitido el uso de guiones y piso.</p>
                                    </div>
                                    <div class="form-group text-center my-3 col-3  formulario__grupo" id="grupo__escaner_modelo">
                                        <label for="escaner_modelo" class=" formulario__label">Escaner Modelo</label>
                                        <input type="text" name="escaner_modelo" id="escaner_modelo" class="form-control formulario__input">
                                        <p class="formulario__input-error px-3">Puede utilizar letras y números para describir el modelo, sin espacios.</p>
                                    </div>
                                    <div class="form-group text-center my-3 col-3">
                                        <label for="escaner_conexion" class=" formulario__label">Escaner Conexion</label>
                                        <select class="form-select text-center" name="escaner_conexion" id="escaner_conexion">
                                            <option value="USB">USB</option>
                                            <option value="WIFI">WIFI</option>     
                                        </select>
                                    </div>
                                </div>
                                <!-- ************************************************ -->

                                    <input id="busqueda" name="busqueda" value="RegisCPU" type="hidden" readonly> 

                                <!-- ************************************************ -->
                                <div class="row mx-2 px-4">
                                    <div class="form-group my-3 col-12 ">
                                        <label for="descripcion" class="bold formulario__label">Comentario</label>
                                        <textarea required class="bg-blanco-hsl descripcion" id="descripcion" name="descripcion"  minlength="20" maxlength="200"></textarea>
                                    </div>
                                    
                                </div>
                                <div class="formulario__mensaje" id="formulario__mensaje">
                                    <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                                </div>
                                <div class=" text-end">
                                    <button type="submit" class="btn btn-success" name="btn1">Enviar</button>
                                    <!-- <button type="reset" class="btn btn-success" name="btn2">Limpiar</button> -->
                                </div>
                            </div>
                        </div>        
                    </form>
                    <div class="container-fluid text-center mt-4">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-lg justify-content-center gap-3">
                                <!-- <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li> -->
                                <li class="page-item">
                                    <button type="button" class="page-link btn btn-outline-secondary" onclick="cambioPesta1();">1</button>
                                </li>
                                <li class="page-item">
                                    <button type="button" class="page-link btn btn-outline-secondary" onclick="cambioPesta2();">2</button>
                                </li>
                                <li class="page-item">
                                    <button type="button" class="page-link btn btn-outline-secondary" onclick="cambioPesta3();">3</button>
                                </li>
                                <li class="page-item">
                                    <button type="button" class="page-link btn btn-outline-secondary" onclick="cambioPesta4();">4</button>
                                </li>
                                <!-- <li class="page-item"> -->
                                <!-- <a class="page-link" href="#">Siguiente</a>
                                </li> -->
                            </ul>
                        </nav>
                    </div>
                </div>
            </div> 
        </div>



    </div>

</main>

    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
        include('../php/barra_lateral.php');
        barra_lateral_nue_equipo();
    ?>

<!-- JS en Bootstrap -->
<script src="../js/consulta_equipos_formulario_nuevo_equipo.js"></script>

<script src="../js/consultar_equipos_datos.js"></script>

<script src="../js/bootstrap.bundle.min.js"></script>

<script type="text/javascript" src="../js/inv_nulos.js"></script>

<script type="text/javascript" src="../js/division_select.js"></script>

<script type="text/javascript" src="../js/departamento_select.js"></script>

<script src="../js/editar_mostrar_datos.js"></script>
    
</body>


</html>