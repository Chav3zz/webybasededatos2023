<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar materia</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12 card p-4">
                <form action="guardarMateria.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Teclea la materia">
                    </div>
                    <div class="form-group">
                        <label for="semestre">Semestre:</label>
                        <input type="number" class="form-control" name="semestre" placeholder="Teclea el semestre">
                    </div>
                    <div class="form-group">
                        <label for="">Especialidad:</label>
                        <select name="especialidad" class="form-control">
                            <option value="">Selecciona una especialidad</option>
                            <option value="programacion">Programación</option>
                            <option value="electronica">Electrónica</option>
                            <option value="construccion">Construcción</option>
                            <option value="contabilidad">Contabilidad</option>
                            <option value="ofimatica">Ofimática</option>
                        </select>
                    </div><br>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        <a href="consultarMaterias.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>