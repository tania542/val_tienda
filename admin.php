<?php
include 'conexion.php';
// Consultamos los productos actuales para mostrarlos en una lista
$productos = mysqli_query($conexion, "SELECT * FROM productos");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Admin VAL - Gestión</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; padding: 20px; }
        .container { max-width: 900px; margin: auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h1 { color: #414e5e; border-bottom: 2px solid #fee3b6; padding-bottom: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #414e5e; color: #fee3b6; }
        .btn-add { background: #28a745; color: white; padding: 10px; text-decoration: none; border-radius: 4px; display: inline-block; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sistema de Administración VAL</h1>
        
        <h3>1. Agregar Nuevo Producto</h3>
        <form action="insertar_producto.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="number" name="precio" placeholder="Precio" required>
            <input type="text" name="marca" placeholder="Marca">
            <input type="file" name="imagen" required>
            <button type="submit">Subir a la Base de Datos</button>
        </form>

        <h3>2. Inventario Actual</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Acciones</th>
            </tr>
            <?php while($p = mysqli_fetch_assoc($productos)) { ?>
            <tr>
                <td><?php echo $p['id']; ?></td>
                <td><?php echo $p['nombre']; ?></td>
                <td>$<?php echo number_format($p['precio'], 0, ',', '.'); ?></td>
                <td><?php echo $p['marca']; ?></td>
                <td>
                    <a href="eliminar.php?id=<?php echo $p['id']; ?>" style="color:red;">Eliminar</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>