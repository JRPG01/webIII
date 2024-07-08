<?php

session_start();
$tipo = isset($_SESSION["doctor"]) ? $_SESSION["doctor"] : false;

?>

<nav class="navbar fixed-top" style="background-color: #736151; padding-left: 30px;">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">Hospital General</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
            aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end border-0 w-auto" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">
                    <?php echo $_SESSION["nomUser"]; ?>
                </h5>
                <button type="button" class="btn-close ms-4" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body p-0 pt-5">
                <ul class="navbar-nav justify-content-end flex-grow-1 w-auto">
                    <li class="nav-item w-auto">
                    <?php if ($_SESSION["doctor"]): ?>
                            <a class="nav-link text-white" href="#" onclick="showPaciente()">Paciente</a>
                        <?php else: ?>
                            <a class="nav-link text-white disabled" href="#" onclick="showPaciente()">Paciente</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item w-auto">
                        <a class="nav-link text-white" href="#" onclick="showCitas()">Citas</a>
                    </li>
                    <li class="nav-item w-auto">
                        <?php if ($_SESSION["doctor"]): ?>
                            <a class="nav-link text-white" href="#" onclick="showDoctores()">Doctores</a>
                        <?php else: ?>
                            <a class="nav-link text-white disabled" href="#" onclick="showDoctores()">Doctores</a>
                        <?php endif; ?>
                    </li>
                    <li class="nav-item w-auto">
                        <a class="nav-link text-white" href="#" onclick="showLogin()">Cerrar Sesion</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<script src="../js/JsMenu.js"></script>