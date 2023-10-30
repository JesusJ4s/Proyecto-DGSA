<?php
require('../fpdf/fpdf.php');
date_default_timezone_set('America/Caracas');
session_start();
ob_start();
class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $this->SetFont('Arial', 'B', 10);
        $this->Image('../assets/logos/DGSA/Imagen1.png', 25, 2, 18); //SE COLOCA LA IMAGEN Y LUEGO X, Y, TAMAÑO
        //Mueve la línea a un lugar que coloques en el eje X y Y 
        $this->SetXY(55, 10);
        $this->cell(100, 8, 'CORDINACION DE INFORMÁTICA, COMUNICACIÓN Y TECNOLOGÍA', 0, 1, 'C', 0);
        $this->Ln(6);
    }

    // Pie de página
    function Footer()
    {
        $UsuarioCreador = $_SESSION['nombre'];

        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial', 'B', 5);
        //Nombre de la Ingeniera
        $this->Cell(50, 2, 'COORDINADOR: Dennis Quiñones', 0, 1, 'S');
        $this->Cell(50, 2, "Impreso por: ".$UsuarioCreador, 0, 1, 'S');
        $this->Cell(50, 2, 'Año 2023', 0, 1, 'S');
        // Número de página
        // $this->Cell(0, 10, 'Pagina ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}
$pdf = new PDF('P', 'mm', 'letter', true);
$pdf->AliasNbPages();

// $pdf->SetAutoPageBreak(true, 20);//Salto de pagina automático

// CONSULTA SQL PARA LLENAR LOS ESPACIOS CON LOS DATOS DE LA BASE DE DATOS
include("../php/abrir_conexion.php");

$SQL_VAR = $_SESSION['nombreSQL'];

if ($SQL_VAR==''){
    $SQL = "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db5 d ON i.direccion_inv_id = d.id_direcciones INNER JOIN $tabla_db3 e ON i.dpto_inv_id = e.id_departamento WHERE nombre_equipo = '0'";
} else {
    $SQL = $SQL_VAR;
}
$resultados = $SQL;
$final = mysqli_query($conexion, $resultados);
// INICIANDO UN WHILE QUE LLENE LAS CASILLAS HASTA COMPLETAR LOS REGISTROS DE LA BASE DE DATOS
while ($row = $final->fetch_assoc()) {

    $pdf->AddPage();
    $pdf->SetMargins(10, 10, 10); //Margenes

    $pdf->SetX(23);
    $pdf->SetFont('Arial', 'B', 6);
    $pdf->cell(35, 4, 'ELABORADO POR EL TÉCNICO: ', 0, 0, 'S', 0);
    $pdf->cell(35, 4, $row['nombre'], 'B', 0, 'C', 0);

    $pdf->cell(23, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(30, 4, 'FECHA DE ELABORACION: ', 0, 0, 'S', 0);
    $pdf->cell(25, 4, $row['fecha_inventario'], 'B', 1, 'C', 0);

    $pdf->Ln(3);
    $pdf->SetX(23);
    // ****************************
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0);
    $xInicio = 23; // Coordenada X de inicio del recuadro
    $yInicio = 32; // Coordenada Y de inicio del recuadro
    $anchoRecuadro = 170; // Ancho del recuadro
    $altoRecuadro = 35; // Alto del recuadro
    $pdf->Rect($xInicio, $yInicio, $anchoRecuadro, $altoRecuadro); // Dibuja el recuadro
    $pdf->SetXY($xInicio, $yInicio); // Establece la posición inicial para comenzar a escribir las celdas

    // ****************************
    $pdf->SetFont('Arial', 'B', 7);
    $pdf->Ln(4);
    $pdf->SetX($xInicio);

    // Supervisores
    $pdf->cell(28, 4, 'DIRECCION DE LINEA: ', 0, 0, 'S', 0);
    $pdf->cell(48, 4, $row['nombre_dire'], 'B', 0, 'C', 0);
    $pdf->cell(10, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(23, 4, 'DEPARTAMENTO: ', 0, 0, 'S', 0);
    $pdf->cell(45, 4, $row['nombre_dpto'], 'B', 1, 'C', 0);
    $pdf->Ln(6);
    $pdf->SetX($xInicio);
    $pdf->cell(60, 4, 'SUPERVISOR INMEDIATO DEL DEPARTAMENTO: ', 0, 0, 'S', 0);
    $pdf->cell(55, 4, $row['supervisor_dpto'], 'B', 1, 'C', 0);

    // Segunda Sección
    $pdf->Ln(6);
    // ****************************
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0);
    $pdf->SetX($xInicio);
    // ****************************
    $pdf->cell(40, 4, 'RESPONSABLE(S) DEL EQUIPO: ', 0, 0, 'S', 0);
    $pdf->cell(40, 4, $row['responsable'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(30, 4, 'NOMBRE DEL EQUIPO: ', 0, 0, 'S', 0);
    $pdf->cell(50, 4, $row['nombre_equipo'], 'B', 1, 'C', 0);

    // Tercera Sección (Especifícaciones)
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0);
    $xInicio = 23; // Coordenada X de inicio del recuadro
    $yInicio = 70; // Coordenada Y de inicio del recuadro
    $anchoRecuadro = 170; // Ancho del recuadro
    $altoRecuadro = 72; // Alto del recuadro
    $pdf->Rect($xInicio, $yInicio, $anchoRecuadro, $altoRecuadro); // Dibuja el recuadro
    $pdf->SetXY($xInicio, $yInicio); // Establece la posición inicial para comenzar a escribir las celdas
    $pdf->Ln(4);
    $pdf->SetX($xInicio);


    // ****************************
    $pdf->cell(28, 4, 'Nro BIEN NACIONAL: ', 0, 0, 'S', 0);
    $pdf->cell(35, 4, $row['BN_equipo'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(15, 4, 'SERIAL: ', 0, 0, 'S', 0);
    $pdf->cell(52, 4, $row['serial_equipo'], 'B', 1, 'C', 0);
    $pdf->Ln(6);
    $pdf->SetX($xInicio);
    $pdf->cell(23, 4, 'TIPO DE EQUIPO: ', 0, 0, 'S', 0);
    $pdf->cell(40, 4, $row['tipo_de_equipo'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(26, 4, 'TIPO DE WINDOWS: ', 0, 0, 'S', 0);
    $pdf->cell(41, 4, $row['windows_ver'], 'B', 1, 'C', 0);
    $pdf->Ln(6);
    $pdf->SetX($xInicio);
    $pdf->cell(21, 4, 'PROCESADOR: ', 0, 0, 'S', 0);
    $pdf->cell(42, 4, $row['cpu_modelo'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(23, 4, 'VELOCIDAD GHz: ', 0, 0, 'S', 0);
    $pdf->cell(44, 4, $row['cpu_velocidad'], 'B', 1, 'C', 0);
    $pdf->Ln(6);
    $pdf->SetX($xInicio);
    $pdf->cell(21, 4, 'DIRECCIÓN IP: ', 0, 0, 'S', 0);
    $pdf->cell(42, 4, $row['ip'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(23, 4, 'DIRECCIÓN MAC: ', 0, 0, 'S', 0);
    $pdf->cell(44, 4, $row['mac'], 'B', 1, 'C', 0);
    $pdf->Ln(6);
    $pdf->SetX($xInicio);
    $pdf->cell(38, 4, 'CAPACIDAD EN DISCO DURO: ', 0, 0, 'S', 0);
    $pdf->cell(25, 4, $row['disco_duro_cap'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(18, 4, 'MARCA D.D.: ', 0, 0, 'S', 0);
    $pdf->cell(22, 4, $row['disco_duro_marca'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(15, 4, 'SERIAL: ', 0, 0, 'S', 0);
    $pdf->cell(35, 4, $row['disco_duro_serial'], 'B', 1, 'C', 0);
    $pdf->Ln(6);
    $pdf->SetX($xInicio);
    $pdf->cell(38, 4, 'GB DE MEMORIA: ', 0, 0, 'S', 0);
    $pdf->cell(25, 4, $row['ram_velocidad'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(23, 4, 'CUANTAS TIENE: ', 0, 0, 'S', 0);
    $pdf->cell(17, 4, $row['ram'], 'B', 0, 'C', 0);
    $pdf->Ln(9);
    $pdf->SetX($xInicio);
    $pdf->cell(38, 4, 'CONECTADO A LA RED: ', 0, 0, 'S', 0);
    $pdf->cell(25, 4, $row['conect_red'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(25, 4, 'TIENE INTERNET: ', 0, 0, 'S', 0);
    $pdf->cell(15, 4, $row['internet'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(23, 4, 'TIPO CONEXION: ', 0, 0, 'S', 0);
    $pdf->cell(27, 4, $row['tipo_conexion'], 'B', 1, 'C', 0);


    // LINEA DE SEPARACION

    // ****************************
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0);
    $xInicio = 23; // Coordenada X de inicio del recuadro
    $yInicio = 145; // Coordenada Y de inicio del recuadro
    $anchoRecuadro = 170; // Ancho del recuadro
    $altoRecuadro = 20; // Alto del recuadro
    $pdf->Rect($xInicio, $yInicio, $anchoRecuadro, $altoRecuadro); // Dibuja el recuadro
    $pdf->SetXY($xInicio, $yInicio); // Establece la posición inicial para comenzar a escribir las celdas
    $pdf->Ln(4);
    $pdf->SetX($xInicio);
    // ****************************
    $pdf->cell(13, 4, 'MOUSE: ', 0, 0, 'S', 0);
    $pdf->cell(16, 4, $row['mouse'], 'B', 0, 'C', 0);
    $pdf->cell(6, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(13, 4, 'MARCA: ', 0, 0, 'S', 0);
    $pdf->cell(15, 4, $row['mouse_marca'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(16, 4, 'CONEXION: ', 0, 0, 'S', 0);
    $pdf->cell(9, 4, $row['mouse_conexion'], 'B', 0, 'C', 0);
    $pdf->cell(6, 4, '', 0, 1, 'C', 0); //ESPACIADO
    $pdf->Ln(4);
    $pdf->SetX($xInicio);
    $pdf->cell(35, 4, 'BIEN NACIONAL O SERIAL: ', 0, 0, 'S', 0);
    $pdf->cell(25, 4, $row['BN_serial_mouse'], 'B', 1, 'C', 0);
    // LINEA DE SEPARACION
    // ****************************
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0);
    $xInicio = 23; // Coordenada X de inicio del recuadro
    $yInicio = 168; // Coordenada Y de inicio del recuadro
    $anchoRecuadro = 170; // Ancho del recuadro
    $altoRecuadro = 20; // Alto del recuadro
    $pdf->Rect($xInicio, $yInicio, $anchoRecuadro, $altoRecuadro); // Dibuja el recuadro
    $pdf->SetXY($xInicio, $yInicio); // Establece la posición inicial para comenzar a escribir las celdas
    $pdf->Ln(4);
    $pdf->SetX($xInicio);
    // ****************************
    $pdf->cell(15, 4, 'MONITOR: ', 0, 0, 'S', 0);
    $pdf->cell(14, 4, $row['monitor'], 'B', 0, 'C', 0);
    $pdf->cell(6, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(13,4, 'MARCA: ',0, 0,'S',0);
    $pdf->cell(15,4, $row['monitor_marca'], 'B', 0,'C',0);
    $pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
    $pdf->cell(16, 4, 'CONEXION: ', 0, 0, 'S', 0);
    $pdf->cell(9, 4, $row['monitor_conexion'], 'B', 0, 'C', 0);
    $pdf->cell(6, 4, '', 0, 1, 'C', 0); //ESPACIADO
    $pdf->Ln(4);
    $pdf->SetX($xInicio);
    $pdf->cell(35, 4, 'BIEN NACIONAL O SERIAL: ', 0, 0, 'S', 0);
    $pdf->cell(25, 4, $row['BN_serial_monitor'], 'B', 1, 'C', 0);
    // LINEA DE SEPARACION
    // ****************************
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0);
    $xInicio = 23; // Coordenada X de inicio del recuadro
    $yInicio = 191; // Coordenada Y de inicio del recuadro
    $anchoRecuadro = 170; // Ancho del recuadro
    $altoRecuadro = 10; // Alto del recuadro
    $pdf->Rect($xInicio, $yInicio, $anchoRecuadro, $altoRecuadro); // Dibuja el recuadro
    $pdf->SetXY($xInicio, $yInicio); // Establece la posición inicial para comenzar a escribir las celdas
    $pdf->Ln(4);
    $pdf->SetX($xInicio);
    // ****************************
    $pdf->cell(19, 4, 'REGULADOR: ', 0, 0, 'S', 0);
    $pdf->cell(10, 4, $row['regulador'], 'B', 0, 'C', 0);
    $pdf->cell(6, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(13, 4, 'MARCA: ', 0, 0, 'S', 0);
    $pdf->cell(15, 4, $row['regulador_marca'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(35, 4, 'BIEN NACIONAL O SERIAL: ', 0, 0, 'S', 0);
    $pdf->cell(25, 4, $row['BN_serial_regulador'], 'B', 1, 'C', 0);
    // ****************************
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0);
    $xInicio = 23; // Coordenada X de inicio del recuadro
    $yInicio = 204; // Coordenada Y de inicio del recuadro
    $anchoRecuadro = 170; // Ancho del recuadro
    $altoRecuadro = 10; // Alto del recuadro
    $pdf->Rect($xInicio, $yInicio, $anchoRecuadro, $altoRecuadro); // Dibuja el recuadro
    $pdf->SetXY($xInicio, $yInicio); // Establece la posición inicial para comenzar a escribir las celdas
    $pdf->Ln(4);
    $pdf->SetX($xInicio);
    // ****************************
    $pdf->cell(15, 4, 'TECLADO: ', 0, 0, 'S', 0);
    $pdf->cell(14, 4, $row['teclado'], 'B', 0, 'C', 0);
    $pdf->cell(6, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(13, 4, 'MARCA: ', 0, 0, 'S', 0);
    $pdf->cell(15, 4, $row['teclado_marca'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(16, 4, 'CONEXION: ', 0, 0, 'S', 0);
    $pdf->cell(9, 4, $row['teclado_conexion'], 'B', 0, 'C', 0);
    $pdf->cell(6, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(35, 4, 'BIEN NACIONAL O SERIAL: ', 0, 0, 'S', 0);
    $pdf->cell(25, 4, $row['BN_serial_teclado'], 'B', 1, 'C', 0);
    // ****************************
    $pdf->SetDrawColor(0, 0, 0);
    $pdf->SetLineWidth(0);
    $xInicio = 23; // Coordenada X de inicio del recuadro
    $yInicio = 217; // Coordenada Y de inicio del recuadro
    $anchoRecuadro = 170; // Ancho del recuadro
    $altoRecuadro = 20; // Alto del recuadro
    $pdf->Rect($xInicio, $yInicio, $anchoRecuadro, $altoRecuadro); // Dibuja el recuadro
    $pdf->SetXY($xInicio, $yInicio); // Establece la posición inicial para comenzar a escribir las celdas
    $pdf->Ln(4);
    $pdf->SetX($xInicio);
    // ****************************
    $pdf->cell(15, 4, 'ESCANER: ', 0, 0, 'S', 0);
    $pdf->cell(14, 4, $row['escaner'], 'B', 0, 'C', 0);
    $pdf->cell(6, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(13, 4, 'MODELO: ', 0, 0, 'S', 0);
    $pdf->cell(15, 4, $row['escaner_modelo'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(16, 4, 'MARCA: ', 0, 0, 'S', 0);
    $pdf->cell(15, 4, $row['escaner_marca'], 'B', 0, 'C', 0);
    $pdf->cell(5, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(16, 4, 'OPERATIVA: ', 0, 0, 'S', 0);
    $pdf->cell(15, 4, $row['escaner_operativo'], 'B', 1, 'C', 0);

    $pdf->Ln(4);
    $pdf->SetX($xInicio);
    $pdf->cell(16, 4, 'CONEXION: ', 0, 0, 'S', 0);
    $pdf->cell(9, 4, $row['escaner_conexion'], 'B', 0, 'C', 0);
    $pdf->cell(4, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(22, 4, 'TONER O TINTA: ', 0, 0, 'S', 0);
    $pdf->cell(15, 4, $row['toner_tinta'], 'B', 0, 'C', 0);
    $pdf->cell(4, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(13, 4, 'EN RED: ', 0, 0, 'S', 0);
    $pdf->cell(10, 4, $row['conectada_red'], 'B', 0, 'C', 0);
    $pdf->cell(4, 4, '', 0, 0, 'C', 0); //ESPACIADO
    $pdf->cell(35, 4, 'BIEN NACIONAL O SERIAL: ', 0, 0, 'S', 0);
    $pdf->cell(25, 4, $row['BN_serial_escaner'], 'B', 1, 'C', 0);

    $pdf->Ln(7);
    $pdf->SetX(25);
    $pdf->cell(15, 4, 'Comentario', 0, 1, 'L', 0);
    $pdf->SetX(25);
    $pdf->multicell(160, 6, $row['comentario'], 1, 'J', false);
}
$_SESSION['nombreSQL']='';
$pdf->Output('I', 'Reporte Equipo.pdf', true);
?>