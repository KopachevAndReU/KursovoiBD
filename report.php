<?php
require_once("fpdf/fpdf.php");
include 'config/connect.php';



$h1Doc = array (
    'RABOTAET ',
    'Филиал Госэнергогазнадзор',
    'по Гродненской области',
    'Малиновскому А.В.'
);
$h2Doc = array (
    'Отчет о продажах',
    'Цветочный магазин'
);

$pdf = new FPDF();
$pdf->SetFont('Times','',14);
$pdf->AddPage();

for ($i=0; $i<4;$i++){
    $pdf->Cell(0,5,$h1Doc[$i],0,1);
}

for ($i=0;$i<2;$i++) {
    $pdf->Cell(0,5,$h2Doc[$i],0,1);
}

$pdf->Ln(10);
$pdf->Output('report.pdf','I');
?>