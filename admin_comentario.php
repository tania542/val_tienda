<?php
include 'conexion.php';

$comentarios = mysqli_query($conexion, "SELECT * FROM comentarios");
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

    <div class="container">
        <h1>Administrar Comentarios</h1>

        <table class="tabla">

            <tr>
                <th>ID</th>
                <th>Producto</th>
                <th>Usuario</th>
                <th>Comentario</th>
                <th>Acción</th>
            </tr>

            <?php while ($c = mysqli_fetch_assoc($comentarios)) { ?>

                <tr>

                    <td><?php echo $c['id']; ?></td>

                    <td><?php echo $c['id_producto']; ?></td>

                    <td><?php echo $c['nombre_usuario']; ?></td>

                    <td><?php echo $c['texto_comentario']; ?></td>

                    <td>
                        <a href="eliminar_comentario.php?id=<?php echo $c['id']; ?>">Eliminar</a>
                    </td>

                </tr>

            <?php } ?>
    </div>

    </table>