<?php
date_default_timezone_set("America/Caracas");

$hora_sola = date("h");
$minuto_solo = date("i");
$segundo_solo = date("s");
$AntPost_solo = date("a");

$horaActual = "<kbd>$hora_sola</kbd>:<kbd>$minuto_solo</kbd>:<kbd class=\"bg-light text-dark\">$segundo_solo</kbd>";
echo $horaActual;
