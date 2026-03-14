<?php

include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$marca = $_POST['marca'];
$categoria = $_POST['categoria'];

$sql = "UPDATE productos 
SET nombre='$nombre',
precio='$precio',
marca='$marca',
categoria='$categoria'
WHERE id='$id'";

mysqli_query($conexion,$sql);

header("Location: admin.php");

?>