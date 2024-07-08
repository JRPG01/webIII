<?php
session_start();
    try {
        if(
            ISSET($_POST["idDoctor"]) &&
            ISSET($_POST["userD"]) &&
            ISSET($_POST["passD"]) &&
            ISSET($_POST["nombreD"]) &&
            ISSET($_POST["apellidosD"]) &&
            ISSET($_POST["sexoD"]) &&
            ISSET($_POST["edadD"]) &&
            ISSET($_POST["especialidad"]) &&
            ISSET($_POST["turno"]) &&
            ISSET($_POST["telefono"]) &&
            ISSET($_POST["correo"])
        ){
            require_once "../../connection/connection.php";
            require_once "../modelos/Doctor.php";
            
            $cons = null;
            $cons1 = $_POST["idDoctor"];
            $cons2 = $_POST["userD"];
            $cons3 = $_POST["passD"];
            $cons4 = $_POST["nombreD"];
            $cons5 = $_POST["apellidosD"];
            $cons6 = $_POST["sexoD"];
            $cons7 = $_POST["edadD"];
            $cons8 = $_POST["especialidad"];
            $cons9 = $_POST["turno"];
            $cons10 = $_POST["telefono"];
            $cons11 = $_POST["correo"];

            $query = "UPDATE doctor SET userD = '$cons2', passD = '$cons3', nombreD = '$cons4', apellidosD = '$cons5', sexoD = '$cons6', edadD = '$cons7', especialidad = '$cons8', turno = '$cons9', telefono = '$cons10', correo = '$cons11' WHERE idDoctor = '$cons1'";
            $Doctor = $conQuery->prepare($query);
            $Doctor->execute();
            $clave = $conQuery->affected_rows;
            if ($clave) {
                echo 'actalizado';
            }
            header("Location: ../../view/tablaDoctores.php");
           
        }else{
            header("Location: ../../view/tablaDoctores.php");
        }
    } 
    catch (Exception $e) {
        echo $e;
        header("Location: ../../view/login.php");
    }
?>
