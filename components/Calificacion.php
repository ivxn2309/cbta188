<?php
header("Content-Type: text/html;charset=utf-8");
include_once "../utils/DBSettings.php";
class Calificacion {
	public function __construct(){

	}

	public function setCalificacion( $alum, $cls, $doc, $cal ){
		$actual = $this->getCalificacion( $alum, $cls, $doc );

		$query = "UPDATE calificaciones SET calificacion='$cal' WHERE alumno='$alum' AND materia='$cls' AND docente='$doc'";
		if( $actual < 0 ) {
			$query = "INSERT INTO calificaciones VALUES (NULL, '$alum', '$cls', '$doc', '$cal')";
		}

		echo "<br>Query: ".$query."<br>";

		$result = mysql_query($query);
		if($result) return 1;
		return 0;
	}

	public function getCalificacion( $alum, $cls, $doc ){
		$query = "SELECT calificacion FROM calificaciones WHERE alumno='$alum' AND materia='$cls' AND docente='$doc' ORDER BY id_calificacion DESC";
		$result = mysql_query($query);
		if($result){
			if(mysql_num_rows($result) > 0){
				$row = mysql_fetch_row($result);
				return $row[0];
			}
		}
		return -1;
	}

	public function getAllOf( $id ) {
		$query = "SELECT alumno, materia, docente, calificacion FROM calificaciones WHERE alumno='$id' AND calificacion>-1";
		$result = mysql_query($query);
		if(!$result) return 0;
		$n = mysql_num_rows($result);
		$califs = array();
		for($i = 0; $i < $n; $i++) {
			$row = mysql_fetch_row($result);
			$califs[$i][0] = $row[0];
			$califs[$i][1] = $row[1];
			$califs[$i][2] = $row[2];
			$califs[$i][3] = $row[3];
		}
		return $califs;
	}
}