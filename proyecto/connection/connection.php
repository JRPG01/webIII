<?php

	$host = "localhost";
	$user = "root";
	$pass = "F1104";
	$db = "hospital";

    function conexion(){
		$pdo = new PDO('mysql:host=localhost;dbname=hospital', 'root', 'F1104');
		return $pdo;
	}

	$conQuery = mysqli_connect($host,$user,$pass,$db);

?>