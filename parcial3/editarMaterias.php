<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Materia</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
        include 'menu.php'; 
        include 'conexion2.php';
        $id = $_GET["id"];
        $sql = "SELECT  * FROM materias WHERE id=".$id;

        $datos = $conexion->query($sql);
        $materia = $datos->fetch_assoc();
    ?> 

    <div class="container">
        <div class="row">
            <h2>Registrar Materia</h2>
            <div class="col-12 card m-4 p-4">
                <form action="actualizarMateria.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $materia["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" name="nombre" value="<?php echo $materia["nombre"]; ?>" class="form-control" placeholder="Teclea tu nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="">Semestre:</label>
                        <input type="number" name="semestre" value="<?php echo $materia["semestre"]; ?>" class="form-control" placeholder="Teclea tu semestre" required>
                    </div>
                    <div class="form-group">
                        <label for="">Especialidad:</label>
                        <select name="especialidad" class="form-control" required>
                            <option value="<?php echo $materia["especialidad"]; ?>"><?php echo $materia["especialidad"]; ?></option>
                            <option value="">Selecciona una especialidad</option>
                            <option value="Programacion">Programación</option>
                            <option value="Electronica">Electrónica</option>
                            <option value="Construccion">Construcción</option>
                            <option value="Contabilidad">Contabilidad</option>
                            <option value="Ofimatica">Ofimática</option>
                        </select>
                    </div><br>
                    <div>
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                        <a href="consultarMaterias.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>  
</body>
</html>