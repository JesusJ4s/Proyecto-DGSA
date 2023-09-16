<?php
$consulta = $_POST['consulta_extra'];
$ip_nula= '/^0{1,3}\.0{1,3}\.0{1,3}\.0{1,3}$/';
$mac_nulo= '/^([0]{2}[:-]){5}[0]{2}$/';


if ($consulta==1) {

    $nombreEquipo = $_POST["nomb_equip"];
    $existe_name = 0;
    $nameALTO = strtoupper($nombreEquipo);

    include("abrir_conexion.php");
    // Buscar solo con el nombre: Where "Columna tabla" = "variable que usaré para buscar"
    $buscar_sql_name = "SELECT * FROM $tabla_db6 WHERE nombre_equipo = '$nameALTO'";
    $resultados = mysqli_query($conexion,$buscar_sql_name);
    while($consulta = mysqli_fetch_array($resultados))
    {
        $existe_name++;

    }
    if($existe_name<>0){
        $mensaje="El nombre de usuario existe";
        echo $mensaje;
    }
    include("cerrar_conexion.php");

}
if ($consulta==2) {

    $ip = $_POST["ip_equipo"];
    $existe_name = 0;
    // $ipALTO = strtoupper($ip);


    if (preg_match($ip_nula, $ip)) {
        echo "";
    }else{
        include("abrir_conexion.php");
        // Buscar solo con el nombre: Where "Columna tabla" = "variable que usaré para buscar"
        $buscar_sql_ip = "SELECT * FROM $tabla_db6 WHERE ip = '$ip'";
        $resultados = mysqli_query($conexion,$buscar_sql_ip);
        while($consulta = mysqli_fetch_array($resultados))
        {
            $existe_name++;
        }
        if($existe_name<>0){
            $mensaje="La dirección IP ya existe.";
            echo $mensaje;
        }
        include("cerrar_conexion.php");
    }


}
if ($consulta==3) {

    $mac_equipo = $_POST["mac_equipo"];
    $existe_name = 0;
    $macALTO = strtoupper($mac_equipo);

    if (preg_match($mac_nulo, $mac_equipo)) {
        echo "";
    }else{
        include("abrir_conexion.php");
        // Buscar solo con el nombre: Where "Columna tabla" = "variable que usaré para buscar"
        $buscar_sql_mac = "SELECT * FROM $tabla_db6 WHERE mac = '$macALTO'";
        $resultados = mysqli_query($conexion,$buscar_sql_mac);
        while($consulta = mysqli_fetch_array($resultados))
        {
            $existe_name++;
        }
        if($existe_name<>0){
            $mensaje="La MAC ya existe";
            echo $mensaje;
        }
        include("cerrar_conexion.php");
    }
}




?>