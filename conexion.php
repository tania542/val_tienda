<?php
// Configuración de la base de datos
$servidor = "localhost";
$usuario  = "root"; // Usuario por defecto en XAMPP
$password = "";     // Por defecto XAMPP no tiene contraseña
$db       = "tienda_val";

// Crear la conexión
$conexion = mysqli_connect($servidor, $usuario, $password, $db);

// Verificar si la conexión falló
if (!$conexion) {
    die("Error al conectar con la base de datos: " . mysqli_connect_error());
}

// Configurar para que acepte tildes y Ñ desde la base de datos
mysqli_set_charset($conexion, "utf8");
?>