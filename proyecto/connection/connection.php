<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "hospital";

    function conexion(){
		$pdo = new PDO('mysql:host=localhost;dbname=hospital', 'root', '');
		return $pdo;
	}

	$conQuery = mysqli_connect($host,$user,$pass,$db);

?>