<?php
// USAR EN TODAS LAS PAGINAS PARA INICIAR SESION
// if($_SESSION['sesion_exito']<>1 || $_SESSION['nivel_usuario']==100)
// {
//     header('location: ../intranet.php');
// }
session_start();
ob_start();

$ingreso = $_POST['ingreso'];

if ($ingreso == "log") {
    // Recibir la información de ingreso a la intranet:
    $user = $_POST['usuario'];
    // Pasar nombre de usuario a mayúsculas
    $nameUPPER = strtoupper($user);
    //VERIFICAR QUE TENGA PERMISO
    include("abrir_conexion.php");
    $permi = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE nombre_usuario = '$nameUPPER'");
    while ($consulta = mysqli_fetch_array($permi)) {
        $permiso = $consulta['usuario_rol_id'];
    }
    include("cerrar_conexion.php");

    if ($permiso <> 5) {
        if ($_SESSION['sesion_exito'] == 0) {
            $pass = $_POST['contraseña'];
            $ver1 = 0;
            // $ver2 = 0;
            // ABRIR CONEXION PARA PODER HACER LA CONSULTA
            include("abrir_conexion.php");
            // VERIFICANDO LA CONTRASEÑA ENCRIPTADA
            $Contra = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE nombre_usuario = '$nameUPPER'");
            while ($consulta = mysqli_fetch_array($Contra)) {
                $Password = $consulta['contraseña'];
            }
            // VERIFICANDO LA CONTRASEÑA
            if (password_verify($pass, $Password)) {
                $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db1 us INNER JOIN $tabla_db2 ro ON us.usuario_rol_id = ro.id_rol WHERE nombre_usuario = '$nameUPPER'");
                while ($consulta = mysqli_fetch_array($verificar)) {
                    $valorCargo = $consulta['usuario_rol_id'];
                    $valorID = $consulta['id_usuario'];
                    $valorCedula = $consulta['cedula'];
                    $nombre = $consulta['nombre'] . " " . $consulta['apellido'];
                    $nombreEvent = $consulta['nombre'];
                    $valorSesion = $consulta['sesion'];
                    $valorRol = $consulta['nombre_rol'];
                }
                if ($valorSesion == 0) {
                    include("date_time.php");

                    $_SESSION['event'] = $nombreEvent . $valorCedula;
                    $evento = $_SESSION['event'];
                    $_SESSION['LAST_ACTIVITY'] = time();
                    $updateSesion = "UPDATE $tabla_db1 SET sesion='1' WHERE id_usuario = '$valorID'";
                    mysqli_query($conexion, $updateSesion);

                    $nueva_hora = hora10();
                    $event = "CREATE EVENT $evento ON SCHEDULE AT '$nueva_hora' DO UPDATE $tabla_db1 SET sesion = '0' WHERE id_usuario = '$valorID'";
                    mysqli_query($conexion, $event);

                    $_SESSION['sesion_exito'] = 1; //1 - Inicio sesion
                    $_SESSION['cedula_var_global'] = $valorCedula;
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['id_usr'] = $valorID;
                    $pollo = $valorID;
                    $_SESSION['nombre_rol'] = $valorRol;
                    if ($valorCargo == 1) {
                        $_SESSION['nivel_usuario'] = 1; //ADMIN PODER: ADMIN
                    }
                    if ($valorCargo == 2) {
                        $_SESSION['nivel_usuario'] = 2; //ING INFOR PODER: ADMIN
                    }
                    if ($valorCargo == 3) {
                        $_SESSION['nivel_usuario'] = 3; //JEF DPTO PODER: ADMIN-
                    }
                    if ($valorCargo == 4) {
                        $_SESSION['nivel_usuario'] = 4; //EMPLEADO PODER: VER
                    }
                    // AUDITORIA *****************************************************************
                    $descripcion_Cambio = "Ingreso del Usuario: " . $nombre . ".";
                    $accionIngreso = "5";
                    $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionIngreso', now(), '$descripcion_Cambio')";
                    mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
                    // FINAL AUDITORIA ************************************************************

                    // CONSULTA FINALIZADA, CERRAR SESION
                    include("cerrar_conexion.php");
                } else {
                    http_response_code(501);
                    include("cerrar_conexion.php");
                }
            } else {
                http_response_code(504);
                include("cerrar_conexion.php");
            }
        } else {
            http_response_code(503);
            include("cerrar_conexion.php");
        }
    } else {
        http_response_code(502);
    }
}

?>