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
    body {
      display: flex;
      flex-direction: column; 
      height: 100vh;
      background-color: black;
    }

    body::after {
      content: "";
      background: url("../img/fondo-citas.jpg") no-repeat;
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
      height:auto; 
      justify-content:center; 
      align-items:center; 
      display:flex; 
      flex-wrap:wrap;
      margin-top: 50px;
      padding: 50px 0;
      margin: 100px 50px 50px 50px;
      background-color: rgba(255, 255, 255, 0.5);
      border-radius: 10px;
      box-shadow: 0 0 5px 1px rgba(0, 0, 0, 0.5);
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
  <div class="mt-6 tabla d-flex flex-column justify-content-start align-items-center" style="flex-grow: 1;">
    <?php if ($_SESSION["doctor"]): ?>
      <div class="d-flex flex-row justify-content-start align-item-start pb-5">
        <h2 class="text-center px-3">Datos de las Citas</h2>
        <button class="btn p-0 d-flex justify-content-center align-item-center" style="width: 50px; background-color: #403D38; color:white;" onclick="addCitas()">
          <h2 class="p-0">+</h2>
        </button>
      </div>
      <div class="table-responsive px-5">
        <?php include "../tablas/tablaC.php"; ?>
      </div>
    <?php else: ?>
      <script >window.location.href= 'menupagina.php'</script>
    <?php endif; ?>
  </div>

  <!-- Scripts de Bootstrap y otros -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="../js/jsTablaCitas.js"></script>
</body>

<footer class="text-center" style=" z-index: 0;">
  <!-- Grid container -->
  <div class="container p-2 pb-0">
    <!-- Section: Social media -->
    <!-- Section: Social media -->
    <section class="mb-2">
      <!-- Facebook -->
      <a data-mdb-ripple-init class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="https://www.facebook.com/share/r/Ugdm3bonXXC5Kndb/?mibextid=oFDknk"
        role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="https://x.com/weirddalle/status/1809603211403374841?t=EqC64-GOJqjfhPkfXC8YzA&s=08" role="button"><i
          class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="https://x.com/ghost_v52/status/1810030017545752922?t=NabtkSo0q9QeaSuR0Q_Qig&s=08" role="button"><i
          class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="https://www.instagram.com/reel/C8sJKYcJ3mJ/?igsh=NTc4MTIwNjQ2YQ==" role="button"><i
          class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="https://x.com/ghost_v52/status/1810030017545752922?t=NabtkSo0q9QeaSuR0Q_Qig&s=08 role="button"><i
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