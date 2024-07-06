<?php
    try {
        require_once "../../connection/connection.php";
        require_once "../modelos/Consulta.php";        
        $cons = null;
        $cons = $_ISSET($_POST["idConsulta"]);
        $check_user = conexion();
        $query = "SELECT * FROM consultas";
        $consulta = $check_user->prepare($query);
        $consulta->execute();
        $lista = array();
		$resultado = $consulta->fetchAll(PDO::FETCH_OBJ);
		foreach ($resultado as $row) {
			$lista[] = new Consulta($row->idConsulta,$row->fechaCita, $row->idCliente, $row->idDoctor, $row->observaciones, $row->medicamentos);
        }
		$_SESSION('listaConsultas')= $lista;
        header("Location: ../../view/tablaCitas.php"); 
    } 
    catch (Exception $e) {
        $_SESSION('listaConsultas')= null;
        header("Location: ../../view/login.php"); 
    }
?>
