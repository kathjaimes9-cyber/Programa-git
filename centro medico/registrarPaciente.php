<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Pacientes - Centro Médico</title>
    <!-- Estilo opcional basado en Bootstrap para que se vea ordenado -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px;">
        <h2>Formulario de Registro de Pacientes</h2>
        <form action="controladorPaciente.php" method="POST">
            <div class="form-group">
                <label>Identificación:</label>
                <input type="text" class="form-control" name="identificacion" required placeholder="Número de cédula">
            </div>
            
            <div class="form-group">
                <label>Nombres:</label>
                <input type="text" class="form-control" name="nombres" required placeholder="Nombres del paciente">
            </div>
            
            <div class="form-group">
                <label>Apellidos:</label>
                <input type="text" class="form-control" name="apellidos" required placeholder="Apellidos del paciente">
            </div>

            <div class="form-group">
                <label>Fecha de Nacimiento:</label>
                <input type="date" class="form-control" name="fechaNacimiento" required>
            </div>

            <div class="form-group">
                <label>Sexo:</label>
                <select class="form-control" name="sexo" required>
                    <option value="">Seleccione...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar Paciente</button>
        </form>
    </div>
</body>
</html>