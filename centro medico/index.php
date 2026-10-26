<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistema Centro Médico - Menú Principal</title>
    <!-- Estilos de Bootstrap para que se vea profesional -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <div class="jumbotron text-center">
            <h1>Sistema de Gestión "Centro Médico"</h1>
            <p>Plataforma desarrollada bajo arquitectura Modelo-Vista-Controlador (MVC) y POO</p>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">Menú de Módulos de Registro</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <a href="registrarPaciente.php" class="list-group-item">
                                <h4 class="list-group-item-heading"><strong>Módulo de Pacientes</strong></h4>
                                <p class="list-group-item-text">Registrar información personal y datos clínicos de los pacientes.</p>
                            </a>
                            <a href="registrarMedico.php" class="list-group-item">
                                <h4 class="list-group-item-heading"><strong>Módulo de Médicos</strong></h4>
                                <p class="list-group-item-text">Registrar el personal médico, especialidades y consultorio asignado.</p>
                            </a>
                            <a href="registrarConsultorio.php" class="list-group-item">
                                <h4 class="list-group-item-heading"><strong>Módulo de Consultorios</strong></h4>
                                <p class="list-group-item-text">Gestionar los consultorios disponibles y sus estados actuales.</p>
                            </a>
                            <a href="registrarMedicamento.php" class="list-group-item">
                                <h4 class="list-group-item-heading"><strong>Módulo de Medicamentos</strong></h4>
                                <p class="list-group-item-text">Administrar el inventario y detalles farmacéuticos.</p>
                            </a>
                            <a href="registrarUsuario.php" class="list-group-item">
                                <h4 class="list-group-item-heading"><strong>Módulo de Usuarios</strong></h4>
                                <p class="list-group-item-text">Crear credenciales de acceso al sistema para administradores y personal.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>