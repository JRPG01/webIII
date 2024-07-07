<?php
    // Recoger los datos enviados por el formulario
    $idConsulta = isset($_POST['idConsulta']) ? $_POST['idConsulta'] : '';
    $fechaCita = isset($_POST['fechaCita']) ? $_POST['fechaCita'] : '';
    $idCliente = isset($_POST['idCliente']) ? $_POST['idCliente'] : '';
    $idDoctor = isset($_POST['idDoctor']) ? $_POST['idDoctor'] : '';
    $observaciones = isset($_POST['observaciones']) ? $_POST['observaciones'] : '';
    $medicamentos = isset($_POST['medicamentos']) ? $_POST['medicamentos'] : '';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Citas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/estilosform.css">
</head>

<body>
    <header class="navbarfrm">
        <?php include "../tools/navForms.php"; ?>
    </header>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="mb-4 text-center">Registro Citas</h2>
                <form action="../php/Consulta/nuevaConsulta.php" method="POST">
                    <input type="hidden" name="idConsulta" value="<?php echo htmlspecialchars($idConsulta); ?>">
                    
                    <div class="form-group mb-4">
                        <label for="txtFechaCita">Fecha de cita</label>
                        <input type="date" name="fechaCita" id="txtFechaCita" class="form-control" value="<?php echo htmlspecialchars($fechaCita); ?>" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="txtObservaciones">Observaciones</label>
                        <input type="text" name="observaciones" id="txtObservaciones" class="form-control" placeholder="Ejem. Tiene congesion nasal" value="<?php echo htmlspecialchars($observaciones); ?>"required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="txtMedicamento">Medicamento</label>
                        <input type="text" name="medicamentos" id="txtMedicamento" class="form-control" placeholder="Ejem. Ambrosol" value="<?php echo htmlspecialchars($medicamentos); ?>"required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="txtIdCliente">Id Cliente</label>
                        <input type="text" name="idCliente" id="txtIdCliente" class="form-control" placeholder="Ejem. 1" value="<?php echo htmlspecialchars($idCliente); ?>"required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="txtIdDoctor">Id Doctor</label>
                        <input type="text" name="idDoctor" id="txtIdDoctor" class="form-control" placeholder="Ejem. 1" value="<?php echo htmlspecialchars($idDoctor); ?>"required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block col-md-7">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<footer class="bg-body-tertiary text-center footerCitas">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2024 Copyright:
        <a class="text-body" href="">ITSUR WEB III</a>
    </div>
    <!-- Copyright -->
</footer>

</html>