<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $marca  = $_POST['marca'];
    
    // Gestión de la imagen
    $nombre_img = $_FILES['imagen']['name'];
    $ruta_temp  = $_FILES['imagen']['tmp_name'];
    $destino    = "img/" . $nombre_img;

    if (move_uploaded_file($ruta_temp, $destino)) {
        $sql = "INSERT INTO productos (nombre, precio, marca, imagen) 
                VALUES ('$nombre', '$precio', '$marca', '$nombre_img')";
        
        if (mysqli_query($conexion, $sql)) {
            header("Location: admin.php?success=1");
        } else {
            echo "Error: " . mysqli_error($conexion);
        }
    }
}
?>