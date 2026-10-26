<?php
// 1. Incluimos el archivo de conexión y la clase Consultorio
include("conexionBaseDatos.php");
include("consultorio.php");

// 2. Capturamos los datos que vienen del formulario HTML mediante POST
$nombreConsultorio = $_POST['nombreConsultorio'];
$estadoConsultorio = $_POST['estadoConsultorio'];

// 3. Instanciamos la clase Consultorio y llamamos al método constructor
$objConsultorio = new Consultorio();
$objConsultorio->crearConsultorio(null, $nombreConsultorio, $estadoConsultorio);

// 4. Ejecutamos el método para agregar el consultorio a la base de datos
$resultado = $objConsultorio->agregarConsultorio();

// 5. Verificamos si se guardó correctamente y mostramos un mensaje
if ($resultado) {
    echo "<h3>¡Consultorio registrado con éxito en el Centro Médico!</h3>";
    echo "<a href='registrarConsultorio.php'>Registrar otro consultorio</a>";
} else {
    echo "<h3>Error al registrar el consultorio.</h3>";
}
?>
