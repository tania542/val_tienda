<?php
include 'conexion.php'; // Traemos la conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturamos los datos del formulario (los "id" o "name" del HTML)
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombreUsuario']);
    $comentario = mysqli_real_escape_string($conexion, $_POST['textoComentario']);
    
    // IMPORTANTE: Aquí deberías tener el ID del producto. 
    // Por ahora pondremos 1 como ejemplo, luego lo haremos dinámico.
    $id_producto = 1; 

    $sql = "INSERT INTO comentarios (id_producto, nombre_usuario, texto_comentario) 
            VALUES ('$id_producto', '$nombre', '$comentario')";

    if (mysqli_query($conexion, $sql)) {
        // Si sale bien, regresa a la página del producto
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
}
?>