<?php
try {
    print_r($_POST);
    if (
        ISSET($_POST["idCliente"]) &&
        ISSET($_POST["userC"]) &&
        ISSET($_POST["passC"]) &&
        ISSET($_POST["nombreC"]) &&
        ISSET($_POST["apellidosC"]) &&
        ISSET($_POST["sexoC"]) &&
        ISSET($_POST["edadC"]) &&
        ISSET($_POST["telefono"])
    ) {
        require_once "../../connection/connection.php";
        require_once "../modelos/Cliente.php";

        $cons = null;
        $con1 = $_POST["idCliente"];
        $con2 = $_POST["userC"];
        $con3 = $_POST["passC"];
        $con4 = $_POST["nombreC"];
        $con5 = $_POST["apellidosC"];
        $con6 = $_POST["sexoC"];
        $con7 = $_POST["edadC"];
        $con8 = $_POST["telefono"];

        $check_user = conexion();

        $query = "UPDATE clientes SET userC = '$con2', passC = '$con3', nombreC = '$con4', apellidosC = '$con5', sexoC = '$con6', edadC = '$con7', telefono = '$con8'
            WHERE idCliente = '$con1'";
        $Cliente = $check_user->prepare($query);
        $Cliente->execute();
        $clave = $conQuery->affected_rows;
        if ($clave > 0) {
           echo 'Actualizado';
        }
         header("Location: ../../view/tablaPacientes.php");
    } else {
        echo 'faltan';
        header("Location: ../../view/tablaPacientes.php");
    }
} catch (Exception $e) {
    echo 'error';
    header("Location: ../../view/login.php");
}
