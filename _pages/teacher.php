<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../components/Docente.php";

$id = $_POST['doc'];
$docente = new Docente($id);

?>

<table>
	<tr>
		<td><b>Nombre: </b></td>
		<td><?php echo $docente->nombre;?></td>
	</tr>
	<tr>
		<td><b>Email: </b></td>
		<td><?php echo $docente->email;?></td>
	</tr>
	<tr>
		<td><b>Edad: </b></td>
		<td><?php echo $docente->edad;?></td>
	</tr>
	<tr>
		<td><b>Profesion: </b></td>
		<td><?php echo $docente->profesion;?></td>
	</tr>
	<tr>
		<td><b>Certificaciones: </b></td>
		<td><?php echo $docente->certificaciones;?></td>
	</tr>
	<tr>
		<td><b>Intereses: </b></td>
		<td><?php echo $docente->intereses;?></td>
	</tr>
	<tr>
		<td><b>Frase: </b></td>
		<td><?php echo $docente->citas;?></td>
	</tr>
	<tr>
		<td><b>Detalles: </b></td>
		<td><?php echo $docente->detalles;?></td>
	</tr>
	<tr>
		<td><b>Facebook: </b></td>
		<td><?php echo $docente->url;?></td>
	</tr>
</table>