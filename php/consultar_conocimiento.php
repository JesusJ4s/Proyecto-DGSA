<?php
// INICIANDO LAS VARIABLE GLOBAL
session_start();
ob_start();
function darFormatoOriginal($string){
    $string = str_replace(
        array('à','ä','â','À','Ä','Â'),
        array('a','a','a','A','A','A'),
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
        array( 'ç', 'Ç'),
        array( 'c', 'C'),
        $string
    );
    $string = str_replace(
        array('[', '|', '°', '¬', '!', '^', '`', '~', '#', '$', '%', '&', '/', '(', ')', '=', '?', '¿', '{', '}', '_', '+', '<', '>', '¡', '¨', '*', ']', "'", '"'),
        '*',
        $string
    );

    return $string;
}

$conocimiento = $_POST['conocimiento'];

// MUESTRAS DE INFORMACIÓN
// ******************************************************************************************************************************************************************************************
// CONSULTA TODDOS LOS DATOS 
if ($conocimiento == "Todo") {
    include("abrir_conexion.php");

    echo 
        '
        <table id="dataTable_ConoTodo" class="table table-striped table-hover">
            <thead  class="bg-grey text-light">
                <tr class="align-middle text-center">
                    <th class="text-center">#</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Posible Solución</th>
                    <!--<th class="text-center">Ver</th>-->
                </tr>
            </thead>
            <tbody id="">
        ';

    $contador = 0;

    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db9");
        while($consulta = mysqli_fetch_array($resultados))
        {
            echo 
            '
                <tr>
                    <td class="text-end">'.$consulta['id_conocimiento'].'</td>
                    <td class="">'.$consulta['tipo_conocimiento'].'</td>
                    <td class="">'.$consulta['descripcion_caso'].'</td>
                    <td class="" maxlength="">'.$consulta['posible_solucion'].'</td>
                    <!--<td class="txt-td"><button type="button" class="btn-img-td" onclick=""><img class="img-td" src="../assets/intranet/soporte/iconos/computadora2.png"></button></td>-->
                </tr>
            
            ';
            $contador++;

        }
        echo '</tbody>
                <tfoot>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Posible Solución</th>
                        <!--<th class="text-center">Ver</th>-->
                    </tr>
                </tfoot>
        </table>'; 

        if($contador==0){
            echo "<h3 class='text-center'>No se han ingresado datos aún</h3>";
        }
        include("cerrar_conexion.php");
}

// SOLO SOFTWARE
if ($conocimiento == "soft") {
    include("abrir_conexion.php");

    echo 
        '
        <table id="dataTable_ConoSoft" class="table table-striped table-hover">
            <thead  class="bg-primary text-light">
                <tr>
                    <th class="text-center">#</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Posible Solución</th>
                    <!--<th class="text-center">Ver</th>-->
                </tr>
            </thead>
            <tbody id="">
        ';

    $contador = 0;

    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db9 WHERE tipo_conocimiento = 'Software'");
        while($consulta = mysqli_fetch_array($resultados))
        {
            echo 
            '
                <tr>
                    <td class="col-1 text-end">'.$consulta['id_conocimiento'].'</td>
                    <td class="col-2">'.$consulta['tipo_conocimiento'].'</td>
                    <td class="col-3">'.$consulta['descripcion_caso'].'</td>
                    <td class="">'.$consulta['posible_solucion'].'</td>
                    <!--<td class="txt-td"><button type="button" class="btn-img-td" onclick=""><img class="img-td" src="../assets/intranet/soporte/iconos/computadora2.png"></button></td>-->
                </tr>
            
            ';
            $contador++;

        }
        echo '</tbody>
                <tfoot>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Tipo</th>
                        <th>Descripción</th>
                        <th>Posible Solución</th>
                        <!--<th class="text-center">Ver</th>-->
                    </tr>
                </tfoot>
            </table>'; 

        if($contador==0){
            echo "<h3 class='text-center'>No se han ingresado datos aún</h3>";
        }
        include("cerrar_conexion.php");
}

// SOLO HARDWARE
if ($conocimiento == "hard") {
    include("abrir_conexion.php");

    echo 
        '
        <table id="dataTable_ConoHard" class="table table-striped table-hover">
            <thead  class="bg-primary text-light">
                <tr>
                    <th class="text-center">#</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Posible Solución</th>
                    <!--<th class="text-center">Ver</th>-->
                </tr>
            </thead>
            <tbody id="">
        ';

    $contador = 0;

    $resultados = mysqli_query($conexion, "SELECT * FROM $tabla_db9 WHERE tipo_conocimiento = 'Hardware'");
        while($consulta = mysqli_fetch_array($resultados))
        {
            echo 
            '
                <tr>
                    <td class="col-1 text-end">'.$consulta['id_conocimiento'].'</td>
                    <td class="col-2">'.$consulta['tipo_conocimiento'].'</td>
                    <td class="col-3">'.$consulta['descripcion_caso'].'</td>
                    <td class="">'.$consulta['posible_solucion'].'</td>
                    <!--<td class="txt-td"><button type="button" class="btn-img-td" onclick=""><img class="img-td" src="../assets/intranet/soporte/iconos/computadora2.png"></button></td>-->
                </tr>
            
            ';
            $contador++;

        }
        echo '</tbody>
                <tfoot>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="">Tipo</th>
                        <th class="">Descripción</th>
                        <th class="">Posible Solución</th>
                        <!--<th class="text-center">Ver</th>-->
                    </tr>
                </tfoot>
            </table>'; 

        if($contador==0){
            echo "<h3 class='text-center'>No se han ingresado datos aún</h3>";
        }
        include("cerrar_conexion.php");
}

// REGISTRAR NUEVA INFORMACÍON (AUDITORIA LISTA)
if ($conocimiento=="BaseConocimiento") {
    
    $tipo_fallo_='';

    if (isset($_POST['tipo_fallo'])) {
        $tipo_fallo_=$_POST['tipo_fallo'];
        if ($tipo_fallo_==1) {
            $tipo_fallo="Software";
        }else{
            $tipo_fallo="Hardware";
        }
        $titulo=darFormatoOriginal($_POST['descripcion_titulo']);
        $descripcion=darFormatoOriginal($_POST['descripcion']);
        $findme = "*";
      
        $pos = strpos($titulo, $findme);
        $pos2 = strpos($descripcion, $findme);
        
        if ($tipo_fallo!=''&&$titulo!=''&&$descripcion!='') {
            // CREA UN NUEVO REGISTRO DE UN POSIBLE PROBLEMA CON SU POSIBLE SOLUCIÓN
            if (strlen($descripcion) > 20) {
                if ($pos === false && $pos2 === false) {
        
                    include("abrir_conexion.php");

                    // REALIZANDO EL REGISTRO DEL HISTORIAL
                    // AUDITORIA *****************************************************************
                    //CONTIENE EL VALOR DE LA CÉDULA
                    $cedula=$_SESSION['cedula_var_global'];
                    $valorID=$_SESSION['id_usr'];
                    $accionHecha = "16";
                    $descripcion_Cambio="El usuario: ". $_SESSION['nombre'] .", ingresó un nuevo registro a la Base de Conocimiento: ".$descripcion;
                    $SQL_DATOS_CAMBIOS = "INSERT INTO $tabla_db100 (id_historial_cambios, id_usuario_cambio, id_accion_cambio, entidad_cambio, fecha_usuario_cambio, descripcion_cambio) values (NULL, '$valorID', '$accionHecha', '$tipo_fallo', now(), '$descripcion_Cambio')";
                    mysqli_query($conexion,$SQL_DATOS_CAMBIOS);
                    // FINAL AUDITORIA *****************************************************************

                    // REGISTRO DEL NUEVO CONOCIMIENTO
                    $SQL_DATOS_BASE = "INSERT INTO $tabla_db9 (id_conocimiento, tipo_conocimiento, descripcion_caso, posible_solucion) values (NULL, '$tipo_fallo', '$titulo', '$descripcion')";
        
                    mysqli_query($conexion,$SQL_DATOS_BASE);
        
                    echo "<p>Se ha insertado un nuevo dato a la Base de Conocimiento.</p>";
        
                    include("php/cerrar_conexion.php");
        
                }else{
                    http_response_code(504);
                    include("php/cerrar_conexion.php");
                }
            }else{
                http_response_code(503);
                include("php/cerrar_conexion.php");
            }
        } else {
            http_response_code(502);
            include("php/cerrar_conexion.php");
        }
    }else {
        http_response_code(501);
        include("php/cerrar_conexion.php");
    }
        
        
    
        
    
}

?>