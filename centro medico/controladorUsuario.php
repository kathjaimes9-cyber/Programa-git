<?php
// 1. Incluimos el archivo de conexión y la clase Usuario
include("conexionBaseDatos.php");
include("usuario.php");

// 2. Capturamos los datos que vienen del formulario HTML mediante POST
$nombreUsuario = $_POST['nombreUsuario'];
$claveUsuario = $_POST['claveUsuario'];
$tipoUsuario = $_POST['tipoUsuario'];

// 3. Instanciamos la clase Usuario y llamamos al método correspondiente
$objUsuario = new Usuario();
$objUsuario->crearUsuario(null, $nombreUsuario, $claveUsuario, $tipoUsuario);

// 4. Ejecutamos el método para agregar el usuario a la base de datos
$resultado = $objUsuario->agregarUsuario();

// 5. Verificamos si se guardó correctamente y mostramos un mensaje
if ($resultado) {
    echo "<h3>¡Usuario registrado con éxito en el Centro Médico!</h3>";
    echo "<a href='registrarUsuario.php'>Registrar otro usuario</a>";
} else {
    echo "<h3>Error al registrar el usuario.</h3>";
}
?>