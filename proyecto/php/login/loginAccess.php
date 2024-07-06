<?php
//Incluimos la conexion
include "../../connection/connection.php";

//Iniciamos una sesion para login y le damos un valor true en su bandera
session_start();
$_SESSION["login"] = 0;

//Les damos sus valores del form con el metodo POST
$user = $_POST["user"];
$pass = $_POST["pass"];

try {
    //Conecta a la funcion conexion
    $check_user = conexion();

    //Checamos al consulta
    $check_user = $check_user->query("SELECT * FROM clientes WHERE userC='$user' and passC = '$pass'");
    if ($check_user->rowCount() == 1) {
        //Te manda al menu de la pagina con su user
        $_SESSION["nomUser"] = $user;
        header("Location: ../../view/menupagina.php");
    } 
    else if(!preg_match("/^[A-Za-z0-9]{8,12}$/",$user)){
        /*Si no se encuentra el usuario cambia el valor de la variable de sesion para mostrar
        que ese ususario es incorrecto en la ventana de login y te manda a ella*/
        $_SESSION["login"] = 1;
        header("Location: ../../view/login.php");
    }
    else if(!preg_match("/^[A-Za-z0-9]{8,12}$/",$pass)){
        /*Si no se encuentra el usuario cambia el valor de la variable de sesion para mostrar
        que esa contraseña es incorrecta en la ventana de login y te manda a ella*/
        $_SESSION["login"] = 2;
        header("Location: ../../view/login.php");
    }else{
        $_SESSION["login"] = 3;
        header("Location: ../../view/login.php");
    }
} 
//Si llega a fallar la conexion a la base de datos
catch (Exception $e) {
     
    echo "Fallo de conexion con el servidor";
    header("Location: ../../view/login.php");
}

/*$user = isset($_POST["user"]) ? $_POST["user"] : "123456789";*/
?>