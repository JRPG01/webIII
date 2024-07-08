<?php
session_start();
    try {
        if($_ISSET($_POST["idConsulta"])){
            require_once "../../connection/connection.php";
            require_once "../modelos/Consulta.php";
            
            $cons = null;
            $cons = $_ISSET($_POST["idConsulta"]);

            $check_user = conexion();

            $query = "SELECT * FROM consultas WHERE idConsulta = '$cons'";
            $consulta = $check_user->prepare($query);
            $consulta->execute();
            $row = $consulta->fetch(PDO::FETCH_OBJ);
            if ($row) {
                $_SESSION('consultaBuscada') =  new Consulta($row->idConsulta,$row->fechaCita, $row->idCliente, $row->idDoctor, $row->observaciones, $row->medicamentos);
                header("Location: ../../view/tablaCitas.php");
            }else{
                $_SESSION('consultaBuscada')= null;
                header("Location: ../../view/tablaCitas.php");
            }
        }else{
            $_SESSION('consultaBuscada')= null;
            header("Location: ../../view/tablaCitas.php");
        }
    } 
    catch (Exception $e) {
        $_SESSION('consultaBuscada')= null;
        header("Location: ../../view/login.php"); 
    }
?>