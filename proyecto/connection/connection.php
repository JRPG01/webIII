<?php

    function conexion(){
		$pdo = new PDO('mysql:host=localhost;dbname=hospital', 'root', '1532');
		return $pdo;
	}

?>