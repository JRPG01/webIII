<?php
    try {
        if( //Si no llega id es agregar
            $_ISSET($_POST["userC"]) &&
            $_ISSET($_POST["passC"]) &&
            $_ISSET($_POST["nombreC"]) &&
            $_ISSET($_POST["apellidosC"]) &&
            $_ISSET($_POST["sexoC"]) &&
            $_ISSET($_POST["edadC"]) &&
            $_ISSET($_POST["telefono"])
        ){
            require_once "../../connection/connection.php";
            require_once "../modelos/Cliente.php";
            
            $cons = null;
            $con2 = $_ISSET($_POST["userC"]);
            $con3 = $_ISSET($_POST["passC"]);
            $con4 = $_ISSET($_POST["nombreC"]);
            $con5 = $_ISSET($_POST["apellidosC"]);
            $con6 = $_ISSET($_POST["sexoC"]);
            $con7 = $_ISSET($_POST["edadC"]);
            $con8 = $_ISSET($_POST["telefono"]);

            $check_user = conexion();

            $query = "INSERT INTO clientes (userC, passC, nombreC, apellidosC, sexoC, edadC, telefono) 
            VALUES ('$con2', '$con3', '$con4', '$con5', '$con6', '$con7', '$con8')";
            $Cliente = $check_user->prepare($query);
            $Cliente->execute();
            $clave = $check_user->lastInsertId();
            if ($clave) {
                $_SESSION("NuevoCliente")= true;
                header("Location: ../../view/tablaClientes.php"); 
            }else{
                $_SESSION("NuevoCliente")= false;
                header("Location: ../../view/tablaClientes.php"); 
            }
        }else{
            $_SESSION("NuevoCliente")= false;
            header("Location: ../../view/tablaClientes.php"); 
        }
    } 
    catch (Exception $e) {
        $_SESSION("NuevoCliente")= false;
        header("Location: ../../view/login.php"); 
    }
?>