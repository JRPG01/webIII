<?php
    try {
        if(
            $_ISSET($_POST["fechaCita"]) &&
            $_ISSET($_POST["idCliente"]) &&
            $_ISSET($_POST["idDoctor"]) &&
            $_ISSET($_POST["observaciones"]) &&
            $_ISSET($_POST["medicamentos"]) 
        ){
            require_once "../../connection/connection.php";
            require_once "../modelos/Consulta.php";
            
            $cons = null;
            $cons2 = $_ISSET($_POST["fechaCita"]);
            $cons3 = $_ISSET($_POST["idCliente"]);
            $cons4 = $_ISSET($_POST["idDoctor"]);
            $cons5 = $_ISSET($_POST["observaciones"]);
            $cons6 = $_ISSET($_POST["medicamentos"]);

            $check_user = conexion();

            $query = "INSERT INTO consultas (fechaCita, idCliente, idDoctor, observaciones, medicamentos) VALUES 
            ('$cons2', '$cons3', '$cons4', '$cons5', '$cons6')";
            $consulta = $check_user->prepare($query);
            $consulta->execute();
            $clave = $check_user->lastInsertId();
            if ($clave>0) {
                $_SESSION("nuevaConsulta")= true;
            }else{
                $_SESSION("nuevaConsulta")= false;
            }
            header("Location: ../../view/tablaConsultas.php");
        }else{
            $_SESSION('nuevaConsulta')= false;
            header("Location: ../../view/tablaConsultas.php");
        }
    } 
    catch (Exception $e) {
        $_SESSION('nuevaConsulta')= false;
        header("Location: ../../view/login.php"); 
    }
?>