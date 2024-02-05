<?php
session_start();
ob_start();

$identificador = $_POST['identificador'];
$soloNum = '/^(?!0+$)[0-9]{1,11}$/';

if ($identificador == "verDescargas") {

    $galeria_grupo = $_POST['galGrupo'];
    $galeria_direccion = $_POST['galDireccion'];

    if (preg_match($soloNum,$galeria_grupo) &&
        preg_match($soloNum,$galeria_direccion) ){
            $_SESSION['grupoDescargas']= $galeria_grupo;

            if ($galeria_direccion == 2) {
                echo "DIS";
            }
            else if ($galeria_direccion == 3) {
                echo "DSR";
            }
            else if ($galeria_direccion == 4) {
                echo "DCV";
            }
            else if ($galeria_direccion == 5) {
                echo "DEA";
            }

    }else {
        http_response_code(500);
    }
}

if ($identificador == "cargarDescargas") {
    include("abrir_conexion.php");

    $grupoDescargas = $_SESSION['grupoDescargas'];
    $validador = $_POST['validador'];
    if (isset($validador) && $validador== "DIS") {
        $direccion = 2;
    }
    else if(isset($validador) && $validador== "DSR") {
        $direccion = 3;
    }
    else if(isset($validador) && $validador== "DCV") {
        $direccion = 4;
    }
    else if(isset($validador) && $validador== "DEA") {
        $direccion = 5;
    }

    if(preg_match($soloNum,$grupoDescargas) &&
        preg_match($soloNum,$direccion)  ){
        $BajarDescargas = mysqli_query($conexion, "SELECT * FROM $tabla_db14 gl INNER JOIN $tabla_db16 gg ON gl.id_galeria_grupo = gg.id_grupo WHERE id_galeria_grupo = '$grupoDescargas' AND visible = '1' AND id_galeria_direccion = '$direccion'");
        $grupo_actual = ""; // Variable para almacenar el grupo actual
    
        while ($consulta = mysqli_fetch_array($BajarDescargas)) {
        $id_galeria_grupo = $consulta['id_galeria_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_galeria_grupo != $grupo_actual) {
            $grupo_actual = $id_galeria_grupo;
            echo "<hr class='mt-5'><h1 id='".$consulta["id_galeria_grupo"]."'>".$consulta["nombre_grupo_galeria"]."</h1>";
        }
        // Imprimir el contenido de cada registro
        echo '
            <div class="text-center wh-doc mx-2 d-inline-block">
                <div class="p-1 border-css">
                    <embed src="'.$consulta['nombre_archivo'].'#toolbar=0" type="application/pdf" class="pdf_mini">
                    <h6 class="card-title">'.$consulta['titulo_archivo'].'</h6>
                    <a target="_blank" id="" class="btn btn-outline-primary" href="'.$consulta['nombre_archivo'].'" type="application/pdf">Leer</a>
                </div>
            </div>
        ';
        }
    }else {
        http_response_code(500);
        include("cerrar_conexion.php");
    }
    
}
if ($identificador == "cargarBarra") {
    include("abrir_conexion.php");

    $grupoDescargas = $_SESSION['grupoDescargas'];
    $validador = $_POST['validador'];
    if (isset($validador) && $validador== "DIS") {
        $direccion = 2;
    }
    else if(isset($validador) && $validador== "DSR") {
        $direccion = 3;
    }
    else if(isset($validador) && $validador== "DCV") {
        $direccion = 4;
    }
    else if(isset($validador) && $validador== "DEA") {
        $direccion = 5;
    }
    echo 
    '   
    
    ';
    if(preg_match($soloNum,$grupoDescargas) &&
    preg_match($soloNum,$direccion) ){
        $BarraGaleria = mysqli_query($conexion, "SELECT * FROM $tabla_db14 gl INNER JOIN $tabla_db16 gg ON gl.id_galeria_grupo = gg.id_grupo WHERE id_galeria_grupo = '$grupoDescargas' AND visible = '1' AND id_galeria_direccion = '$direccion'");
        $grupo_actual = ""; // Variable para almacenar el grupo actual

        while ($consulta = mysqli_fetch_array($BarraGaleria)) {
        $id_barra_grupo = $consulta['id_galeria_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_barra_grupo != $grupo_actual) {
            $grupo_actual = $id_barra_grupo;
            echo "
                <button class='btn bg-barra btn-outline-primary mx-2' type='button'>
                    <a class='list-group-item list-group-item-action' href='#".$consulta["id_galeria_grupo"]."'><b>".$consulta["nombre_grupo_galeria"]."</b></a>
                </button>
            ";
        }
        // Imprimir el contenido de cada registro
        echo '
                
            ';
        }
    }else {
        http_response_code(500);
        include("cerrar_conexion.php");
    }
}