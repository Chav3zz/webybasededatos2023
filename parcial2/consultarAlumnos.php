<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include 'menu.php';
        include 'conexion2.php';

        $sql = "SELECT * FROM alumnos";
        $datos = $conexion -> query($sql);
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if($datos->num_rows > 0){ ?>

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

                        </tbody>
                    </table>

                <?php } else{ ?>
                    <h2>No Existe datos en alumnos en la base de daatos</h2>
                <?php } ?>
            </div>
        </div>
    </div>
    
</body>
</html>