<?php
// NOTAS IMPORTANTES


// AddPage(orientacion[PORTRAIT, LANDSCAPE], tamaño[A3, A4, A5, LETTER, LEGAL], rotacion);
//SetFont(tipo[COURIER, HELVETICA, ARIAL, TIMES, SYMBOL, ZAPDINGBATS], estilo[normal, B, I, U], tamaño);
// Cell(ancho, alto, texto, bordes, ?, alineacion, rellenar, link);
//Write(alto, texto, link);
// OutPut(destino[I, D, F, S], nombre_archivo, utf8);

//Image(ruta, posicionX, posicionY, alto, ancho, tipo, link);

//PIE DE PÁGINA
//PageNo();
// AliasNbPages();
// "numero de pagina 1 de {nb}"

// COLOR TEXTO
// SetTextColor(RGB);


// lineas
//SetDrawColor(00,00,00);
//Line(15, 100, 200, 100); LINEAS
//SetLineWidth(1);

//con $fpdf->GetX() o $fpdf->GetY() Toma la posicion del anterior
// Line(50, $fpdf->GetY(), 50, $fpdf->GetY())


require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    $this->SetFont('Times','B',20);
    $this->Image('../assets/logos/DGSA/Imagen1.png',10,10,40); //SE COLOCA LA IMAGEN Y LUEGO X, Y, TAMAÑO
    //Mueve la línea a un lugar que coloques en el eje X y Y 
    $this->SetXY(50,20);
    $this->cell(100, 8, 'Reporte', 0, 1, 'C', 0);
    $this->Ln(30);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
// ATRIBUTOS QUE NO USO



// for($i=1;$i<=5;$i++) GENERAR BUCLES DE INFORMACIÓN
    // $pdf->Cell(50,10, utf8_decode('Imprimiendo línea número ').$i,0,1);
    //cell(largo, alto, contenido, borde?, salto de línea, 'centrado...', color de fondo)
// Creación del objeto de la clase heredada
//$pdf->Ln(50); //CREA UN ESPACIO EN VERTICAL, BAJANDO TODO

// $pdf->SetFillColor(255,255,255); Color de fondo
// $pdf->SetDrawColor(255,255,255); Color de líneas





$pdf = new PDF('P', 'mm', 'letter', true);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetMargins(10,10,10); //Margenes
$pdf->SetAutoPageBreak(true, 20);//Salto de pagina automático


$pdf->SetX(25);
$pdf->SetFont('Arial','B',14);
$pdf->cell(10,8, 'Id', 'B', 0,'C',0);
$pdf->cell(40,8, 'Nombre', 'B', 0,'C',0);
$pdf->cell(30,8, 'Apellido', 'B', 0,'C',0);
$pdf->cell(35,8, 'Usuario', 'B', 0,'C',0);
$pdf->cell(50,8, 'Telefono', 'B', 1,'C',0);

$pdf->SetFillColor(233,229,235);
$pdf->SetDrawColor(77,35,194);

include("../php/abrir_conexion.php");

$resultados = "SELECT * FROM $tabla_db1";
$final= mysqli_query($conexion, $resultados);


while($row=$final->fetch_assoc()){
    $pdf->SetX(25);
    $pdf->cell(10,8, $row['id_usuario'], 'I', 0,'C',0);
    $pdf->cell(40,8, $row['nombre'], 'I', 0,'C',0);
    $pdf->cell(30,8, $row['apellido'], 'I', 0,'C',0);
    $pdf->cell(35,8, $row['nombre_usuario'], 'I', 0,'C',0);
    $pdf->cell(50,8, $row['telefono'], 'I', 1,'C',0);
}

$pdf->Output();
?>