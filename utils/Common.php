<?php
//Si hay que agregar un empleado nuevo
if(isset($_POST["nuevoEmp"])) {
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

//Si hay que borrar un empleado
else if(isset($_POST["eliminaEmp"])) {
	include_once "config.php";
	$json = $_POST["eliminaEmp"];
	$empleado = json_decode($json,true);
	$nick = $empleado['id'];

	$query = "DELETE FROM empleados WHERE nickname_empleado='".$nick."'";
	$result = mysql_query($query);
	if($result){
		echo 'El usuario ha sido despedido';
	} else {
		echo 'Error';
	}
}

//Si hay que agregar un aviso
else if(isset($_POST["aviso"])) {
	include_once "config.php";
	$json = $_POST["aviso"];
	$aviso = json_decode($json,true);
	$asunto = $aviso['titulo'];
	$msj = $aviso['message'];
	$aut = $aviso['autor'];

	$query = "INSERT INTO avisos VALUES (NULL, '".$asunto."', '".$msj."', '".$aut."', CURDATE());";
	$result = mysql_query($query);
	if($result){
		echo 'Post con exito';
	} else {
		echo 'Error';
	}
}

function query_to_array($select_query){
	$result = mysql_query($select_query);

	if($result){
		$row_count = mysql_num_rows($result);
		$col_count = mysql_num_fields($result);
		//Obtenemos los nombres de los campos
		for ($i = 0; $i < $col_count; $i++){
			$column[$i] =  strtolower(mysql_field_name($result, $i));			
		}
		//Obtenemos las filas y las pasamos a un arreglo asociativo			
		for($i=0; $i < $row_count; $i++){
			$registro=mysql_fetch_row($result);
			for ($j = 0; $j < $col_count; $j++){
				$registros[$i][$column[$j]] = $registro[$j];
			}
		}
		mysql_free_result($result);
		return $registros;
	}
	else{
		return null;
	}
}
?>