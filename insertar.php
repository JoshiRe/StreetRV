<?php 
$usuario = "root";
$contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
$servidor = "localhost";
$basededatos = "streetRV";

$conexion = mysqli_connect( $servidor, $usuario, "",$basededatos ) or die ("No se ha podido conectar al servidor de Base de datos");

	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$comentario=$_POST['comentario'];

	$sql = "INSERT INTO contacto( nombre, email, comentario) 
	VALUES ('$nombre','$email','$comentario')";
	if (mysqli_query($conexion, $sql)) {
		
	} 
	else {
		
	}
	mysqli_close($conexion);
?>