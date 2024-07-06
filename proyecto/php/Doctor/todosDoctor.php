<?php
    try {
        require_once "../../connection/connection.php";
        require_once "../modelos/Doctor.php";
        $cons = null;
        $cons = $_ISSET($_POST["idDoctor"]);
        $check_user = conexion();
        $query = "SELECT * FROM doctor";
        $Doctor = $check_user->prepare($query);
        $Doctor->execute();
        $lista = array();
		$resultado = $Doctor->fetchAll(PDO::FETCH_OBJ);
		foreach ($resultado as $row) {
			$lista[] = new Doctor($row->idDoctor,$row->userD, $row->passD, $row->nombreD, $row->apellidosD, $row->sexoD, $row->edadD, $row->especialidad, $row->turno, $row->telefono, $row->correo);
        }
		return $lista;
        header("Location: ../../view/tablaDoctores.php");
    } 
    catch (Exception $e) {
        return null;
        header("Location: ../../view/login.php");
    }
?>