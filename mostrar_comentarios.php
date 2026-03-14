<?php
include 'conexion.php';

if(isset($id_producto)){

$sql = "SELECT * FROM comentarios 
        WHERE id_producto='$id_producto' 
        ORDER BY fecha DESC";

$resultado = mysqli_query($conexion,$sql);

while($comentario = mysqli_fetch_assoc($resultado)){
?>

<div style="border-bottom:1px solid #ddd; margin-bottom:10px; padding:5px;">

<strong><?php echo $comentario['nombre_usuario']; ?></strong><br>

<p><?php echo $comentario['texto_comentario']; ?></p>

<small><?php echo $comentario['fecha']; ?></small>

</div>

<?php
}

}
?>