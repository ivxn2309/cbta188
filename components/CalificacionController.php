<?php
header("Content-Type: text/html;charset=utf-8");
include_once "Calificacion.php";

if( isset( $_POST["calificacion"] ) ) {
	$calJSON = $_POST["calificacion"];
	$objeto = json_decode( $calJSON, true );
	$alum = $objeto["alumno"];
	$doc = $objeto["profe"];
	$cls = $objeto["materia"];
	$cal = $objeto["cal"];	

	echo "<br>Alumno: ".$alum."<br>";
	echo "<br>Clase: ".$cls."<br>";
	echo "<br>Docente: ".$doc."<br>";
	echo "<br>Calif: ".$cal."<br>";

	$calificacion = new Calificacion(  );
	$result = $calificacion->setCalificacion( $alum, $cls, $doc, $cal );

	if( $result ) 
		echo "Actualizado correctamente";
    else echo "Error: No se pudo conectar, intenta mas tarde";
}

?>