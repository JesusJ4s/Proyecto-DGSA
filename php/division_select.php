<?php
    // CONECTAR A LA BASE DE DATOS
    include ('abrir_conexion.php');
        
        // TOMAR VALOR DE LA VARIABLE QUE VIENE DE JQUERY
        $division= $_POST['direccion'];

        // HACER LA CONSULTA DE LOS RELACIONADOS
        $sql="SELECT * FROM $tabla_db4 WHERE division_direccion_id ='$division'";
        // GUARDAR EL RESULTADO
        $result=mysqli_query($conexion,$sql);
        // CREAR UNA CADENA Y LUEGO UN WHILE QUE SE REPITA TANTOS VALORES EXISTAN
        // VOY A PONER ESTO EN EL CÓDIGO HTML, ASÍ QUE LO COMENTARÉ
        $cadena="";

        // MOSTRAR INFO A TRAVÉS DE COLUMNAS
        while ($ver=mysqli_fetch_row($result)){
            $cadena=$cadena.'<option value='.$ver[0].'>'.$ver[1].'</option>';
        }
        include('cerrar_conexion.php');

        echo $cadena."";

?>