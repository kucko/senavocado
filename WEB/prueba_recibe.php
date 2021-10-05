<?php

    require_once('conexion.php');
    echo "***Estamos reciendo tus datos******<br>";

    $device = $_GET['device_label'];
    $temperatura = $_GET['temperatura'];
    $humedad = $_GET['humedad'];
    $sensacion_termica = $_GET['sensacion_termica'];

    $conn = new conexion();

    $query = "SELECT * FROM device_state	WHERE idDevice = '$device'";
    $select = mysqli_query($conn->conectardb(),$query);    
    if($select->num_rows){

        $query = "UPDATE device_state SET temperatura = $temperatura, humedad = $humedad WHERE idDevice = '$device'";
        $update = mysqli_query($conn->conectardb(),$query);    
    
        $query = "INSERT INTO device_historic(idDevice, variable, valor, fecha) VALUES('$device','temperatura','$temperatura',NOW())";
        $insert = mysqli_query($conn->conectardb(),$query); 
    
        $query = "INSERT INTO device_historic(idDevice, variable, valor, fecha) VALUES('$device','humedad','$humedad',NOW())";
        $insert = mysqli_query($conn->conectardb(),$query);
    
        echo "Datos Registrados<br>";
        echo "{DEVICE:".$device.", Temperatura:".$temperatura.", Humedad:".$humedad."}";
    }
    else{
        echo "La tarjeta No existe<br>";


    }

 

?>