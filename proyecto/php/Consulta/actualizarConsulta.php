<?php
try {
    // Verificar si los datos fueron enviados
    if(
        isset($_POST["idConsulta"]) &&
        isset($_POST["fechaCita"]) &&
        isset($_POST["idCliente"]) &&
        isset($_POST["idDoctor"]) &&
        isset($_POST["observaciones"]) &&
        isset($_POST["medicamentos"]) 
    ) {
        require_once "../../connection/connection.php";
        require_once "../modelos/Consulta.php";

        // Asignar los valores de POST a variables
        $cons1 = $_POST["idConsulta"];
        $cons2 = $_POST["fechaCita"];
        $cons3 = $_POST["idCliente"];
        $cons4 = $_POST["idDoctor"];
        $cons5 = $_POST["observaciones"];
        $cons6 = $_POST["medicamentos"];

        // Conectar a la base de datos

        // Preparar la consulta
        $query = "UPDATE consultas SET fechaCita = ?, idCliente = ?, idDoctor = ?, observaciones = ?, medicamentos = ? WHERE idConsulta = ?";
        $consulta = $conQuery->prepare($query);
        $consulta->bind_param('siisss', $cons2, $cons3, $cons4, $cons5, $cons6, $cons1);
        $consulta->execute();

        // Verificar si la consulta afectó alguna fila
        if ($consulta->affected_rows > 0) {
            $_SESSION["ActualizadoConsulta"] = true;
            header("Location: ../../view/tablaCitas.php");
        } else {
            $_SESSION["ActualizadoConsulta"] = false;
            header("Location: ../../view/tablaCitas.php");
        }
    } else {
        $_SESSION['ActualizadoConsulta'] = false;
        header("Location: ../../view/tablaCitas.php");
    }
} 
catch (Exception $e) {
    $_SESSION['ActualizadoConsulta'] = false;
    header("Location: ../../view/login.php");
}
?>