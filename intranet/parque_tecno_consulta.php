<?php

            // USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
            include("../php/verificacion_login.php");
            Login_ING_Admin();

?>
<script src="../js/reenvio.js"></script>

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/intranet.css">
    <link rel="stylesheet" href="../css/gg3.css">
    
    <?php
        include('../php/javascript.php');
    ?>

    <title>Consultar Equipos</title>
</head>
<body class="min-width-index">

    <header id="inicio-pag" class="caja-superior mx-4">
        <?php
        include('../php/logos_intranet.php');
        ?>
    </header>

<main class="contenedor-grid-index-horizontal">

    <!-- DIV QUE CONTIENE TODO -->
    <div id="contenedor-total-total">
    <!-- ************************************************* -->
    <!-- AGREGAR NUEVO EQUIPO -->
    <div class="container-fluid text-center  px-5 mx-0 ">   
        <h2 class="">Consultar Equipos</h2> 
        <div class="border-radius-15 px-5 py-3">
            <!-- CUADRO DE LA DERECHA -->
            <div class="container-fluid text-center mx-2  p-2 bg-blanco-hsl border-radius-15">
                <div class="p-5 border-radius-15 row">
                    <!--  ocultar-div -->
                    <div class="col-12 mb-5 p-3 bg-blanco border-radius-15" id="parte1">
                    
                        <!-- CONSULTA -->
                        <div class="contenedor-grid-3 gap-4">
                            <!-- CONSULTA POR DIRECCION -->
                            <div class=" border p-2 border-radius-15">
                                <h5 class="my-2">Direcciones</h5>
                                <!-- Tabla que contiene las Direcciones -->
                                <form action="../reportes/parque_tecno_reporte_direc.php" target="_blank" method="post">

                                    <div class="my-5">
                                        <select class="form-select" id="direccion_select" name="direccion_select" required>
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
                                    <div class="">
                                            <button type="button" onclick="consulta_dir();" class="btn btn-success mt-5 mx-auto">Consultar</button>
                                    </div>

                                    <button type="submit" class="btn btn-dark my-5" ><img class="w-30px" src="../assets/intranet/parque_tecnologico/archivo-pdf.png">Imprimir Reporte</button>
                                </form>  
                            </div>
                            <!-- ******************************************************************************************************** -->
                            <!-- CONSULTA POR DEPARTAMENTO -->
                            <div class=" border p-2 border-radius-15">
                                <form action="../reportes/parque_tecno_reporte_divis.php" target="_blank" method="post">
                                    <h5 class="my-2">Divisiones</h5>
                                    <div class="my-5">
                                        <div id="div_divisiones_select">
                                            <select class='form-select' id='division_select' name='division_select' required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="button" onclick="consulta_div();" class="btn btn-success mt-5 mx-auto">Consultar</button>
                                    </div>
                                    <button type="submit" class="btn btn-dark my-5" ><img class="w-30px" src="../assets/intranet/parque_tecnologico/archivo-pdf.png">Imprimir Reporte</button>
                                </form>
                            </div>
                            <!-- ******************************************************************************************************** -->
                            <!-- CONSULTA POR DEPARTAMENTO -->
                            <div class=" border p-2 border-radius-15">
                                <form action="../reportes/parque_tecno_reporte_depto.php" target="_blank" method="post">
                                    <h5 class="my-2">Departamentos</h5>
                                    <div class="my-5">
                                        <div id="div_dpto_select">
                                            <select class='form-select' id='departamento_select' name='departamento_select' required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button type="button" onclick="consulta_dep();" class="btn btn-success mt-5 mx-auto">Consultar</button>
                                    </div>
                                    <button type="submit" class="btn btn-dark my-5" ><img class="w-30px" src="../assets/intranet/parque_tecnologico/archivo-pdf.png">Imprimir Reporte</button>
                                </form>
                            </div>
                        </div>
                        <div class="my-5 p-4" id="respuesta_consulta">

                        </div>
                    </div>
                    
                <!-- ***************************************************************************************************************************** -->
                    <div class="container-fluid border py-4 ocultar-div col-12 bg-blanco border-radius-15"  id="parte2">
                    <h5>Ingrese la fecha:</h5>
                        <form action="../reportes/parque_tecno_reporte_fecha.php" method="post" target="_blank">
                            <!-- CONSULTA -->
                            <div class="contenedor-grid-3">
                                <input type="date" class="form-control mt-2" placeholder="2023-12-28" required id="fecha1" name="fecha">  
                                <h6 class="">de hasta:</h6> 
                                <input type="date" class="form-control mt-2" placeholder="2023-12-28" required id="fecha2" name="fecha2"> 
                            </div>
                            <div class=" my-3">
                                <button type="button" class="btn btn-success" onclick="fechas();">Consutar Fechas</button>                    
                            </div> 
                            <button type="submit" class="btn btn-dark my-5" ><img class="w-10" src="../assets/intranet/parque_tecnologico/archivo-pdf.png">Imprimir Reporte</button>

                            <div id="respuesta_fechas"></div>
                        </form>
                    </div>
                <!-- ***************************************************************************************************************************** -->
                    <div class="container-fluid border py-4 ocultar-div col-12 bg-blanco border-radius-15"  id="parte3">
                        <h5>Ingrese el nombre del equipo:</h5>
                        <form action="../reportes/parque_tecno_reporte_name.php" method="post" target="_blank">
                            <div class="">
                                <!-- CONSULTA -->
                                <input type="text" class="form-control mt-2" required placeholder="" pattern="[0-9a-zA-Z]+" id="con_name" name="con_name" maxlength="17">
                                
                                <button type="button" class="btn btn-success my-5" onclick="name_consult();">Consutar por Nombre del Equipo</button>
                                
                                
                                <div id="respuesta_name"></div>
                            </div>
                            <button type="submit" class="btn btn-dark my-5" ><img class="w-10" src="../assets/intranet/parque_tecnologico/archivo-pdf.png">Imprimir Reporte</button>
                        </form>
                    </div>
                <!-- ***************************************************************************************************************************** -->
                    <div class="container-fluid border py-4 ocultar-div col-12 bg-blanco border-radius-15"  id="parte4">
                        <h5>Visualizar reporte de todos los equipos de la Institución</h5>
                        <div  class="contenedor-grid">
                            <form id="form_" action="../reportes/parque_tecno_reporte_todo.php" method="post" target="_blank">
                                <div>
                                    <img src="../assets/intranet/parque_tecnologico/pdf.png" class="w-35 my-5">
                                </div>
                                <button type="submit" class="btn btn-secondary">Ver Reportes</button>
                            </form>
                        
                            <div>
                                <button class="btn btn-secondary my-5" onclick="total_equi();">Consultar total de equipos</button>
                                <h2>Total de equipos que posee la institución:</h2>
                                <h3 id="total_equipos"></h3>
                            </div>
                        </div>
                    </div>

                </div>                                
            </div> 
        </div> 
    </div>

    </div>

</main>

    <!-- BARRA LATERAL IZQUIERDA -->
    <?php
        include('../php/barra_lateral.php');
        barra_lateral_consul_equipo();
    ?>

<script>


</script>
<!-- JS en Bootstrap -->
<script src="../js/bootstrap.bundle.min.js"></script>

<script src="../js/consulta_equipos.js"></script>
<script src="../js/editar_mostrar_datos.js"></script>
<script src="../js/reportes.js"></script>
<!-- Busca los departamentos o direcciones -->
<script src="../js/division_select.js"></script>
<script src="../js/departamento_select.js"></script>
<script src="../js/search.js"></script>
<script src="../js/paginacion.js"></script>


    
</body>


</html>