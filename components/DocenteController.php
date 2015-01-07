<?php
include_once "Docente.php";

if( isset( $_POST["actualizarDocente"] ) ) {
	$docenteJSON = $_POST["actualizarDocente"];
	$objeto = json_decode( $docenteJSON, true );
	$id = $objeto["usuario"];
	$pass = $objeto["pass"];

	$query = "SELECT id_docente FROM profesor WHERE id_docente='$id' AND password='$pass'";
	$result = mysql_query( $query );
	$n = mysql_num_rows( $result );

	if ( $n > 0 )
		$objeto["pass"] = $objeto["newpass"];
	else if ( $pass != "" )
		echo 'Aviso: Contraseña incorrecta';

	$docente = new Docente( $id );
	$docente->attr( $objeto );

	if( $docente->save() ) 
		echo "Correcto: Informacion adicional guardada";
    else echo 
    	"Error: Problema al guardar iformacion adicional en la BD";
}

?>