<?php

print_r($_POST);

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$cantidad = $_POST["cantidad"];
$categoria = $_POST["categoria"];

$servidor = "localhost";
$usuario = "root";
$clave = "";
//conectar con el servidor
$conexion = mysqli_connect($servidor, $usuario, $clave);

//mysqli_close($conexion); //cierra la conexión

$baseDatos = "tickets";
//seleccionar la base de datos
mysqli_select_db($conexion, $baseDatos);

$sql = "INSERT INTO compra_tickets VALUES(NULL, '$nombre', '$apellido', '$correo', '$cantidad', '$categoria')";
//ejecutar la consulta
$consulta = mysqli_query($conexion, $sql);
