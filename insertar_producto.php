<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id     = $_POST['ID'];
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $marca  = $_POST['marca'];
    $categoria   = $_POST['Categoria'];

    // Imagen
    $nombre_img = $_FILES['imagen']['name'];
    $ruta_temp  = $_FILES['imagen']['tmp_name'];
    $destino    = "img/" . $nombre_img;

    move_uploaded_file($ruta_temp, $destino);

    $sql = "INSERT INTO productos (id, nombre, precio, marca, categoria, imagen) 
            VALUES ('$id', '$nombre', '$precio', '$marca', '$Categoria', '$nombre_img')";

    if (mysqli_query($conexion, $sql)) {
        header("Location: admin.php?success=1");
        exit();
    } else {
        echo "Error: " . mysqli_error($conexion);
    }
}
?>