<?php
session_start();

$errors = [];

try {
    include "../../connection/connection.php";

    // Validar y limpiar los datos recibidos del formulario
    $fechaCita = isset($_POST['fechaCita']) ? mysqli_real_escape_string($conQuery, $_POST['fechaCita']) : '';
    $idCliente = isset($_POST['idCliente']) ? intval($_POST['idCliente']) : 0;
    $idDoctor = isset($_POST['idDoctor']) ? intval($_POST['idDoctor']) : 0;
    $observaciones = isset($_POST['observaciones']) ? mysqli_real_escape_string($conQuery, $_POST['observaciones']) : '';
    $medicamentos = isset($_POST['medicamentos']) ? mysqli_real_escape_string($conQuery, $_POST['medicamentos']) : '';

    // Verificar que los datos requeridos no estén vacíos
    if (!empty($fechaCita) && $idCliente > 0 && $idDoctor > 0 && !empty($observaciones) && !empty($medicamentos)) {
        // Preparar la consulta SQL utilizando una consulta preparada
        $query = "INSERT INTO consultas (fechaCita, idCliente, idDoctor, observaciones, medicamentos) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conQuery->prepare($query);

        // Vincular parámetros y ejecutar la consulta
        $stmt->bind_param('siiis', $fechaCita, $idCliente, $idDoctor, $observaciones, $medicamentos);
        $stmt->execute();

        // Redireccionar a la página de visualización de citas
        $_SESSION['ActualizadoConsulta'] = true;
        header("Location: ../../view/tablaCitas.php");
        exit();
    } else {
        // Almacenar errores en la sesión para mostrarlos en frmCitas.php
        $_SESSION['errors'] = "Por favor complete todos los campos.";
        header("Location: ../../view/frmCitas.php");
        exit();
    }
} catch (Exception $e) {
    // Manejo de errores
    $_SESSION['errors'] = "Error al procesar la consulta.";
    header("Location: ../../view/frmCitas.php");
    exit();
}
?>