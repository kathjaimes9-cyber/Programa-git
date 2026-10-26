<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Medicamentos - Centro Médico</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px;">
        <h2>Formulario de Registro de Medicamentos</h2>
        <form action="controladorMedicamento.php" method="POST">
            <div class="form-group">
                <label>Nombre del Medicamento:</label>
                <input type="text" class="form-control" name="nombreMedicamento" required placeholder="Ej: Acetaminofén">
            </div>
            <div class="form-group">
                <label>Detalles del Medicamento:</label>
                <textarea class="form-control" name="detallesMedicamento" rows="3" required placeholder="Dosis, concentración, indicaciones..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Medicamento</button>
        </form>
    </div>
</body>
</html>