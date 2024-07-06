<?php
    try {
        if($_ISSET($_POST["idCliente"])){
            require_once "../../connection/connection.php";
            require_once "../modelos/Cliente.php";
            
            $cons = null;
            $cons = $_ISSET($_POST["idCliente"]);

            $check_user = conexion();

            $query = "SELECT * FROM clientes WHERE idCliente = '$cons'";
            $Cliente = $check_user->prepare($query);
            $Cliente->execute();
            $row = $Cliente->fetch(PDO::FETCH_OBJ);
            if ($row) {
                $_SESSION('clienteBuscado')= new Cliente($row->idCliente,$row->userC, $row->passC, $row->nombreC, $row->apellidosC, $row->sexoC, $row->edadC, $row->telefono);
                header("Location: ../../view/tablaClientes.php");
            }else{
                $_SESSION('clienteBuscado')= null;
                header("Location: ../../view/tablaClientes.php");
            }
        }else{
            $_SESSION('clienteBuscado')= null;
            header("Location: ../../view/tablaClientes.php");
        }
    } 
    catch (Exception $e) {
        $_SESSION('clienteBuscado')= null;
        header("Location: ../../view/login.php"); 
    }
?>