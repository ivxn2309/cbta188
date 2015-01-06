<?php
	$hostdb = 'localhost:3306';
	$usuariodb = 'root';
	$clavedb = '';
	$nombredb = 'cbta188';

	$connection = mysql_connect($hostdb,$usuariodb,$clavedb);
	$db_selected = mysql_select_db($nombredb);

	if(!$connection || !$db_selected){
		die( "Error: " . mysql_error());
	}

	mysql_query("SET NAMES 'utf8'");
	error_reporting(E_ERROR | E_PARSE);
?>
