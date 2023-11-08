<?php

    include 'conexion2.php';

    $nombre = $_POST["nombre"];
    $semestre = $_POST["semestre"];
    $especialidad = $_POST["especialidad"];

    $sql = "INSERT INTO materias(nombre, semestre, especialidad) VALUES ('".$nombre."', ".$semestre.", '".$especialidad."')";

    if($conexion->query($sql) === TRUE){
        header("Location: consultarMaterias.php");
        $conexion->close();
        exit;
    }else{
        echo "<h2>Ocurrió un erro</h2> <p>Eror: " .$sql. "<br>" .$conexion->error. "</p>";
        echo "<h3><a href='consultarMaterias.php'>Regresar a materias</a></h3>";
    }

?>