<?php
date_default_timezone_set("America/Caracas");

/**
 * Crea un rango de fechas de la semana actual
 * @return array lunes | domingo
 */

function rangoFechas()
{
    $fech = date('Y-m-d');

    $domingo = date('Y-m-d', strtotime('next Sunday', strtotime($fech)));

    if (date("N") == 7) {
        $domingo = date('Y-m-d');
    }

    $lunes = date('Y-m-d', strtotime('-6 days', strtotime($domingo)));

    return [
        'lunes' => $lunes,
        'domingo' => $domingo
    ];
}

function getRangeDate($date_ini, $date_end)
{
    $date_ini = DateTime::createFromFormat("Y-m-d", $date_ini);
    $date_end = DateTime::createFromFormat("Y-m-d", $date_end);
    $period = new DatePeriod(
        $date_ini,
        new DateInterval('P1D'),
        $date_end,
    );
    $range = [];
    foreach ($period as $date) {
        $range[] = $date->format("Y-m-d");
    }
    $range[] = $date_end;
    return $range;
}

function userStats($dat1, $dat2 = null)
{
    include("abrir_conexion.php");
    if ($dat2 != null) {
        // obtenemos recorrido del rango de fechas 
        $fech = getRangeDate($dat1, $dat2);

        $con = count($fech);
        // $fechita = $fech[$i];
        $i = 0;
        $result = [];
        $result2 = [];


        while ($i < $con) {
            $num = "SELECT * FROM " . $tabla_db8 ." WHERE estado = 3 AND DATE(fecha_soporte_final) = '" . $fech[$i] . "'";
            $resultados = mysqli_query($conexion, $num);
            $f = mysqli_num_rows($resultados);
            $result[] = [$f];


            $num2 = "SELECT * FROM " . $tabla_db8 ." WHERE estado = 5 AND DATE(fecha_soporte_final) = '" . $fech[$i] . "'";
            $resultados2 = mysqli_query($conexion, $num2);
            $f2 = mysqli_num_rows($resultados2);
            $result2[] = [$f2];
            $i++;
        }
    } else {
        $num = "SELECT * FROM " . $tabla_db8 ." WHERE estado = 3 AND DATE(fecha_soporte_final) = '$dat1'";
        $resultados = mysqli_query($conexion, $num);
        $f = mysqli_num_rows($resultados);
        $result[] = [$f];
    }

    return $result;
}
$dat = rangoFechas();
$resultadoRango = userStats($dat['lunes'], $dat['domingo']);

echo json_encode([$dat, $resultadoRango]);