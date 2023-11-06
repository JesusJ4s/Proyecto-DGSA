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
// Cell(ancho , alto,texto,borde,salto(0/1),alineacion,rellenar, link)
//AddPage(orientacion[PORTRAIT, LANDSCAPE], tamño[A3.A4.A5.LETTER,LEGAL],rotacion)
//Image(ruta, poscisionx,pocisiony,alto,ancho,tipo,link)
//SetMargins(10,30,20,20) luego de addpage

    function Header()
    {
        $this->SetFont('Arial', 'B', 12);
        $this->Ln(4);
        
        $this->SetX(15);
        $this->Image('../assets/logos/DGSA/Imagen1.png', 230, 15, 25);
        $this->Cell(90, 8, 'Departamento de Correspondencia', 0, 1);
        $this->SetX(15);
        $this->Cell(90, 8, 'Dirección General', 0, 1);
        // $this->SetY(40);
        $this->Ln(8);
        $this->SetX(215);
        $this->Cell(90, 12, 'Reporte de Correspondencia', 0, 1);
        $this->SetY(45);
        $this->SetX(144);
        // $this->SetFont('Arial','',8);
// $this->Cell(40, 8, '3º Escuadrón de la Muralla María');

        $this->Ln(20);
        $this->SetX(15);
        $this->SetFillColor(25, 132, 151);

        $this->SetFont('Arial', 'B', 10);
        $this->Cell(22, 12, 'N° de Oficio', 1, 0, 'C', 1);
        // $this->Cell(25, 12, 'Fecha', 1, 0, 'C', 1);
        $this->Cell(40, 12, 'Procedencia', 1, 0, 'C', 1);
        $this->Cell(80, 12, 'Asunto', 1, 0, 'C', 1);
        $this->Cell(25, 12, 'N° de Adm', 1, 0, 'C', 1);
        $this->Cell(34, 12, 'Fecha', 1, 0, 'C', 1);
        $this->Cell(47, 12, 'Division', 1, 1, 'C', 1);

        $this->SetFont('Arial', '', 10);

    }

    function Footer()
    {
        $UsuarioCreador = $_SESSION['nombre'];

        $this->SetFont('helvetica', 'B', 8);
        $this->SetY(-15);
        $this->Cell(80, 5, 'Página ' . $this->PageNo() . ' / {nb}', 0, 0, 'L');
        $this->Cell(100, 5, "Impreso por: " . $UsuarioCreador, 0, 0, 'C');
        $this->Cell(78, 5, date('d/m/Y | g:i:a'), 00, 1, 'R');
        $this->Line(10, 287, 200, 287);
        $this->Cell(0, 5, "Departamento de Informática © Todos los derechos reservados.", 0, 0, "C");
    }


}



$pdf = new PDF('L', 'mm', 'letter', true);
$pdf->AliasNbPages();


$FechaInicial = $_SESSION['fechCorr1'];
$FechaFinal = $_SESSION['fechCorr2'];

if (empty($FechaInicial) && !empty($FechaFinal)) {
    $FechaInicial="2000-01-01";
}else if (!empty($FechaInicial) && !empty($FechaFinal)) {
    $FechaInicial = $_SESSION['fechCorr1'];
    $FechaFinal = $_SESSION['fechCorr2'];
}
else if (empty($FechaInicial) && empty($FechaFinal)) {
    $FechaInicial = "";
    $FechaFinal = "";
}

include("../php/abrir_conexion.php");
$resultados = "SELECT * FROM $tabla_db10 co INNER JOIN $tabla_db11 em ON co.procedencia = em.id_empresas INNER JOIN $tabla_db5 dr ON co.oficina_destino = dr.id_direcciones WHERE fecha_llegada BETWEEN '$FechaInicial' AND '$FechaFinal' ORDER BY id_nro_admision DESC";
$final = mysqli_query($conexion, $resultados);

$pdf->AddPage();
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(15);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);

while ($row = $final->fetch_assoc()) {

    $pdf->SetX(15); //posicionamos en x

    //-------------INTERCALAMOS COLOR LOS PARES DE UN COLOR Y LOS QUE NO DE OTRO

    if ($i % 2 == 0) {
        $pdf->SetFillColor(232, 232, 232);
        $pdf->SetDrawColor(65, 61, 61);
    } else {
        $pdf->SetFillColor(255, 255, 255);
        $pdf->SetDrawColor(65, 61, 61);
    }
    //--------------------------------TERMINAMOS DE PINTAR----------------------------

    //                          DATOS
    $pdf->Cell(22, 8, $row['nro_oficio'] + 1, 'B', 0, 'C', 1);
    // $pdf->Cell(25, 8, $row['fecha_sal_empresa'], 'B', 0, 'C', 1);
    $pdf->Cell(40, 8, $row['nombre_empresa'], 'B', 0, 'C', 1);
    $pdf->Cell(80, 8, $row['asunto'], 'B', 0, 'C', 1);
    $pdf->Cell(25, 8, $row['id_nro_admision'], 'B', 0, 'C', 1);
    $pdf->Cell(34, 8, $row['fecha_llegada'], 'B', 0, 'C', 1);
    switch ($row['oficina_destino']) {
        case 1:
            $ubi = "Dir. General";
            break;
        case 2:
            $ubi = "Dir. Ing. Sanitaria";
            break;
        case 3:
            $ubi = "Dir. Sal. Radiologica";
            break;
        case 4:
            $ubi = "Dir. Control Vec.";
            break;
        case 5:
            $ubi = "Dir. Epid. Ambiental";
            break;
        default:
            $ubi = "Sin datos";
            break;
    }
    $pdf->Cell(47, 8, $ubi, 'B', 1, 'C', 1);
    $pdf->Ln(0.5);

}
$_SESSION['fechCorr1'] = '';
$_SESSION['fechCorr2'] = '';
$pdf->Output();
?>