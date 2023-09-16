<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->SetFont('Arial','B',10);
    $this->Image('../assets/logos/DGSA/Imagen1.png',10,2,18); //SE COLOCA LA IMAGEN Y LUEGO X, Y, TAMAÑO
    //Mueve la línea a un lugar que coloques en el eje X y Y 
    $this->SetXY(55,10);
    $this->cell(100, 8,'CORDINACION DE INFORMÁTICA, COMUNICACIÓN Y TECNOLOGÍA', 0, 1, 'C', 0);
    $this->Ln(6);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',5);
    //Nombre de la Ingeniera
    $this->Cell(50,2,'COORDINADOR: DENNIS QUIÑONES',0,1,'S');
    $this->Cell(50,2,'Año 2023',0,1,'S');
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$pdf = new PDF('P', 'mm', 'letter', true);
$pdf->AliasNbPages();

// $pdf->SetAutoPageBreak(true, 20);//Salto de pagina automático

// CONSULTA SQL PARA LLENAR LOS ESPACIOS CON LOS DATOS DE LA BASE DE DATOS
include("../php/abrir_conexion.php");

$Departamento = $_POST['departamento_select'];

$resultados = "SELECT * FROM $tabla_db6 i INNER JOIN $tabla_db1 u ON i.ing_encar_inv_id = u.id_usuario INNER JOIN $tabla_db5 d ON i.direccion_inv_id = d.id_direcciones INNER JOIN $tabla_db3 e ON i.dpto_inv_id = e.id_departamento WHERE dpto_inv_id = '$Departamento'";
$final= mysqli_query($conexion, $resultados);
// INICIANDO UN WHILE QUE LLENE LAS CASILLAS HASTA COMPLETAR LOS REGISTROS DE LA BASE DE DATOS
while($row=$final->fetch_assoc()){

    $pdf->AddPage();
    $pdf->SetMargins(10,10,10); //Margenes



$pdf->SetX(23);
$pdf->SetFont('Arial','B',6);
$pdf->cell(35,4, 'ELABORADO POR EL TÉCNICO: ', 0, 0,'S',0);
$pdf->cell(35,4, $row['nombre'], 'B', 0,'C',0);

$pdf->cell(23,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(30,4, 'FECHA DE ELABORACION: ', 0, 0,'S',0);
$pdf->cell(25,4, $row['fecha_inventario'], 'B', 1,'C',0);

$pdf->Ln(6);
$pdf->SetX(23);
$pdf->SetLineWidth(1);
$pdf->SetDrawColor(03,135,239);
$pdf->Line(23, 34, 187, 34);
// ****************************
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(0);

// ****************************
$pdf->SetFont('Arial','B',7);
$pdf->Ln(6);
$pdf->SetX(23);

// Supervisores
$pdf->cell(28,4, 'DIRECCION DE LINEA ',0, 0,'S',0);
$pdf->cell(48,4, $row['nombre_dire'], 'B', 0,'C',0);
$pdf->cell(10,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(23,4, 'DEPARTAMENTO ', 0, 0,'S',0);
$pdf->cell(45,4, $row['nombre_dpto'], 'B', 1,'C',0);
$pdf->Ln(6);
$pdf->SetX(23);
$pdf->cell(60,4, 'SUPERVISOR INMEDIATO DEL DEPARTAMENTO ', 0, 0,'S',0);
$pdf->cell(55,4, $row['supervisor_dpto'], 'B', 1,'C',0);


// Segunda Sección
$pdf->Ln(6);
$pdf->SetX(23);
$pdf->SetLineWidth(1);
$pdf->SetDrawColor(03,135,239);
$pdf->Line(23, 60, 187, 60);
// ****************************
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(0);
$pdf->Ln(6);
$pdf->SetX(23);
// ****************************
$pdf->cell(40,4, 'RESPONSABLE(S) DEL EQUIPO: ',0, 0,'S',0);
$pdf->cell(40,4, $row['responsable'], 'B', 0,'C',0);
$pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(30,4, 'NOMBRE DEL EQUIPO: ',0, 0,'S',0);
$pdf->cell(50,4, $row['nombre_equipo'], 'B', 1,'C',0);

// Tercera Sección (Especifícaciones)
$pdf->Ln(6);
$pdf->SetX(23);
$pdf->SetLineWidth(1);
$pdf->SetDrawColor(03,135,239);
$pdf->Line(23, 75, 187, 75);
// ****************************
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(0);
$pdf->Ln(6);
$pdf->SetX(23);
// ****************************
$pdf->cell(28,4, 'Nro BIEN NACIONAL: ',0, 0,'S',0);
$pdf->cell(35,4, $row['BN_equipo'], 'B', 0,'C',0);
$pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(15,4, 'SERIAL: ',0, 0,'S',0);
$pdf->cell(52,4, $row['serial_equipo'], 'B', 1,'C',0);
$pdf->Ln(6);
$pdf->SetX(23);
$pdf->cell(23,4, 'TIPO DE EQUIPO: ',0, 0,'S',0);
$pdf->cell(40,4, $row['tipo_de_equipo'], 'B', 0,'C',0);
$pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(26,4, 'TIPO DE WINDOWS: ',0, 0,'S',0);
$pdf->cell(41,4, $row['windows_ver'], 'B', 1,'C',0);
$pdf->Ln(8);
$pdf->SetX(23);
$pdf->cell(21,2, 'PROCESADOR: ',0, 0,'S',0);
$pdf->cell(42,2, $row['cpu_modelo'], 'B', 0,'C',0);
$pdf->cell(5,2, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(23,2, 'VELOCIDAD GHz: ',0, 0,'S',0);
$pdf->cell(44,2, $row['cpu_velocidad'], 'B', 1,'C',0);
$pdf->Ln(5);
$pdf->SetX(23);
$pdf->cell(21,2, 'DIRECCIÓN IP: ',0, 0,'S',0);
$pdf->cell(42,2, $row['ip'], 'B', 0,'C',0);
$pdf->cell(5,2, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(23,2, 'DIRECCIÓN MAC: ',0, 0,'S',0);
$pdf->cell(44,2, $row['mac'], 'B', 1,'C',0);
$pdf->Ln(8);
$pdf->SetX(23);
$pdf->cell(38,4, 'CAPACIDAD EN DISCO DURO: ',0, 0,'S',0);
$pdf->cell(25,4, $row['disco_duro_cap'], 'B', 0,'C',0);
$pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(18,4, 'MARCA D.D.: ',0, 0,'S',0);
$pdf->cell(22,4, $row['disco_duro_marca'], 'B', 0,'C',0);
$pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(15,4, 'SERIAL: ',0, 0,'S',0);
$pdf->cell(35,4, $row['disco_duro_serial'], 'B', 1,'C',0);
$pdf->Ln(8);
$pdf->SetX(23);
$pdf->cell(38,4, 'GB DE MEMORIA: ',0, 0,'S',0);
$pdf->cell(25,4, $row['ram_velocidad'], 'B', 0,'C',0);
$pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(23,4, 'CUANTAS TIENE: ',0, 0,'S',0);
$pdf->cell(17,4, $row['ram'], 'B', 0,'C',0);
$pdf->Ln(8);
$pdf->SetX(23);
$pdf->cell(38,4, 'CONECTADO A LA RED: ',0, 0,'S',0);
$pdf->cell(25,4, $row['conect_red'], 'B', 0,'C',0);
$pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(25,4, 'TIENE INTERNET: ',0, 0,'S',0);
$pdf->cell(15,4, $row['internet'], 'B', 0,'C',0);
$pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(23,4, 'TIPO CONEXION: ',0, 0,'S',0);
$pdf->cell(27,4, $row['tipo_conexion'], 'B', 1,'C',0);
// LINEA DE SEPARACION
$pdf->Ln(6);
$pdf->SetX(23);
$pdf->SetLineWidth(1);
$pdf->SetDrawColor(03,135,239);
$pdf->Line(23, 149, 187, 149);
// ****************************
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(0);
$pdf->Ln(4);
$pdf->SetX(23);
// ****************************
$pdf->cell(13,4, 'MOUSE: ',0, 0,'S',0);
$pdf->cell(16,4, $row['mouse'], 'B', 0,'C',0);
$pdf->cell(6,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(13,4, 'MARCA: ',0, 0,'S',0);
$pdf->cell(15,4, $row['mouse_marca'], 'B', 0,'C',0);
$pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(16,4, 'CONEXION: ',0, 0,'S',0);
$pdf->cell(9,4, $row['mouse_conexion'], 'B', 0,'C',0);
$pdf->cell(6,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(35,4, 'BIEN NACIONAL O SERIAL: ',0, 0,'S',0);
$pdf->cell(25,4, $row['BN_serial_mouse'], 'B', 1,'C',0);
// LINEA DE SEPARACION
$pdf->Ln(6);
$pdf->SetX(23);
$pdf->SetLineWidth(0);
$pdf->SetDrawColor(00,00,00);
$pdf->Line(30, 163, 180, 163);
$pdf->Line(30, 165, 180, 165);

// ****************************
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(0);
$pdf->Ln(4);
$pdf->SetX(23);
// ****************************
$pdf->cell(15,4, 'MONITOR: ',0, 0,'S',0);
$pdf->cell(14,4, $row['monitor'], 'B', 0,'C',0);
$pdf->cell(6,4, '', 0, 0,'C',0); //ESPACIADO
// $pdf->cell(13,4, 'MARCA: ',0, 0,'S',0);
// $pdf->cell(15,4, '', 'B', 0,'C',0);
// $pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(16,4, 'CONEXION: ',0, 0,'S',0);
$pdf->cell(9,4, $row['monitor_conexion'], 'B', 0,'C',0);
$pdf->cell(6,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(35,4, 'BIEN NACIONAL O SERIAL: ',0, 0,'S',0);
$pdf->cell(25,4, $row['BN_serial_monitor'], 'B', 1,'C',0);
// LINEA DE SEPARACION
$pdf->Ln(6);
$pdf->SetX(23);
$pdf->SetLineWidth(0);
$pdf->SetDrawColor(00,00,00);
$pdf->Line(30, 177, 180, 177);
$pdf->Line(30, 179, 180, 179);

// ****************************
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(0);
$pdf->Ln(4);
$pdf->SetX(23);
// ****************************
$pdf->cell(19,4, 'REGULADOR: ',0, 0,'S',0);
$pdf->cell(10,4, $row['regulador'], 'B', 0,'C',0);
$pdf->cell(6,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(13,4, 'MARCA: ',0, 0,'S',0);
$pdf->cell(15,4, $row['regulador_marca'], 'B', 0,'C',0);
$pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(35,4, 'BIEN NACIONAL O SERIAL: ',0, 0,'S',0);
$pdf->cell(25,4, $row['BN_serial_regulador'], 'B', 1,'C',0);
// LINEA DE SEPARACION
$pdf->Ln(6);
$pdf->SetX(23);
$pdf->SetLineWidth(0);
$pdf->SetDrawColor(00,00,00);
$pdf->Line(30, 191, 180, 191);
$pdf->Line(30, 193, 180, 193);
// ****************************
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(0);
$pdf->Ln(4);
$pdf->SetX(23);
// ****************************
$pdf->cell(15,4, 'TECLADO: ',0, 0,'S',0);
$pdf->cell(14,4, $row['teclado'], 'B', 0,'C',0);
$pdf->cell(6,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(13,4, 'MARCA: ',0, 0,'S',0);
$pdf->cell(15,4, $row['teclado_marca'], 'B', 0,'C',0);
$pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(16,4, 'CONEXION: ',0, 0,'S',0);
$pdf->cell(9,4, $row['teclado_conexion'], 'B', 0,'C',0);
$pdf->cell(6,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(35,4, 'BIEN NACIONAL O SERIAL: ',0, 0,'S',0);
$pdf->cell(25,4, $row['BN_serial_teclado'], 'B', 1,'C',0);
// LINEA DE SEPARACION
$pdf->Ln(6);
$pdf->SetX(23);
$pdf->SetLineWidth(0);
$pdf->SetDrawColor(00,00,00);
$pdf->Line(30, 205, 180, 205);
$pdf->Line(30, 207, 180, 207);
// ****************************
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(0);
$pdf->Ln(4);
$pdf->SetX(23);
// ****************************
$pdf->cell(15,4, 'ESCANER: ',0, 0,'S',0);
$pdf->cell(14,4, $row['escaner'], 'B', 0,'C',0);
$pdf->cell(6,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(13,4, 'MODELO: ',0, 0,'S',0);
$pdf->cell(15,4, $row['escaner_modelo'], 'B', 0,'C',0);
$pdf->cell(5,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(16,4, 'CONEXION: ',0, 0,'S',0);
$pdf->cell(9,4, $row['escaner_conexion'], 'B', 0,'C',0);
$pdf->cell(6,4, '', 0, 0,'C',0); //ESPACIADO
$pdf->cell(35,4, 'BIEN NACIONAL O SERIAL: ',0, 0,'S',0);
$pdf->cell(25,4, $row['BN_serial_escaner'], 'B', 1,'C',0);
$pdf->Ln(6);
$pdf->SetX(25);
$pdf->cell(15, 4, 'Comentario',0, 1, 'L',0);
$pdf->SetX(25);
$pdf->multicell(160, 6, $row['comentario'],1, 'J', false);
}




$pdf->Output('I', 'Reporte Departamento.pdf', true);
?>