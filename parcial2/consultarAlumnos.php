<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar alumnos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
        include 'menu.php';
        include 'conexion2.php';

        $sql = "SELECT * FROM alumnos";
        $datos = $conexion->query($sql);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($datos->num_rows > 0){ ?>
                    <div class="table-responsive card m-4 p-2">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Número de control</th>
                                    <th>Semestre</th>
                                    <th>Edad</th>
                                    <th>Turno</th>
                                    <th>Sexo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($registro = $datos->fetch_assoc()){ ?>
                                    <tr>
                                        <td><?php echo $registro["id"]; ?></td>
                                        <td><?php echo $registro["nombre"]; ?></td>
                                        <td><?php echo $registro["numero_control"]; ?></td>
                                        <td><?php echo $registro["semestre"]; ?></td>
                                        <td><?php echo $registro["edad"]; ?></td>
                                        <td><?php echo $registro["turno"]; ?></td>
                                        <td><?php echo $registro["sexo"]; ?></td>
                                        <td>
                                            <a href="editarAlumnos.php?id=<?php echo $registro["id"]?>" class="btn btn-xs btn-primary">Editar</a>
                                            <a href="eliminarAlumno.php?id=<?php echo $registro["id"]?>" class="btn btn-xs btn-danger">Eliminar</a>
                                        </td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                <?php } else{ ?>
                    <h2 class="m-4">No Existe datos en alumnos en la base de datos</h2>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.js"></script>  
</body>
</html>