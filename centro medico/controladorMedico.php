<?php
// 1. Incluimos el archivo de conexión y la clase Medico
include("conexionBaseDatos.php");
include("medico.php");

// 2. Capturamos los datos que vienen del formulario HTML mediante POST
$identificacion = $_POST['identificacion'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$especialidad = $_POST['especialidad'];
$consultorio = $_POST['consultorio'];

// 3. Instanciamos la clase Medico y llamamos al método constructor
$objMedico = new Medico();
$objMedico->crearMedico($identificacion, $nombres, $apellidos, $especialidad, $consultorio);

// 4. Ejecutamos el método para agregar el médico a la base de datos
$resultado = $objMedico->agregarMedico();

// 5. Verificamos si se guardó correctamente y mostramos un mensaje
if ($resultado) {
    echo "<h3>¡Médico registrado con éxito en el Centro Médico!</h3>";
    echo "<a href='registrarMedico.php'>Registrar otro médico</a>";
} else {
    echo "<h3>Error al registrar el médico.</h3>";
}
?>