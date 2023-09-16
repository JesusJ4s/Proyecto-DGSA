<?php
    $alerta = $_POST['form1'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $cedula=$_POST['cedula'];
    $pais=$_POST['pais'];
    $estado=$_POST['estado'];
    $ciudad=$_POST['ciudad'];

if ($alerta==1) {
    

    if ($cedula != "27146430") {


        echo "Bien hecho, la Cedula es " . $cedula;
        // echo "<h2>Cedula: " . $cedula . "<br>correcta</h2>";
    }else{
        echo "Camino del ELSE La cedula es 27146430";
    }
    //else{
    //     // echo "<h2>Cedula: " . $cedula . "<br>incorrecta</h2>";
    //     $mensaje = "incorrecto";

    //     echo $mensaje;

    // }
}

if ($alerta==2) {
    echo "FORMULARIO NRO 2";
}






?>
