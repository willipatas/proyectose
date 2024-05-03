<?php

include('conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$cedula = $_POST['cedula'];

$conectar = conn();
$sql = "INSERT INTO aprendices(nombre, apellido, telefono, correo, cedula) 
VALUES('$nombre', '$apellido','$telefono', '$correo', '$cedula')";

$resul = mysqli_query($conectar, $sql) or trigger_error(" query failed SQL-ERROR: ".mysqli_error($conectar), E_USER_ERROR);
echo"$sql";

?>