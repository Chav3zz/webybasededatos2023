<?php

    $server     = "localhost";
    $user       = "root";
    $password   = "";
    $basedatos  = "cetis107";

    $conexion = new mysqli($server, $user, $password, $basedatos);

    if($conexion->connect_error){
        die("Falló la conexión" . $conexion->connect_error);
    }

?>