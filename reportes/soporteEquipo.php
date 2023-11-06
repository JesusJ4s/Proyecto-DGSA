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

$ValorBuscar = $_SESSION['nombreEQ_Soport'];
$id_Sopor = $_SESSION['idEQ_Soport'];

include("../php/abrir_conexion.php");
$resultados = "SELECT * FROM $tabla_db8 so INNER JOIN $tabla_db8_2 ns ON so.estado = ns.id_estado_sop INNER JOIN $tabla_db1 us ON so.tecnico_soporte_id = us.id_usuario WHERE id_soporte = '$id_Sopor' AND nomb_equipo_soporte = '$ValorBuscar'";
$final = mysqli_query($conexion, $resultados);

$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(500);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);
$pdf->SetX(15);
$pdf->SetFillColor(156, 156, 156);
$pdf->SetDrawColor(0, 0, 0);
// Cell(ancho , alto,texto,borde(0/1),salto(0/1),alineacion(L,C,R),rellenar(0/1)

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(91, 6, 'Nombre del Equipo:', 1, 0, 'C', 1);
$pdf->Cell(91, 6, $ValorBuscar, 1, 1, 'C', 0);
// $pdf->Ln(14);


while ($row = $final->fetch_assoc()) {
    $pdf->SetX(15);
    $pdf->Cell(51, 6, 'Numero de Solicitud:', 1, 0, 'C', 1);
    $pdf->Cell(40, 6, $row['id_soporte'], 1, 1, 'C', 0);

    $pdf->SetX(15);
    $pdf->Cell(51, 6, 'Tipo de Uso:', 1, 0, 'C', 1);
    $pdf->Cell(40, 6, $row['uso_equipo'], 1, 0, 'C', 0);
    // 
    $pdf->Cell(51, 6, 'Nivel del Soporte:', 1, 0, 'C', 1);
    $pdf->Cell(40, 6, $row['nivel_soporte'], 1, 1, 'C', 0);
    // 
    $pdf->SetX(15);
    $pdf->Cell(51, 6, 'Fecha de la Solicitud:', 1, 0, 'C', 1);
    $pdf->Cell(40, 6, $row['fecha_soporte_solicitud'], 1, 0, 'C', 0);
    $pdf->Cell(51, 6, 'Estado del Soporte:', 1, 0, 'C', 1);
    $pdf->Cell(40, 6, $row['nombre_estado'], 1, 1, 'C', 0);
    // 
    $pdf->SetX(15);
    $pdf->Cell(51, 6, 'Fecha de Aceptación:', 1, 0, 'C', 1);
    $pdf->Cell(40, 6, $row['fecha_soporte_aceptacion'], 1, 0, 'C', 0);
    $pdf->Cell(51, 6, 'Técnico Encargado:', 1, 0, 'C', 1);
    $pdf->Cell(40, 6, $row['nombre'] . " " . $row['apellido'], 1, 1, 'C', 0);
    $pdf->Ln(6);
    // 
    $pdf->SetX(15);
    $pdf->Cell(182, 6, 'Descripción Solicitante:', 1, 1, 'C', 1);
    $pdf->SetX(15);
    $pdf->multicell(182, 6, $row['soporte_descripcion'], 1, "L", false);

    if ($row['fecha_soporte_aceptacion'] != '') {
        $pdf->Ln(6);






        if ($row['historial_soporte'] != '') {
            $pdf->SetX(15);
            $pdf->Cell(182, 6, 'Historial por falta de Componentes:', 1, 1, 'C', 1);

            $pdf->SetX(15);
            $descripcion = $row['historial_soporte'];
            $descripcion = str_replace("<br><br>", "\n--", $descripcion); // Reemplazar <br> por saltos de línea
            $pdf->multicell(182, 6, $descripcion, 1, 'L', false);

            $pdf->Ln(6);

            $pdf->SetX(15);
            $pdf->Cell(51, 6, 'Fecha de Culminación:', 1, 0, 'C', 1);
            $pdf->Cell(40, 6, $row['fecha_soporte_final'], 1, 1, 'C', 0);
            $pdf->SetX(15);
            $pdf->Cell(182, 6, 'Detalles de Culminación:', 1, 1, 'C', 1);
            $pdf->SetX(15);
            $pdf->multicell(182, 6, $row['comentario'], 1, 'L', false);

        }else {
            $pdf->SetX(15);
            $pdf->Cell(51, 6, 'Fecha de Culminación:', 1, 0, 'C', 1);
            $pdf->Cell(40, 6, $row['fecha_soporte_final'], 1, 1, 'C', 0);
            $pdf->SetX(15);
            $pdf->Cell(182, 6, 'Detalles de Culminación:', 1, 1, 'C', 1);
            $pdf->SetX(15);
            $pdf->multicell(182, 6, $row['comentario'], 1, 'L', false);
        }
    }


}
$_SESSION['nombreEQ_Soport'] = '';
$_SESSION['idEQ_Soport'] = '';

$pdf->Output('I', 'Reporte cambios.pdf', true);
?>