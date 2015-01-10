<?php
header("Content-Type: text/html;charset=utf-8");
include_once "Alumno.php";

if(isset($_POST["registroAlumno"])) {
	$alumnoJSON = $_POST["registroAlumno"];
	$objeto = json_decode($alumnoJSON, true);
	$id = $objeto['control'];
	
	$alumno = new Alumno( $id );
	$alumno->attr( $objeto );

	if( $alumno->save() ) 
		echo "Correcto: Alumno guardado";
    else 
    	echo "Error: Problema al guardar en la BD";
}
?>