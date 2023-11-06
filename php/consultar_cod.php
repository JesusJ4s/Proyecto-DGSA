<?php
// <!-- CÓDIGO PHP BUENO -->
session_start();
ob_start();

$comprobacion = $_POST['que_buscar'];
$valores = array();
$regex = "/^(\d{2,4})[-\/](\d{2,4})[-\/](\d{2,4})$/";
// IMPRIMIR MENOS TEXTO
function acortar_texto($texto, $cantidad)
{
    if (strlen($texto) > $cantidad) {
        $texto_corto = substr($texto, 0, $cantidad);
        $texto_corto .= "...";
    } else {
        $texto_corto = $texto;
    }

    return $texto_corto;
}

// CONSULTAR TODA LA TABLA
if ($comprobacion == "todaLaTabla_Cargos") {
    include("abrir_conexion.php");
    echo

        '
        <table class="table table-striped" id="dataTable_gestion">
            <thead class="bg-grey text-light">
                <tr class="align-middle">
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Rol Sistema</th>
                    <th>Dirección</th>
                    <th>División</th>
                    <th>Departamento</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody id="body-rol">
        ';
    // SE PUEDE USAR LIMIT EN LA CONSULTA PARA LIMITAR LA CANTIDAD MOSTRADA
    // TERCER INTENTO
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db1 u INNER JOIN 
        $tabla_db2 c ON u.usuario_rol_id = c.id_rol INNER JOIN 
        $tabla_db3 d ON u.usuario_departamento_id = d.id_departamento INNER JOIN 
        $tabla_db4 a ON d.departamento_division_id = a.id_divisiones INNER JOIN 
        $tabla_db5 b ON a.division_direccion_id = b.id_direcciones 
        WHERE usuario_rol_id <> 5 AND ActivoInactivo <> 2");
    //  ORDER BY nombre_dire DESC

    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
            <tr class="align-middle">
                <td class="">' . $consulta['nombre'] . ' ' . $consulta['apellido'] . '</td>
                <td class="">' . $consulta['cedula'] . '</td>
                <td class="">' . $consulta['nombre_rol'] . '</td>
                <td class="">' . $consulta['nombre_dire'] . '</td>
                <td class="">' . $consulta['nombre_div'] . '</td>
                <td class="">' . $consulta['nombre_dpto'] . '</td>

                <td class=" text-center"><button class="btn btn-primary mb-1" id="carCamb" name="carCamb" onclick="cambioCargo_ind();">Cargo</button></td>

            </tr>
        ';
    }
    echo '</tbody>
            <tfoot>
                <tr class="align-middle">
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Rol Sistema</th>
                    <th>Dirección</th>
                    <th>División</th>
                    <th>Departamento</th>
                    <th>Modificar</th>
                </tr>
            </tfoot>
    </table>';

    include("cerrar_conexion.php");
}
// CONSULTAR TABLA SIN ACCESO
if ($comprobacion == "sinAcceso") {
    include("abrir_conexion.php");
    echo

        '
            <table class="table table-striped" id="dataTable_SinAcc">
            <thead class="bg-grey text-light">
                <tr class="align-middle text-center">
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Rol Sistema</th>
                    <th>Dirección</th>
                    <th>División</th>
                    <th>Departamento</th>
                    <th>Modificar</th>
                </tr>
            </thead>
            <tbody id="body-sinAcceso" class="align-middle">
        ';
    // SE PUEDE USAR LIMIT EN LA CONSULTA PARA LIMITAR LA CANTIDAD MOSTRADA
    // TERCER INTENTO
    $resultados2 = mysqli_query($conexion, "SELECT * FROM $tabla_db1 u 
        INNER JOIN $tabla_db2 c ON u.usuario_rol_id = c.id_rol 
        INNER JOIN $tabla_db3 d ON u.usuario_departamento_id = d.id_departamento 
        INNER JOIN $tabla_db4 a ON d.departamento_division_id = a.id_divisiones 
        INNER JOIN $tabla_db5 b ON a.division_direccion_id = b.id_direcciones WHERE usuario_rol_id = 5 AND ActivoInactivo = 1");

    while ($consulta = mysqli_fetch_array($resultados2)) {
        echo
            '
            <tr>
                <td class="">' . $consulta['nombre'] . ' ' . $consulta['apellido'] . '</td>
                <td class="">' . $consulta['cedula'] . '</td>
                <td class=""><b>' . $consulta['nombre_rol'] . '</b></td>
                <td class="">' . $consulta['nombre_dire'] . '</td>
                <td class="">' . $consulta['nombre_div'] . '</td>
                <td class="">' . $consulta['nombre_dpto'] . '</td>

                <td class=""><button class="btn btn-secondary mb-1" id="carCamb" name="carCamb" onclick="cambioCargo_ind2();">Cargo</button></td>

            </tr>
        ';
    }
    echo '</tbody>
            <tfoot>
                <tr class="align-middle text-center">
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Rol Sistema</th>
                    <th>Dirección</th>
                    <th>División</th>
                    <th>Departamento</th>
                    <th>Modificar</th>
                </tr>
            </tfoot>
        </table>';

    include("cerrar_conexion.php");
}
// CONSULTAR TABLA INACTIVOS
if ($comprobacion == "inactivos") {
    include("abrir_conexion.php");
    echo
        '
            <table class="table table-striped" id="dataTable_Inactivos">
                <thead class="bg-grey text-light">
                    <tr class="align-middle">
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Rol Sistema</th>
                        <th>Dirección</th>
                        <th>División</th>
                        <th>Departamento</th>
                        <th>Estado</th>
                        <th>Modificar</th>
                    </tr>
                </thead>
            <tbody id="body-Inactivos">
        ';
    // SE PUEDE USAR LIMIT EN LA CONSULTA PARA LIMITAR LA CANTIDAD MOSTRADA
    // TERCER INTENTO
    $resultados2 = mysqli_query($conexion, "SELECT * FROM $tabla_db1 u 
        INNER JOIN $tabla_db2 c ON u.usuario_rol_id = c.id_rol 
        INNER JOIN $tabla_db3 d ON u.usuario_departamento_id = d.id_departamento 
        INNER JOIN $tabla_db4 a ON d.departamento_division_id = a.id_divisiones 
        INNER JOIN $tabla_db5 b ON a.division_direccion_id = b.id_direcciones
        INNER JOIN $tabla_db2_2 es ON u.ActivoInactivo=es.id_estado
        WHERE usuario_rol_id = 5 AND ActivoInactivo = 2");
    //INNER JOIN $tabla_db2_2 s ON u.ActivoInactivo = s.nombre_status 
    while ($consulta = mysqli_fetch_array($resultados2)) {
        echo
            '
            <tr class="align-middle">
                <td class="">' . $consulta['nombre'] . ' ' . $consulta['apellido'] . '</td>
                <td class="">' . $consulta['cedula'] . '</td>
                <td class="">' . $consulta['nombre_rol'] . '</td>
                <td class="">' . $consulta['nombre_dire'] . '</td>
                <td class="">' . $consulta['nombre_div'] . '</td>
                <td class="">' . $consulta['nombre_dpto'] . '</td>
                <td class=""><b>' . $consulta['nombre_status'] . '</b></td>

                <td class=""><button class="btn btn-success" id="carCamb" name="carCamb" data-bs-toggle="modal" data-bs-target="#cambioStatus" onclick="activarUsrDatos();">Activar</button></td>

            </tr>
        ';
    }
    echo '</tbody>
            <tfoot>
                <tr class="align-middle">
                    <th>Nombre</th>
                    <th>Cedula</th>
                    <th>Rol Sistema</th>
                    <th>Dirección</th>
                    <th>División</th>
                    <th>Departamento</th>
                    <th>Estado</th>
                    <th>Modificar</th>
                </tr>
            </tfoot>
        </table>';

    include("cerrar_conexion.php");
}


// TABLA DE RECUPERACION (SOLO BUSQUEDA DE DATOS)
if ($comprobacion == "tabla_recuperacion") {
    include("abrir_conexion.php");
    echo
        '
    <table class="table table-hover" id="Recup_contra">
        <thead class="bg-grey text-light">
            <tr class="align-middle">
                <th class="">Nombre</th>
                <th class="">Cedula</th>
                <th class="">Rol</th>
                <th class="">Dirección</th>
                <th class="">División</th>
                <th class="">Departamento</th>
                <th class="">Recuperar</th>
            </tr>
        </thead>
        <tbody id="body-recuperacion">
    ';

    $cedula = $_POST["mi_busqueda_ci"];
    $existe = 0;

    // CONSULTAR DEPARTAMENTO Y CARGO POR NOMBRE

    // Buscar solo con la cedula: Where "Columna tabla" = "variable que usaré para buscar"
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db1 u INNER JOIN $tabla_db2 c ON u.usuario_rol_id = c.id_rol INNER JOIN $tabla_db3 d ON u.usuario_departamento_id = d.id_departamento INNER JOIN $tabla_db4 a ON d.departamento_division_id = a.id_divisiones INNER JOIN $tabla_db5 b ON a.division_direccion_id = b.id_direcciones WHERE usuario_rol_id <> 5 AND ActivoInactivo <> 2");
    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
            <tr class="align-middle">
                <td class="">' . $consulta['nombre'] . ' ' . $consulta['apellido'] . '</td>                    
                <td class="">' . $consulta['cedula'] . '</td>
                <td class="">' . $consulta['nombre_rol'] . '</td>
                <td class="">' . $consulta['nombre_dire'] . '</td>
                <td class="">' . $consulta['nombre_div'] . '</td>
                <td class="">' . $consulta['nombre_dpto'] . '</td>

                <td class=""><button class="btn btn-secondary mb-1" id="carCamb" name="carCamb" onclick="recuperarUSR();">Usuario</button></td>

            </tr>
        ';
        $existe++;
    }
    echo '</tbody>
            <thead class="">
                <tr class="align-middle">
                    <th class="">Nombre</th>
                    <th class="">Cedula</th>
                    <th class="">Rol</th>
                    <th class="">Dirección</th>
                    <th class="">División</th>
                    <th class="">Departamento</th>
                    <th class="">Recuperar</th>
                </tr>
            </thead>
        
    </table>';

    if ($existe == 0) {
        echo "<h3>El documento no existe</h3>";
    }

    include("cerrar_conexion.php");

}
// VERIFICAR CEDULA PARA CAMBIAR CONTRASEÑA (SOLO BUSQUEDA DE DATOS)
if ($comprobacion == "VerificacionPin") {
    include("abrir_conexion.php");

    $PIN = $_POST["pin"];
    $cedula_Admin = $_SESSION['cedula_var_global']; //USUARIO LOGUEADO
    $cedula_usr = $_POST["cedulaRecuperar"]; //USUARIO A RECUPERAR
    $_SESSION['pinBIEN'] = false;


    $pinCorrecto = 0;
    $SQL_verify = "SELECT * FROM $tabla_db1 WHERE cedula = '$cedula_Admin'";
    $resultados = mysqli_query($conexion, $SQL_verify);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $pinBD = $consulta['pin_seguridad'];
    }
    include("cerrar_conexion.php");
    if ($pinBD == $PIN) {
        include("abrir_conexion.php");
        $SQL_verify2 = "SELECT * FROM $tabla_db1 WHERE cedula = '$cedula_usr'";
        $resultados = mysqli_query($conexion, $SQL_verify2);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $pinCorrecto++;
        }
        $_SESSION['pinBIEN'] = true;

        include("php/cerrar_conexion.php");

    } else {
        $_SESSION['pinBIEN'] = false;
        http_response_code(500);
        include("php/cerrar_conexion.php");

    }


}
// ********************************************************************************************************************************************
// CUANDO SE EJECUTA SE BUSCAN LOS VALORES PARA LLENAR LA TABLA CON LOS DATOS (SOLO BUSQUEDA DE DATOS)
if ($comprobacion == "datos_CambioCargo") {
    include("abrir_conexion.php");

    $Cedula = $_POST['nroCI'];

    $contador = 0;

    $SQL_cargo_info = "SELECT * FROM $tabla_db1 u INNER JOIN $tabla_db3 d ON u.usuario_departamento_id = d.id_departamento INNER JOIN $tabla_db4 a ON d.departamento_division_id = a.id_divisiones INNER JOIN $tabla_db5 b ON a.division_direccion_id = b.id_direcciones INNER JOIN $tabla_db2 c ON u.usuario_rol_id = c.id_rol WHERE cedula = '$Cedula'";
    $resultados = mysqli_query($conexion, $SQL_cargo_info);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $valores['nombreCargo'] = $consulta['nombre'] . " " . $consulta['apellido'];
        $valores['cedulaCargo'] = $consulta['cedula'];
        $valores['usuarioCargo'] = $consulta['nombre_usuario'];

        $valores['id_dir'] = $consulta['usuario_direccion_id'];
        $valores['id_div'] = $consulta['usuario_division_id'];
        $valores['id_dep'] = $consulta['usuario_departamento_id'];

        $valores['cargoID'] = $consulta['usuario_rol_id'];
        $valores['cargoOrig'] = $consulta['nombre_rol'];



        $valores['nombre_dpto'] = $consulta['nombre_dpto'];
        $valores['nombre_div'] = $consulta['nombre_div'];
        $valores['nombre_dire'] = $consulta['nombre_dire'];

    }

    // REALENTIZANDO EL ENVÍO DEL FORMULARIO
    sleep(1);
    // Convirtiendo el array en algo leíble por JS
    $valores = json_encode($valores);
    echo $valores;

    include("cerrar_conexion.php");

}

// CUANDO SE EJECUTA SE BUSCAN LOS VALORES PARA LLENAR LA TABLA CON LOS DATOS (RECUPERACIÓN DE USUARIO)(SOLO BUSQUEDA DE DATOS)
if ($comprobacion == "formRecuperarUsr") {
    include("abrir_conexion.php");

    $Cedula = $_POST['nroCI'];
    $cargo = $_POST['cargo'];

    $contador = 0;

    $SQL_cargo_info = "SELECT * FROM $tabla_db1 WHERE cedula = '$Cedula'";
    $resultados = mysqli_query($conexion, $SQL_cargo_info);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $valores['nombreCargo'] = $consulta['nombre'] . " " . $consulta['apellido'];
        $valores['cedulaCargo'] = $consulta['cedula'];
        $valores['usuarioCargo'] = $consulta['nombre_usuario'];
        $_SESSION['cedulaRecuperacion'] = $consulta['cedula'];
    }
    // REALENTIZANDO EL ENVÍO DEL FORMULARIO
    sleep(1);
    // Convirtiendo el array en algo leíble por JS
    $valores = json_encode($valores);
    echo $valores;

    include("cerrar_conexion.php");

}
// CONSULTAR TODA LA TABLA DE AUDITORIAS
if ($comprobacion == "auditoriaUsrConsulta") {
    include("abrir_conexion.php");
    echo

        '
    <table class="table table-striped" id="dataTable_AuditoUsr">
        <thead class="bg-grey text-light">
            <tr class="align-middle">
                <th>Fecha</th>
                <th>Nombre Responsable</th>
                <th>Cedula</th>
                <th>Acción</th>
                <th>Descripción</th>
                <th>Leer</th>
            </tr>
        </thead>
        <tbody id="body-AudiUsr">
    ';
    // SE PUEDE USAR LIMIT EN LA CONSULTA PARA LIMITAR LA CANTIDAD MOSTRADA
    // TERCER INTENTO
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db100 au INNER JOIN 
    $tabla_db1 us ON au.id_usuario_cambio = us.id_usuario INNER JOIN 
    $tabla_db102 hi ON au.id_accion_cambio = hi.id_accHis ORDER BY fecha_usuario_cambio DESC");
    //  ORDER BY nombre_dire DESC

    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
        <tr class="align-middle">
            <td class="">' . $consulta['fecha_usuario_cambio'] . '</td>
            <td class="">' . $consulta['nombre'] . ' ' . $consulta['apellido'] . '</td>
            <td class="">' . $consulta['cedula'] . '</td>
            <td class="">' . $consulta['nombre_accion'] . '</td>
            <td class="">' . acortar_texto($consulta['descripcion_cambio'], 80) . '</td>

            <td class=" text-center"><button class="btn btn-secondary mb-1" id="VerAudi" name="VerAudi" onclick="auditoriaDatos();">Ver</button></td>

        </tr>
    ';
    }
    echo '</tbody>
            <tfoot>
                <tr class="align-middle">
                    <th>Fecha</th>
                    <th>Nombre Responsable</th>
                    <th>Cedula</th>
                    <th>Acción</th>
                    <th>Descripción</th>
                    <th>Leer</th>
                </tr>
            </tfoot>
        </table>';

    include("cerrar_conexion.php");
}
// CONSULTAR TABLA DE AUDITORIAS POR FECHA
if ($comprobacion == "auditoriaFechConsulta") {
    include("abrir_conexion.php");
    $fechaIni= $_POST['fecha1'];
    $fechaFinal= $_POST['fecha2'];


    if (empty($fechaIni)) {
        $fechaIni="2000-01-01";
    };

    if (preg_match($regex, $fechaIni) && preg_match($regex, $fechaFinal) && $fechaIni < $fechaFinal) {
        echo

            '
        <table class="table table-striped" id="dataTable_AuditoFecha">
            <thead class="bg-grey text-light">
                <tr class="align-middle">
                    <th>Fecha</th>
                    <th>Nombre Responsable</th>
                    <th>Cedula</th>
                    <th>Acción</th>
                    <th>Descripción</th>
                    <th>Leer</th>
                </tr>
            </thead>
            <tbody id="body-AudiFecha">
        ';
        // SE PUEDE USAR LIMIT EN LA CONSULTA PARA LIMITAR LA CANTIDAD MOSTRADA
        // TERCER INTENTO
        $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db100 au INNER JOIN 
        $tabla_db1 us ON au.id_usuario_cambio = us.id_usuario INNER JOIN 
        $tabla_db102 hi ON au.id_accion_cambio = hi.id_accHis WHERE fecha_usuario_cambio BETWEEN '$fechaIni' AND '$fechaFinal'");
        //  ORDER BY nombre_dire DESC

        while ($consulta = mysqli_fetch_array($resultados)) {
            echo
                '
            <tr class="align-middle">
                <td class="">' . $consulta['fecha_usuario_cambio'] . '</td>
                <td class="">' . $consulta['nombre'] . ' ' . $consulta['apellido'] . '</td>
                <td class="">' . $consulta['cedula'] . '</td>
                <td class="">' . $consulta['nombre_accion'] . '</td>
                <td class="">' . acortar_texto($consulta['descripcion_cambio'], 80) . '</td>

                <td class=" text-center"><button class="btn btn-secondary mb-1" id="VerAudi" name="VerAudi" onclick="auditoriaDatos();">Ver</button></td>

            </tr>
        ';
        }
        echo '</tbody>
                <tfoot>
                    <tr class="align-middle">
                        <th>Fecha</th>
                        <th>Nombre Responsable</th>
                        <th>Cedula</th>
                        <th>Acción</th>
                        <th>Descripción</th>
                        <th>Leer</th>
                    </tr>
                </tfoot>
            </table>';

    }else {
        http_response_code(500);
        include("cerrar_conexion.php");
    }

    include("cerrar_conexion.php");
}
// IMPRIMIR DATOS EN MODAL DE LA AUDITORIA
if ($comprobacion == "auditoriaDatos") {
    include("abrir_conexion.php");

    $fecha = $_POST['fecha'];
    $Cedula = $_POST['cedula'];

    $contador = 0;

    $SQL_audiDatos_info = "SELECT * FROM $tabla_db100 au INNER JOIN 
    $tabla_db1 us ON au.id_usuario_cambio = us.id_usuario INNER JOIN 
    $tabla_db102 hi ON au.id_accion_cambio = hi.id_accHis WHERE cedula = '$Cedula' AND fecha_usuario_cambio = '$fecha'";
    $resultados = mysqli_query($conexion, $SQL_audiDatos_info);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $valores['nombre'] = $consulta['nombre'] . " " . $consulta['apellido'];
        $valores['cedulaCargo'] = $consulta['cedula'];
        $valores['nombreUsuario'] = $consulta['nombre_usuario'];
        $valores['fecha_cambio'] = $consulta['fecha_usuario_cambio'];
        $valores['nombreAccion'] = $consulta['nombre_accion'];
        $valores['descripcion'] = $consulta['descripcion_cambio'];
    }
    // Convirtiendo el array en algo leíble por JS
    $valores = json_encode($valores);
    echo $valores;

    include("cerrar_conexion.php");

}
// CONSULTAR TODA LA TABLA DE AUDITORIA DE LA BASE DE DATOS
if ($comprobacion == "BaseDatos") {
    include("abrir_conexion.php");
    echo

        '
    <table class="table table-striped" id="dataTable_BaseDatos">
        <thead class="bg-grey text-light">
            <tr class="align-middle">
                <th>Fecha</th>
                <th>Nombre Responsable</th>
                <th>Cedula</th>
                <th>Acción</th>
                <th>Descripción</th>

            </tr>
        </thead>
        <tbody id="body-BaseDatos">
    ';
    // SE PUEDE USAR LIMIT EN LA CONSULTA PARA LIMITAR LA CANTIDAD MOSTRADA
    // TERCER INTENTO
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db100 au INNER JOIN 
    $tabla_db1 us ON au.id_usuario_cambio = us.id_usuario INNER JOIN 
    $tabla_db102 hi ON au.id_accion_cambio = hi.id_accHis WHERE id_accion_cambio = 17 ORDER BY fecha_usuario_cambio DESC");
    //  ORDER BY nombre_dire DESC

    while ($consulta = mysqli_fetch_array($resultados)) {
        echo
            '
        <tr class="align-middle">
            <td class="">' . $consulta['fecha_usuario_cambio'] . '</td>
            <td class="col-2">' . $consulta['nombre'] . ' ' . $consulta['apellido'] . '</td>
            <td class="col-2">' . $consulta['cedula'] . '</td>
            <td class="col-2">' . $consulta['nombre_accion'] . '</td>
            <td class="">' . $consulta['descripcion_cambio'] . '</td>


        </tr>
    ';
    }
    echo '</tbody>
            <tfoot>
                <tr class="align-middle">
                    <th>Fecha</th>
                    <th>Nombre Responsable</th>
                    <th>Cedula</th>
                    <th>Acción</th>
                    <th>Descripción</th>

                </tr>
            </tfoot>
        </table>';

    include("cerrar_conexion.php");
}
// CONSULTAR USUARIOS ACTIVOS EN EL SISTEMA
if ($comprobacion == "usandoSIS") {

    include("abrir_conexion.php");

    echo

    '
    <table class="table table-striped" id="dataTable_usando">
        <thead class="bg-grey text-light">
            <tr class="align-middle">
                <th>Nombre</th>
                <th>Departamento</th>
                <th>Activo</th>
            </tr>
        </thead>
        <tbody id="body-usando">
    ';
    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db1 us INNER JOIN 
    $tabla_db3 de ON us.usuario_departamento_id = de.id_departamento WHERE sesion = 1");
        //  ORDER BY nombre_dire DESC
        while ($consulta = mysqli_fetch_array($resultados)) {
            echo
                '
        <tr class="align-middle">
            <td class="">' . $consulta['nombre']." ".$consulta['apellido'] . '</td>
            <td class="col-2">' . $consulta['nombre_dpto']. '</td>
            <td class="col-2"><img src="../assets/icon/comprobado.png" class="w-50"></td>
        </tr>
    ';
        }
        echo '</tbody>
            <tfoot>
                <tr class="align-middle">
                    <th>Nombre</th>
                    <th>Departamento</th>
                    <th>Activo</th>
                </tr>
            </tfoot>
        </table>';

    include("cerrar_conexion.php");


}

?>