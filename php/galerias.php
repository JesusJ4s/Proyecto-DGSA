<?php

$identificador = $_POST['identificador'];

// DIRECCIÓN GENERAL DE SALUD AMBIENTAL
if ($identificador == "fotos_dgsa") {
    include("abrir_conexion.php");

    $fotos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga INNER JOIN $tabla_db16 gr ON ga.id_galeria_grupo = gr.id_grupo WHERE id_galeria_direccion = 1 AND id_galeria_tipo = 1 AND visible = 1 ORDER BY id_galeria_grupo ASC");
    $grupo_actual = ""; // Variable para almacenar el grupo actual

    while ($consulta = mysqli_fetch_array($fotos)) {
        $id_galeria_grupo = $consulta['id_galeria_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_galeria_grupo != $grupo_actual) {
            $grupo_actual = $id_galeria_grupo;
            echo "<h1 id='".$consulta["id_galeria_grupo"]."'>".$consulta["nombre_grupo_galeria"]."</h1>";
        }
        // Imprimir el contenido de cada registro
        echo '
            <div class="card p-0 col-3 m-3 sombraCard">
                <div class="card-body border-css">
                    <div class="centrar" id="centrar">
                        <img src="'.$consulta['nombre_archivo'].'" alt="" class="ImagenesWidth">
                    </div>
                    <!-- WIDTH-100 NO ESTÁ EN CSS -->
                    <h6 class="card-title my-3">'.$consulta['titulo_archivo'].'</h6>
                    <input id="FotoVideoClick" name="FotoVideoClick" value="'.$consulta['id_galeria'].'" type="hidden">
                    <button class="d-block col-12 btn btn-outline-success" onclick="verClickImgVid(this);">Ver</button>
                </div>
            </div>
        ';
    }
}
if ($identificador == "videos_dgsa") {
    include("abrir_conexion.php");

    $videos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga INNER JOIN $tabla_db16 gr ON ga.id_galeria_grupo = gr.id_grupo WHERE id_galeria_direccion = 1 AND id_galeria_tipo = 2 AND visible = 1 ORDER BY id_galeria_grupo ASC");
    $grupo_actual = ""; // Variable para almacenar el grupo actual

    while ($consulta = mysqli_fetch_array($videos)) {
        $id_galeria_grupo = $consulta['id_galeria_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_galeria_grupo != $grupo_actual) {
            $grupo_actual = $id_galeria_grupo;
            echo "<h1 id='".$consulta["id_galeria_grupo"]."'>".$consulta["nombre_grupo_galeria"]."</h1>";
        }
        // Imprimir el contenido de cada registro
        echo '
            <div class="col-6 border p-4  d-flex justify-content-center">
                <div>
                    <h3 class="bold text-center mb-4"><i>'.$consulta["titulo_archivo"].'</i></h3>
                    <video src="'.$consulta["nombre_archivo"].'" class="border-radius-15 w-75 box-shadow" controls></video>
                </div>
            </div>
            <div class="col-5 border p-4  d-flex justify-content-center">
                <div>
                    <h3 id="DGSA_Constitucion" class="bold text-center mb-4">'.$consulta["titulo_archivo"].'</h3>
                    <p class="px-5 py-3 text-justify sangria">
                        '.$consulta["descripcion_archivo"].'
                    </p>
                </div>
            </div>
        ';
    }
}

// DIRECCIÓN DE EPIDEMIOLOGÍA AMBIENTAL
if ($identificador == "fotos_dea") {
    include("abrir_conexion.php");

    $fotos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga INNER JOIN $tabla_db16 gr ON ga.id_galeria_grupo = gr.id_grupo WHERE id_galeria_direccion = 5 AND id_galeria_tipo = 1 AND visible = 1 ORDER BY id_galeria_grupo ASC");
    $grupo_actual = ""; // Variable para almacenar el grupo actual

    while ($consulta = mysqli_fetch_array($fotos)) {
        $id_galeria_grupo = $consulta['id_galeria_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_galeria_grupo != $grupo_actual) {
            $grupo_actual = $id_galeria_grupo;
            echo "<h1 id='".$consulta["id_galeria_grupo"]."'>".$consulta["nombre_grupo_galeria"]."</h1>";
        }
        // Imprimir el contenido de cada registro
        echo '

            <div class="card p-0 col-3 m-3 sombraCard">
                <div class="card-body border-css">
                    <div class="centrar" id="centrar">
                        <img src="'.$consulta['nombre_archivo'].'" alt="" class="ImagenesWidth">
                    </div>
                    <!-- WIDTH-100 NO ESTÁ EN CSS -->
                    <h6 class="card-title my-3">'.$consulta['titulo_archivo'].'</h6>
                    <input id="FotoVideoClick" name="FotoVideoClick" value="'.$consulta['id_galeria'].'" type="hidden">
                    <button class="d-block col-12 btn btn-outline-success" onclick="verClickImgVid(this);">Ver</button>
                </div>
            </div>
        ';
    }
}
if ($identificador == "videos_dea") {
    include("abrir_conexion.php");

    $videos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga INNER JOIN $tabla_db16 gr ON ga.id_galeria_grupo = gr.id_grupo WHERE id_galeria_direccion = 5 AND id_galeria_tipo = 2 AND visible = 1 ORDER BY id_galeria_grupo ASC");
    $grupo_actual = ""; // Variable para almacenar el grupo actual

    while ($consulta = mysqli_fetch_array($videos)) {
        $id_galeria_grupo = $consulta['id_galeria_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_galeria_grupo != $grupo_actual) {
            $grupo_actual = $id_galeria_grupo;
            echo "<h1 id='".$consulta["id_galeria_grupo"]."'>".$consulta["nombre_grupo_galeria"]."</h1>";
        }
        // Imprimir el contenido de cada registro
        echo '
            <div class="col-6 border p-4  d-flex justify-content-center">
                <div>
                    <h3 class="bold text-center mb-4"><i>'.$consulta["titulo_archivo"].'</i></h3>
                    <video src="'.$consulta["nombre_archivo"].'" class="border-radius-15 w-75 box-shadow" controls></video>
                </div>
            </div>
            <div class="col-5 border p-4  d-flex justify-content-center">
                <div>
                    <h3 id="" class="bold text-center mb-4">'.$consulta["titulo_archivo"].'</h3>
                    <p class="px-5 py-3 text-justify sangria">
                        '.$consulta["descripcion_archivo"].'
                    </p>
                </div>
            </div>
        ';
    }
}

// DIRECCIÓN CONTROL DE VECTORES
if ($identificador == "fotos_dcv") {
    include("abrir_conexion.php");

    $fotos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga INNER JOIN $tabla_db16 gr ON ga.id_galeria_grupo = gr.id_grupo WHERE id_galeria_direccion = 4 AND id_galeria_tipo = 1 AND visible = 1 ORDER BY id_galeria_grupo ASC");
    $grupo_actual = ""; // Variable para almacenar el grupo actual

    while ($consulta = mysqli_fetch_array($fotos)) {
        $id_galeria_grupo = $consulta['id_galeria_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_galeria_grupo != $grupo_actual) {
            $grupo_actual = $id_galeria_grupo;
            echo "<h1 id='".$consulta["id_galeria_grupo"]."'>".$consulta["nombre_grupo_galeria"]."</h1>";
        }
        // Imprimir el contenido de cada registro
        echo '
            <div class="card p-0 col-3 m-3 sombraCard">
                <div class="card-body border-css">
                    <div class="centrar" id="centrar">
                        <img src="'.$consulta['nombre_archivo'].'" alt="" class="ImagenesWidth">
                    </div>
                    <!-- WIDTH-100 NO ESTÁ EN CSS -->
                    <h6 class="card-title my-3">'.$consulta['titulo_archivo'].'</h6>
                    <input id="FotoVideoClick" name="FotoVideoClick" value="'.$consulta['id_galeria'].'" type="hidden">
                    <button class="d-block col-12 btn btn-outline-success" onclick="verClickImgVid(this);">Ver</button>
                </div>
            </div>
        ';
    }
}
if ($identificador == "videos_dcv") {
    include("abrir_conexion.php");

    $videos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga INNER JOIN $tabla_db16 gr ON ga.id_galeria_grupo = gr.id_grupo WHERE id_galeria_direccion = 4 AND id_galeria_tipo = 2 AND visible = 1 ORDER BY id_galeria_grupo ASC");
    $grupo_actual = ""; // Variable para almacenar el grupo actual

    while ($consulta = mysqli_fetch_array($videos)) {
        $id_galeria_grupo = $consulta['id_galeria_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_galeria_grupo != $grupo_actual) {
            $grupo_actual = $id_galeria_grupo;
            echo "<h1 id='".$consulta["id_galeria_grupo"]."'>".$consulta["nombre_grupo_galeria"]."</h1>";
        }
        // Imprimir el contenido de cada registro
        echo '
            <div class="col-6 border p-4  d-flex justify-content-center">
                <div>
                    <h3 class="bold text-center mb-4"><i>'.$consulta["titulo_archivo"].'</i></h3>
                    <video src="'.$consulta["nombre_archivo"].'" class="border-radius-15 w-75 box-shadow" controls></video>
                </div>
            </div>
            <div class="col-5 border p-4  d-flex justify-content-center">
                <div>
                    <h3 id="" class="bold text-center mb-4">'.$consulta["titulo_archivo"].'</h3>
                    <p class="px-5 py-3 text-justify sangria">
                        '.$consulta["descripcion_archivo"].'
                    </p>
                </div>
            </div>
        ';
    }
}

// DIRECCIÓN INGENIERÍA SANITARIA
if ($identificador == "fotos_dis") {
    include("abrir_conexion.php");

    $fotos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga INNER JOIN $tabla_db16 gr ON ga.id_galeria_grupo = gr.id_grupo WHERE id_galeria_direccion = 2 AND id_galeria_tipo = 1 AND visible = 1 ORDER BY id_galeria_grupo ASC");
    $grupo_actual = ""; // Variable para almacenar el grupo actual

    while ($consulta = mysqli_fetch_array($fotos)) {
        $id_galeria_grupo = $consulta['id_galeria_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_galeria_grupo != $grupo_actual) {
            $grupo_actual = $id_galeria_grupo;
            echo "<h1 id='".$consulta["id_galeria_grupo"]."'>".$consulta["nombre_grupo_galeria"]."</h1>";
        }
        // Imprimir el contenido de cada registro
        echo '
            <div class="card p-0 col-3 m-3 sombraCard">
                <div class="card-body border-css">
                    <div class="centrar" id="centrar">
                        <img src="'.$consulta['nombre_archivo'].'" alt="" class="ImagenesWidth">
                    </div>
                    <!-- WIDTH-100 NO ESTÁ EN CSS -->
                    <h6 class="card-title my-3">'.$consulta['titulo_archivo'].'</h6>
                    <input id="FotoVideoClick" name="FotoVideoClick" value="'.$consulta['id_galeria'].'" type="hidden">
                    <button class="d-block col-12 btn btn-outline-success" onclick="verClickImgVid(this);">Ver</button>
                </div>
            </div>
        ';
    }
}
if ($identificador == "videos_dis") {
    include("abrir_conexion.php");

    $videos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga INNER JOIN $tabla_db16 gr ON ga.id_galeria_grupo = gr.id_grupo WHERE id_galeria_direccion = 2 AND id_galeria_tipo = 2 AND visible = 1 ORDER BY id_galeria_grupo ASC");
    $grupo_actual = ""; // Variable para almacenar el grupo actual

    while ($consulta = mysqli_fetch_array($videos)) {
        $id_galeria_grupo = $consulta['id_galeria_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_galeria_grupo != $grupo_actual) {
            $grupo_actual = $id_galeria_grupo;
            echo "<h1 id='".$consulta["id_galeria_grupo"]."'>".$consulta["nombre_grupo_galeria"]."</h1>";
        }
        // Imprimir el contenido de cada registro
        echo '
            <div class="col-6 border p-4  d-flex justify-content-center">
                <div>
                    <h3 class="bold text-center mb-4"><i>'.$consulta["titulo_archivo"].'</i></h3>
                    <video src="'.$consulta["nombre_archivo"].'" class="border-radius-15 w-75 box-shadow" controls></video>
                </div>
            </div>
            <div class="col-5 border p-4  d-flex justify-content-center">
                <div>
                    <h3 id="" class="bold text-center mb-4">'.$consulta["titulo_archivo"].'</h3>
                    <p class="px-5 py-3 text-justify sangria">
                        '.$consulta["descripcion_archivo"].'
                    </p>
                </div>
            </div>
        ';
    }
}

// DIRECCIÓN SALUD RADIOLÓGICA
if ($identificador == "fotos_dsr") {
    include("abrir_conexion.php");

    $fotos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga INNER JOIN $tabla_db16 gr ON ga.id_galeria_grupo = gr.id_grupo WHERE id_galeria_direccion = 3 AND id_galeria_tipo = 1 AND visible = 1 ORDER BY id_galeria_grupo ASC");
    $grupo_actual = ""; // Variable para almacenar el grupo actual

    while ($consulta = mysqli_fetch_array($fotos)) {
        $id_galeria_grupo = $consulta['id_galeria_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_galeria_grupo != $grupo_actual) {
            $grupo_actual = $id_galeria_grupo;
            echo "<h1 id='".$consulta["id_galeria_grupo"]."'>".$consulta["nombre_grupo_galeria"]."</h1>";
        }
        // Imprimir el contenido de cada registro
        echo '
            <div class="card p-0 col-3 m-3 sombraCard">
                <div class="card-body border-css">
                    <div class="centrar" id="centrar">
                        <img src="'.$consulta['nombre_archivo'].'" alt="" class="ImagenesWidth">
                    </div>
                    <!-- WIDTH-100 NO ESTÁ EN CSS -->
                    <h6 class="card-title my-3">'.$consulta['titulo_archivo'].'</h6>
                    <input id="FotoVideoClick" name="FotoVideoClick" value="'.$consulta['id_galeria'].'" type="hidden">
                    <button class="d-block col-12 btn btn-outline-success" onclick="verClickImgVid(this);">Ver</button>
                </div>
            </div>
        ';
    }
}
if ($identificador == "videos_dsr") {
    include("abrir_conexion.php");

    $videos = mysqli_query($conexion, "SELECT * FROM $tabla_db14 ga INNER JOIN $tabla_db16 gr ON ga.id_galeria_grupo = gr.id_grupo WHERE id_galeria_direccion = 3 AND id_galeria_tipo = 2 AND visible = 1 ORDER BY id_galeria_grupo ASC");
    $grupo_actual = ""; // Variable para almacenar el grupo actual

    while ($consulta = mysqli_fetch_array($videos)) {
        $id_galeria_grupo = $consulta['id_galeria_grupo'];

        // Verificar si el grupo actual es diferente al nuevo grupo
        if ($id_galeria_grupo != $grupo_actual) {
            $grupo_actual = $id_galeria_grupo;
            echo "<h1 id='".$consulta["id_galeria_grupo"]."'>".$consulta["nombre_grupo_galeria"]."</h1>";
        }
        // Imprimir el contenido de cada registro
        echo '
            <div class="col-6 border p-4  d-flex justify-content-center">
                <div>
                    <h3 class="bold text-center mb-4"><i>'.$consulta["titulo_archivo"].'</i></h3>
                    <video src="'.$consulta["nombre_archivo"].'" class="border-radius-15 w-75 box-shadow" controls></video>
                </div>
            </div>
            <div class="col-5 border p-4  d-flex justify-content-center">
                <div>
                    <h3 id="" class="bold text-center mb-4">'.$consulta["titulo_archivo"].'</h3>
                    <p class="px-5 py-3 text-justify sangria">
                        '.$consulta["descripcion_archivo"].'
                    </p>
                </div>
            </div>
        ';
    }
}

