<?php
include("estadisticas.php");
date_default_timezone_set("America/Caracas");
$tipo = $_POST["tipo"];

if ($tipo == "correspFechas") {

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
                // CORRESPONDENCIA DEL DIA
                $num = "SELECT * FROM " . $tabla_db10 . " WHERE DATE(fecha_llegada) = '" . $fech[$i] . "'";
                $resultados = mysqli_query($conexion, $num);
                $f = mysqli_num_rows($resultados);
                $a[] = [$f];
                // CORRESPONDENCIA EN ESPERA
                $num2 = "SELECT * FROM " . $tabla_db12 . " WHERE estatus_Corres = 1 AND DATE(fecha_llegada_corresp) = '" . $fech[$i] . "'";
                $resultados = mysqli_query($conexion, $num2);
                $fb = mysqli_num_rows($resultados);
                $b[] = [$fb];
                // CORRESPONDENCIA ACEPTADA
                $num3 = "SELECT * FROM " . $tabla_db12 . " WHERE estatus_Corres = 2 AND DATE(fecha_confirmacion_corres) = '" . $fech[$i] . "'";
                $resultados = mysqli_query($conexion, $num3);
                $fc = mysqli_num_rows($resultados);
                $c[] = [$fc];

                $i++;
            }
            $result = [$a, $b, $c];
        } else {
            $num = "SELECT * FROM " . $tabla_db10 . " WHERE DATE(fecha_llegada) = '" . $fech[$i] . "'";
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

