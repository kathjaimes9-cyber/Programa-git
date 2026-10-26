<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuarios - Centro Médico</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 30px;">
        <h2>Formulario de Registro de Usuarios</h2>
        <form action="controladorUsuario.php" method="POST">
            <div class="form-group">
                <label>Nombre de Usuario:</label>
                <input type="text" class="form-control" name="nombreUsuario" required placeholder="Ej: admin o jperez">
            </div>
            <div class="form-group">
                <label>Contraseña:</label>
                <input type="password" class="form-control" name="claveUsuario" required placeholder="Contraseña de acceso">
            </div>
            <div class="form-group">
                <label>Tipo de Usuario:</label>
                <select class="form-control" name="tipoUsuario" required>
                    <option value="">Seleccione...</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Medico">Médico</option>
                    <option value="Recepcionista">Recepcionista</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar Usuario</button>
        </form>
    </div>
</body>
</html>