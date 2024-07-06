<?php
    try {
        if($_ISSET($_POST["idConsulta"])){
            include "../../connection/connection.php";

            $cons = null;
            $cons = $_ISSET($_POST["idConsulta"]);

            $check_user = conexion();

            $check_user = $check_user->query("DELETE FROM consultas WHERE idConsulta =  '$cons'");
            if ($check_user->execute()) {
                header("Location: ../../view/tablaCitas.php");
                $_SESSION["eliminarConsulta"] = true;
            } 
        }else{
            $_SESSION["eliminarConsulta"] = false;
            header("Location: ../../view/tablaCitas.php");
        }
    } 
    catch (Exception $e) {
        $_SESSION["eliminarConsulta"] = false;
        header("Location: ../../view/login.php");
    }
?>