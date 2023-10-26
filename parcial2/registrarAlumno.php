<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar alumno</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php include 'menu.php'; ?>    
    <div class="container">
        <div class="row">
            <h2>Registrar Alumno</h2>
            <div class="col-12 card m-4 p-4">
                <form action="guardarRegistro.php" method="POST">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" placeholder="Teclea tu nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="">Número de control:</label>
                        <input type="text" name="nc" class="form-control" placeholder="Teclea tu número de control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Semestre:</label>
                        <input type="number" name="semestre" class="form-control" placeholder="Teclea tu semestre" required>
                    </div>
                    <div class="form-group">
                        <label for="">Edad:</label>
                        <input type="number" name="edad" class="form-control" placeholder="Teclea tu edad" required>
                    </div>
                    <div class="form-group">
                        <label for="">Turno:</label>
                        <select name="turno" class="form-control" required>
                            <option value="">Selecciona el turno</option>
                            <option value="Matutino">Matutino</option>
                            <option value="Vespertino">Vespertino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Sexo:</label>
                        <select name="sexo" class="form-control" required>
                            <option value="">Selecciona el sexo</option>
                            <option value="0">Femenino</option>
                            <option value="1">Masculino</option>
                            <option value="2">Prefiero no responder</option>
                        </select>
                    </div><br>
                    <div>
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a href="consultarAlumnos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>  
</body>
</html>