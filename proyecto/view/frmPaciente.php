<?php
// Recoger los datos enviados por el formulario
$idCliente = isset($_POST['idCliente']) ? $_POST['idCliente'] : '0';
$userC = isset($_POST['userC']) ? $_POST['userC'] : '';
$passC = isset($_POST['passC']) ? $_POST['passC'] : '';
$nombreC = isset($_POST['nombreC']) ? $_POST['nombreC'] : '';
$apellidosC = isset($_POST['apellidosC']) ? $_POST['apellidosC'] : '';
$sexoC = isset($_POST['sexoC']) ? $_POST['sexoC'] : '';
$edadC = isset($_POST['edadC']) ? $_POST['edadC'] : '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
?>
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

  <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>
  <header>
    <?php include "../tools/nav.php"; ?>
  </header>
  <div class="container mt-5 py-5" style="flex-grow: 1;">
    <div class="row">
      <div class="col">
        <div class="text-center">
          <h2 class="mb-4">Registro Paciente</h2>
        </div>
        <?php
          if($idCliente!='0'){
            echo '<form action="../php/Cliente/actualizarCliente.php" method="POST">';
            echo '<input type="hidden" id="idCliente" name="idCliente" value="'.$idCliente.'"/>';
          }else{
            echo '<form action="../php/Cliente/nuevoCliente.php" method="POST">';
          }
            
          ?>
          <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="userC">Usuario</label>
                <input type="text" name="userC" id="userC" class="form-control" placeholder="Ejem. Josue"
                  value="<?php echo htmlspecialchars($userC); ?>" />
                  <span id="usuarioError" style="display: none;">Incorecto</span>
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="passC">Contraseña</label>
                <input type="text" name="passC" id="passC" class="form-control" placeholder="Ejem. Morales"
                  value="<?php echo htmlspecialchars($passC); ?>" />
                  <span id="contrasenaError" style="display: none;">Incorecto</span>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="nombreC">Nombre</label>
                <input type="text" name="nombreC" id="nombreC" class="form-control" placeholder="Ejem. Josue"
                  value="<?php echo htmlspecialchars($nombreC); ?>" />
                  <span id="nombreError" style="display: none;">Incorecto</span>
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="apellidosC">Apellido</label>
                <input type="text" name="apellidosC" id="apellidosC" class="form-control" placeholder="Ejem. Morales"
                  value="<?php echo htmlspecialchars($apellidosC); ?>" />
                  <span id="apellidoError" style="display: none;">Incorecto</span>
              </div>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col">
              <label class="form-label" for="form6Example2">Sexo</label>
              <select class="form-select" aria-label="Default select example" id="sexoC" name="sexoC"
                value="<?php echo htmlspecialchars($sexoC); ?>">
                <option selected>Seleccione el sexo</option>
                <option value="1" <?php if(htmlspecialchars($sexoC)=='F'){echo 'selected';} ?>>Femenino</option>
                <option value="2" <?php if(htmlspecialchars($sexoC)=='M'){echo 'selected';} ?>>Masculino</option>
              </select>
              <span id="sexoError" style="display: none;">Incorecto</span>
            </div>
            <div class="col">
              <div class="form-outline">
                <label class="form-label" for="form6Example2">Edad</label>
                <input type="number" name="edadC" id="edadC" class="form-control"
                  value="<?php echo htmlspecialchars($edadC); ?>" />
                  <span id="edadError" style="display: none;">Incorecto</span>
              </div>
            </div>
          </div>

          <!-- Number input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form6Example6">Telefono</label>
            <input type="number" name="telefono" id="telefono" class="form-control" placeholder="Ejem. 4551124365"
              value="<?php echo htmlspecialchars($telefono); ?>" />
              <span id="numeroError" style="display: none;">Incorecto</span>
          </div>
          <!-- Submit button -->
          <div class="text-center d-flex flex-row justify-content-center align-item-center">
          <?php
            if (htmlspecialchars($idCliente)) { ?>
                  <button id="add" type="submit" class="btn btn-block mb-4 col-md-3 me-3"
                    style="background-color: #403D38; color:white; display:Block;">Actualizar</button>
                  <?php } else { ?>
                  <button id="add" type="submit" class="btn btn-block mb-4 col-md-3 me-3"
                    style="background-color: #403D38; color:white; ">Registrar</button>
                  <?php }
          ?>
           <button type="button"  class="btn btn-danger btn-block mb-4 col-md-3 ms-3" onclick="window.location.href='tablaPacientes.php'">Cancelar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</body>
<script src="scriptNuevoCliente.js"></script>
<footer class="text-center" style=" z-index: 0;">
  <!-- Copyright -->
  <div class="text-center p-3 text-white" style="background-color: #403D38;">
    © 2024 Copyright:
    <a class="text-white" href="">ITSUR WEB III</a>
  </div>
  <!-- Copyright -->
</footer>

</html>