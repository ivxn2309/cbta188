<?php
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