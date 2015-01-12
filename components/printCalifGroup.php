<?php
header("Content-Type: text/html;charset=utf-8");
include_once "Grupo.php";
include_once "Calificacion.php";
include_once "Horario.php";
require('../fpdf17/fpdf.php');

//$str = utf8_decode($str);
//$str = iconv('UTF-8', 'windows-1252', $str);
//hoja carta = 21.59 x 27.94 centimetros

$group = new Grupo();
$calif = new Calificacion();
$horar = new Horario();

$cls = $_GET['cls'];
$grp = $_GET['grp'];
$usr = $_GET['usr'];

$grupo = $horar->getGroupName($grp);
$materia = $horar->getClassName($cls);

$students = $group->getAlumnosOf($grp);
$n = count($students);

$pdf = new FPDF('L', 'mm', 'letter');
$pdf->AddPage();

$pdf->Image('../images/logo.png', 10, 8, 33);

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(260,15, utf8_decode($grupo), 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(260,15, utf8_decode($materia), 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 10,"#", 1);
$pdf->Cell(60, 10,"No. de Control", 1);
$pdf->Cell(140, 10,"Nombre", 1);
$pdf->Cell(50, 10, utf8_decode("Calificación"), 1, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
for($i = 0; $i < $n; $i++) {
	$ncontrol = $students[$i][0];
	$nombre = $students[$i][1];
	$cal = $calif->getCalificacion($ncontrol, $cls, $usr);

	//$pdf->Cell(70, 10, $ncontrol, 1);
	//$pdf->Cell(140, 10, utf8_decode($nombre), 1);
	//$pdf->Cell(50, 10, utf8_decode($cal), 1, 0, 'C');

	$pdf->Cell(10, 10, $i, 1);
	$pdf->Cell(60, 10, $ncontrol, 1);
	$pdf->Cell(140, 10, utf8_decode($nombre), 1);
	$pdf->Cell(50, 10, utf8_decode($cal), 1, 1, 'C');
}
$pdf->Output();
?>
