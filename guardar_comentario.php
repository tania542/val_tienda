<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = mysqli_real_escape_string($conexion, $_POST['nombreUsuario']);
    $comentario = mysqli_real_escape_string($conexion, $_POST['textoComentario']);
    $id_producto = $_POST['id_producto'];

    $sql = "INSERT INTO comentarios (id_producto, nombre_usuario, texto_comentario)
            VALUES ('$id_producto', '$nombre', '$comentario')";

    mysqli_query($conexion, $sql);

    header("Location: " . $_SERVER['HTTP_REFERER']);
}
?>