<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  
  <link rel="stylesheet" href="../css/estilos.css">

</head>

<body>
  <header>
    <nav class="navbar fixed-top" style="background-color: #736151; padding-left: 30px;">
      <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Hospital General</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end border-0 w-auto" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Aqui se pone el nombre del usuario</h5>
            <button type="button" class="btn-close ms-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body p-0 pt-5">
            <ul class="navbar-nav justify-content-end flex-grow-1 w-auto">
              <li class="nav-item w-auto">
                <a class="nav-link text-white" href="#">Paciente</a>
              </li>
              <li class="nav-item w-auto">
                <a class="nav-link text-white" href="#">Citas</a>
              </li>
              <li class="nav-item w-auto">
                <a class="nav-link text-white" href="#">Doctores</a>
              </li>
              <li class="nav-item w-auto">
                <a class="nav-link text-white" href="#">Cerrar Sesion</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <!--Aqui comienza el cuerpo-->
  <div style="flex-grow: 1; display:flex; align-items:center; justify-content: center;">
    <div class="tarjetas">

      <div class="card">
        <div class="card-inner">
          <div class="card-front">
            <h2>Pacientes</h2>
          </div>
          <div class="card-back">
            <h2>Pacientes</h2>
            <p>Manejo y administración de los pacientes</br>(Se recomienda discresión)</p>
            <button class="button">Ver</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-inner">
          <div class="card-front">
            <h2>Citas</h2>
          </div>
          <div class="card-back">
            <h2>Citas</h2>
            <p>Manejo y registro de las citas</p>
            <button class="button">Ver</button>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-inner">
          <div class="card-front">
            <h2>Doctores</h2>
          </div>
          <div class="card-back">
            <h2>Doctores</h2>
            <p>Manejo y administración de los doctores</br>(Advertencia: datos delicados)</p>
            <button class="button">Ver</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<footer class="text-center" style=" z-index: 0;">
  <!-- Grid container -->
  <div class="container p-2 pb-0">
    <!-- Section: Social media -->
    <section class="mb-2">
      <!-- Facebook -->
      <a data-mdb-ripple-init class="btn text-white btn-floating m-1" style="background-color: #3b5998;" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

      <!-- Twitter -->
      <a class="btn text-white btn-floating m-1" style="background-color: #55acee;" href="#!" role="button"><i class="fab fa-twitter"></i></a>

      <!-- Google -->
      <a class="btn text-white btn-floating m-1" style="background-color: #dd4b39;" href="#!" role="button"><i class="fab fa-google"></i></a>

      <!-- Instagram -->
      <a class="btn text-white btn-floating m-1" style="background-color: #ac2bac;" href="#!" role="button"><i class="fab fa-instagram"></i></a>

      <!-- Linkedin -->
      <a class="btn text-white btn-floating m-1" style="background-color: #0082ca;" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>
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