<?php
date_default_timezone_set("America/Caracas");

function fecha_larga()
{
    date_default_timezone_set("America/Caracas");
    // Obteniedo los valores en ingles
    $fecha_dia = date("D");
    $fecha_nro = date("d");
    $fecha_mes = date("m");
    $fecha_year = date("Y");

    // Crear un array para cambiar los valores de Ingles a Español
    $dia_semana = [
        "Mon" => "Lun",
        "Tue" => "Mar",
        "Wed" => "Mie",
        "Thu" => "Jue",
        "Fri" => "Vie",
        "Sat" => "Sab",
        "Sun" => "Dom"
    ];

    $meses_year = [
        "01" => "Ene",
        "02" => "Feb",
        "03" => "Mar",
        "04" => "Abr",
        "05" => "May",
        "06" => "Jun",
        "07" => "Jul",
        "08" => "Ago",
        "09" => "Sep",
        "10" => "Oct",
        "11" => "Nov",
        "12" => "Dic"
    ];

    $fecha_larga = $dia_semana[date("D")] . ", " . $fecha_nro . ". " . $meses_year[date("$fecha_mes")] . " " . $fecha_year;

    return $fecha_larga;
}

function fecha_inventario()
{
    date_default_timezone_set("America/Caracas");
    // Obteniedo los valores en ingles
    $fecha_dia = date("D");
    $fecha_nro = date("d");
    $fecha_mes = date("m");
    $fecha_year = date("Y");

    echo $fecha_year . "-" . $fecha_mes . "-" . $fecha_nro;
}
function hora_larga()
{
    date_default_timezone_set("America/Caracas");
    // Obteniedo los valores
    $hora = date("h");
    $minuto = date("i");
    $segundo = date("s");
    $AntPost = date("a");


    $hora_completa = $hora . ":" . $minuto . ":" . $segundo . " - " . $AntPost;

    return $hora_completa;

}
function hora10()
{
    $hora_actual = date('Y-m-d H:i:s');
    // Convertir la hora actual en un objeto DateTime
    $fecha_hora = new DateTime($hora_actual);
    // Sumar 10 minutos a la hora actual
    $fecha_hora->add(new DateInterval('PT5M'));
    // Obtener la nueva hora en el formato "YYYY-MM-DD HH:MM:SS"
    $nueva_hora = $fecha_hora->format('Y-m-d H:i:s');

    return $nueva_hora;
}
$hora_sola = date("h");
$minuto_solo = date("i");
$segundo_solo = date("s");
$AntPost_solo = date("a");


?>