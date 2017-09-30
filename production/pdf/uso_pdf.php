<?php require("./pdf/fpdf.php");
 ob_end_clean(); //    the buffer and never prints or returns anything.
 ob_start(); // it starts buffering

$pdf=new FPDF("P", "cm", "letter");
$pdf->addPage();
$pdf->setFont("Arial", "B", "12");
$pdf->cell(0,0,"TOP LEFT", 0, 1, "L");
$pdf->ln(10);
$pdf->cell(0,0,"TOP LEFT", 0, 1, "R");
$pdf->output();

   ob_end_flush(); // It's printed here, because ob_end_flush "prints" what's in

 ?>