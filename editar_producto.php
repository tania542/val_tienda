<?php
include 'conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$resultado = mysqli_query($conexion,$sql);
$producto = mysqli_fetch_assoc($resultado);
?>

<h2>Editar Producto</h2>

<form action="actualizar_producto.php" method="POST">

<input type="hidden" name="id" value="<?php echo $producto['id']; ?>">

<input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>">

<input type="number" name="precio" value="<?php echo $producto['precio']; ?>">

<input type="text" name="marca" value="<?php echo $producto['marca']; ?>">

<input type="text" name="categoria" value="<?php echo $producto['categoria']; ?>">

<button type="submit">Actualizar</button>

</form>