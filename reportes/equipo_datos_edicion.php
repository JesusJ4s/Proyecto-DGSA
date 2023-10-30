<?php
require('../fpdf/fpdf.php');
date_default_timezone_set('America/Caracas');
session_start();
ob_start();

class PDF extends FPDF
{

    // Cabecera de página
//Numeros de paginas
//SetTextColor(255,255,255);es RGB extraer colores con GIMP
//SetFillColor()
//SetDrawColor()
//Line(derecha-izquierda, arriba-abajo,ancho,arriba-abajo)
//Color line setDrawColor(61,174,233)
//GetX() || GetY() posiciones en cm
//Grosor SetLineWidth(1)
// SetFont(tipo{COURIER, HELVETICA,ARIAL,TIMES,SYMBOL, ZAPDINGBATS}, estilo[normal,B,I ,A], tamaño)
// Cell(ancho , alto,texto,borde(0/1),salto(0/1),alineacion(L,C,R),rellenar(0/1)
//AddPage(orientacion[PORTRAIT, LANDSCAPE], tamño[A3.A4.A5.LETTER,LEGAL],rotacion)
//Image(ruta, poscisionx,pocisiony,alto,ancho,tipo,link)
//SetMargins(10,30,20,20) luego de addpage

    function Header()
    {
        $this->Image('img/triangulosrecortados.png', -1, -1, 85);
        $this->Image('../assets/logos/DGSA/Imagen1.png', 150, 15, 25);

        $this->SetY(40);
        $this->SetX(125);
        $this->SetFont('Arial', 'B', 12);

        $this->SetTextColor(246, 130, 14);
        $this->Cell(50, 8, 'Dirección General de Salud Ambiental', 0, 1);
        $this->SetY(45);
        $this->SetX(145);
        $this->SetFont('Arial', '', 8);
        $this->Cell(40, 8, 'Departamento de Informática');
        $this->SetTextColor(30, 10, 32);
        $this->Ln(20);

    }

    function Footer()
    {
        $UsuarioCreador = $_SESSION['nombre'];

        $this->SetFont('helvetica', 'B', 8);
        $this->SetY(-15);
        $this->Cell(80, 5, 'Página ' . $this->PageNo() . ' / {nb}', 0, 0, 'L');
        $this->Cell(30, 5, "Impreso por: " . $UsuarioCreador, 0, 0, 'C');
        $this->Cell(80, 5, date('d/m/Y | g:i:a'), 00, 1, 'R');
        $this->Line(10, 287, 200, 287);
        $this->Cell(0, 5, "Departamento de Informática © Todos los derechos reservados.", 0, 0, "C");

    }


}
$pdf = new PDF('P', 'mm', 'letter', true);
$pdf->AliasNbPages();

// $ValorBuscar = "M1SSPC18";
$ValorBuscar = $_SESSION['nombreEQ'];

include("../php/abrir_conexion.php");
$resultados = "SELECT * FROM $tabla_db100 hi INNER JOIN $tabla_db6 eq ON hi.entidad_cambio = eq.nombre_equipo INNER JOIN $tabla_db1 us ON hi.id_usuario_cambio = us.id_usuario WHERE entidad_cambio = '$ValorBuscar' AND id_accion_cambio = 6";
$final = mysqli_query($conexion, $resultados);

$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(500);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);
$pdf->SetX(15);
$pdf->SetFillColor(33, 190, 222);
$pdf->SetDrawColor(255, 255, 255);
// Cell(ancho , alto,texto,borde(0/1),salto(0/1),alineacion(L,C,R),rellenar(0/1)

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(91, 12, 'Nombre del Equipo:', 1, 0, 'C', 1);
$pdf->Cell(91, 12, $ValorBuscar, 1, 1, 'C', 1);
// $pdf->Ln(14);
$pdf->SetX(15);
$pdf->Cell(182, 12, "Cambios hechos en el equipo: ", 1, 1, 'C', 1);

$pdf->Ln(10);

while ($row = $final->fetch_assoc()) {

    $pdf->SetFont('Arial', '', 10);
    $pdf->SetX(25);

    $descripcion = $row['descripcion_cambio'];
    $descripcion = str_replace("<br><br>", "\n--", $descripcion); // Reemplazar <br> por saltos de línea
    $pdf->SetDrawColor(0, 0, 0);

    $pdf->multicell(160, 6, $row['fecha_usuario_cambio'] . ": " . $descripcion, 1, 'J', false);
    $pdf->Ln(2);

}
$_SESSION['nombreEQ'] = '';

$pdf->Output('I', 'Reporte cambios.pdf', true);
?>