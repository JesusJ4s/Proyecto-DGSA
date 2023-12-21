<?php

$preguntas = $_POST['preguntas'];
if ($preguntas == "recuperacion") {

    $existe = 0;
    include("abrir_conexion.php");
    $cedula = $_POST['cedulaPreg'];

    $buscar_sql_ci = "SELECT * FROM $tabla_db1 WHERE cedula = '$cedula'";
    $resultados = mysqli_query($conexion, $buscar_sql_ci);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $existe++;
    }

    if ($existe <> 0) {
        $buscar_sql_ci = "SELECT * FROM $tabla_db1 us INNER JOIN $tabla_db2_1 pr ON us.id_pregunta1=pr.id_pregunta WHERE cedula = '$cedula'";
        $resultados = mysqli_query($conexion, $buscar_sql_ci);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $idpregunta1 = $consulta['id_pregunta'];
            $pregunta1 = $consulta['pregunta'];

        }
        $buscar_sql_ci = "SELECT * FROM $tabla_db1 us INNER JOIN $tabla_db2_1 pr ON us.id_pregunta2=pr.id_pregunta WHERE cedula = '$cedula'";
        $resultados = mysqli_query($conexion, $buscar_sql_ci);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $idpregunta2 = $consulta['id_pregunta'];
            $pregunta2 = $consulta['pregunta'];
        }
        $buscar_sql_ci = "SELECT * FROM $tabla_db1 us INNER JOIN $tabla_db2_1 pr ON us.id_pregunta3=pr.id_pregunta WHERE cedula = '$cedula'";
        $resultados = mysqli_query($conexion, $buscar_sql_ci);

        while ($consulta = mysqli_fetch_array($resultados)) {
            $idpregunta3 = $consulta['id_pregunta'];
            $pregunta3 = $consulta['pregunta'];
        }
        echo
            '
            <option value="0">-- opciones --</option>
            <option value="' . $idpregunta1 . '">' . $pregunta1 . '</option>
            <option value="' . $idpregunta2 . '">' . $pregunta2 . '</option>
            <option value="' . $idpregunta3 . '">' . $pregunta3 . '</option>
        ';
        include("cerrar_conexion.php");

    } else {
        http_response_code(500);
        include("cerrar_conexion.php");
    }
}
if ($preguntas == "preguntas") {
    // CONECTAR A LA BASE DE DATOS
    include('abrir_conexion.php');

    // TOMAR VALOR DE LA VARIABLE QUE VIENE DE JQUERY
    $preguntaDato = $_POST['pregunta1'];
    // $pregunta2 = $_POST['pregunta2'];
    $cedulaRecu = $_POST['cedul'];


    // HACER LA CONSULTA DE LOS RELACIONADOS
    $sql = "SELECT * FROM $tabla_db1 WHERE cedula ='$cedulaRecu'";
    $result = mysqli_query($conexion, $sql);
    $existencia = mysqli_num_rows($result);
    if ($existencia > 0) {
        $buscar_sql_ci = "SELECT * FROM $tabla_db1 us INNER JOIN $tabla_db2_1 pr ON us.id_pregunta1=pr.id_pregunta WHERE cedula = '$cedulaRecu' AND id_pregunta1 != '$preguntaDato'";
        $resultados = mysqli_query($conexion, $buscar_sql_ci);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $idpregunta1 = $consulta['id_pregunta'];
            $pregunta1 = $consulta['pregunta'];

        }
        $buscar_sql_ci = "SELECT * FROM $tabla_db1 us INNER JOIN $tabla_db2_1 pr ON us.id_pregunta2=pr.id_pregunta WHERE cedula = '$cedulaRecu' AND id_pregunta2 != '$preguntaDato'";
        $resultados = mysqli_query($conexion, $buscar_sql_ci);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $idpregunta2 = $consulta['id_pregunta'];
            $pregunta2 = $consulta['pregunta'];
        }
        $buscar_sql_ci = "SELECT * FROM $tabla_db1 us INNER JOIN $tabla_db2_1 pr ON us.id_pregunta3=pr.id_pregunta WHERE cedula = '$cedulaRecu' AND id_pregunta3 != '$preguntaDato'";
        $resultados = mysqli_query($conexion, $buscar_sql_ci);
        while ($consulta = mysqli_fetch_array($resultados)) {
            $idpregunta3 = $consulta['id_pregunta'];
            $pregunta3 = $consulta['pregunta'];
        }
        echo
            '
            <option value="0">-- opciones --</option>
            <option value="' . $idpregunta1 . '">' . $pregunta1 . '</option>
            <option value="' . $idpregunta2 . '">' . $pregunta2 . '</option>
            <option value="' . $idpregunta3 . '">' . $pregunta3 . '</option>
        ';
        include("cerrar_conexion.php");

    }
}