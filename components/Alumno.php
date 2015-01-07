<?php
include_once "../utils/DBSettings.php";
if(isset($_POST["registroAlumno"])) {
	$alumnoJSON = $_POST["registroAlumno"];
	$alumno = json_decode($alumnoJSON, true);

	$control = $alumno["control"];
	$email = $alumno["email"];
	$edad = $alumno["edad"];
	$curp = $alumno["curp"];

	$query = "SELECT no_control FROM alumnodata WHERE no_control='$control'";
	$result = mysql_query($query);
	
	if(mysql_num_rows($result) > 0){
		$query = "INSERT INTO alumnoentity VALUES('$control', '$email', '$curp', '$edad')";
		$result = mysql_query($query);
		if($result)	echo 'Listo';
		else echo 'Error';		
	}
	else echo 'Invalido';
}
?>