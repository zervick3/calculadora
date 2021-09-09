<?php
require('pdf/fpdf.php');
ob_start();
require('calculos/standar.php');
$html = ob_get_clean();
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('pdf/metaldryll.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(100,10,'Lista de Materiales ',0,0,'C');
    $this->SetFont('Arial','B',10);
    $this->Ln(5);
    $this->Cell(200,10,'Tienda chimbote  ',0,0,'C');
    $this->Ln(5);
    $this->Cell(200,10,'994322867 | 959699980  ',0,0,'C');
    $this->Ln(5);
    $this->Cell(200,10,'Tienda Nuevo chimbote  ',0,0,'C');
    $this->Ln(5);
    $this->Cell(200,10,'902281120 | 945094138  ',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,utf8_decode($html));
$pdf->Output();
?>