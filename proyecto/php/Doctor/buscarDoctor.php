<?php
    try {
        if($_ISSET($_POST["idDoctor"])){
            require_once "../../connection/connection.php";
            require_once "../modelos/Doctor.php";
            
            $cons = null;
            $cons = $_ISSET($_POST["idDoctor"]);

            $check_user = conexion();

            $query = "SELECT * FROM doctor WHERE idDoctor = '$cons'";
            $Doctor = $check_user->prepare($query);
            $Doctor->execute();
            $row = $Doctor->fetch(PDO::FETCH_OBJ);
            if ($row) {
                $_SESSION('doctorBuscado')= new Doctor($row->idDoctor,$row->userD, $row->passD, $row->nombreD, $row->apellidosD, $row->sexoD, $row->edadD, $row->especialidad, $row->turno, $row->telefono, $row->correo);
            }else{
                $_SESSION('doctorBuscado')=null;  
            }
            header("Location: ../../view/tablaDoctores.php");
        }else{
            $_SESSION('doctorBuscado')=null;
            header("Location: ../../view/tablaDoctores.php");
        }
    } 
    catch (Exception $e) {
        $_SESSION('doctorBuscado')= null;
        header("Location: ../../view/login.php");
    }
?>