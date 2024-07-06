<?php
    try {
        if($_ISSET($_POST["idDoctor"])){
            include "../../connection/connection.php";

            $user = null;
            $user = $_ISSET($_POST["idDoctor"]);

            $check_user = conexion();

            $check_user = $check_user->query("DELETE FROM doctor WHERE idDoctor =  '$user'");
            if ($check_user->execute()) {
                $_SESSION["eliminarDoctor"] = true;
            } 
            header("Location: ../../view/tablaDoctores.php");
        }else{
            $_SESSION["eliminarDoctor"] = false;
            header("Location: ../../view/tablaDoctores.php");
        }
    } 
    catch (Exception $e) {
        return null;
        header("Location: ../../view/login.php");
    }
?>