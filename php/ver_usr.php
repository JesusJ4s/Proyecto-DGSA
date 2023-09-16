<?php


    $mi_busqueda_name = $_POST["mi_busqueda_name"];
    $existe_name = 0;


    //MODIFICAR CARACTERES A MAYÚSCULAS
    $nameUPPER = strtoupper($mi_busqueda_name);
    // NOMBRE DE USUARIO

    if ($mi_busqueda_name == "") {
        echo "";
    }

    else{
        include("abrir_conexion.php");
            // Buscar solo con el nombre: Where "Columna tabla" = "variable que usaré para buscar"
            $buscar_sql_name = "SELECT * FROM $tabla_db1 WHERE nombre_usuario = '$nameUPPER'";
            $resultados = mysqli_query($conexion,$buscar_sql_name);
            while($consulta = mysqli_fetch_array($resultados))
            {
                echo 
                "El nombre de usuario existe";
                $existe_name++;

            }
            if($existe_name==0){
                echo "";
            }

        include("cerrar_conexion.php");
    }
?>


