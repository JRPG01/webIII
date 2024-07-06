<?php
    try {
        if(
            $_ISSET($_POST["idDoctor"]) &&
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
            require_once "../modelos/Doctor.php";
            
            $cons = null;
            $cons1 = $_ISSET($_POST["idDoctor"]);
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

            $query = "UPDATE doctor SET userD = '$cons2', passD = '$cons3', nombreD = '$cosn4', apellidosD = '$cons5', sexoD = '$cosn6', edadD = '$cons7', especialidad = '$cons8', turno = '$cons9', telefono = '$cons10', correo = '$cons11' WHERE idDoctor = '$cons1'";
            $Doctor = $check_user->prepare($query);
            $Doctor->execute();
            $clave = $check_user->affected_rows;
            if ($clave>0) {
                $_SESSION("actualizadoDoctor")= true;
            }else{
                $_SESSION("actualizadoDoctor")= false;
                header("Location: ../../view/tablaDoctores.php");
            }
        }else{
            $_SESSION("actualizadoDoctor")= false;
            header("Location: ../../view/tablaDoctores.php");
        }
    } 
    catch (Exception $e) {
        $_SESSION("actualizadoDoctor")= false;
        header("Location: ../../view/login.php");
    }
?>
