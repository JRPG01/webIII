<?php
    try{
        include "../../connection/connection.php";
            
        $cons2 = $_POST["userD"];
        $cons3 = $_POST["passD"];
        $cons4 = $_POST["nombreD"];
        $cons5 = $_POST["apellidosD"];
        $cons6 = $_POST["sexoD"];
        $cons7 = $_POST["edadD"];
        $cons8 = $_POST["especialidad"];
        $cons9 = $_POST["turno"];
        $cons10 = $_POST["telefono"];
        $cons11 = $_POST["correo"];

        $insert = "INSERT INTO doctor
       VALUES (null, '$cons2', '$cons3', '$cons4', '$cons5', '$cons6', '$cons7', '$cons8', '$cons9', '$cons10', '$cons11')";


        $query = mysqli_query($conQuery, $insert);
        
        header("Location: ../../view/tablaDoctores.php");
    }catch(Exception $e){
        echo $e;
    }
       
?>