<?php
// 1. Incluimos el archivo de conexión y la clase Paciente
include("conexionBaseDatos.php");
include("paciente.php");

// 2. Capturamos los datos que vienen del formulario HTML mediante POST
$identificacion = $_POST['identificacion'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$sexo = $_POST['sexo'];

// 3. Instanciamos la clase Paciente y llamamos al método constructor
$objPaciente = new Paciente();
$objPaciente->crearPaciente($identificacion, $nombres, $apellidos, $fechaNacimiento, $sexo);

// 4. Ejecutamos el método para agregar el paciente a la base de datos
$resultado = $objPaciente->agregarPaciente();

// 5. Verificamos si se guardó correctamente y mostramos un mensaje
if ($resultado) {
    echo "<h3>¡Paciente registrado con éxito en el Centro Médico!</h3>";
    echo "<a href='registrarPaciente.php'>Registrar otro paciente</a>";
} else {
    echo "<h3>Error al registrar el paciente.</h3>";
}
?>