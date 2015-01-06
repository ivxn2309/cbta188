<?php
if(isset($_POST["nuevoAlumno"])) {
	include_once "config.php";
	$json = $_POST["nuevoEmp"];
	$empleado = json_decode($json,true);
	$nombre = $empleado["nombre"];
	$puesto = $empleado["puesto"];
	$edad = $empleado["edad"];
	$direccion = $empleado["dom"];
	$nickname = $empleado["nick"];
	$key = $empleado["pass"];
	$isAdmin = $empleado["admin"];

	$query = "INSERT INTO empleados VALUES(\"".$nombre."\", \"".$puesto."\", ".$edad.", \"".$direccion."\", \"".$nickname."\", MD5(\"".$key."\"),".$isAdmin.");";
	$result = mysql_query($query);
	if($result){
		echo 'El usuario ha sido registrado';
	} else {
		echo 'Error';
	}
}
?>