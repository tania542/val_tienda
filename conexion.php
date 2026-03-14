<?php
// Configuración de la base de datos
$servidor = "localhost";
$usuario  = "root"; // Usuario por defecto en XAMPP
$password = "";     // Por defecto XAMPP no tiene contraseña
$db       = "tienda_val";

$conexion = mysqli_connect($servidor, $usuario, $password, $db);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>