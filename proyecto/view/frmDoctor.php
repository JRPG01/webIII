<?php
    // Recoger los datos enviados por el formulario
    $userD = isset($_POST['userD']) ? $_POST['userD'] : '';
    $passD = isset($_POST['passD']) ? $_POST['passD'] : '';
    $nombreD = isset($_POST['nombreD']) ? $_POST['nombreD'] : '';
    $apellidosD = isset($_POST['apellidosD']) ? $_POST['apellidosD'] : '';
    $sexoD = isset($_POST['sexoD']) ? $_POST['sexoD'] : '';
    $edadD = isset($_POST['edadD']) ? $_POST['edadD'] : '';
    $especialidad = isset($_POST['especialidad']) ? $_POST['especialidad'] : '';
    $turno = isset($_POST['turno']) ? $_POST['turno'] : '';
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
    $correo = isset($_POST['correo']) ? $_POST['correo'] : '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Doctores</title>
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
    <div class="row">
      <div class="col">
        <h2 class="mb-5 text-center">Registro Doctor</h2>
        <form action="../php/Doctor/nuevoDoctor.php" method="POST">
        <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="txtNombre">Usuario</label>
                <input type="text" id="txtNombre" name="userD" class="form-control" placeholder="Ejem. Josue" value="<?php echo htmlspecialchars($userD); ?>" />
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="txtApellido">Contraseña</label>
                <input type="text" id="txtApellido" name="passD" class="form-control" placeholder="Ejem. Morales" value="<?php echo htmlspecialchars($passD); ?>"/>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="txtNombre">Nombre</label>
                <input type="text" id="txtNombre" name="nombreD" class="form-control" placeholder="Ejem. Josue" value="<?php echo htmlspecialchars($nombreD); ?>"/>
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="txtApellido">Apellido</label>
                <input type="text" id="txtApellido" name="apellidosD" class="form-control" placeholder="Ejem. Morales" value="<?php echo htmlspecialchars($apellidosD); ?>"/>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <label class="form-label" for="form6Example2">Sexo</label>
              <select class="form-select" name="sexoD" aria-label="Default select example " value="<?php echo htmlspecialchars($sexoD); ?>">
                <option selected>Seleccione el sexo</option>
                <option value="1">Femenino</option>
                <option value="2">Masculino</option>
                <option value="3">Otro</option>
              </select>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Edad</label>
                <input type="number" name="edadD" id="txtedad" class="form-control" value="<?php echo htmlspecialchars($edadD); ?>"/>
              </div>
            </div>
          </div>

          <div class="row mb-4">
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="form6Example5">Especialidad</label>
              <input type="text" name="especialidad" id="txtEspecialidad" class="form-control" placeholder="Ejem. Internista" value="<?php echo htmlspecialchars($especialidad); ?>"/>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="form6Example2">Turno</label>
              <select class="form-select" aria-label="Default select example" name="turno" value="<?php echo htmlspecialchars($turno); ?>">
                <option selected>Seleccione Turno</option>
                <option value="1">Matutino</option>
                <option value="2">Vespertino</option>
                <option value="3">Completo</option>
                <option value="4">Nocturno</option>
              </select>
            </div>
          </div>
          <!-- Number input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form6Example6">Telefono</label>
            <input type="number" id="form6Example6" name="telefono" class="form-control" placeholder="Ejem. 4451125432" value="<?php echo htmlspecialchars($telefono); ?>"/>
          </div>
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form6Example6">Mail</label>
            <input type="mail" id="form6Example6" name="correo" class="form-control" placeholder="Ejem. 4451125432" value="<?php echo htmlspecialchars($correo); ?>"/>
          </div>
          <!-- Submit button -->
          <div class="text-center mb-5">
            <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block col-md-7">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<footer class="bg-body-tertiary text-center">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-body" href="">ITSUR WEB III</a>
  </div>
  <!-- Copyright -->
</footer>

</html>