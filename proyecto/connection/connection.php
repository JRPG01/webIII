<?php

	$host = "localhost";
	$user = "root";
	$pass = "1532";
	$db = "hospital";

    function conexion(){
		$pdo = new PDO('mysql:host=localhost;dbname=hospital', 'root', '1532');
		return $pdo;
	}

	$conQuery = mysqli_connect($host,$user,$pass,$db);

?>