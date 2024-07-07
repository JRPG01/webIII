<?php
    try{
        include "../../connection/connection.php";
            
        $cons2 = $_POST["userC"];
        $cons3 = $_POST["passC"];
        $cons4 = $_POST["nombreC"];
        $cons5 = $_POST["apellidosC"];
        $cons6 = $_POST["sexoC"];
        $cons7 = $_POST["edadC"];
        $cons8 = $_POST["telefono"];

        $insert = "INSERT INTO clientes
       VALUES (null, '$cons2', '$cons3', '$cons4', '$cons5', '$cons6', '$cons7', '$cons8')";


        $query = mysqli_query($conQuery, $insert);
        
        header("Location: ../../view/tablaPacientes.php");
    }catch(Exception $e){
        echo $e;
    }
       
?>