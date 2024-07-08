<?php
    try {
        if(ISSET($_POST["idCliente"])){
            include "../../connection/connection.php";

            $user = null;
            $user = $_POST["idCliente"];
            $check_user = conexion();

            $check_user = $check_user->query("DELETE FROM clientes WHERE idCliente = '$user'");
            if ($check_user->execute()) {
                $_SESSION["eliminarCliente"] = true;
            } 
            header("Location: ../../view/tablaPacientes.php");
        }else{
            $_SESSION["eliminarCliente"] = false;
            echo 'falta id';
            header("Location: ../../view/tablaPacientes.php");
        }
    } 
    catch (Exception $e) {
        echo $e;
        $_SESSION["eliminarCliente"] = false;
        header("Location: ../../view/tablaPacientes.php");
    }
?>