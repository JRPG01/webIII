<?php
    try {
        require_once "../../connection/connection.php";
        require_once "../modelos/Cliente.php";
        $cons = null;
        $cons = $_ISSET($_POST["idCliente"]);
        $check_user = conexion();
        $query = "SELECT * FROM clientes";
        $Cliente = $check_user->prepare($query);
        $Cliente->execute();
        $lista = array();
		$resultado = $Cliente->fetchAll(PDO::FETCH_OBJ);
		foreach ($resultado as $row) {
			$lista[] =  new Cliente($row->idCliente,$row->userC, $row->passC, $row->nombreC, $row->apellidosC, $row->sexoC, $row->edadC, $row->telefono);
		}
		$_SESSION('listaClientes')= $lista;
        header("Location: ../../view/tablaClientes.php"); 
    } 
    catch (Exception $e) {
        $_SESSION('listaClientes')= null;
        header("Location: ../../view/tablaClientes.php"); 
    }
?>