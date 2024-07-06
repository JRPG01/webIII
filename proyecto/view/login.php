<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Hospital General</title>

  <link rel="stylesheet" href="../css/estiloslogin.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  
</head>

<body class="bg-black">
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem; height: 40rem; border: 0px">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://d2lcsjo4hzzyvz.cloudfront.net/blog/wp-content/uploads/2019/12/Servicio-de-oritencio%CC%81n-me%CC%81dica--413x455.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 40rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form method="POST" action="../php/login/loginAccess.php">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <span class="h1 fw-bold mb-0">Hospital General</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px">
                      Iniciar Sesion
                    </h5>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="form2Example17">Usuario</label>
                      <input type="text" id="user" name="user" class="form-control form-control-lg border border-3" maxlength="12" required />
                      <span id="wrongUser" style="display: none">Usuario incorrecto</span>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <label class="form-label" for="form2Example27">Contraseña</label>
                      <input type="password" id="pass" name="pass" class="form-control form-control-lg border border-3" maxlength="12"  required />
                      <span id="wrongPass" style="display: none">Contraseña incorrecta</span>
                    </div>

                    <div class="pt-5 mb-4 d-flex justify-content-center align-items-center">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-lg btn-block text-white" style="width: 200px; background-color:#403D38" type="submit"> Login </button>
                    </div>


                    <?php
                    session_start();
                    $error = isset($_SESSION["login"]) ? $_SESSION["login"] : 0;
                    if ($error == 1) {
                      echo '
                          <div class="errores">
                              <span style="color: red;">
                                  <h5>Estructura incorrecta de ususario:  deben tener de 8 a 12 caracteres alfanuméricos.</h5>
                              </span>
                          </div>
                      ';
                    } else if ($error == 2) {
                      echo '
                          <div class="errores">
                              <span style="color: red;">
                                  <h5>Estructura incorrecta de contraseña: deben tener de 8 a 12 caracteres alfanuméricos.</h5>
                              </span>
                          </div>
                      ';
                    } else if ($error == 3) {
                      echo '
                          <div class="errores">
                              <span style="color: red;">
                                  <h5>Usuario y/o contraseña invalidos.</h5>
                              </span>
                          </div>
                      ';
                    }
                    ?>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>