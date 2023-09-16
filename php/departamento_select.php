<?php
    // CONECTAR A LA BASE DE DATOS
    include ('abrir_conexion.php');
        
        // TOMAR VALOR DE LA VARIABLE QUE VIENE DE JQUERY
        $departamento= $_POST['division'];

        // HACER LA CONSULTA DE LOS RELACIONADOS
        $sql="SELECT * FROM $tabla_db3 WHERE departamento_division_id ='$departamento'";
        // GUARDAR EL RESULTADO
        $result2=mysqli_query($conexion,$sql);
        // CREAR UNA CADENA Y LUEGO UN WHILE QUE SE REPITA TANTOS VALORES EXISTAN
        $cadena2="";

        // MOSTRAR INFO A TRAVÉS DE COLUMNAS
        while ($ver=mysqli_fetch_row($result2)){
            $cadena2=$cadena2.'<option value='.$ver[0].'>'.$ver[1].'</option>';
        }
        include('cerrar_conexion.php');

        echo $cadena2."";

?>