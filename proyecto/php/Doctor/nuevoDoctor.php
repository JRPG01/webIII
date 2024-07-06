<?php
    try {
        if(
            $_ISSET($_POST["userD"]) &&
            $_ISSET($_POST["passD"]) &&
            $_ISSET($_POST["nombreD"]) &&
            $_ISSET($_POST["apellidoD"]) &&
            $_ISSET($_POST["sexoD"]) &&
            $_ISSET($_POST["edadD"]) &&
            $_ISSET($_POST["especialidad"]) &&
            $_ISSET($_POST["turno"]) &&
            $_ISSET($_POST["telefono"]) &&
            $_ISSET($_POST["correo"])
        ){
            require_once "../../connection/connection.php";
            require_once "../modelos/Consulta.php";
            
            $cons = null;
            $cons2 = $_ISSET($_POST["userD"]);
            $cons3 = $_ISSET($_POST["passD"]);
            $cons4 = $_ISSET($_POST["nombreD"]);
            $cons5 = $_ISSET($_POST["apellidoD"]);
            $cons6 = $_ISSET($_POST["sexoD"]);
            $cons7 = $_ISSET($_POST["edadD"]);
            $cons8 = $_ISSET($_POST["especialidad"]);
            $cons9 = $_ISSET($_POST["turno"]);
            $cons10 = $_ISSET($_POST["telefono"]);
            $cons11 = $_ISSET($_POST["correo"]);

            $check_user = conexion();

            $query = "UPDATE consultas SET fechaCita = ?, idCliente = ?, idDoctor = ?, observaciones = ?, medicamentos = ? 
            WHERE idConsulta = ?";
            $consulta = $check_user->prepare($query);
            $consulta->execute();
            $clave = $check_user->lastInsertId();
            if ($clave) {
                $_SESSION("NuevoDoctor")= true;
            }else{
                $_SESSION("NuevoDoctor")= false;
            }
            header("Location: ../../view/tablaDoctores.php");
        }else{
            $_SESSION('NuevoDoctor')= false;
            header("Location: ../../view/tablaDoctores.php");
        }
    } 
    catch (Exception $e) {
        $_SESSION('NuevoDoctor')= false;
        header("Location: ../../view/login.php"); 
    }
?>