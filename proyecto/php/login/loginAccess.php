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
    $conexion = conexion();

    //Checamos la consulta para clientes
    $check_user = $conexion->query("SELECT * FROM clientes WHERE userC='$user' and passC = '$pass'");
    //Checamos la consulta para doctores
    $check_userDoc = $conexion->query("SELECT * FROM doctor WHERE userD='$user' and passD = '$pass'");

    if ($check_user->rowCount() == 1) {
        //Usuario cliente encontrado
        $_SESSION["nomUser"] = $user;
        $_SESSION["doctor"] = false;
        header("Location: ../../view/menupagina.php");
    } else if ($check_userDoc->rowCount() == 1) {
        //Usuario doctor encontrado
        $doctor = $check_userDoc->fetch(PDO::FETCH_ASSOC);
        $_SESSION["nomUser"] = $user;
        $_SESSION["doctor"] = true;
        $_SESSION["idDoctor"] = $doctor["idDoctor"];
        header("Location: ../../view/menupagina.php");
    } else if (!preg_match("/^[A-Za-z0-9]{8,12}$/", $user)) {
        //Usuario incorrecto
        $_SESSION["login"] = 1;
        header("Location: ../../view/login.php");
    } else if (!preg_match("/^[A-Za-z0-9]{8,12}$/", $pass)) {
        //Contraseña incorrecta
        $_SESSION["login"] = 2;
        header("Location: ../../view/login.php");
    } else {
        $_SESSION["login"] = 3;
        header("Location: ../../view/login.php");
    }
} 
//Si llega a fallar la conexion a la base de datos
catch (Exception $e) {
    echo "Fallo de conexion con el servidor";
    header("Location: ../../view/login.php");
}
?>