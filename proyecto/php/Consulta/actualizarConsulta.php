<?php
    try {
        if(
            $_ISSET($_POST["idConsulta"]) &&
            $_ISSET($_POST["fechaCita"]) &&
            $_ISSET($_POST["idCliente"]) &&
            $_ISSET($_POST["idDoctor"]) &&
            $_ISSET($_POST["observaciones"]) &&
            $_ISSET($_POST["medicamentos"]) 
        ){
            require_once "../../connection/connection.php";
            require_once "../modelos/Consulta.php";
            
            $cons = null;
            $cons1 = $_ISSET($_POST["idConsulta"]);
            $cons2 = $_ISSET($_POST["fechaCita"]);
            $cons3 = $_ISSET($_POST["idCliente"]);
            $cons4 = $_ISSET($_POST["idDoctor"]);
            $cons5 = $_ISSET($_POST["observaciones"]);
            $cons6 = $_ISSET($_POST["medicamentos"]);

            $check_user = conexion();

            $query = "UPDATE consultas SET fechaCita = '$cons2', idCliente = '$cons2', idDoctor = $cons3, observaciones = '$cons4', medicamentos = '$cons6' WHERE idConsulta = '$cons1'";
            $consulta = $check_user->prepare($query);
            $consulta->execute();
            $clave = $check_user->affected_rows;
            if ($clave>0) {
                $_SESSION("ActualizadoConsulta")= true;
                header("Location: ../../view/tablaCitas.php");
            }else{
                $_SESSION("ActualizadoConsulta")= false;
                header("Location: ../../view/tablaCitas.php");
            }
        }else{
            $_SESSION('ActualizadoConsulta')= false;
            header("Location: ../../view/tablaCitas.php");
        }
    } 
    catch (Exception $e) {
        $_SESSION('ActualizadoConsulta')= false;
        header("Location: ../../view/login.php"); 
    }
?>