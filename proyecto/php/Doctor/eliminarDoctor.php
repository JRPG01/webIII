<?php
    try {
        if(ISSET($_POST["idDoctor"])){
            include "../../connection/connection.php";

            $user = null;
            $user = $_POST["idDoctor"];

            $check_user = conexion();

            $check_user = $check_user->query("DELETE FROM doctor WHERE idDoctor =  '$user'");
            if ($check_user->execute()) {
                $_SESSION["eliminarDoctor"] = true;
            } 
        }else{
            $_SESSION["eliminarDoctor"] = false;
            
        }
        header("Location: ../../view/tablaDoctores.php");
    } 
    catch (Exception $e) {
        $_SESSION["eliminarDoctor"] = false;
        header("Location: ../../view/login.php");
    }
?>