<?php
    try {
        if(ISSET($_POST["idConsulta"])){
            include "../../connection/connection.php";
            $cons = $_POST["idConsulta"];

            $check_user = conexion();

            $check_user = $check_user->query("DELETE FROM consultas WHERE idConsulta =  '$cons'");
            if ($check_user->execute()) {
                echo ISSET($_POST["idConsulta"]);
                echo 'Eliminado';
                $_SESSION["eliminarConsulta"] = true;
                header("Location: ../../view/tablaCitas.php");
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