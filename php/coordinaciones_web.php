<?php
session_start();
ob_start();

$identificador = $_POST['identificador'];
$soloNum = '/^(?!0+$)[0-9]{1,11}$/';

if ($identificador == "verCoordinaciones") {

    $id_direccion = $_POST['id_direcInput'];
    $id_coordiWeb = $_POST['id_coordiWeb'];

    if (preg_match($soloNum,$id_direccion) &&
        preg_match($soloNum,$id_coordiWeb) ){
            $_SESSION['coordinacionID']= $id_coordiWeb;

            if ($id_direccion == 2) {
                echo "Dis";
            }
            else if ($id_direccion == 3) {
                echo "Dsr";
            }
            else if ($id_direccion == 4) {
                echo "Dcv";
            }
            else if ($id_direccion == 5) {
                echo "Dea";
            }

    }else {
        http_response_code(500);

    }


}

if ($identificador == "cargarCoordinacion") {
    $id_coordi = $_SESSION['coordinacionID'];
    $id_direccionCoordi = $_POST['validador'];


    if ($id_direccionCoordi == "Dis") {
        $dire = 2;
    }
    else if ($id_direccionCoordi == "Dsr") {
        $dire = 3;
    }
    else if ($id_direccionCoordi == "Dcv") {
        $dire = 4;
    }
    else if ($id_direccionCoordi == "Dea") {
        $dire = 5;
    }

    if (preg_match($soloNum,$id_coordi) && preg_match($soloNum,$dire)) {

    include("abrir_conexion.php");

        $Coordinaciones = mysqli_query($conexion, "SELECT * FROM $tabla_db21 co 
        INNER JOIN $tabla_db5 dr ON co.id_coord_direccion = dr.id_direcciones
        INNER JOIN $tabla_db1 us ON co.id_coord_usuario = us.id_usuario
        WHERE id_coord_direccion = '$dire' AND id_coord_visible = '1'");
        while ($consulta = mysqli_fetch_array($Coordinaciones)) {
            // Imprimir el contenido de cada registro
            $datos = '
    
            <div class="w-85 mb-5 text-center">
            <h1 class="text-start"><b>'.$consulta['titulo_text1'].'</b></h1>
            <h6 class="mb-5 text-start">Dirección: '.$consulta['nombre_dire'].' Fecha: '.$consulta['fecha_actualizacion_coord'].'</h6>
    
                <img src="'.$consulta['imagen_coord1'].'" alt="" class="informacion_web box-shadow border-radius-15">
    
                <hr class="my-5">
    
                <div class="text-justify">
                    <textarea class="textarea2" id="cordidescrip" name="cordidescrip" readonly>'.$consulta['descripcion_text1'].'</textarea> 
                </div>
    
                <hr class="my-5">
    
                ';

            if ($consulta['imagen_coord2']!= "") {
                $datos .= '
                    <img src="'.$consulta['imagen_coord2'].'" alt="" class="informacion_web box-shadow border-radius-15">
    
                    <hr class="my-5">          
                ';
            }    
            if ($consulta['titulo_text2']!= "") {
                $datos .= '
                    <h2 class="text-start"><b>'.$consulta['titulo_text2'].'</b></h2>
 
                ';
            }  
            if ($consulta['descripcion_text2']!= "") {
                $datos .= '
                    <div class="text-justify">
                        <textarea class="textarea2" id="cordidescrip" name="cordidescrip" readonly>'.$consulta['descripcion_text2'].'</textarea> 
                    </div>
                    <hr class="my-5">
                
                ';
            }    
            if ($consulta['imagen_coord3']!="") {
                $extension = pathinfo($consulta['imagen_coord3'], PATHINFO_EXTENSION);
                if (in_array($extension, ['mp4'])) {
                    $datos .= '
                        <video src="'.$consulta['imagen_coord3'].'" class="informacion_web box-shadow border-radius-15" controls></video>
                        <hr class="my-5">
                    ';
                } else {
                    $datos .= '
                        <img src="'.$consulta['imagen_coord3'].'" alt="" class="informacion_web box-shadow border-radius-15">
                        <hr class="my-5">
                    ';
                }
            }
            if ($consulta['titulo_text3']!= "") {
                $datos .= '
                    <h2 class="text-start"><b>'.$consulta['titulo_text3'].'</b></h2>
 
                ';
            }  
            if ($consulta['descripcion_text3']!="") {
                $datos .= '
                    <div class="text-justify">
                        <textarea class="textarea2" id="cordidescrip" name="cordidescrip" readonly>'.$consulta['descripcion_text3'].'</textarea> 
                    </div>
                    <hr class="my-5">
    
                ';
            }
            if ($consulta['titulo_lista1']!="") {
                $datos .= '
                    <h2 class="text-start"><b>'.$consulta['titulo_lista1'].'</b></h2>    
                ';
            }
            if ($consulta['lista1_coord']!="") {
                $datosGuardados = $consulta['lista1_coord'];// Obtener los datos guardados desde la base de datos
                $datos .= '
                    <ul class="list-group list-group-flush">
                ';
                $datosSeparados = explode('*', $datosGuardados);

                foreach ($datosSeparados as $dato) {
                    $datos .= '<li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">' . $dato . '</li>';
                }
                $datos .= ' 
                    </ul>
                ';
            }
            if ($consulta['titulo_lista2']!="") {
                $datos .= '
                    <h2 class="text-start"><b>'.$consulta['titulo_lista2'].'</b></h2>    
                ';
            }
            if ($consulta['lista2_coord']!="") {
                $datosGuardados = $consulta['lista2_coord'];// Obtener los datos guardados desde la base de datos
                $datos .= '
                    <ul class="list-group list-group-flush">
                ';
                $datosSeparados = explode('*', $datosGuardados);

                foreach ($datosSeparados as $dato) {
                    $datos .= '<li class="list-group-item py-4 px-3 ps-4 border-primary text-justify">' . $dato . '</li>';
                }
                $datos .= ' 
                    </ul>
                ';
            }
            $datos .='
    
                </div>
                
            ';
        }
        $_SESSION['CoordinacionInformacionEntera']= $datos;
        include("cerrar_conexion.php");
    }else {
        http_response_code(500);

    }    
}