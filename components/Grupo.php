<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../utils/DBSettings.php";
class Grupo {
	public function __construct(  ) {
		
	}

	public function getGroup( /*string*/ $grp ){
		$query = "SELECT nombre, semestre FROM grupo WHERE clave='$grp'";
		$result = mysql_query($query);
		$row = mysql_fetch_row($result);
		return $row;
	}

	public function getAlumnosOf( /*string*/ $grp ) {
		$query = "SELECT no_control, nombre, apaterno, amaterno FROM alumnodata WHERE grupo='$grp'";
		$result = mysql_query($query);
		$alumnos = array();

		$n = mysql_num_rows($result);

		for($i = 0; $i < $n; $i++){
			$row = mysql_fetch_row($result);
			$alumnos[$i][0] = $row[0];
			$alumnos[$i][1] = $row[2] . " " . $row[3] . ", " . $row[1];
		}

		return $alumnos;
	}

	public function getSemesters(  ) {
		$query = "SELECT DISTINCT(semestre) FROM grupo";
		$result = mysql_query($query);
		$semesters = array();
		$n = mysql_num_rows($result);

		for($i = 0; $i < $n; $i++){
			$row = mysql_fetch_row($result);
			$semesters[$i] = $row[0];
		}

		return $semesters;
	}

	public function getGruposOf( /*string*/ $sem ) {
		$query = "SELECT nombre, clave FROM grupo WHERE semestre='$sem'";
		$result = mysql_query($query);
		$groups = array();
		$n = mysql_num_rows($result);

		for($i = 0; $i < $n; $i++){
			$row = mysql_fetch_row($result);
			$groups[$i] = $row;
		}

		return $groups;
	}
}
?>