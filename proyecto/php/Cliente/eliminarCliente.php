<?php
    try {
        if($_ISSET($_POST["idCliente"])){
            include "../../connection/connection.php";

            $user = null;
            $user = $_ISSET($_POST["idCliente"]);

            $check_user = conexion();

            $check_user = $check_user->query("DELETE FROM clientes WHERE idCliente =  '$user'");
            if ($check_user->execute()) {
                $_SESSION["eliminarCliente"] = true;
            } 
            header("Location: ../../view/tablaClientes.php");
        }else{
            $_SESSION["eliminarCliente"] = false;
            header("Location: ../../view/tablaClientes.php");
        }
    } 
    catch (Exception $e) {
        $_SESSION["eliminarCliente"] = false;
        header("Location: ../../view/tablaClientes.php");
    }
?>