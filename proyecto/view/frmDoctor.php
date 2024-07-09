<?php
// Recoger los datos enviados por el formulario
$idDoctor = isset($_POST['idDoctor']) ? $_POST['idDoctor'] : '0';
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
  
  <link rel="stylesheet" href="../css/estilos.css">

  <style>
    /* Estilo personalizado para la tabla */
    body {
      display: flex;
      flex-direction: column; 
      height: 100vh;
      background-color: black;
    }

    body::after {
      content: "";
      background: url("../img/fondo-form-doctores.jpg") no-repeat;
      background-size: cover;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      filter: blur(20px);
      z-index: -1;
    }
    
    .tabla {
      padding: 50px 0;
      margin: 100px 50px 50px 50px;
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 10px;
      box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.5);
    }
  </style>

</head>

<body>
  <header>
    <?php include "../tools/nav.php"; ?>
  </header>

  <div class="py-5 mt-6 tabla" style="flex-grow: 1;">
    <?php if ($_SESSION["doctor"]): ?>
      <div class="row justify-content-center align-item-center">
        <div class="col-7">
          <h2 class="mb-4 mt-4 p-4 bg-white text-center" style="box-shadow: 0 0 5px black; border-radius: 10px;">Registro Doctor</h2>
          <?php
              if($idDoctor!='0'){
                echo '<form action="../php/Doctor/actualizarDoctor.php" method="POST">';
                echo '<input type="hidden" id="idDoctor" name="idDoctor" value="'.$idDoctor.'"/>';
              }else{
                echo '<form action="../php/Doctor/nuevoDoctor.php" method="POST">';
              }
          ?>
            <div class="row mb-4">
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                  <label class="form-label" for="txtUsuario">Usuario</label>
                  <input type="text" id="txtUsuario" name="userD" class="form-control" placeholder="Ejem. Josue"
                    value="<?php echo htmlspecialchars($userD); ?>" />
                    <span id="obersavionesError" style="display: none;">Incorecto</span>
                </div>
              </div>
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                  <label class="form-label" for="txtPass">Contraseña</label>
                  <input type="text" id="txtPass" name="passD" class="form-control" placeholder="Ejem. Morales"
                    value="<?php echo htmlspecialchars($passD); ?>" />
                    <span id="obersavionesError1" style="display: none;">Incorecto</span>
                </div>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                  <label class="form-label" for="txtNombre">Nombre</label>
                  <input type="text" id="txtNombre" name="nombreD" class="form-control" placeholder="Ejem. Josue"
                    value="<?php echo htmlspecialchars($nombreD); ?>" />
                    <span id="obersavionesError2" style="display: none;">Incorecto</span>
                </div>
              </div>
              <div class="col">
                <div data-mdb-input-init class="form-outline">
                  <label class="form-label" for="txtApellido">Apellido</label>
                  <input type="text" id="txtApellido" name="apellidosD" class="form-control" placeholder="Ejem. Morales"
                    value="<?php echo htmlspecialchars($apellidosD); ?>" />
                    <span id="obersavionesError3" style="display: none;">Incorecto</span>
                </div>
              </div>
            </div>
            <div class="row mb-4">
              <div class="col">
                <label class="form-label" for="form6Example2">Sexo</label>
                <select class="form-select" name="sexoD" id= 'txtsexoD' aria-label="Default select example "
                  value="<?php echo htmlspecialchars($sexoD); ?>">
                  <option selected>Seleccione el sexo</option>
                  <option value="1" <?php if(htmlspecialchars($sexoD)=='F'){echo 'selected';} ?>>Femenino</option>
                  <option value="2" <?php if(htmlspecialchars($sexoD)=='M'){echo 'selected';} ?>>Masculino</option>
              </select>
              <span id="obersavionesError4" style="display: none;">Incorecto</span>
              </div>
              <div class="col">
                <div class="form-outline">
                  <label class="form-label" for="form6Example2">Edad</label>
                  <input type="number" name="edadD" id="txtedad" class="form-control"
                    value="<?php echo htmlspecialchars($edadD); ?>" />
                    <span id="obersavionesError5" style="display: none;">Incorecto</span>
                    </div>
              </div>
            </div>

            <div class="row mb-2">
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form6Example5">Especialidad</label>
                <input type="text" name="especialidad" id="txtEspecialidad" class="form-control"
                  placeholder="Ejem. Internista" value="<?php echo htmlspecialchars($especialidad); ?>" />
                  <span id="obersavionesError6" style="display: none;">Incorecto</span>
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form6Example2">Turno</label>
                <select class="form-select" id='txtTurno' aria-label="Default select example" name="turno"
                  value="<?php echo htmlspecialchars($turno); ?>">
                  <option selected>Seleccione Turno</option>
                  <option value="1" <?php if(htmlspecialchars($turno)=='Matutino'){echo 'selected';} ?>>Matutino</option>
                  <option value="2" <?php if(htmlspecialchars($turno)=='Vespertino'){echo 'selected';} ?>>Vespertino</option>
                  <option value="3" <?php if(htmlspecialchars($turno)=='Completo'){echo 'selected';} ?>>Completo</option>
                  <option value="4" <?php if(htmlspecialchars($turno)=='Nocturno'){echo 'selected';} ?>>Nocturno</option>
              </select>
              <span id="obersavionesError7" style="display: none;">Incorecto</span>
              </div>
            </div>
            <!-- Number input -->
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="form6Example6">Telefono</label>
              <input type="number" id="form6Example6" name="telefono" class="form-control" placeholder="Ejem. 4451125432"
                value="<?php echo htmlspecialchars($telefono); ?>" />
                <span id="obersavionesError8" style="display: none;">Incorecto</span>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
              <label class="form-label" for="form6Example6">Mail</label>
              <input type="mail" id="form6Example" name="correo" class="form-control" placeholder="Ejem. 4451125432"
                value="<?php echo htmlspecialchars($correo); ?>" />
                <span id="obersavionesError9" style="display: none;">Incorecto</span>
            </div>
            <!-- Submit button -->
            <div class="text-center d-flex flex-row justify-content-center align-item-center">
            <?php
                        if (htmlspecialchars($idDoctor)) { ?>
                            <button id="add" type="submit" class="btn btn-block mb-4 col-md-3 me-3"
                                style="background-color: #403D38; color:white;">Actualizar</button>;
                        <?php } else { ?>
                            <button id="add" type="submit" class="btn btn-block mb-4 col-md-3 me-3"
                                style="background-color: #403D38; color:white;">Registrar</button>;
                        <?php }
                        ?>
            <button type="button" class="btn btn-danger btn-block mb-4 col-md-3 ms-3" onclick="window.location.href='tablaDoctores.php'">Cancelar</button>
          </div>
          </form>
        </div>
      </div>
    <?php else: ?>
      <script >window.location.href= 'menupagina.php'</script>
    <?php endif; ?>
  </div>
  <script src="jsNuevoDoctor.js"></script>
</body>
<footer class="text-center" style=" z-index: 0;">
  <!-- Copyright -->
  <div class="text-center p-3 text-white" style="background-color: #403D38;">
    © 2024 Copyright:
    <a class="text-white" href="">ITSUR WEB III</a>
  </div>
  <!-- Copyright -->
</footer>

</html>