<?php
include("estadisticas.php");
date_default_timezone_set("America/Caracas");
$tipo = $_POST["tipo"];

if ($tipo == "movimientos") {

    function userStats($dat1, $dat2 = null)
    {
        include("abrir_conexion.php");
        if ($dat2 != null) {
            // obtenemos recorrido del rango de fechas 
            $fech = getRangeDate($dat1, $dat2);

            $con = count($fech);
            $i = 0;
            $result = [];

            while ($i < $con) {
                // INGRESOS AL SISTEMA
                $num = "SELECT * FROM " . $tabla_db100 . " WHERE id_accion_cambio = 3 AND DATE(fecha_usuario_cambio) = '" . $fech[$i] . "'";
                $resultados = mysqli_query($conexion, $num);
                $f = mysqli_num_rows($resultados);
                $a[] = [$f];
                // REGISTROS DE EQUIPOS ELECTRONICOS
                $num2 = "SELECT * FROM " . $tabla_db100 . " WHERE id_accion_cambio = 5 AND DATE(fecha_usuario_cambio) = '" . $fech[$i] . "'";
                $resultados = mysqli_query($conexion, $num2);
                $fb = mysqli_num_rows($resultados);
                $b[] = [$fb];
                // SOLICITUDES DE SOPORTE TÉCNICO
                $num3 = "SELECT * FROM " . $tabla_db100 . " WHERE id_accion_cambio = 8 AND DATE(fecha_usuario_cambio) = '" . $fech[$i] . "'";
                $resultados = mysqli_query($conexion, $num3);
                $fc = mysqli_num_rows($resultados);
                $c[] = [$fc];
                // REGISTRO DE CORRESPONDENCIA
                $num4 = "SELECT * FROM " . $tabla_db100 . " WHERE id_accion_cambio = 13 AND DATE(fecha_usuario_cambio) = '" . $fech[$i] . "'";
                $resultados = mysqli_query($conexion, $num4);
                $fd = mysqli_num_rows($resultados);
                $d[] = [$fd];
                // CREACIÓN DE RESPALDO
                $num4 = "SELECT * FROM " . $tabla_db100 . " WHERE id_accion_cambio = 17 AND DATE(fecha_usuario_cambio) = '" . $fech[$i] . "'";
                $resultados = mysqli_query($conexion, $num4);
                $fe = mysqli_num_rows($resultados);
                $e[] = [$fe];
                // Movimientos del sistema
                $num5 = "SELECT * FROM " . $tabla_db100 . " WHERE DATE(fecha_usuario_cambio) = '" . $fech[$i] . "'";
                $resultados = mysqli_query($conexion, $num5);
                $ff = mysqli_num_rows($resultados);
                $fz[] = [$ff];

                $i++;
            }
            $result = [$a, $b, $c, $d, $e, $fz];
        } else {
            $num = "SELECT * FROM " . $tabla_db100 . " WHERE id_accion_cambio = 3 AND DATE(fecha_usuario_cambio) = '$dat1'";
            $resultados = mysqli_query($conexion, $num);
            $f = mysqli_num_rows($resultados);
            $result[] = [$f];
        }

        return $result;
    }
    $fechitas = rangoFechas();
    $rangoFehc = userStats($fechitas['lunes'], $fechitas['domingo']);

    echo json_encode([$rangoFehc, $fechitas]);
}
if ($tipo == "usuarios") {
    include("abrir_conexion.php");

    // SACAR DATOS DE SOLICITUDES
    $colis = "SELECT * FROM $tabla_db1";
    $resultados = mysqli_query($conexion, $colis);
    $totalUsr = mysqli_num_rows($resultados);


    $colis1 = "SELECT * FROM $tabla_db1 WHERE ActivoInactivo = 2";
    $resultados1 = mysqli_query($conexion, $colis1);
    $inactivos = mysqli_num_rows($resultados1);


    $colis2 = "SELECT * FROM $tabla_db1 WHERE ActivoInactivo = 1";
    $resultados2 = mysqli_query($conexion, $colis2);
    $activos = mysqli_num_rows($resultados2);

    $colis3 = "SELECT * FROM $tabla_db1 WHERE sesion = 1";
    $resultados3 = mysqli_query($conexion, $colis3);
    $activosSis = mysqli_num_rows($resultados3);

    $activosPor = number_format($activos / $totalUsr * 100, 2);
    $inactivosPor = number_format($inactivos / $totalUsr * 100, 2);


    // enviamos los datos como caden json
    echo json_encode([$totalUsr, $activosPor, $inactivosPor, $activosSis]);
}
