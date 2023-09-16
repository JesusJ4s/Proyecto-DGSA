<?php
// INICIANDO LAS VARIABLE GLOBAL
session_start();
ob_start();

$ingreso = $_POST['ingreso'];
$findme = "*";
$correo_comp = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
$soloLetras = '/^[a-zA-ZÀ-ý]{1,45}$/';
$CONTR = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&#.$($)$-$_])[A-Za-z\d$@$!%*?&#.$($)$-$_]{8,15}$/';
$ci = '/^[0-9]{7,9}$/';
$soloNro1 = '/^[1-9]{1}$/';
$USR = '/^[a-zA-Z0-9\_\-]{4,16}$/';
$respuesta = '/^[a-zA-ZÀ-ý]{1,20}$/';

function darFormatoOriginal($string)
{
    $string = str_replace(
        array('à', 'ä', 'â', 'À', 'Ä', 'Â'),
        array('a', 'a', 'a', 'A', 'A', 'A'),
        $string
    );
    $string = str_replace(
        array('ë', 'ê', 'è', 'Ë', 'Ê', 'È'),
        array('e', 'e', 'e', 'E', 'E', 'E'),
        $string
    );
    $string = str_replace(
        array('ï', 'î', 'ì', 'Ï', 'Î', 'Ì'),
        array('i', 'i', 'i', 'I', 'I', 'I'),
        $string
    );
    $string = str_replace(
        array('ö', 'ô', 'ò', 'Ö', 'Ô', 'Ò'),
        array('o', 'o', 'o', 'O', 'O', 'O'),
        $string
    );
    $string = str_replace(
        array('ü', 'û', 'ù', 'Ü', 'Û', 'Ù'),
        array('u', 'u', 'u', 'U', 'U', 'U'),
        $string
    );
    $string = str_replace(
        array('ç', 'Ç'),
        array('c', 'C'),
        $string
    );
    $string = str_replace(
        array('[', '|', '°', '¬', '!', '^', '`', '~', '#', '$', '%', '&', '/', '(', ')', '=', '?', '¿', '{', '}', '_', ',', '.', '+', '<', '>', '¡', '¨', '*', ':', ';', ']', "'", '"'),
        '*',
        $string
    );

    return $string;
}
// REGISTRO DE USUARIO DESDE EL INDEX DE LA INTRANET (AUDITORIA EN PROCESO - FALTA PROBAR) 
if ($ingreso == "Registro") {
    $nombre_USR = $_POST["usuario"];
    // Pasar nombre de usuario a mayúsculas
    $nombre_usuario = strtoupper($nombre_USR);

    //TOMAR VALOR PRESTADO PARA LA EDICIÓN EN EL PASO 2
    $_SESSION["comprobante"] = $_POST["cedula"];

    $nombre_usuario = darFormatoOriginal($nombre_usuario);
    $nombre = darFormatoOriginal($_POST['nombre']);
    $apellido = darFormatoOriginal($_POST["apellido"]);
    $nacionalidad = $_POST["nacionalidad"];

    $cedulaCreacion = $_POST["cedula"];
    $password_contra = $_POST["contraseña"];
    $contraseña = password_hash($password_contra, PASSWORD_DEFAULT);

    $telefono = $_POST["telefono"];
    $email = $_POST["correo"];
    $pin_seguridad = $_POST["pin"];


    //CON ESTE REGISTRO TODOS SON COMÚN
    $direccionSelect = $_POST['direccion_select'];
    $divisionSelect = $_POST['division_select'];
    $departamento = $_POST['departamento_select'];
    $cargo = 5;
    $existe = 0;

    $pos = strpos($nombre, $findme);
    $pos1 = strpos($apellido, $findme);
    $pos2 = strpos($nombre_usuario, $findme);

    if ($direccionSelect != 0) {
        if ($pos === false && $pos1 === false && $pos2 === false) {

            $CREACION_datos_existentes = 0;
            include("abrir_conexion.php");
            // Buscar solo con la cedula: Where "Columna tabla" = "variable que usaré para buscar"
            $buscar_sql_ci = "SELECT * FROM $tabla_db1 WHERE cedula = '$cedulaCreacion'";
            $resultados = mysqli_query($conexion, $buscar_sql_ci);
            while ($consulta = mysqli_fetch_array($resultados)) {
                $CREACION_datos_existentes++;
            }
            $buscar_sql_name = "SELECT * FROM $tabla_db1 WHERE nombre_usuario = '$nombre_usuario'";
            $resultados = mysqli_query($conexion, $buscar_sql_name);
            while ($consulta = mysqli_fetch_array($resultados)) {
                $CREACION_datos_existentes++;
            }

            if ($CREACION_datos_existentes == 0) {
                // INSERTAR DATOS DEFINITVO
                $crear_usr = "INSERT INTO $tabla_db1 (id_usuario, ActivoInactivo, nombre, apellido, nacionalidad, cedula, nombre_usuario, telefono, email, usuario_departamento_id, usuario_division_id, usuario_direccion_id, usuario_rol_id, contraseña, pin_seguridad) values (NULL, '1','$nombre', '$apellido', '$nacionalidad', '$cedulaCreacion', '$nombre_usuario', '$telefono', '$email', '$departamento', '$divisionSelect', '$direccionSelect', '$cargo', '$contraseña', '$pin_seguridad')";

                $conexion->query($crear_usr);
                // AUDITORIA *****************************************************************
                $buscarUSR_BD = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula = '$cedulaCreacion' AND nombre_usuario='$nombre_usuario'");
                while ($consulta = mysqli_fetch_array($buscarUSR_BD)) {
                    $idUsuarioBD = $consulta['id_usuario'];
                }
                $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db4 WHERE id_divisiones = '$divisionSelect'");
                while ($consulta = mysqli_fetch_array($buscarID)) {
                    $nombreDivi = $consulta['nombre_div'];
                }
                $valorID = $idUsuarioBD;
                $descripcion_Cambio = "Nuevo Usuario registrandose en el Sistema, nombre del empleado: ".$nombre." ".$apellido.", cédula ".$nacionalidad."-".$cedulaCreacion.". Dicho empleado se ha registrado como trabajador en: ".$nombreDivi;

                $accionCreacion = "1";
                $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionCreacion', now(), '$descripcion_Cambio')";
                mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
                // FINAL AUDITORIA ************************************************************

                // CON ESTA VARIABLE ME ASEGURO DE QUE SOLO ENTRE AL SEGUNDO PASO CUANDO TENGA PERMISO
                $_SESSION["paso2"] = 1;

                include("cerrar_conexion.php");

                echo "Registro hecho, continúe con las preguntas de seguridad:";
            } else {
                http_response_code(501);
                include("cerrar_conexion.php");
            }
        } else {
            http_response_code(500);
            include("cerrar_conexion.php");
        }
    } else {
        http_response_code(502);
        include("cerrar_conexion.php");
    }

}
// VERIFICAR QUE EL USUARIO SEA PERMITIDO Y LA CEDULA IGUAL PARA HABILITAR BOTON DE ENVIAR
if ($ingreso == 1) {

    include("abrir_conexion.php");

    $existeDato = 0;

    $usuarioB = $_POST['usuarioB'];
    $cedulaB = $_POST['cedulaB'];

    // Pasar nombre de usuario a mayúsculas
    $nombre_usuarioB = strtoupper($usuarioB);
    // $existe2=0;

    // BUSCAR CEDULA
    $buscar_cedula = "SELECT * FROM $tabla_db1 WHERE cedula = '$cedulaB'";
    $resultados = mysqli_query($conexion, $buscar_cedula);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $existeDato++;
    }
    // BUSCAR USUARIO
    $buscar_usuario = "SELECT * FROM $tabla_db1 WHERE nombre_usuario = '$nombre_usuarioB'";
    $resultados2 = mysqli_query($conexion, $buscar_usuario);
    while ($consulta2 = mysqli_fetch_array($resultados2)) {
        $existeDato++;
    }

    if ($existeDato == 0) {
        $response = 'correct';

    }
    echo $response;

    include("cerrar_conexion.php");
}

// REGISTRO DE LAS PREGUNTAS DE SEGURIDAD
if ($ingreso == "DatosExtras") {

    $pregunta1 = $_POST['pregunta1'];
    $pregunta2 = $_POST['pregunta2'];
    $pregunta3 = $_POST['pregunta3'];

    $respuesta1 = $_POST['respuesta1'];
    $respuesta2 = $_POST['respuesta2'];
    $respuesta3 = $_POST['respuesta3'];

    $telefono_secundario = darFormatoOriginal($_POST["telefono"]);

    $pos3 = strpos($telefono_secundario, $findme);

    if (preg_match($respuesta, $respuesta1) && preg_match($respuesta, $respuesta2) && preg_match($respuesta, $respuesta3) && preg_match($soloNro1, $pregunta1) && preg_match($soloNro1, $pregunta2) && preg_match($soloNro1, $pregunta3) && $pos3 === false) {
        if ($pregunta1 != $pregunta2 && $pregunta1 != $pregunta3 && $pregunta2 != $pregunta3) {
            if ($_SESSION['comprobante'] <> 0) {
                include("abrir_conexion.php");
                // ENCRIPTANDO RESPUESTAS:
                $respuesta1hash = password_hash($respuesta1, PASSWORD_DEFAULT);
                $respuesta2hash = password_hash($respuesta2, PASSWORD_DEFAULT);
                $respuesta3hash = password_hash($respuesta3, PASSWORD_DEFAULT);
                //CONTIENE EL VALOR DE LA CÉDULA
                $compro = $_SESSION['comprobante'];
                // $compro='22000222';
                // MODIFICAR DATOS
                $_UPDATE_SQL = "UPDATE $tabla_db1 SET id_pregunta1='$pregunta1', respuesta1='$respuesta1hash', id_pregunta2='$pregunta2', respuesta2='$respuesta2hash', id_pregunta3='$pregunta3', respuesta3='$respuesta3hash', telefono_secundario='$telefono_secundario' WHERE cedula='$compro'";

                mysqli_query($conexion, $_UPDATE_SQL);

                // AUDITORIA *****************************************************************
                $buscarUSR_BD = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula = '$compro'");
                while ($consulta = mysqli_fetch_array($buscarUSR_BD)) {
                    $nombre_USR_BD = $consulta['nombre']." ".$consulta['apellido'];
                    $idUsuarioBD = $consulta['id_usuario'];
                }

                $valorID = $idUsuarioBD;
                $descripcion_Cambio = "El usuario ".$nombre_USR_BD.", finalizó el registro las preguntas de seguridad.";

                $accionCreacion = "1";
                $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionCreacion', now(), '$descripcion_Cambio')";
                mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
                // FINAL AUDITORIA ************************************************************

                //TODO: Se debe crear una notificación automática al administrador que conceda el permiso 
                include("cerrar_conexion.php");

                echo "Se crearon las respuestas de seguridad exitosamente. Puede volver al inicio";
                $_SESSION['comprobante'] = 0;
                $_SESSION["paso2"] = 0;
            } else {
                $_SESSION['comprobante'] = 0;
                $_SESSION["paso2"] = 0;
                http_response_code(502);
            }
        } else {
            http_response_code(501);
        }
    } else {
        http_response_code(500);
    }

}

// VERIFICA LAS PREGUNTAS DE SEGURIDAD PARA EL CAMBIO DE CONTRASEÑA
if ($ingreso == "verificacion") {

    $cedula = darFormatoOriginal($_POST['cedula']);

    $pregunta1 = darFormatoOriginal($_POST['pregunta1']);
    $respuestaUSR1 = darFormatoOriginal($_POST['respuesta_1']);

    $pregunta2 = darFormatoOriginal($_POST['pregunta2']);
    $respuestaUSR2 = darFormatoOriginal($_POST['respuesta_2']);


    $pos = strpos($cedula, $findme);
    $pos1 = strpos($respuestaUSR1, $findme);
    $pos2 = strpos($respuestaUSR2, $findme);

    if ($pos === false && $pos1 === false && $pos2 === false) {
        if ($cedula != '' && $respuestaUSR1 != '' && $respuestaUSR2 != '' && $pregunta1 != '' && $pregunta2 != '') {
            if ($pregunta1 != $pregunta2) {
                include("abrir_conexion.php");
                // BUSCANDO VALORES CON LA CEDULA
                $query = "SELECT * FROM $tabla_db1 WHERE cedula = '$cedula'";
                $resultados = mysqli_query($conexion, $query);
                // Arreglo para almacenar las respuestas a las preguntas seleccionadas
                $respuestas = array();
                while ($consulta = mysqli_fetch_array($resultados)) {
                    if ($consulta['id_pregunta1'] == $pregunta1 || $consulta['id_pregunta2'] == $pregunta1 || $consulta['id_pregunta3'] == $pregunta1) {
                        $respuestas[$pregunta1] = $consulta['respuesta1'];
                    }
                    if ($consulta['id_pregunta1'] == $pregunta2 || $consulta['id_pregunta2'] == $pregunta2 || $consulta['id_pregunta3'] == $pregunta2) {
                        $respuestas[$pregunta2] = $consulta['respuesta2'];
                    }
                }
                // Verifica si las respuestas proporcionadas por el usuario son correctas
                $respuestas_correctas = true;
                foreach ($respuestas as $id_pregunta => $respuesta_bd) {
                    $respuesta_usuario = $_POST['respuesta_' . $id_pregunta];
                    if (empty($respuesta_usuario)) {
                        $respuestas_correctas = false;
                        echo "La respuesta proporcionada está vacía<br>";
                    } else if (!password_verify($respuesta_usuario, $respuesta_bd)) {
                        $respuestas_correctas = false;
                        echo "Las respuestas no coinciden. O colocó una errada<br>";
                    } else {
                        // echo "Las respuestas coinciden<br>";
                        // Agregar verificación adicional para ambas respuestas
                        if (!isset($respuesta1_correcta)) {
                            $respuesta1_correcta = ($id_pregunta == 1);
                        } else {
                            $respuesta2_correcta = ($id_pregunta == 2);
                        }
                    }
                }
                // Verificar si ambas respuestas son correctas
                if ($respuesta1_correcta && $respuesta2_correcta) {
                    // Las respuestas son correctas
                    echo "RESPUESTAS CORRECTAS";
                    $_SESSION["recuperar_contraseña"] = 1;
                    $_SESSION['comprobante'] = $cedula;
                    include("cerrar_conexion.php");
                } else {
                    // Las respuestas son incorrectas
                    http_response_code(503);
                    include("cerrar_conexion.php");
                }
            } else {
                http_response_code(502);
            }
        } else {
            http_response_code(501);
        }
    } else {
        http_response_code(500);
    }
}
// CAMBIO DE CONTRASEÑA
if ($ingreso == "cambio") {

    $contraseña = $_POST['contraseña'];
    $contraseña2 = $_POST['contraseña2'];

    // CUANDO SE VERIFICAN LAS PREGUNTAS DE SEGURIDAD SE LE DA VALOR A ESTA VARIABLE
    $cedula = $_SESSION['comprobante'];

    if ($contraseña == '' || $contraseña2 == '') {
        http_response_code(500);

    } else {
        if ($contraseña == $contraseña2) {
            include("abrir_conexion.php");

            $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);

            // MODIFICAR CONTRASEÑA
            $_UPDATE_SQL = "UPDATE $tabla_db1 SET contraseña='$contraseña' WHERE cedula='$cedula'";

            mysqli_query($conexion, $_UPDATE_SQL);

            echo "Se modificaron correctamente los datos.";

            $_SESSION['comprobante'] = 0;
            include("cerrar_conexion.php");


        } else {
            http_response_code(501);

        }
    }
}

// MODIFICACIONES DEL USUARIO (AJUSTES DE USUARIO)
// MODIFICAR USUARIO (AUDITORIA LISTA)
if ($ingreso == "AjustesUsr") {

    $cedula = $_SESSION['cedula_var_global'];
    $existe_ci = 0;
    $nombre_USR = $_POST["usuario"];
    $pin_seguridad = darFormatoOriginal($_POST["pinSeguridad"]);


    // Pasar nombre de usuario a mayúsculas
    $nombre_usuario = darFormatoOriginal(strtoupper($nombre_USR));

    $contr_verificador = $_POST["contraseña"];
    if ($contr_verificador == '') {
        $contraseña='';
    }else {
        $contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);
    }   

    $telefono = darFormatoOriginal($_POST["telefono"]);
    $telefono_secundario = darFormatoOriginal($_POST["telefono2"]);

    $pos = strpos($nombre_usuario, $findme);
    $pos2 = strpos($telefono, $findme);
    $pos3 = strpos($telefono_secundario, $findme);

    $email = $_POST["correo"];

    if ($pos === false && $pos2 === false && $pos3 === false) {
        if ($contraseña == '') {
            if (preg_match($USR, $nombre_usuario)) {
                include("abrir_conexion.php");

                //VERIFICAR SI LA CEDULA EXISTE EN EL SISTEMA
                $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula = '$cedula'");
                while ($consulta = mysqli_fetch_array($verificar)) {
                    $existe_ci++;
                }
                if ($existe_ci <> 0) {
                    //VERIFICAR EXISTENCIA DEL NOMBRE DE USUARIO
                    $usuario_existe = 0;
                    $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE nombre_usuario = '$nombre_usuario'");
                    while ($consulta = mysqli_fetch_array($verificar)) {
                        $usuario_existe++;
                    }
                    //SI EL USUARIO NO EXISTE PERO LA CEDULA SÍ
                    if ($usuario_existe == 0) {

                        // AUDITORIA ***********************************************************************
                        $valorID = $_SESSION['id_usr'];
                        $columnas = array(
                            'nombre_usuario' => 'Nombre de Usuario',
                            'telefono' => 'Telefono',
                            'telefono_secundario' => 'Telefono Secundario',
                            'email' => 'Correo',
                            'pin_seguridad' => 'Pin'
                        );
                        // BUSCAR DATOS BD
                        $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
                        $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
                        $cambios = array();

                        foreach ($columnas as $columna => $nombre) {
                            switch ($columna) {
                                default:
                                    $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                                    $valor_nuevo = isset($$columna) ? $$columna : "";
                                    break;
                            }
                            if ($valor_antiguo != $valor_nuevo) {
                                array_push($cambios, "$nombre cambió de: " . $valor_antiguo . " a: " . $valor_nuevo . ".");
                            }
                        }
                        $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en sus datos: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");

                        $accionModificacion = "2";
                        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
                        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

                        // FIN DE LA AUDITORIA *************************************************************

                        // MODIFICAR DATOS
                        $_UPDATE_SQL = "UPDATE $tabla_db1 SET nombre_usuario='$nombre_usuario', telefono='$telefono', telefono_secundario='$telefono_secundario', email='$email', pin_seguridad='$pin_seguridad' WHERE cedula='$cedula'";

                        mysqli_query($conexion, $_UPDATE_SQL);

                        echo "<h4>Se modificaron correctamente los datos</h4>";

                        include("cerrar_conexion.php");
                    }

                    //************************************************************************************************* */
                    // SI EXISTE EL NOMBRE DE USUARIO E IGUALMENTE LA CEDULA
                    else {
                        $propio = 0;
                        $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE nombre_usuario = '$nombre_usuario' AND cedula = '$cedula'");
                        while ($consulta = mysqli_fetch_array($verificar)) {
                            $propio++;
                        }
                        //SI AUMENTA, EXISTE EL NOMBRE DE USUARIO CON LA MISMA CEDULA
                        if ($propio != 0) {
                            // AUDITORIA ***********************************************************************
                            $valorID = $_SESSION['id_usr'];
                            $columnas = array(
                                'nombre_usuario' => 'Nombre de Usuario',
                                'telefono' => 'Telefono',
                                'telefono_secundario' => 'Telefono Secundario',
                                'email' => 'Correo',
                                'pin_seguridad' => 'Pin'
                            );
                            // BUSCAR DATOS BD
                            $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
                            $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
                            $cambios = array();

                            foreach ($columnas as $columna => $nombre) {
                                switch ($columna) {
                                    default:
                                        $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                                        $valor_nuevo = isset($$columna) ? $$columna : "";
                                        break;
                                }
                                if ($valor_antiguo != $valor_nuevo) {
                                    array_push($cambios, "$nombre cambió de: " . $valor_antiguo . " a: " . $valor_nuevo . ".");
                                }
                            }


                            $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en sus datos: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");

                            $accionModificacion = "2";
                            $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
                            mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

                            // FIN DE LA AUDITORIA *************************************************************
                            // MODIFICAR DATOS
                            $_UPDATE_SQL = "UPDATE $tabla_db1 SET nombre_usuario='$nombre_usuario', telefono='$telefono', telefono_secundario='$telefono_secundario', email='$email', pin_seguridad='$pin_seguridad' WHERE cedula='$cedula'";

                            mysqli_query($conexion, $_UPDATE_SQL);

                            echo "<h4>Se modificaron correctamente los datos</h4>";

                            include("cerrar_conexion.php");
                        }
                        //SI CONTINUA EN 0, SIGNIFICA QUE EL NOMBRE DE USUARIO EXISTE PERO CON OTRA CÉDULA
                        else {
                            http_response_code(502);
                        }
                    }
                } else {
                    http_response_code(501);
                }
            } else {
                http_response_code(500);
            }
        } else if ($contraseña != '' && preg_match($USR, $nombre_usuario)) {
            include("abrir_conexion.php");

            //VERIFICAR SI LA CEDULA EXISTE EN EL SISTEMA
            $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula = '$cedula'");
            while ($consulta = mysqli_fetch_array($verificar)) {
                $existe_ci++;
            }
            if ($existe_ci <> 0) {
                //VERIFICAR EXISTENCIA DEL NOMBRE DE USUARIO
                $usuario_existe = 0;
                $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE nombre_usuario = '$nombre_usuario'");
                while ($consulta = mysqli_fetch_array($verificar)) {
                    $usuario_existe++;
                }
                //SI EL USUARIO NO EXISTE PERO LA CEDULA SÍ
                if ($usuario_existe == 0) {

                    // AUDITORIA ***********************************************************************
                    include("abrir_conexion.php");

                    $valorID = $_SESSION['id_usr'];
                    $columnas = array(
                        'nombre_usuario' => 'Nombre de Usuario',
                        'telefono' => 'Telefono',
                        'telefono_secundario' => 'Telefono Secundario',
                        'email' => 'Correo',
                        'pin_seguridad' => 'Pin'
                    );
                    // BUSCAR DATOS BD
                    $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
                    $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
                    $cambios = array();

                    foreach ($columnas as $columna => $nombre) {
                        switch ($columna) {
                            default:
                                $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                                $valor_nuevo = isset($$columna) ? $$columna : "";
                                break;
                        }
                        if ($valor_antiguo != $valor_nuevo) {
                            array_push($cambios, "$nombre cambió de: " . $valor_antiguo . " a: " . $valor_nuevo . ".");
                        }
                    }


                    $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en sus datos: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");

                    $accionModificacion = "2";
                    $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
                    mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

                    // FIN DE LA AUDITORIA *************************************************************

                    // MODIFICAR DATOS
                    $_UPDATE_SQL = "UPDATE $tabla_db1 SET nombre_usuario='$nombre_usuario', telefono='$telefono', telefono_secundario='$telefono_secundario', email='$email', contraseña='$contraseña', pin_seguridad='$pin_seguridad' WHERE cedula='$cedula'";

                    mysqli_query($conexion, $_UPDATE_SQL);

                    echo "<h4>Se modificaron correctamente los datos</h4>";

                    include("cerrar_conexion.php");
                }

                //************************************************************************************************* */
                // SI EXISTE EL NOMBRE DE USUARIO E IGUALMENTE LA CEDULA
                else {
                    $propio = 0;
                    $verificar = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE nombre_usuario = '$nombre_usuario' AND cedula = '$cedula'");
                    while ($consulta = mysqli_fetch_array($verificar)) {
                        $propio++;
                    }
                    //SI AUMENTA, EXISTE EL NOMBRE DE USUARIO CON LA MISMA CEDULA
                    if ($propio <> 0) {

                        // AUDITORIA ***********************************************************************
                        include("abrir_conexion.php");

                        $valorID = $_SESSION['id_usr'];
                        $columnas = array(
                            'nombre_usuario' => 'Nombre de Usuario',
                            'telefono' => 'Telefono',
                            'telefono_secundario' => 'Telefono Secundario',
                            'email' => 'Correo',
                            'pin_seguridad' => 'Pin'
                        );
                        // BUSCAR DATOS BD
                        $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
                        $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
                        $cambios = array();

                        foreach ($columnas as $columna => $nombre) {
                            switch ($columna) {
                                default:
                                    $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                                    $valor_nuevo = isset($$columna) ? $$columna : "";
                                    break;
                            }
                            if ($valor_antiguo != $valor_nuevo) {
                                array_push($cambios, "$nombre cambió de: " . $valor_antiguo . " a: " . $valor_nuevo . ".");
                            }
                        }


                        $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en sus datos: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");

                        $accionModificacion = "2";
                        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
                        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

                        // FIN DE LA AUDITORIA *************************************************************
                        // MODIFICAR DATOS
                        $_UPDATE_SQL = "UPDATE $tabla_db1 SET nombre_usuario='$nombre_usuario', telefono='$telefono', telefono_secundario='$telefono_secundario', email='$email', contraseña='$contraseña', pin_seguridad='$pin_seguridad' WHERE cedula='$cedula'";

                        mysqli_query($conexion, $_UPDATE_SQL);

                        echo "<h4>Se modificaron correctamente los datos</h4>";

                        include("cerrar_conexion.php");
                    }
                    //SI CONTINUA EN 0, SIGNIFICA QUE EL NOMBRE DE USUARIO EXISTE PERO CON OTRA CÉDULA
                    else {
                        http_response_code(502);
                    }
                }
            } else {
                http_response_code(501);
            }
        } else {
            http_response_code(500);
        }
    } else {
        http_response_code(504);
        include("php/cerrar_conexion.php");
    }
}

// MODIFICAR PREGUNTAS USUARIO  (AUDITORIA LISTA)
if ($ingreso == "datosExtrAjustes") {
    $respuesta_1sinHash = $_POST['respuesta_1'];
    $respuesta_2sinHash = $_POST["respuesta_2"];
    $respuesta_3sinHash = $_POST["respuesta_3"];

    //CONTIENE EL VALOR DE LA CÉDULA
    $cedula = $_SESSION['cedula_var_global'];

    if (preg_match($respuesta, $respuesta_1sinHash) && preg_match($respuesta, $respuesta_2sinHash) && preg_match($respuesta, $respuesta_3sinHash)) {
        include("abrir_conexion.php");

        $respuesta1 = password_hash($respuesta_1sinHash, PASSWORD_DEFAULT);
        $respuesta2 = password_hash($respuesta_2sinHash, PASSWORD_DEFAULT);
        $respuesta3 = password_hash($respuesta_3sinHash, PASSWORD_DEFAULT);

        // AUDITORIA ***********************************************************************
        include("abrir_conexion.php");

        $valorID = $_SESSION['id_usr'];
        $columnas = array(
            'respuesta1' => 'Respuesta 1',
            'respuesta2' => 'Respuesta 2',
            'respuesta3' => 'Respuesta 3'
        );
        // BUSCAR DATOS BD
        $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
        $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
        $cambios = array();

        foreach ($columnas as $columna => $nombre) {
            switch ($columna) {
                default:
                    $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                    $valor_nuevo = isset($$columna) ? $$columna : "";
                    break;
            }
            // Comparar datos encriptados
            if (!password_verify($valor_nuevo, $valor_antiguo)) {
                array_push($cambios, "$nombre cambió. ");
            }
        }
        $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en sus datos: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
        $accionModificacion = "2";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

        // FIN DE LA AUDITORIA *************************************************************
        //TODO: CAMBIAR LA FORMA DE VERIFICAR LOS DATOS PARA GUARDAR EL REGISTRO

        // MODIFICAR DATOSb
        $_UPDATE_SQL = "UPDATE $tabla_db1 SET respuesta1='$respuesta1', respuesta2='$respuesta2', respuesta3='$respuesta3' WHERE cedula='$cedula'";

        mysqli_query($conexion, $_UPDATE_SQL);

        echo "<h4>Cambio de preguntas realizado exitosamente.</h4>";

        include("cerrar_conexion.php");
    } else if (preg_match($respuesta, $respuesta_1sinHash) && $respuesta_2sinHash == '' && $respuesta_3sinHash == '') {
        include("abrir_conexion.php");

        $respuesta1 = password_hash($respuesta_1sinHash, PASSWORD_DEFAULT);
        // AUDITORIA ***********************************************************************
        include("abrir_conexion.php");

        $valorID = $_SESSION['id_usr'];
        $columnas = array(
            'respuesta1' => 'Respuesta 1'
        );
        // BUSCAR DATOS BD
        $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
        $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
        $cambios = array();

        foreach ($columnas as $columna => $nombre) {
            switch ($columna) {
                default:
                    $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                    $valor_nuevo = isset($$columna) ? $$columna : "";
                    break;
            }
            // Comparar datos encriptados
            if (!password_verify($valor_nuevo, $valor_antiguo)) {
                array_push($cambios, "$nombre cambió. ");
            }
        }
        $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en sus datos: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
        $accionModificacion = "2";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
        // FIN DE LA AUDITORIA *************************************************************
        // MODIFICAR DATOS
        $_UPDATE_SQL = "UPDATE $tabla_db1 SET respuesta1='$respuesta1' WHERE cedula='$cedula'";
        mysqli_query($conexion, $_UPDATE_SQL);
        echo "<h4>Cambio de preguntas realizado exitosamente.</h4>";

        include("cerrar_conexion.php");
    } else if (preg_match($respuesta, $respuesta_1sinHash) && preg_match($respuesta, $respuesta_2sinHash) && $respuesta_3sinHash == '') {
        include("abrir_conexion.php");

        $respuesta1 = password_hash($respuesta_1sinHash, PASSWORD_DEFAULT);
        $respuesta2 = password_hash($respuesta_2sinHash, PASSWORD_DEFAULT);
        // AUDITORIA ***********************************************************************
        include("abrir_conexion.php");

        $valorID = $_SESSION['id_usr'];
        $columnas = array(
            'respuesta1' => 'Respuesta 1',
            'respuesta2' => 'Respuesta 2'
        );
        // BUSCAR DATOS BD
        $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
        $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
        $cambios = array();

        foreach ($columnas as $columna => $nombre) {
            switch ($columna) {
                default:
                    $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                    $valor_nuevo = isset($$columna) ? $$columna : "";
                    break;
            }
            // Comparar datos encriptados
            if (!password_verify($valor_nuevo, $valor_antiguo)) {
                array_push($cambios, "$nombre cambió. ");
            }
        }
        $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en sus datos: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
        $accionModificacion = "2";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
        // FIN DE LA AUDITORIA *************************************************************
        // MODIFICAR DATOS
        $_UPDATE_SQL = "UPDATE $tabla_db1 SET respuesta1='$respuesta1',  respuesta2='$respuesta2' WHERE cedula='$cedula'";
        mysqli_query($conexion, $_UPDATE_SQL);
        echo "<h4>Cambio de preguntas realizado exitosamente.</h4>";

        include("cerrar_conexion.php");
    } else if (preg_match($respuesta, $respuesta_1sinHash) && preg_match($respuesta, $respuesta_3sinHash) && $respuesta_2sinHash == '') {
        include("abrir_conexion.php");

        $respuesta1 = password_hash($respuesta_1sinHash, PASSWORD_DEFAULT);
        $respuesta2 = password_hash($respuesta_2sinHash, PASSWORD_DEFAULT);
        // AUDITORIA ***********************************************************************
        include("abrir_conexion.php");

        $valorID = $_SESSION['id_usr'];
        $columnas = array(
            'respuesta1' => 'Respuesta 1',
            'respuesta3' => 'Respuesta 3'
        );
        // BUSCAR DATOS BD
        $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
        $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
        $cambios = array();

        foreach ($columnas as $columna => $nombre) {
            switch ($columna) {
                default:
                    $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                    $valor_nuevo = isset($$columna) ? $$columna : "";
                    break;
            }
            // Comparar datos encriptados
            if (!password_verify($valor_nuevo, $valor_antiguo)) {
                array_push($cambios, "$nombre cambió. ");
            }
        }
        $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en sus datos: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
        $accionModificacion = "2";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
        // FIN DE LA AUDITORIA *************************************************************
        // MODIFICAR DATOS
        $_UPDATE_SQL = "UPDATE $tabla_db1 SET respuesta1='$respuesta1',  respuesta3='$respuesta3' WHERE cedula='$cedula'";
        mysqli_query($conexion, $_UPDATE_SQL);
        echo "<h4>Cambio de preguntas realizado exitosamente.</h4>";

        include("cerrar_conexion.php");
    } else if (preg_match($respuesta, $respuesta_2sinHash) && $respuesta_1sinHash == '' && $respuesta_3sinHash == '') {
        include("abrir_conexion.php");

        $respuesta2 = password_hash($respuesta_2sinHash, PASSWORD_DEFAULT);
        // AUDITORIA ***********************************************************************
        include("abrir_conexion.php");

        $valorID = $_SESSION['id_usr'];
        $columnas = array(
            'respuesta2' => 'Respuesta 2',
        );
        // BUSCAR DATOS BD
        $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
        $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
        $cambios = array();

        foreach ($columnas as $columna => $nombre) {
            switch ($columna) {
                default:
                    $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                    $valor_nuevo = isset($$columna) ? $$columna : "";
                    break;
            }
            // Comparar datos encriptados
            if (!password_verify($valor_nuevo, $valor_antiguo)) {
                array_push($cambios, "$nombre cambió. ");
            }
        }
        $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en sus datos: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
        $accionModificacion = "2";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

        // FIN DE LA AUDITORIA *************************************************************
        //TODO: CAMBIAR LA FORMA DE VERIFICAR LOS DATOS PARA GUARDAR EL REGISTRO

        // MODIFICAR DATOSb
        $_UPDATE_SQL = "UPDATE $tabla_db1 SET respuesta2='$respuesta2' WHERE cedula='$cedula'";

        mysqli_query($conexion, $_UPDATE_SQL);

        echo "<h4>Cambio de preguntas realizado exitosamente.</h4>";

        include("cerrar_conexion.php");
    } else if (preg_match($respuesta, $respuesta_2sinHash) && preg_match($respuesta, $respuesta_3sinHash) && $respuesta_1sinHash == '') {
        include("abrir_conexion.php");

        $respuesta2 = password_hash($respuesta_2sinHash, PASSWORD_DEFAULT);
        // AUDITORIA ***********************************************************************
        include("abrir_conexion.php");

        $valorID = $_SESSION['id_usr'];
        $columnas = array(
            'respuesta2' => 'Respuesta 2',
            'respuesta3' => 'Respuesta 3',
        );
        // BUSCAR DATOS BD
        $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
        $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
        $cambios = array();

        foreach ($columnas as $columna => $nombre) {
            switch ($columna) {
                default:
                    $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                    $valor_nuevo = isset($$columna) ? $$columna : "";
                    break;
            }
            // Comparar datos encriptados
            if (!password_verify($valor_nuevo, $valor_antiguo)) {
                array_push($cambios, "$nombre cambió. ");
            }
        }
        $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en sus datos: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
        $accionModificacion = "2";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

        // FIN DE LA AUDITORIA *************************************************************
        //TODO: CAMBIAR LA FORMA DE VERIFICAR LOS DATOS PARA GUARDAR EL REGISTRO

        // MODIFICAR DATOSb
        $_UPDATE_SQL = "UPDATE $tabla_db1 SET respuesta2='$respuesta2', respuesta3='$respuesta3' WHERE cedula='$cedula'";

        mysqli_query($conexion, $_UPDATE_SQL);

        echo "<h4>Cambio de preguntas realizado exitosamente.</h4>";

        include("cerrar_conexion.php");
    } else if (preg_match($respuesta, $respuesta_3sinHash) && $respuesta_1sinHash == '' && $respuesta_2sinHash == '') {
        include("abrir_conexion.php");
        $respuesta3 = password_hash($respuesta_3sinHash, PASSWORD_DEFAULT);

        // AUDITORIA ***********************************************************************
        include("abrir_conexion.php");
        $valorID = $_SESSION['id_usr'];
        $columnas = array(
            'respuesta3' => 'Respuesta 3'
        );
        // BUSCAR DATOS BD
        $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
        $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
        $cambios = array();

        foreach ($columnas as $columna => $nombre) {
            switch ($columna) {
                default:
                    $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                    $valor_nuevo = isset($$columna) ? $$columna : "";
                    break;
            }
            // Comparar datos encriptados
            if (!password_verify($valor_nuevo, $valor_antiguo)) {
                array_push($cambios, "$nombre cambió. ");
            }
        }
        $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en sus datos: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
        $accionModificacion = "2";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

        // FIN DE LA AUDITORIA *************************************************************
        //TODO: CAMBIAR LA FORMA DE VERIFICAR LOS DATOS PARA GUARDAR EL REGISTRO

        // MODIFICAR DATOSb
        $_UPDATE_SQL = "UPDATE $tabla_db1 SET respuesta3='$respuesta3' WHERE cedula='$cedula'";

        mysqli_query($conexion, $_UPDATE_SQL);

        echo "<h4>Cambio de preguntas realizado exitosamente.</h4>";

        include("cerrar_conexion.php");
    } else {
        http_response_code(500);
        include("cerrar_conexion.php");

    }
}
// ***************************************** *********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************
// MODIFICANDO CARGO Y LUGAR DE TRABAJO (AUDITORIA LISTA)
if ($ingreso == "gestionCargo") {
    $cedulaCargo = $_POST['cedulaCargo'];

    $ActivoInactivo = $_POST['actInac'];
    $rolTest = $_POST['cargoSis'];
    // PRIMERO BUSCAREMOS EL CARGO ANTERIOR (EN CASO DE QUE NO HAYA CAMBIOS)
    include("abrir_conexion.php");
    $SQL_cargo_info = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula = '$cedulaCargo'");
    while ($consulta = mysqli_fetch_array($SQL_cargo_info)) {
        $cargoAntes = $consulta['usuario_rol_id'];
    }

    if ($ActivoInactivo == 2) {
        $usuario_rol_id = 5;
    } else {
        if ($rolTest == 100) {
            $usuario_rol_id = $cargoAntes;
        } else {
            $usuario_rol_id = $rolTest;
        }
    }
    // VERIFICANDO CAMBIO DE LUGAR DE TRABAJO
    if (isset($_POST['departamento_select'])) {
        $usuario_departamento_id = $_POST['departamento_select'];
    } else {
        $usuario_departamento_id = $_POST['id_dep'];
    }

    if (isset($_POST['division_select'])) {
        $usuario_division_id = $_POST['division_select'];
    } else {
        $usuario_division_id = $_POST['id_div'];
    }

    if (isset($_POST['direccion_select'])) {
        $usuario_direccion_id = $_POST['direccion_select'];
    } else {
        $usuario_direccion_id = $_POST['id_dir'];
    }

    // AUDITORIA *****************************************************************
    $valorID = $_SESSION['id_usr'];
    $columnas = array(
        'usuario_departamento_id' => 'Departamento',
        'usuario_division_id' => 'Division',
        'usuario_direccion_id' => 'Dirección',
        'usuario_rol_id' => 'Rol del Usuario',
        'ActivoInactivo' => 'Estatus'
    );
    // BUSCAR DATOS BD
    $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedulaCargo'");
    $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
    $cambios = array();

    // Consultar los nombres de los departamentos permitidos
    $departamentos = array();
    $query = "SELECT * FROM $tabla_db3";
    $resultado = mysqli_query($conexion, $query);
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $departamentos[$fila['id_departamento']] = $fila['nombre_dpto'];
        }
    }
    // Consultar los nombres de las coordinaciones permitidas
    $divisiones = array();
    $query = "SELECT id_divisiones, nombre_div FROM $tabla_db4";
    $resultado = mysqli_query($conexion, $query);
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $divisiones[$fila['id_divisiones']] = $fila['nombre_div'];
        }
    }
    // Consultar los nombres de las direcciones permitidas
    $direcciones = array();
    $query = "SELECT * FROM $tabla_db5";
    $resultado = mysqli_query($conexion, $query);
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $direcciones[$fila['id_direcciones']] = $fila['nombre_dire'];
        }
    }
    $rolBD_buscar = array();
    $query = "SELECT * FROM $tabla_db2";
    $resultado = mysqli_query($conexion, $query);
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $rolBD_buscar[$fila['id_rol']] = $fila['nombre_rol'];
        }
    }
    $actiInacti = array();
    $query = "SELECT * FROM $tabla_db2_2";
    $resultado = mysqli_query($conexion, $query);
    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $actiInacti[$fila['id_estado']] = $fila['nombre_status'];
        }
    }
    foreach ($columnas as $columna => $nombre) {
        switch ($columna) {
            case 'usuario_departamento_id':
                $valor_antiguo = isset($departamentos[$datos_antiguos[$columna]]) ? $departamentos[$datos_antiguos[$columna]] : "";
                $valor_nuevo = isset($departamentos[$$columna]) ? $departamentos[$$columna] : "";
                break;
            case 'usuario_division_id':
                $valor_antiguo = isset($divisiones[$datos_antiguos[$columna]]) ? $divisiones[$datos_antiguos[$columna]] : "";
                $valor_nuevo = isset($divisiones[$$columna]) ? $divisiones[$$columna] : "";
                break;
            case 'usuario_direccion_id':
                $valor_antiguo = isset($direcciones[$datos_antiguos[$columna]]) ? $direcciones[$datos_antiguos[$columna]] : "";
                $valor_nuevo = isset($direcciones[$$columna]) ? $direcciones[$$columna] : "";
                break;
            case 'usuario_rol_id':
                $valor_antiguo = isset($rolBD_buscar[$datos_antiguos[$columna]]) ? $rolBD_buscar[$datos_antiguos[$columna]] : "";
                $valor_nuevo = isset($rolBD_buscar[$$columna]) ? $rolBD_buscar[$$columna] : "";
                break;
            case 'ActivoInactivo':
                $valor_antiguo = isset($actiInacti[$datos_antiguos[$columna]]) ? $actiInacti[$datos_antiguos[$columna]] : "";
                $valor_nuevo = isset($actiInacti[$$columna]) ? $actiInacti[$$columna] : "";
                break;

            default:
                $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                $valor_nuevo = isset($$columna) ? $$columna : "";
                break;
        }
        if ($valor_antiguo != $valor_nuevo) {
            array_push($cambios, "$nombre cambió de: " . $valor_antiguo . " a: " . $valor_nuevo . ".");
        }
    }
    $buscarUsuariocambiado = "SELECT * FROM $tabla_db1 WHERE cedula = '$cedulaCargo'";
    $resultados = mysqli_query($conexion, $buscarUsuariocambiado);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $nombreUsrCambiado = $consulta['nombre'] . " " . $consulta['apellido'];
    }
    $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . " realizó cambios en los datos del empleado: " . $nombreUsrCambiado . ", cambios realizados: " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
    $accionModificacion = "2";
    $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
    mysqli_query($conexion, $SQL_DATOS_CAMBIOS);


    // FIN DE LA AUDITORIA ************************************************************
    // MODIFICAR DATOS
    $ActCargo = "UPDATE $tabla_db1 SET usuario_departamento_id='$usuario_departamento_id', usuario_division_id='$usuario_division_id', usuario_direccion_id='$usuario_direccion_id', usuario_rol_id='$usuario_rol_id', ActivoInactivo='$ActivoInactivo' WHERE cedula='$cedulaCargo'";
    mysqli_query($conexion, $ActCargo);

    echo "<h6>Actualización de Cargo dentro del Sistema, completado.</h6>";

    include("cerrar_conexion.php");

}
// CAMBIO CONTRASEÑA RECUPERACIÓN (AUDITORIA LISTA)
if ($ingreso == "RecuperacionUSR") {

    $contraseña = $_POST['contraseña'];
    $cedula = $_SESSION['cedulaRecuperacion'];
    if (preg_match($CONTR, $contraseña) && preg_match($ci, $cedula)) {
        include("abrir_conexion.php");

        $contraseña = password_hash($_POST['contraseña'], PASSWORD_DEFAULT);
        // AUDITORIA *****************************************************************
        $buscarID = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
        while ($consulta = mysqli_fetch_array($buscarID)) {
            $nombreUsuarioBD = $consulta['nombre'] . " " . $consulta['apellido'];
        }
        $valorID = $_SESSION['id_usr'];
        $nombreAd = $_SESSION['nombre'];
        $descripcion_Cambio = "El usuario " . $nombreAd . " modificó la contraseña del usuario " . $nombreUsuarioBD . ". El proceso fue realizado para restaurar la contraseña del usuario.";

        $accionCreacion = "2";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionCreacion', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);

        // FINAL AUDITORIA ************************************************************

        // MODIFICAR CONTRASEÑA
        $_UPDATE_SQL = "UPDATE $tabla_db1 SET contraseña='$contraseña' WHERE cedula='$cedula'";

        mysqli_query($conexion, $_UPDATE_SQL);
        $_SESSION['cedulaRecuperacion'] = 0;
        echo "Se modificaron correctamente los datos.";
        include("cerrar_conexion.php");
    } else {
        http_response_code(501);
    }
}
// BUSCAR DATOS PARA PASAR EL USUARIO DE INACTIVO A ACTIVO
if ($ingreso == "InactivoActivoCambio") {
    include("abrir_conexion.php");

    $Cedula = $_POST['nroCI'];

    $contador = 0;

    $SQL_cargo_info = "SELECT * FROM $tabla_db1 WHERE cedula = '$Cedula'";
    $resultados = mysqli_query($conexion, $SQL_cargo_info);
    while ($consulta = mysqli_fetch_array($resultados)) {
        $valores['cedulaStatus'] = $consulta['cedula'];
        $valores['Status'] = $consulta['ActivoInactivo'];
    }
    // Convirtiendo el array en algo leíble por JS
    $valores = json_encode($valores);
    echo $valores;

    include("cerrar_conexion.php");

}
// PASANDO DE INACTIVO A ACTIVO (AUDITORIA LISTA)
if ($ingreso == "cambioStatus") {
    include("abrir_conexion.php");

    $cedula = $_POST['cedulaInac'];
    $statusActual = $_POST['statusInac'];
    $ActivoInactivo = 1;
    $existe = 0;

    $SQL_existe_info = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula = '$cedula' AND ActivoInactivo='$statusActual'");
    while ($consulta = mysqli_fetch_array($SQL_existe_info)) {
        $nombreUsuario = $consulta['nombre'] . " " . $consulta['apellido'];
        $existe++;
    }
    if ($existe <> 0) {
        // AUDITORIA *****************************************************************
        $valorID = $_SESSION['id_usr'];
        $columnas = array(
            'ActivoInactivo' => 'Estatus'
        );
        // BUSCAR DATOS BD
        $BUSCAR = mysqli_query($conexion, "SELECT * FROM $tabla_db1 WHERE cedula='$cedula'");
        $datos_antiguos = mysqli_fetch_assoc($BUSCAR);
        $cambios = array();

        $actiInacti = array();
        $query = "SELECT * FROM $tabla_db2_2";
        $resultado = mysqli_query($conexion, $query);
        if ($resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $actiInacti[$fila['id_estado']] = $fila['nombre_status'];
            }
        }

        foreach ($columnas as $columna => $nombre) {
            switch ($columna) {
                case 'ActivoInactivo':
                    $valor_antiguo = isset($actiInacti[$datos_antiguos[$columna]]) ? $actiInacti[$datos_antiguos[$columna]] : "";
                    $valor_nuevo = isset($actiInacti[$$columna]) ? $actiInacti[$$columna] : "";
                    break;
                default:
                    $valor_antiguo = isset($datos_antiguos[$columna]) ? $datos_antiguos[$columna] : "";
                    $valor_nuevo = isset($$columna) ? $$columna : "";
                    break;
            }
            if ($valor_antiguo != $valor_nuevo) {
                array_push($cambios, "$nombre cambió de: " . $valor_antiguo . " a: " . $valor_nuevo . ".");
            }
        }
        $descripcion_Cambio = "El usuario: " . $_SESSION['nombre'] . ", modificó el estado del usuario: " . $nombreUsuario . ". " . (count($cambios) > 0 ? implode(" ", $cambios) . " Cambios realizados." : "Sin cambios realizados.");
        $accionModificacion = "2";
        $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionModificacion', now(), '$descripcion_Cambio')";
        mysqli_query($conexion, $SQL_DATOS_CAMBIOS);
        // FIN DE LA AUDITORIA ************************************************************

        // MODIFICAR DATOS
        $cambioStatusSQL = "UPDATE $tabla_db1 SET ActivoInactivo='$ActivoInactivo' WHERE cedula='$cedula'";
        mysqli_query($conexion, $cambioStatusSQL);

        echo "<h6>El usuario ya no está inactivo, pero debe asignarle un cargo para poder permitirle el acceso al Sistema.</h6>";

        include("cerrar_conexion.php");
    } else {
        http_response_code(500);
        include("cerrar_conexion.php");

    }


}
?>