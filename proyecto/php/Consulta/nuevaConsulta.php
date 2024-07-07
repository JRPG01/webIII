<?php
    try{
        include "../../connection/connection.php";
            
        $cons2 = $_POST["fechaCita"];
        $cons3 = $_POST["idCliente"];
        $cons4 = $_POST["idDoctor"];
        $cons5 = $_POST["observaciones"];
        $cons6 = $_POST["medicamentos"];

        $insert = "INSERT INTO consultas
       VALUES (null, '$cons2', '$cons3', '$cons4', '$cons5', '$cons6')";


        $query = mysqli_query($conQuery, $insert);
        
        header("Location: ../../view/tablaDoctores.php");
    }catch(Exception $e){
        echo $e;
    }
       
?>