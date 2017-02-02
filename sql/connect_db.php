<?php

$mysqli  = new mysqli("localhost", "dev", "desarrollo", "login-registro"); 
if ($mysqli->connect_errno) { 
	echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; exit(); 
} 
/*
else
			echo "Conexión exitossa!";
*/			
/*
	$link =mysqli_connect("localhost","dev","desarrollo");
	if($link){
		mysqli_select_db($link,"login-registro");
	}
*/
?>