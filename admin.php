<?php

include 'conexion.php';
// Consultamos los productos actuales para mostrarlos en una lista
$productos = mysqli_query($conexion, "SELECT * FROM productos");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <!-- Encabezado -->
    <header>
        <nav>
            <a href="index.php" class="logo">
                <img src="img/logo.png" alt="logo">

                <div class="texto-logo">
                    <h1>VAL</h1>
                    <span>productos capilares</span>
                </div>
            </a>
            <form action="#" method="get" class="buscar">
                <input type="text" id="buscador" name="search" placeholder="Escribe tu búsqueda...">
                <button type="submit">
                    <i class="fa-solid fa-magnifying-glass lupa" style="color: #ffffff;"></i>
                </button>
            </form>
            <div class="icons">
                <a href="carrito.html"><i class="fa-solid fa-cart-shopping carrito-icono"
                        style="color: #ffffff;"></i></a>
                <a href="login.php"><i class="fa-solid fa-circle-user login-icono" style="color: #ffffff;"></i></a>
            </div>
        </nav>
    </header>

    <body>
        <div class="container">
            <a href="admin_comentario.php" class="comentarios">Administrar Comentarios</a>
            <a href="logout.php" class="logout">Cerrar sesión</a>
            <h1>Gestión de Productos</h1>

            <h3 class="agregar">Agregar Nuevo Producto </h3>
            <form action="insertar_producto.php" method="POST" enctype="multipart/form-data" class="form-producto">
                <input type="number" name="ID" placeholder="ID" required>
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="number" name="precio" placeholder="Precio" required>
                <select name="marca" required>
                    <option value="">Marca</option>
                    <option value="Anyeluz">Anyeluz</option>
                    <option value="Click Hair">Click Hair</option>
                    <option value="Kaba">Kaba</option>
                    <option value="La Poción">La Poción</option>
                    <option value="Recamier">Recamier</option>
                </select>
                <select name="Categoria" required>
                    <option value="">Categoria</option>
                    <option value="Caspa">Caspa</option>
                    <option value="Dañado">Dañado</option>
                    <option value="Grasa">Grasa</option>
                    <option value="Seco">Seco</option>
                    <option value="Todo tipo">Todo tipo</option>
                </select>
                <input type="file" name="imagen">
                <button type="submit">Agregar</button>
            </form>

            <h3>2. Inventario Actual</h3>
            <table class="tabla">
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoria</th>
                    <th>Acciones</th>
                </tr>
                <?php while ($p = mysqli_fetch_assoc($productos)) { ?>
                    <tr>
                        <td><?php echo $p['id']; ?></td>
                        <td><?php echo $p['nombre']; ?></td>
                        <td>$<?php echo number_format($p['precio'], 0, ',', '.'); ?></td>
                        <td><?php echo $p['marca']; ?></td>
                        <td><?php echo $p['categoria']; ?></td>
                        <td>
                            <a href="editar_producto.php?id=<?php echo $p['id']; ?>" style="color:blue;">Editar</a> |
                            <a href="eliminar.php?id=<?php echo $p['id']; ?>" style="color:red;">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </body>

</html>