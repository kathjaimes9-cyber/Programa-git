<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Consultorios - Centro Médico</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px;">
        <h2>Formulario de Registro de Consultorios</h2>
        <form action="controladorConsultorio.php" method="POST">
            <div class="form-group">
                <label>Nombre del Consultorio:</label>
                <input type="text" class="form-control" name="nombreConsultorio" required placeholder="Ej: Consultorio 101">
            </div>
            <div class="form-group">
                <label>Estado del Consultorio:</label>
                <select class="form-control" name="estadoConsultorio" required>
                    <option value="">Seleccione...</option>
                    <option value="Disponible">Disponible</option>
                    <option value="Ocupado">Ocupado</option>
                    <option value="Mantenimiento">Mantenimiento</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Consultorio</button>
        </form>
    </div>
</body>
</html>