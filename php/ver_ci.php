<?php
// INICIANDO LAS VARIABLE GLOBAL
session_start();
ob_start();

    $consulta_extra=$_POST['consulta_extra'];

    // $mi_busqueda_ci = $_POST["mi_busqueda_ci"];

    $valores = array();

// CONSULTAR CÉDULA CREANDO USUARIO

if ($consulta_extra==1) {
    $existe_ci = 0;
    $cedula = $_POST['mi_busqueda_ci'];


    if ($cedula == "") {
        echo "";

    }
    else {
    include("abrir_conexion.php");
        

    // Buscar solo con la cedula: Where "Columna tabla" = "variable que usaré para buscar"
    $buscar_sql_ci = "SELECT * FROM $tabla_db1 WHERE cedula = '$cedula'";
    $resultados = mysqli_query($conexion,$buscar_sql_ci);
    while($consulta = mysqli_fetch_array($resultados))
    {
        echo 
        "La cédula ya existe";
        $existe_ci++;

    }
    if($existe_ci==0){
        echo "";
    }

    include("cerrar_conexion.php");
    }
}

// CONSULTAR CÉDULA MODIFICANDO USUARIO
if ($consulta_extra==2) {

    $cedula=$_SESSION['cedula_var_global'];

        include("abrir_conexion.php");
        
        // Buscar solo con la cedula: Where "Columna tabla" = "variable que usaré para buscar"
        $buscar_sql_ci = "SELECT * FROM $tabla_db1 WHERE cedula = '$cedula'";
        $resultados = mysqli_query($conexion,$buscar_sql_ci);
        while($consulta = mysqli_fetch_array($resultados))
        {
            $valores['usuario']=$consulta['nombre_usuario'];
            $valores['nombre']=$consulta['nombre']." ".$consulta['apellido'];
            $valores['pin']=$consulta['pin_seguridad'];
            $valores['telefono']=$consulta['telefono'];
            $valores['telefono_secundario']=$consulta['telefono_secundario'];
            $valores['email']=$consulta['email'];
            $valores['pregunta1']=$consulta['color_favorito'];
            $valores['pregunta2']=$consulta['lugar_nacimiento'];
            $valores['pregunta3']=$consulta['fruta_favorita'];

            $existe_ci++;
        }
        // REALENTIZANDO EL ENVÍO DEL FORMULARIO
        sleep(1);
        // Convirtiendo el array en algo leíble por JS
        $valores = json_encode($valores);
        echo $valores;
        if($existe_ci==0){
            echo "La cédula no está registrada en el sistema";
        }
    
        include("cerrar_conexion.php");
    }





    

?>