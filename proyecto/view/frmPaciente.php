<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Pacientes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
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
        <div class="text-center">
          <h2 class="mb-4">Registro Paciente</h2>
        </div>
        <form action="../php/cliente/nuevoCliente.php" method="POST">
        <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="txtNombre">Usuario</label>
                <input type="text" name="userC" id="txtNombre" class="form-control" placeholder="Ejem. Josue" />
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="txtApellido">Contraseña</label>
                <input type="text" name="passC" id="txtApellido" class="form-control" placeholder="Ejem. Morales" />
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="txtNombre">Nombre</label>
                <input type="text" name="nombreC" id="txtNombre" class="form-control" placeholder="Ejem. Josue" />
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="txtApellido">Apellido</label>
                <input type="text" name="apellidosC" id="txtApellido" class="form-control" placeholder="Ejem. Morales" />
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <label class="form-label" for="form6Example2">Sexo</label>
              <select class="form-select" aria-label="Default select example" name="sexoC">
                <option selected>Seleccione el sexo</option>
                <option value="1">Femenino</option>
                <option value="2">Masculino</option>
                <option value="3">Otro</option>
              </select>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Edad</label>
                <input type="number" name="edadC" id="txtedad" class="form-control" />
              </div>
            </div>
          </div>

          <!-- Number input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form6Example6">Telefono</label>
            <input type="number" name="telefono" id="form6Example6" class="form-control" placeholder="Ejem. 4551124365" />
          </div>
          <!-- Submit button -->
          <div class="text-center">
            <button data-mdb-ripple-init type="submit"
              class="btn btn-primary btn-block mb-4 col-md-7">Registrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
<footer class="bg-body-tertiary text-center footerPaciente">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-body" href="">ITSUR WEB III</a>
  </div>
  <!-- Copyright -->
</footer>

</html>