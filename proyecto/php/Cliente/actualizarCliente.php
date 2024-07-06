<?php
    try {
        if( $_ISSET($_POST["idCliente"]) &&
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
            $con1 = $_ISSET($_POST["idCliente"]);
            $con2 = $_ISSET($_POST["userC"]);
            $con3 = $_ISSET($_POST["passC"]);
            $con4 = $_ISSET($_POST["nombreC"]);
            $con5 = $_ISSET($_POST["apellidosC"]);
            $con6 = $_ISSET($_POST["sexoC"]);
            $con7 = $_ISSET($_POST["edadC"]);
            $con8 = $_ISSET($_POST["telefono"]);

            $check_user = conexion();

            $query = "UPDATE clientes SET userC = '$con2', passC = '$con3', nombreC = '$con4', apellidosC = '$con5', sexoC = '$con6', edadC = '$con7', telefono = '$con8'
            WHERE idCliente = '$con1'";
            $Cliente = $check_user->prepare($query);
            $Cliente->execute();
            $clave = $check_user->affected_rows;
            if ($clave>0) {
                $_SESSION("actualizadoCliente")= true;
                header("Location: ../../view/tablaClientes.php"); 
            }else{
                $_SESSION("actualizadoCliente")= false;
                header("Location: ../../view/tablaClientes.php"); 
            }
        }else{
            $_SESSION("actualizadoCliente")= false;
            header("Location: ../../view/tablaClientes.php"); 
        }
    } 
    catch (Exception $e) {
        $_SESSION("actualizadoCliente")= false;
        header("Location: ../../view/login.php"); 
    }
?>