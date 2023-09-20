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
// if ($preguntas == "recuperacion") {
//     // CONECTAR A LA BASE DE DATOS 
//     include('abrir_conexion.php');

//     // TOMAR VALOR DE LAS VARIABLES QUE VIENEN DE JQUERY 
//     $cedula = $_POST['cedulaPreg'];

//     // Consulta para obtener las 3 preguntas del usuario con sus nombres
//     $sqlUsuario = "SELECT u.id_pregunta1, p1.pregunta AS nombre_pregunta1, u.id_pregunta2, p2.pregunta AS nombre_pregunta2, u.id_pregunta3, p3.pregunta AS nombre_pregunta3
// FROM $tabla_db1 AS u
// INNER JOIN $tabla_db2_1 AS p1 ON u.id_pregunta1 = p1.id_pregunta
// INNER JOIN $tabla_db2_1 AS p2 ON u.id_pregunta2 = p2.id_pregunta
// INNER JOIN $tabla_db2_1 AS p3 ON u.id_pregunta3 = p3.id_pregunta
// WHERE u.cedula = '$cedula'";
//     $resultUsuario = mysqli_query($conexion, $sqlUsuario);
//     $rowUsuario = mysqli_fetch_assoc($resultUsuario);

//     // Obtener una pregunta aleatoria de las 3 preguntas del usuario
//     $preguntasUsuario = array(
//         array('id' => $rowUsuario['id_pregunta1'], 'nombre' => $rowUsuario['nombre_pregunta1']),
//         array('id' => $rowUsuario['id_pregunta2'], 'nombre' => $rowUsuario['nombre_pregunta2']),
//         array('id' => $rowUsuario['id_pregunta3'], 'nombre' => $rowUsuario['nombre_pregunta3'])
//     );
//     $preguntaSeleccionada = $preguntasUsuario[array_rand($preguntasUsuario)];

//     // Consulta para obtener otra pregunta que no sea igual a la seleccionada
//     $sqlOtraPregunta = "SELECT id_pregunta, pregunta FROM $tabla_db2_1 WHERE id_pregunta != '{$preguntaSeleccionada['id']}'";
//     $resultOtraPregunta = mysqli_query($conexion, $sqlOtraPregunta);
//     $rowOtraPregunta = mysqli_fetch_assoc($resultOtraPregunta);

//     // Guardar las preguntas en variables distintas
//     $pregunta1 = $preguntaSeleccionada['id'];
//     $nombre_pregunta1 = $preguntaSeleccionada['nombre'];
//     $pregunta2 = $rowOtraPregunta['id_pregunta'];
//     $nombre_pregunta2 = $rowOtraPregunta['pregunta'];

//     include('cerrar_conexion.php');
//     // Imprimir las opciones con los nombres de las preguntas
//     $response = array(
//         'pregunta1' => '<option value="' . $pregunta1 . '">' . $nombre_pregunta1 . '</option>',
//         'pregunta2' => '<option value="' . $pregunta2 . '">' . $nombre_pregunta2 . '</option>'
//     );

//     echo json_encode($response);
// }


?>