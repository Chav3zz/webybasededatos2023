<?php
    include 'conexion2.php';

    $nombre = $_POST["nombre"];
    $numero_control = $_POST["nc"];
    $semestre = $_POST["semestre"];
    $edad = $_POST["edad"];
    $turno = $_POST["turno"];
    $sexo = $_POST["sexo"];

    $sql = "INSERT INTO alumnos(nombre, numero_control, semestre, edad, turno, sexo) VALUES ('".$nombre."','".$numero_control."',".$semestre.",".$edad.",'".$turno."',".$sexo.")";

    if($conexion->query($sql) === TRUE){
        header("Location: consultarAlumnos.php");
    }else{
        echo "<h2>Ocurrió un erro</h2> <p>Eror: " .$sql. "<br>" .$conexion->error. "</p>";
        echo "<h3><a href='consultarAlumnos.php'>Regresar a alumnos</a></h3>";
    }
?>