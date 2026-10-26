<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Médicos - Centro Médico</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px;">
        <h2>Formulario de Registro de Médicos</h2>
        <form action="controladorMedico.php" method="POST">
            <div class="form-group">
                <label>Identificación:</label>
                <input type="text" class="form-control" name="identificacion" required placeholder="Cédula del médico">
            </div>
            <div class="form-group">
                <label>Nombres:</label>
                <input type="text" class="form-control" name="nombres" required placeholder="Nombres">
            </div>
            <div class="form-group">
                <label>Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" required placeholder="Apellidos">
            </div>
            <div class="form-group">
                <label>Especialidad:</label>
                <input type="text" class="form-control" name="especialidad" required placeholder="Ej: Pediatría, General...">
            </div>
            <div class="form-group">
                <label>Consultorio:</label>
                <input type="text" class="form-control" name="consultorio" required placeholder="Número o nombre del consultorio">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Médico</button>
        </form>
    </div>
</body>
</html>