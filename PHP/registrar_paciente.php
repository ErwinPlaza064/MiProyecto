<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$telefono = $_POST["fecha"];
// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "123", "citas");
// Insertar datos del paciente en la tabla pacientes
$sql = "INSERT INTO citas_medicas(nombre, apellido, email, telefono, fecha) VALUES ('$nombre', '$apellido', '$email', '$telefono', '$fecha')";
mysqli_query($conexion, $sql);
// Cerrar la conexión a la base de datos
mysqli_close($conexion);
// Redirigir al usuario a la página de confirmación
header("Location: confirmacion.php");
?>