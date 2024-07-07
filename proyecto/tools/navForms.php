<?php

session_start();
$tipo = isset($_SESSION["doctor"]) ? $_SESSION["doctor"] : false;

?>

<nav class="navbar bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Hospital General</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                    <?php echo $_SESSION["nomUser"]; ?>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <?php if($_SESSION["doctor"]): ?>
                        <a class="nav-link" href="#" onclick="showDoctores()">Doctores</a>
                        <?php else: ?>
                        <a class="nav-link disabled" href="#" onclick="showDoctores()">Doctores</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showPaciente()">Paciente</a>
                    </li>
                    <li class="nav-item">
                        <?php if($_SESSION["doctor"]): ?>
                        <a class="nav-link" href="#" onclick="showCitas()">Citas</a>
                        <?php else: ?>
                        <a class="nav-link disabled" href="#" onclick="showCitas()">Citas</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showLogin()">cerrar sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<script src="../js/JsMenu.js"></script>