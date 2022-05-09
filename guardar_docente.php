<?php

include 'db.php';

$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$profesion = $_POST['profesion'];

$conexiondb = conectardb();

echo ("Se registro la persona.");

mysqli_close($conexiondb);