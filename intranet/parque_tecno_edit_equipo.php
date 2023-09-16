<?php

    // USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
    include("../php/verificacion_login.php");
    Login_ING_Admin();

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
    <link rel="stylesheet" href="../css/intranet.css">
    <link rel="stylesheet" href="../css/gg3.css">
    <link rel="stylesheet" href="../css/style_usr.css">
    
    <script src="../jquery/jquery-3.6.4.min.js"></script>
    <title>Editar Equipo</title>
</head>
<body class=" min-width-index">
    <!-- Modal para mostrar información-->
    <div class="modal fade" id="ModifiCPU" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-bs-backdrop="static">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5>Notificación:</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                <!-- AQUÍ VA EL TÍTULO -->
            </div>
            <div class="modal-body" id="ModifiCPUC">
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
                        Para llenar los demás apartados del formulario: puede buscar la barrla lateral izquierda y desplazarse usando los botones, o usando la barra de la parte inferior. 
                    </p>
                    <p>
                        ¿No se envía el formulario?: Si alguna casilla está en <span class="text-primary">rojo</span>, es porque colocó un dato de manera erronea, verifique y siga llenando la información. 
                    </p>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>

<!-- SPINNER QUE SE MUESTRA EN LA CARGA DE DATOS -->
    <div class=" d-flex justify-content-center position-absolute top-50 start-50">
        <div class="ocultar-spinner spinner-border text-secondary" role="status">
        </div>
    </div>

    <header id="inicio-pag" class="caja-superior mx-4">
        <?php
        include('../php/logos_intranet.php')
        ?>
    </header>

<main class="contenedor-grid-index-horizontal">

    <!-- DIV QUE CONTIENE TODO -->
    <div id="contenedor-total-total">

    <!-- ************************************************* -->
    <!-- AGREGAR NUEVO EQUIPO -->
    <div class="container-fluid text-center px-5 mx-0 mb-0 ocultar-class">   
  
        <div class="border-radius-15 py-3">        

            <div class="container-fluid text-center mx-2  p-2 bg-blanco-hsl border-radius-15">
                <form method="post" class=" px-5 pt-2 row" id="formulario_equipo_edicion">
                    <!-- PARTE SUPERIOR DEL FORMULARIO -->
                    <!-- TOAST CON INFORMACIÓN DE NAVEGACIÓN -->
                    <button type="button" class="boton_toast_ayuda d-inline " data-bs-toggle="modal" data-bs-target="#mi-modal-ayuda"><img src="../assets/intranet/pregunta.png" class="img_toast"></button>
                    <div class="align-middle col-auto">

                        <h2 class="pt-3">Editar Equipo</h2> 
                    </div>

                    <div class="col-12 px-3" id="parte1">
                    <h3>Ubicación y Responsable</h3>
                        <div class="contenedor-grid-3">
                            <!-- MAC PARA EDICIÓN -->
                            <div class="form-group text-start formulario__grupo" id="grupo__name_search">
                                <label class="formulario__label" for="name_search">Ingrese el nombre del Equipo que desea editar.</label>
                                <input type="text" name="name_search" id="name_search" class="form-control w-50 mt-2 d-inline formulario__input" required onblur="edit_equipo();">
                                <input type="hidden" pattern="[0-9]{1,2}" maxlength="2" class="form-control w-20 text-center mt-2 d-inline" readonly id="id_del_equipo" name="id_del_equipo">
                                <p class="formulario__input-error px-3">Use el formato adecuado para ingresar el nombre del equipo.</p>
                            </div>
                            <!-- FECHA -->
                            <div class="text-center">
                                <p class=""><b>Fecha del Registro</b></p>
                                <input name="fecha_reg" id="fecha_reg" class="w-50 mt-2 form-control mx-auto" readonly>                    
                            </div>
                            <div>
                                <p ><b>Fecha edición</b></p>
                                <input class="w-50 mt-2 form-control mx-auto text-center" readonly value="<?php
                                    include('../php/date_time.php');
                                    echo fecha_inventario();
                                ?>">
                                
                            </div>
                            
                        </div>
                        <div class="text-center row ">
                            <!-- MUESTRA LOS INGENIEROS DISPONIBLES -->
                            <div class="col-3">
                                <label class="formulario__label">Técnico Encargado</label>
                                <input type="text" class="btn2 bg-blanco w-100" id="ingeniero_mostrar" name="ingeniero_mostrar" readonly></input>
                            </div>

                            <!-- *********************************************************************************************************************** -->

                            <!-- UBICACIÓN INFORMACIÓN -->
                            <div class="col-3">
                                <label class=" formulario__label">Dirección</label>
                                <input type="text" class="btn2 bg-blanco w-100" id="direccion_mostrar" name="direccion_mostrar" readonly></input>
                            </div>
                            
                            <div class="col-3">
                                <label class=" formulario__label">Division</label>
                                <input type="text" class="btn2 bg-blanco w-100" id="division_mostrar" name="division_mostrar" readonly></input>
                            </div>
                            <div class="col-3">
                                <label class=" formulario__label">Departamento del Equipo</label>
                                <input type="text" class="btn2 bg-blanco w-100" id="depto_mostrar" name="depto_mostrar" readonly></input>
                            </div>
                        </div>
                        <!-- ************************************************************************************** -->
                        <!-- POR SI CAMBIAR DE DEPARTAMENTO EL EQUIPO -->
                        <div class="text-center row my-3 ">
                            <h5 class="my-2">Indique si el equipo cambió de departamento</h5>
                            <div class="my-2">
                                <button type="button" class="btn btn-primary" id="si_hay" onclick="cambio_si()" >Si hay cambios</button>
                                <button type="button" class="btn btn-primary" id="no_hay" onclick="cambio_no()"disabled>No hay cambios</button>

                            </div>
                        <div class="col-4">
                                <label>Dirección</label>
                                <select class="form-select" id="direccion_select" name="direccion_select" disabled required>
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
                            
                            <div class="col-4">
                                <label>División</label>
                                    <div id="div_divisiones_select">
                                        <select class='form-select' id='division_select' name='division_select' required disabled>
                                        </select>
                                    </div>
                                    
                                </div>
                            <div class="col-4">
                                <label>Departamento del Equipo</label>
                                    <div id="div_dpto_select">
                                        <select class='form-select' id='departamento_select' name='departamento_select' required disabled>
                                        </select>
                                    </div>
                            </div>

                        </div>
                        <!-- PUEDEN CAMBIAR -->
                        <div class=" bg-grey-claro border-radius-15 p-3">
                            <div class="container-fluid mt-1">
                                <!-- <div class="form-group text-start col-4 ms-3">
                                    <label for="ingeniero_selector" class=" formulario__label">Técnico encargado de la Edición</label>
                                    <select class="form-select" id="ingeniero_editor" name="ingeniero_editor" required>
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
                                </div> -->
                                <div class="form-group text-start">
                                    <!-- <label for="supervisor_dpto">Supervisor Departamento</label>
                                    <input type="text" name="supervisor_dpto_edit" id="supervisor_dpto_edit" class="form-control w-65 mt-2" required pattern="[a-zA-ZÀ-ý\s]+" placeholder=""> -->
                                    <div class="text-start form-group formulario__grupo"  id="grupo__supervisor_dpto_edit">
                                        <label for="supervisor_dpto_edit" class=" formulario__label">Supervisor Departamento</label>
                                        <div class="form-group text-start  formulario__grupo-input">
                                            <input type="text" name="supervisor_dpto_edit" id="supervisor_dpto_edit" class="form-control w-35  formulario__input" required >
                                            <p class="formulario__input-error px-3">El nombre debe poseer solo letras.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <!-- EQUIPO -->
                            <div class="container-fluid py-auto">
                                <div class="form-group text-start my-3">
                                    <!-- <label for="responsable">Responsable del equipo</label>
                                    <input type="text" name="responsable_edit" id="responsable_edit" class="form-control w-65 mt-2 cont" required pattern="[a-zA-ZÀ-ý\s]+" placeholder="Quien usa el equipo"> -->
                                    <div class="form-group text-start formulario__grupo" id="grupo__responsable_edit">
                                        <label for="responsable_edit" class=" formulario__label">Responsable del equipo</label>
                                        <div class="formulario__grupo-input">
                                            <input type="text" name="responsable_edit" id="responsable_edit" class="form-control w-35  formulario__input" required  placeholder="Quien usa el equipo">
                                            <p class="formulario__input-error px-3">El nombre debe poseer solo letras.</p>

                                        </div>
                                    </div>

                                </div>

                                <div class="form-group text-start formulario__grupo" id="grupo__nomb_equip_edit">
                                        <label for="nomb_equip_edit" class=" formulario__label">Nombre del equipo</label>
                                        <div class="formulario__grupo-input">
                                            <input type="text" name="nomb_equip_edit" id="nomb_equip_edit" class="form-control w-35  formulario__input" required readonly placeholder="ejemplo: MD112DE">
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
                            <div class="col-6">
                                <div class="form-group text-start">
                                    <label for="BN_equipo" class=" formulario__label">Bien Nacional</label>
                                    
                                    <input type="text" class="btn2 bg-blanco w-65 d-block" id="BN_equipo_mostrar" name="BN_equipo_mostrar" readonly></input>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group text-start">
                                    <label for="serial" class=" formulario__label">Serial Equipo</label>
                                    <input type="text" class="btn2 bg-blanco w-65 d-block" id="serial_equipo_mostrar" name="serial_equipo_mostrar" readonly></input>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-start">
                                    <label for="tipo_equipo" class=" formulario__label">Tipo de Equipo</label>
                                    <input type="text" class="btn2 bg-blanco w-35 d-block" id="tipo_equipo_mostrar" name="tipo_equipo_mostrar" readonly></input>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="form-group text-start col-6">
                                        <label for="cpu_mod" class=" formulario__label">Modelo Procesador</label>
                                        <input type="text" class="btn2 bg-blanco w-65 d-block" id="cpu_mostrar" name="cpu_mostrar" readonly></input>
                                    </div>
                                    <div class="form-group text-start col-6">
                                        <label for="cpu_vel" class=" formulario__label">Velocidad Procesador</label>
                                        <input type="text" class="btn2 bg-blanco w-65 d-block" id="cpu_vel_mostrar" name="cpu_vel_mostrar" readonly></input>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <!-- PUEDE CAMBIAR -->
                                    <!-- <div class="form-group text-start my-3 col-6">
                                        <label for="ip">Dirección IP</label>
                                        <input type="text" name="ip_edit" id="ip_edit" class="form-control w-65 mt-2" placeholder="ejemplo: 192.111.111.1" pattern="[0-9\.]+[0-9]+" maxlength="15" minlength="10">
                                    </div> -->
                                    <div class="form-group text-start col-6 formulario__grupo" id="grupo__ip_edit">
                                        <label for="ip_edit" class=" formulario__label">Dirección IP</label>
                                        <input type="text" name="ip_edit" id="ip_edit" class="form-control w-65 formulario__input" placeholder="ejemplo: 192.111.111.1" maxlength="15" minlength="10" required>
                                        <p class="formulario__input-error px-3">Use el formato adecuado en el llenado de las direcciones IP.</p>

                                    </div>
                                    <!-- NO CAMBIA -->
                                    <!-- <div class="form-group text-start my-3 col-6">
                                        <label for="mac">Dirección MAC</label>
                                        <input type="text" class="btn2 bg-blanco w-65 d-block" id="mac_edit" name="mac_edit" readonly></input>
                                    </div> -->
                                    <div class="form-group text-start col-6 formulario__grupo" id="grupo__mac_mostrar">
                                            <label for="mac_mostrar" class=" formulario__label">Dirección MAC</label>
                                            <input type="text" name="mac_mostrar" id="mac_mostrar" class="form-control w-65 formulario__input" required placeholder="ejemplo: 08-08-08-08-08-08" maxlength="17">
                                            <p class="formulario__input-error px-3">Use el formato adecuado en el llenado de la Dirección MAC.</p>

                                        </div>
                                </div>
                            </div>                
                        </div>
                        <br>
                        <div class="col-12 row bg-grey-claro border-radius-15 mx-auto p-2">
                            <div class="row">
                                <div class="form-group text-start col-4 formulario__grupo" id="grupo__disco_duro_edit">
                                    <label for="disco_duro_edit" class=" formulario__label">Disco Duro Capacidad</label>
                                    <input type="text" name="disco_duro_edit" id="disco_duro_edit" class="form-control w-85 formulario__input" required placeholder="ejemplo: 500Gb o 1Tb">
                                    <p class="formulario__input-error px-3">Recuerde usar el formato para completar la información, ejemplo: 320Gb o 1Tb.</p>
                                </div>
                                <div class="form-group text-start col-4 formulario__grupo" id="grupo__disco_duro_marca_edit">
                                    <label for="disco_duro_marca_edit" class=" formulario__label">Disco Duro Marca</label>
                                    <input type="text" name="disco_duro_marca_edit" id="disco_duro_marca_edit" class="form-control w-85 formulario__input" required maxlength="15" placeholder="ejemplo: HITACHI">
                                    <p class="formulario__input-error px-3">Solo puede usar letras.</p>

                                </div>
                                <div class="form-group text-start col-4 formulario__grupo" id="grupo__disco_duro_serial_edit">
                                    <label for="disco_duro_serial_edit" class=" formulario__label">Disco Duro Serial</label>
                                    <input type="text" name="disco_duro_serial_edit" id="disco_duro_serial_edit" class="form-control w-65 formulario__input" required maxlength="20" placeholder="ejemplo: MDS7...">
                                    <p class="formulario__input-error px-3">El serial solo puede tener letras, numeros, guión y piso.</p>
                                </div>  
                            </div>
                            <div class="col-12">
                                <div class="row">  
                                    <div class="form-group text-start  col-6">
                                        <label for="ram_cant" class=" formulario__label">Cantidad Módulos RAM</label>
                                        <select class="form-select w-50 text-center" name="ram_cant_edit" id="ram_cant_edit" required>
                                            <option value="1">1</option>    
                                            <option value="2">2</option>
                                            <option value="3">3</option>    
                                            <option value="4">4</option>    
                                        </select>
                                    </div>
                                    
                                    <div class="form-group text-start col-6 formulario__grupo" id="grupo__ram_vel_edit">
                                        <label for="ram_vel_edit" class=" formulario__label">Velocidad Memoria RAM</label>
                                        <input type="text" name="ram_vel_edit" id="ram_vel_edit" class="form-control w-65    formulario__input" required placeholder="ejemplo: 2Gb">
                                        <p class="formulario__input-error px-3">Velocidad Memoria RAM.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="form-group text-center  col-3">
                                        <label for="vr_win" class=" formulario__label">Versión Windows</label>
                                        <select class="form-select text-center" name="vr_win_edit" id="vr_win_edit" required>
                                            <option value="XP">XP</option>
                                            <option value="Vista">Vista</option>    
                                            <option value="7">7</option>
                                            <option value="10">10</option>    
                                            <option value="11">11</option>    
                                        </select>
                                    </div>
                                    <div class="form-group text-center  col-3">
                                        <label for="conect_red" class=" formulario__label">¿Conectado a la Red?</label>
                                        <select class="form-select text-center" name="conect_red_edit" id="conect_red_edit">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>     
                                        </select>
                                    </div>
                                    <div class="form-group text-center  col-3">
                                        <label for="tipo_conect_edit" class=" formulario__label">Tipo de Conexión</label>
                                        <select class="form-select text-center" name="tipo_conect_edit" id="tipo_conect_edit">    
                                            <option value="Wifi">Wifi</option>
                                            <option value="Cableada">Cableada</option>    
                                            <option value="Ambas">Ambas</option>    
                                        </select>
                                    </div>
                                    <div class="form-group text-center  col-3">
                                        <label for="inter" class=" formulario__label">¿Posee Internet?</label>
                                        <select class="form-select text-center" name="internet_edit" id="internet_edit">
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
                                <div class="form-group text-center  col-3">
                                    <label for="mouse_selector" class=" formulario__label">Mouse</label>
                                    <select class="form-select text-center" name="mouse_selector" id="mouse_selector" required>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>     
                                    </select>
                                </div>
                                <div class="form-group text-center  col-3  formulario__grupo" id="grupo__mouse_datos_edit">
                                    <label for="mouse_datos_edit" class=" formulario__label">Mouse BN o Serial</label>
                                    <input type="text" name="mouse_datos_edit" id="mouse_datos_edit" class="form-control formulario__input">
                                    <p class="formulario__input-error px-3">El Bien Nacional solo puede contener números. En caso de ser serial tiene permitido el uso de guiones y piso.</p>
                                </div>
                                <div class="form-group text-center  col-3">
                                    <label for="mouse_marca" class=" formulario__label">Mouse Marca</label>
                                    <select class="form-select text-center" name="mouse_marca" id="mouse_marca" required>
                                        <option value="HP">HP</option>
                                        <option value="Generico">Generico</option>     
                                    </select>
                                </div>
                                <div class="form-group text-center  col-3">
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
                                <div class="form-group text-center  col-4">
                                    <label for="monitor_selector" class=" formulario__label">Monitor</label>
                                    <select class="form-select text-center" name="monitor_selector" id="monitor_selector" required>
                                        <option value="HP">HP</option>
                                        <option value="Siragon">Siragon</option>
                                        <option value="Generico">Genérico</option> 
                                        <option value="No">No</option>    
                                    </select>
                                </div>
                                <div class="form-group text-center  col-4  formulario__grupo" id="grupo__monitor_datos_edit">
                                    <label for="monitor_datos_edit" class=" formulario__label">Monitor BN o Serial</label>
                                    <input type="text" name="monitor_datos_edit" id="monitor_datos_edit" class="form-control formulario__input">
                                    <p class="formulario__input-error px-3">El Bien Nacional solo puede contener números. En caso de ser serial tiene permitido el uso de guiones y piso.</p>
                                </div>
                                <div class="form-group text-center  col-4">
                                    <label for="monitor_conexion" class=" formulario__label">Monitor Conexión</label>
                                    <select class="form-select text-center" name="monitor_conexion" id="monitor_conexion">
                                        <option value="VGA">VGA</option>
                                        <option value="HDMI">HDMI</option> 
                                    </select>
                                </div>
                            </div>

                            <div class="row border m-4 p-4 bg-grey-claro border-radius-15">
                                <h6 class="text-start">REGULADOR</h6>
                                <div class="form-group text-center  col-4">
                                    <label for="regulador_selector"  class=" formulario__label">Regulador</label>
                                    <select class="form-select text-center" name="regulador_selector" id="regulador_selector" required>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>      
                                    </select>
                                </div>
                                <div class="form-group text-center col-4  formulario__grupo" id="grupo__regulador_datos_edit">
                                    <label for="regulador_datos_edit" class=" formulario__label">Regulador BN o Serial</label>
                                    <input type="text" name="regulador_datos_edit" id="regulador_datos_edit" class="form-control formulario__input">
                                    <p class="formulario__input-error px-3">El Bien Nacional solo puede contener números. En caso de ser serial tiene permitido el uso de guiones y piso.</p>
                                </div>
                                <div class="form-group text-center col-4  formulario__grupo" id="grupo__regulador_marca_edit">
                                    <label for="regulador_marca_edit" class=" formulario__label">Regulador Marca</label>
                                    <input type="text" name="regulador_marca_edit" id="regulador_marca_edit" class="form-control formulario__input">
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
                                <div class="form-group text-center col-3">
                                    <label for="teclado_selector" class=" formulario__label">Teclado</label>
                                    <select class="form-select text-center" name="teclado_selector" id="teclado_selector" required>
                                        <option value="Si">Si</option>
                                        <option value="No">No</option>     
                                    </select>
                                </div>
                                <div class="form-group text-center col-3  formulario__grupo" id="grupo__teclado_datos_edit">
                                    <label for="teclado_datos_edit" class=" formulario__label">Teclado BN o Serial</label>
                                    <input type="text" name="teclado_datos_edit" id="teclado_datos_edit" class="form-control formulario__input">
                                    <p class="formulario__input-error px-3">El Bien Nacional solo puede contener números. En caso de ser serial tiene permitido el uso de guiones y piso.</p>
                                </div>
                                <div class="form-group text-center col-3  formulario__grupo" id="grupo__teclado_marca_edit">
                                    <label for="teclado_marca_edit" class=" formulario__label">Teclado Marca</label>
                                    <input type="text" name="teclado_marca_edit" id="teclado_marca_edit" class="form-control formulario__input">
                                    <p class="formulario__input-error px-3">Solo puede utilizar letras, sin espacios.</p>
                                </div>
                                <div class="form-group text-center  col-3">
                                    <label for="teclado_conexion" class=" formulario__label">Teclado Conexion</label>
                                    <select class="form-select text-center" name="teclado_conexion" id="teclado_conexion">
                                        <option value="USB">USB</option>
                                        <option value="PS/2">PS/2</option>     
                                    </select>
                                </div>
                            </div>
                            <div class="row border m-4 p-4 bg-grey-claro border-radius-15">
                                <h6 class="text-start">ESCANER</h6>
                                <div class="form-group text-center  col-3">
                                    <label for="escaner_selector" class=" formulario__label">Escaner</label>
                                    <select class="form-select text-center" name="escaner_selector" id="escaner_selector" required>
                                        <option value="HP">HP</option>
                                        <option value="Siragon">Canon</option>   
                                        <option value="No">No</option>     
                                    </select>
                                </div>
                                <div class="form-group text-center col-3  formulario__grupo" id="grupo__escaner_datos_edit">
                                    <label for="escaner_datos_edit" class=" formulario__label">Escaner BN o Serial</label>
                                    <input type="text" name="escaner_datos_edit" id="escaner_datos_edit" class="form-control formulario__input">
                                    <p class="formulario__input-error px-3">El Bien Nacional solo puede contener números. En caso de ser serial tiene permitido el uso de guiones y piso.</p>
                                </div>
                                <div class="form-group text-center col-3  formulario__grupo" id="grupo__escaner_modelo_edit">
                                    <label for="escaner_modelo_edit" class=" formulario__label">Escaner Modelo</label>
                                    <input type="text" name="escaner_modelo_edit" id="escaner_modelo_edit" class="form-control formulario__input">
                                    <p class="formulario__input-error px-3">Puede utilizar letras y números para describir el modelo, sin espacios.</p>
                                </div>
                                <div class="form-group text-center  col-3">
                                    <label for="escaner_conexion" class=" formulario__label">Escaner Conexion</label>
                                    <select class="form-select text-center" name="escaner_conexion" id="escaner_conexion">
                                        <option value="USB">USB</option>
                                        <option value="WIFI">WIFI</option>     
                                    </select>
                                </div>
                            </div>
                            <input id="busqueda" name="busqueda" value="edicionCPU" type="hidden" readonly> 

                            <div class="row mx-2 px-4">
                                <div class="form-group my-3 col-12 ">
                                    <label for="descripcion" class="bold formulario__label">Indique la razón del cambio</label>
                                    <textarea required class="bg-blanco-hsl descripcion" id="descripcion" name="descripcion"  minlength="20" maxlength="200"></textarea>
                                </div>
                                <div class="formulario__mensaje" id="formulario__mensaje">
                                    <p><b>ERROR:</b> Por favor rellene el formulario de manera correcta</p>
                                </div>
                            </div>
                            <div class=" text-end">
                                <button type="submit" class="btn btn-success" name="btn1">Enviar</button>
                            </div>
                        </div>
                    </div> 
                    <input type="hidden" id="id_dep" name="id_dep">
                    <input type="hidden" id="id_div" name="id_div">       
                    <input type="hidden" id="id_dir" name="id_dir">       

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
<script src="../js/bootstrap.bundle.min.js"></script>

<!-- BLOQUEAR INPUTS, CUYO PADRE DICE NO -->
<script src="../js/inv_nulos.js"></script>
<!-- LLENAR SELECTS -->
<script src="../js/division_select.js"></script>
<script src="../js/departamento_select.js"></script>

<!-- ESTO ES PARA MOSTRAR Y OCULTAR PESTAÑAS -->
<script src="../js/editar_mostrar_datos.js"></script>


<script src="../js/consulta_equipos.js"></script>
<script src="../js/edicion_equipos_formulario_nuevo_equipo.js"></script>



    
</body>


</html>