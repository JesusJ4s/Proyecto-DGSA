<?php
include("estadisticas.php");
date_default_timezone_set("America/Caracas");
$tipo = $_POST["tipo"];

if ($tipo == "barras") {
    include("abrir_conexion.php");

    // SACAR DATOS DE SOLICITUDES
    $colis = "SELECT * FROM $tabla_db8 WHERE estado NOT IN (1)";
    $resultados = mysqli_query($conexion, $colis);
    $total = mysqli_num_rows($resultados);


    $colis1 = "SELECT * FROM $tabla_db8 WHERE estado = 3";
    $resultados1 = mysqli_query($conexion, $colis1);
    $finalizadas = mysqli_num_rows($resultados1);


    $colis2 = "SELECT * FROM $tabla_db8 WHERE estado = 5";
    $resultados2 = mysqli_query($conexion, $colis2);
    $rechazadas = mysqli_num_rows($resultados2);


    $colis3 = "SELECT * FROM $tabla_db8 WHERE estado = 6";
    $resultados3 = mysqli_query($conexion, $colis3);
    $repuesto = mysqli_num_rows($resultados3);

    $numFi = $finalizadas;
    $numRh = $rechazadas;
    $numRe = $repuesto;
    $finalizadas = number_format($finalizadas / $total * 100, 2);
    $rechazadas = number_format($rechazadas / $total * 100, 2);
    $repuesto = number_format($repuesto / $total * 100, 2);

    // enviamos los datos como caden json
    echo json_encode([$finalizadas, $rechazadas, $repuesto, $total, $numFi, $numRh, $numRe]);
}

if ($tipo == "fechas") {

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
                $num = "SELECT * FROM " . $tabla_db8 . " WHERE estado = 3 AND DATE(fecha_soporte_final) = '" . $fech[$i] . "'";
                $resultados = mysqli_query($conexion, $num);
                $f = mysqli_num_rows($resultados);
                $a[] = [$f];

                $num2 = "SELECT * FROM " . $tabla_db8 . " WHERE estado = 6 AND DATE(fecha_soporte_final) = '" . $fech[$i] . "'";
                $resultados = mysqli_query($conexion, $num2);
                $fa = mysqli_num_rows($resultados);
                $b[] = [$fa];

                $num3 = "SELECT * FROM " . $tabla_db8 . " WHERE estado = 5 AND DATE(fecha_soporte_final) = '" . $fech[$i] . "'";
                $resultados = mysqli_query($conexion, $num3);
                $fb = mysqli_num_rows($resultados);
                $c[] = [$fb];

                $i++;
            }
            $result = [$a, $b, $c];
        } else {
            $num = "SELECT * FROM " . $tabla_db8 . " WHERE estado = 3 AND DATE(fecha_soporte_final) = '$dat1'";
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

