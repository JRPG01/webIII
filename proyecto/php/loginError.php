<?php
$user = isset($_POST["user"]) ? $_POST["user"] : "123456789";
$pass = isset($_POST["pass"]) ? $_POST["pass"] : "123456789";

if (!preg_match("/^[A-Za-z0-9]{8,12}$/", $user)){
    echo '
        <div style="background-color: rgb(230, 230, 230);">
            <span style="color: red;">
                <h5>contraseña incorrecta: deben tener entre 8 y 12 caracteres alfanuméricos.</h5>
            </span>
        </div>
    ';
} else if (!preg_match("/^[A-Za-z0-9]{8,12}$/", $pass)){
    echo '
        <div style="background-color: rgb(230, 230, 230);">
            <span style="color: red;">
                <h5>contraseña incorrecta: deben tener entre 8 y 12 caracteres alfanuméricos.</h5>
            </span>
        </div>
    ';
} 


?>