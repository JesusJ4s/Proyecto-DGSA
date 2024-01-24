<?php
$patron_numero = '/^[0-9]{1,11}$/';

$idMostrar = $_POST['valor'];

if (preg_match($patron_numero,$idMostrar)) {
    include("abrir_conexion.php");

    $fotos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 WHERE id_galeria = '$idMostrar'");

    while ($consulta = mysqli_fetch_array($fotos)) {
        $comprobador = $consulta['id_galeria_tipo'];
    }
    if ($comprobador == 1) {
        $fotos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga INNER JOIN $tabla_db16 gr ON ga.id_galeria_grupo = gr.id_grupo INNER JOIN $tabla_db5 dr ON ga.id_galeria_direccion = dr.id_direcciones WHERE id_galeria = '$idMostrar'");

    while ($consulta = mysqli_fetch_array($fotos)) {
        // Imprimir el contenido de cada registro
        echo '
            <div class="container-fluid">
                <div class="mb-3">
                    <label class="formulario__label" for="nombre_dire">Dirección en la que se muestra la imagen</label>
                    <input id="nombre_dire" name="nombre_dire" class="form-control mb-3" value="'.$consulta['nombre_dire'].'" disabled>
                                                                    
                    <label class="formulario__label" for="nombre_grupo">Grupo Imagen</label>
                    <input id="nombre_grupo" name="nombre_grupo" class="form-control mb-3" value="'.$consulta['nombre_grupo_galeria'].'" disabled>

                    <div class="" id="grupo__tituloR">
                        <label class="formulario__label" for="tituloR">Título de la Imagen</label>
                        <input id="titulo" name="titulo" class="form-control mb-3" value="'.$consulta['titulo_archivo'].'" disabled>  
                    </div>
                </div>
                <div class="mb-5">
                    <div class="text-center" id="imV" name="imV">
                        <img src="'.$consulta['nombre_archivo'].'" alt="" class="img-fluid box-shadow border-radius-15 w-auto">
                    </div>
                </div>
                <div class="" id="grupo__tituloR">
                    <label class="formulario__label" for="tituloR">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control mb-3" disabled>'.$consulta['descripcion_archivo'].'</textarea>  
                </div>
            </div>
                ';
            }
    }else{
        $fotos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga INNER JOIN $tabla_db16 gr ON ga.id_galeria_grupo = gr.id_grupo INNER JOIN $tabla_db5 dr ON ga.id_galeria_direccion = dr.id_direcciones WHERE id_galeria = '$idMostrar'");

    while ($consulta = mysqli_fetch_array($fotos)) {
        // Imprimir el contenido de cada registro
        echo '
            <div class="container-fluid">
                <div class="mb-3">
                    <label class="formulario__label" for="nombre_dire">Dirección en la que se muestra la imagen</label>
                    <input id="nombre_dire" name="nombre_dire" class="form-control mb-3" value="'.$consulta['nombre_dire'].'" disabled>
                                                                    
                    <label class="formulario__label" for="nombre_grupo">Grupo Imagen</label>
                    <input id="nombre_grupo" name="nombre_grupo" class="form-control mb-3" value="'.$consulta['nombre_grupo_galeria'].'" disabled>

                    <div class="" id="grupo__tituloR">
                        <label class="formulario__label" for="tituloR">Título de la Imagen</label>
                        <input id="titulo" name="titulo" class="form-control mb-3" value="'.$consulta['titulo_archivo'].'" disabled>  
                    </div>
                </div>
                <div class="mb-5">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video src="'.$consulta['nombre_archivo'].'" class="border-radius-15 w-75 box-shadow" controls></video>
            
                    </div>
                </div>
                <div class="" id="grupo__tituloR">
                    <label class="formulario__label" for="tituloR">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control mb-3" disabled>'.$consulta['descripcion_archivo'].'</textarea>  
                </div>
            </div>
                ';
            }
    }

    
}else {
    http_response_code(500);
    include("cerrar_conexion.php");
}

