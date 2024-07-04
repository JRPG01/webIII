<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Citas</title>
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
    crossorigin="anonymous"
  ></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="../css/estilosform.css">
</head>
<body>
    <header class="navbarfrm">
        <nav class="navbar bg-body-tertiary fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Hospital General</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Aqui se pone el nombre del usuario</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Doctores</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pasiente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Citas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">cerrar sesion</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
    </header>
    <body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <h2 class="mb-4 text-center">Registro Citas</h2>
                <form>
                    <div class="form-group mb-4">
                        <label for="txtFechaCita">Fecha de cita</label>
                        <input type="date" id="txtFechaCita" class="form-control">
                    </div>
                    <div class="form-group mb-4">
                        <label for="txtObservaciones">Observaciones</label>
                        <input type="text" id="txtObservaciones" class="form-control" placeholder="Ejem. Tiene congesion nasal">
                    </div>
                    <div class="form-group mb-4">
                        <label for="txtMedicamento">Medicamento</label>
                        <input type="text" id="txtMedicamento" class="form-control" placeholder="Ejem. Ambrosol">
                    </div>
                    <div class="text-center">
                    <button type="button" class="btn btn-primary btn-block col-md-7">Registrar</button>
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