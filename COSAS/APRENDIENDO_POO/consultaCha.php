<?php
$iden=$_POST['ident'];
if ($iden="consulta") {
    
    include("abrir_conexion2.php");

    $espera = mysqli_fetch_assoc(mysqli_query($conexion, "SELECT estado, COUNT(*) AS cantidad FROM $tabla_db8 WHERE estado='1' GROUP BY estado"));
    $finalizado = mysqli_fetch_assoc(mysqli_query($conexion, "SELECT estado, COUNT(*) AS cantidad FROM $tabla_db8 WHERE estado='3' GROUP BY estado"));
    $rechazado = mysqli_fetch_assoc(mysqli_query($conexion, "SELECT estado, COUNT(*) AS cantidad FROM $tabla_db8 WHERE estado='5' GROUP BY estado"));

    $data = array(
      0=>round($espera['cantidad'],1),
      1=>round($finalizado['cantidad'],1),
      2=>round($rechazado['cantidad'],1),
    );
    echo json_encode($data);
    
    

}