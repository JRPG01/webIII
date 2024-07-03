<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once '../connection/connection.php';
    require_once '../modelos/ClienteDao.php';
    require_once '../modelos/DoctorDao.php';
    require_once '../modelos/ConsultaDao.php';
    require_once '../modelos/Cliente.php';
    require_once '../modelos/Doctor.php';
    require_once '../modelos/Consulta.php';

    $pdo = conexion();

    // Login para Cliente
    $clienteDAO = new ClienteDAO($pdo);
    $userC = 'usuario@example.com';
    $passC = 'password';
    $cliente = $clienteDAO->loginCliente($userC, $passC);
    if ($cliente) {
        echo "Cliente logueado exitosamente:\n";
        print_r($cliente);
    } else {
        echo "Credenciales de cliente incorrectas.\n";
    }

    // Login para Doctor
    $doctorDAO = new DoctorDAO($pdo);
    $userD = 'doctor@example.com';
    $passD = 'password';
    $doctor = $doctorDAO->loginCliente($userD, $passD);
    if ($doctor) {
        echo "Doctor logueado exitosamente:\n";
        print_r($doctor);
    } else {
        echo "Credenciales de doctor incorrectas.\n";
    }

    // Crear un nuevo Cliente
    $nuevoCliente = new Cliente('nuevo@example.com', 'newpass', 'Nuevo', 'Cliente', 'M', 25, '1234567890');
    $clienteDAO->nuevoCliente($nuevoCliente);
    echo "Cliente creado exitosamente.\n";

    // Leer un Cliente
    $clienteLeido = $clienteDAO->buscarUno(1);
    if ($clienteLeido) {
        echo "Cliente leído exitosamente:\n";
        print_r($clienteLeido);
    } else {
        echo "No se encontró el cliente.\n";
    }

    // Actualizar un Cliente
    $clienteLeido->nombreC = 'Nombre Actualizado';
    $clienteDAO->actualizar($clienteLeido);
    echo "Cliente actualizado exitosamente.\n";

    // Eliminar un Cliente
    $clienteDAO->eliminar(1);
    echo "Cliente eliminado exitosamente.\n";

    // Crear un nuevo Doctor
    $nuevoDoctor = new Doctor('nuevoDoc@example.com', 'docpass', 'Nuevo', 'Doctor', 'M', 40, 'Cardiología', 'Matutino', '0987654321', 'doc@example.com');
    $doctorDAO->nuevoDoctor($nuevoDoctor);
    echo "Doctor creado exitosamente.\n";

    // Leer un Doctor
    $doctorLeido = $doctorDAO->buscarUno(1);
    if ($doctorLeido) {
        echo "Doctor leído exitosamente:\n";
        print_r($doctorLeido);
    } else {
        echo "No se encontró el doctor.\n";
    }

    // Actualizar un Doctor
    $doctorLeido->nombreD = 'Nombre Doctor Actualizado';
    $doctorDAO->actualizar($doctorLeido);
    echo "Doctor actualizado exitosamente.\n";

    // Eliminar un Doctor
    $doctorDAO->eliminar(1);
    echo "Doctor eliminado exitosamente.\n";

    // Crear una nueva Consulta
    $nuevaConsulta = new Consulta('2024-07-01', 1, 1, 'Observaciones iniciales', 'Medicamentos iniciales');
    $consultaDAO = new ConsultaDAO($pdo);
    $consultaDAO->nuevaConsulta($nuevaConsulta);
    echo "Consulta creada exitosamente.\n";

    // Leer una Consulta
    $consultaLeida = $consultaDAO->buscarUno(1);
    if ($consultaLeida) {
        echo "Consulta leída exitosamente:\n";
        print_r($consultaLeida);
    } else {
        echo "No se encontró la consulta.\n";
    }

    // Actualizar una Consulta
    $consultaLeida->observaciones = 'Observaciones actualizadas';
    $consultaDAO->actualizar($consultaLeida);
    echo "Consulta actualizada exitosamente.\n";

    // Eliminar una Consulta
    $consultaDAO->eliminar(1);
    echo "Consulta eliminada exitosamente.\n";
    ?>

</body>
</html>