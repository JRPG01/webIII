<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Tabla de Datos</title>
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
    .tabla {
      margin-top: 75px;
    }

    .table-light-blue {
      background-color: #e6f7ff;
      /* Azul claro */
    }

    /* Cambio de color al pasar el cursor sobre una celda */
    .table-light-blue tbody tr:hover {
      background-color: #b3d9ff;
      /* Azul más oscuro */
    }
  </style>
</head>

<body>
  <header>
    <?php include "../tools/nav.php"; ?>
  </header>
  <div class="container mt-6 tabla">
    <div>
      <h2 class="text-center">Datos del Paciente</h2>
    </div>
    <button class="btn btn-success btn-sm mb-4" onclick="addPaciente()">Agregar</button>
    <div class="table-responsive">
      <table class="table table-light-blue table-bordered">
        <thead class="thead-dark">
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>Teléfono</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <!-- Ejemplo de fila -->
          <tr>
            <td>Juan</td>
            <td>Pérez</td>
            <td>Masculino</td>
            <td>27</td>
            <td>555-123-4567</td>
            <td>
              <button class="btn btn-danger btn-sm">Eliminar</button>
              <button class="btn btn-primary btn-sm">Actualizar</button>
            </td>
          </tr>
          <!-- Agrega más filas según tus datos -->
        </tbody>
      </table>
    </div>
  </div>

  <!-- Scripts de Bootstrap y otros -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="../js/jsTablaPaciente.js"></script>
</body>
<footer class="text-center fixed-bottom" style=" z-index: 0;">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a data-mdb-ripple-init class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!"
        role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i
          class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i
          class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i
          class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i
          class="fab fa-linkedin-in"></i></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 text-white" style="background-color: #403D38;">
    © 2024 Copyright:
    <a class="text-white" href="">ITSUR WEB III</a>
  </div>
  <!-- Copyright -->
</footer>

</html>