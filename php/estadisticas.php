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
    $dt_ini = DateTime::createFromFormat("Y-m-d", $date_ini);
    $dt_end = DateTime::createFromFormat("Y-m-d", $date_end);
    $period = new DatePeriod(
        $dt_ini,
        new DateInterval('P1D'),
        $dt_end,
    );
    $range = [];
    foreach ($period as $date) {
        $range[] = $date->format("Y-m-d");
    }
    $range[] = $date_end;
    return $range;
}