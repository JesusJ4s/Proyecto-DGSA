<?php
session_start();
ob_start();

$identificador = $_POST['identificador'];
$soloNum = '/^[0-9]{1,11}$/';

if ($identificador == "verInstrumentos") {

    $id_direPost = $_POST['id_direccion'];
    $id_TipoInstrumento = $_POST['id_TipoInstrumento'];

    if (preg_match($soloNum,$id_direPost) && $id_direPost != 0 &&
        preg_match($soloNum,$id_TipoInstrumento) && $id_TipoInstrumento != 0
        ){
            $_SESSION['InstrumentosID']= $id_TipoInstrumento;

            if ($id_direPost == 2) {
                echo "DIS";
            }
            else if ($id_direPost == 3) {
                echo "DSR";
            }
            else if ($id_direPost == 4) {
                echo "DCV";
            }
            else if ($id_direPost == 5) {
                echo "DEA";
            }

    }else {
        http_response_code(500);

    }


}

if ($identificador == "cargarDocumentos") {
    include("abrir_conexion.php");

    $id_TipoInstrumento = $_SESSION['InstrumentosID'];
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

    if(preg_match($soloNum,$id_TipoInstrumento) && $id_TipoInstrumento != 0 &&
    preg_match($soloNum,$direccion) && $direccion != 0
    ){
        $instrumentosL = mysqli_query($conexion, "SELECT * FROM $tabla_db18 il INNER JOIN $tabla_db20 ig ON il.id_instrumento_grupo = ig.id_grup_instrumento WHERE id_instrumento_tipo = '$id_TipoInstrumento' AND id_instrumento_direccion = '$direccion' AND instrumento_visible = '1' ");
        $grupo_actual = ""; // Variable para almacenar el grupo actual
    
        while ($consulta = mysqli_fetch_array($instrumentosL)) {
        $id_instrumento_grupo = $consulta['id_instrumento_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_instrumento_grupo != $grupo_actual) {
            $grupo_actual = $id_instrumento_grupo;
            echo "<hr class='mt-5'><h1 id='".$consulta["id_instrumento_grupo"]."'>".$consulta["nombre_grup_instrumento"]."</h1>";
        }
        // Imprimir el contenido de cada registro
        echo '
            <div class="text-center wh-doc mx-2 d-inline-block">
                <div class="p-1 border-css">
                    <embed src="'.$consulta['nombre_instrumento'].'#toolbar=0" type="application/pdf" class="pdf_mini">
                    <h6 class="card-title">'.$consulta['titulo_instrumento'].'</h6>
                    <a target="_blank" id="" class="btn btn-outline-primary" href="'.$consulta['nombre_instrumento'].'" type="application/pdf">Leer</a>
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

    $id_TipoInstrumento = $_SESSION['InstrumentosID'];
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
    if(preg_match($soloNum,$id_TipoInstrumento) && $id_TipoInstrumento != 0 &&
    preg_match($soloNum,$direccion) && $direccion != 0
    ){
        $instrumentosL = mysqli_query($conexion, "SELECT * FROM $tabla_db18 il INNER JOIN $tabla_db20 ig ON il.id_instrumento_grupo = ig.id_grup_instrumento WHERE id_instrumento_tipo = '$id_TipoInstrumento' AND id_instrumento_direccion = '$direccion' AND instrumento_visible = '1'");
        $grupo_actual = ""; // Variable para almacenar el grupo actual

        while ($consulta = mysqli_fetch_array($instrumentosL)) {
        $id_barra_grupo = $consulta['id_instrumento_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_barra_grupo != $grupo_actual) {
            $grupo_actual = $id_barra_grupo;
            echo "
                <button class='btn bg-barra btn-outline-primary mx-2' type='button'>
                    <a class='list-group-item list-group-item-action' href='#".$consulta["id_instrumento_grupo"]."'><b>".$consulta["nombre_grup_instrumento"]."</b></a>
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