<?php
session_start();

//La variable que indica si es usuario se inicia en falso 
$isUser = 0;

//al igual que la que indica si ya se intento entrar
$loginAttempt = false;

//Si el usuario solicita terminar la sesion
if(isset($_POST['salir'])){
	$_SESSION = array();
	session_destroy();
}

//Si ya ha sido inicializada una sesion como alumno
else if(isset($_SESSION['nocontrol']) && isset($_SESSION['curp']) && isset($_SESSION['cbta188'])) {
	$isUser = 1;
}

//Si ya ha sido inicializada una sesion como docente
else if(isset($_SESSION['doc_user']) && isset($_SESSION['doc_name']) && isset($_SESSION['doc_cbta188'])) {
	$isUser = 2;
}

//Si el usuario quiere identificarse como alumno
else if (isset($_POST['nocontrol']) && isset($_POST['nocontrol'])){
	$nocontrol = $_POST["nocontrol"];
	$curp = $_POST["curp"];

	//Checamos si el numero de control y la curp estan en la base de datos
	$query = "SELECT no_control FROM alumnoentity WHERE UPPER(curp)=UPPER(TRIM('$curp')) and UPPER(no_control)=UPPER(TRIM('$nocontrol'))";
	$result = query_to_array($query);

	if (!is_null($result)){
		//Se guardan los datos correspondientes a la sesion
		$query = "SELECT email FROM alumnoentity WHERE no_control='$nocontrol'";
		$result = mysql_query($query);
		$result = mysql_fetch_row($result);
		$email = $result[0];

		$query = "SELECT nombre FROM alumnodata WHERE no_control='$nocontrol'";
		$result = mysql_query($query);
		$result = mysql_fetch_row($result);
		$nombre = $result[0];

		//Los datos de sesion son almacenados
		$_SESSION["nocontrol"] = $nocontrol;
		$_SESSION["curp"] = $curp;
		$_SESSION["email"] = $email;
		$_SESSION["nombre"] = $nombre;
		$_SESSION["cbta188"] = 1;
		$isUser = 1;
	}
	else {
		$loginAttempt = true;
	}
}

//Si el usuario quiere identificarse como docente
else if (isset($_POST['docente_user']) && isset($_POST['docente_pass'])){
	$user = $_POST["docente_user"];
	$pass = $_POST["docente_pass"];

	//Checamos si esta en la base de datos
	$query = "SELECT id_docente FROM profesor WHERE UPPER(id_docente)=UPPER(TRIM('$user')) and password='$pass'";
	$result = query_to_array($query);

	if (!is_null($result)){
		//Se guardan los datos correspondientes a la sesion
		$query = "SELECT id_docente, nombre FROM profesor WHERE UPPER(id_docente)=UPPER(TRIM('$user'))";
		$result = mysql_query($query);
		$result = mysql_fetch_row($result);
		$user = $result[0];
		$name = $result[1];

		//Los datos de sesion son almacenados
		$_SESSION["doc_user"] = $user;
		$_SESSION["doc_name"] = $name;
		$_SESSION["doc_cbta188"] = 1;
		$isUser = 2;
	}
	else {
		$loginAttempt = true;
	}
}
?>