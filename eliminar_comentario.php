<?php
include 'conexion.php';

$id = $_GET['id'];

mysqli_query($conexion,"DELETE FROM comentarios WHERE id='$id'");

header("Location: admin_comentarios.php");
?>