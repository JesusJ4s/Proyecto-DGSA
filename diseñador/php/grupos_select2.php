<?php
    // CONECTAR A LA BASE DE DATOS
    include ('../../php/abrir_conexion.php');
        
        // TOMAR VALOR DE LA VARIABLE QUE VIENE DE JQUERY
        $grupo= $_POST['direccion'];

        // HACER LA CONSULTA DE LOS RELACIONADOS
        $sql="SELECT * FROM $tabla_db16 WHERE id_direccion_grupo ='$grupo' ORDER BY actualizacion_galeria_grupos DESC";
        // GUARDAR EL RESULTADO
        $result=mysqli_query($conexion,$sql);
        // CREAR UNA CADENA Y LUEGO UN WHILE QUE SE REPITA TANTOS VALORES EXISTAN
        // VOY A PONER ESTO EN EL CÓDIGO HTML, ASÍ QUE LO COMENTARÉ
        $cadena="<option value='0'>-- Opciones --</option>";

        // MOSTRAR INFO A TRAVÉS DE COLUMNAS
        while ($ver=mysqli_fetch_row($result)){
            $cadena .='<option value='.$ver[0].'>'.$ver[1].'</option>';
        }
        include('../../php/cerrar_conexion.php');

        echo $cadena."";
