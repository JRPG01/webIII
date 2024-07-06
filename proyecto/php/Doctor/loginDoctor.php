<?php
    try {
        if($_ISSEt($_POST["userC"]) && $_POST["passC"]){
            include "../../connection/connection.php";        
            $user = $_POST["userC"];
            $pass = $_POST["passC"];

            $check_user = conexion();

            $check_user = $check_user->query("SELECT * FROM doctor WHERE userC='$user' and passC = '$pass'");
            if ($check_user->rowCount() == 1) {
                header("Location: ../../view/menupagina.php");
            } 
            else if(!preg_match("/^[A-Za-z0-9]{8,12}$/",$user)){
                $_SESSION["login"] = 1;
                header("Location: ../../view/login.php");
            }
            else if(!preg_match("/^[A-Za-z0-9]{8,20}$/",$pass)){
                $_SESSION["login"] = 2;
                header("Location: ../../view/login.php");
            }
        }else{
            header("Location: ../../view/login.php");
        }
    } 
    catch (Exception $e) {
        echo "Fallo de conexion con el servidor";
        sleep(5);
        header("Location: ../../view/login.php");
    }
?>