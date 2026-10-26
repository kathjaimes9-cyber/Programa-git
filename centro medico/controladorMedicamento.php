<?php
// 1. Incluimos el archivo de conexión y la clase Medicamento
include("conexionBaseDatos.php");
include("medicamento.php");

// 2. Capturamos los datos que vienen del formulario HTML mediante POST
$nombreMedicamento = $_POST['nombreMedicamento'];
$detallesMedicamento = $_POST['detallesMedicamento'];

// 3. Instanciamos la clase Medicamento y llamamos al método constructor
$objMedicamento = new Medicamento();
$objMedicamento->crearMedicamento(null, $nombreMedicamento, $detallesMedicamento);

// 4. Ejecutamos el método para agregar el medicamento a la base de datos
$resultado = $objMedicamento->agregarMedicamento();

// 5. Verificamos si se guardó correctamente y mostramos un mensaje
if ($resultado) {
    echo "<h3>¡Medicamento registrado con éxito en el Centro Médico!</h3>";
    echo "<a href='registrarMedicamento.php'>Registrar otro medicamento</a>";
} else {
    echo "<h3>Error al registrar el medicamento.</h3>";
}
?>