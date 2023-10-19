<?php

session_start();
ob_start();
date_default_timezone_set("America/Caracas");
$alerta = $_POST['alerta'];
$valores = array();

// NOTIFICACION POR JEFE DE DIVISION
if ($alerta == "notificaciones") {
    include("abrir_conexion.php");
    $id_USR_LOGIN = $_SESSION['id_usr'];
    $usuario_coordinacion = $_SESSION['id_Coordinacion'];
    // $id_USR_LOGIN = 1;
    $poseeSoli = 0;
    $numerador = 1;

    // ******************************************************************************

    $tabla_Buscar = "SELECT * FROM $tabla_db12 cn INNER JOIN $tabla_db11 em ON cn.id_empresa_corresp = em.id_empresas WHERE Jefe_Corres = '$id_USR_LOGIN' AND id_corres_divi='$usuario_coordinacion' AND estatus_Corres = 1 AND DATEDIFF(CURDATE(), cn.fecha_llegada_corresp) < 1";
    $resultados = mysqli_query($conexion,$tabla_Buscar);
    $registros = mysqli_fetch_all($resultados,MYSQLI_ASSOC);
    foreach ($registros as $registro) {
        $Intro='<b>Correspondencia:   </b>';
        echo $Intro;
        $cadena = "<b>" . $numerador . "</b>-- ".$registro['descripcion_corresp']. ". <b>Empresa:</b> ".$registro['nombre_empresa'].".<b> Fecha: </b>".$registro['fecha_llegada_corresp']."       ";
        echo $cadena;
        $poseeSoli++;
        $numerador++;

    }
    if ($poseeSoli==0) {
        echo "";
        include("cerrar_conexion.php");
    }

}
// NOTIFICACION POR JEFE DE DIVISION ALERTA POR DIAS PASADOS
if ($alerta == "notificacionesALERTA") {
    include("abrir_conexion.php");
    $id_USR_LOGIN = $_SESSION['id_usr'];
    $usuario_coordinacion = $_SESSION['id_Coordinacion'];
    // $id_USR_LOGIN = 1;
    $poseeSoli = 0;
    $numerador = 1;

    // ******************************************************************************

    $tabla_Buscar = "SELECT * FROM $tabla_db12 cn INNER JOIN $tabla_db11 em ON cn.id_empresa_corresp = em.id_empresas WHERE Jefe_Corres = '$id_USR_LOGIN' AND id_corres_divi='$usuario_coordinacion' AND estatus_Corres = 1 AND DATEDIFF(CURDATE(), cn.fecha_llegada_corresp) >= 2";
    $resultados = mysqli_query($conexion,$tabla_Buscar);
    $registros = mysqli_fetch_all($resultados,MYSQLI_ASSOC);
    foreach ($registros as $registro) {
        $Intro='<b>Correspondencia en espera:   </b>';
        echo $Intro;
        $cadena = "<b>" . $numerador . "</b>--<b>Empresa:</b> ".$registro['nombre_empresa'].".<b> Fecha: </b>".$registro['fecha_llegada_corresp']."       ";
        echo $cadena;
        $poseeSoli++;
        $numerador++;

    }
    if ($poseeSoli==0) {
        echo "";
        include("cerrar_conexion.php");
    }

}
// ****************************************************************************************
// NOTIFICACION SOPORTE TÉCNICO
if ($alerta == "soporteTecnico") {
    include("abrir_conexion.php");
    $id_USR_LOGIN = $_SESSION['id_usr'];
    $usuario_coordinacion = $_SESSION['id_Coordinacion'];
    // $id_USR_LOGIN = 1;
    $poseeSoli = 0;
    $numerador = 1;

    // ******************************************************************************

    $tabla_Buscar = "SELECT * FROM $tabla_db8 WHERE estado = 2 OR estado = 6";
    $resultados = mysqli_query($conexion,$tabla_Buscar);
    $registros = mysqli_fetch_all($resultados,MYSQLI_ASSOC);
    foreach ($registros as $registro) {
        $Intro='<b>Posee solicitudes de Soporte Técnico</b>';
        $poseeSoli++;
    }
    echo $Intro;

    if ($poseeSoli==0) {
        echo "";
        include("cerrar_conexion.php");
    }

}