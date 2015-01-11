<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../utils/DBSettings.php";
class Horario {
	public function __construct(){

	}

	public function getClassesOf( /*string*/ $prof ){
		$query = "SELECT materia, grupo FROM horariodocente WHERE docente='$prof'";
		$result = mysql_query($query);
		$n = mysql_num_rows($result);
		$clases = array();

		for( $i = 0; $i < $n; $i++ ) {
			$row = mysql_fetch_row($result);
			$clases[$i][0] = $row[0];
			$clases[$i][1] = $row[1];
		}

		return $clases;
	}

	public function getClassName( /*string*/ $id ){
		$query = "SELECT nombre FROM materia WHERE clave='$id'";
		$result = mysql_query($query);
		$nombre = mysql_fetch_row($result);
		return $nombre[0];
	}

	public function getGroupName( /*string*/ $id ){
		$query = "SELECT nombre, semestre FROM grupo WHERE clave='$id'";
		$result = mysql_query($query);
		$nombre = mysql_fetch_row($result);
		return $nombre[0] . ", " . $nombre[1];
	}
}
?>