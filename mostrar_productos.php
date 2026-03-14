<?php
include 'conexion.php';

$productos = mysqli_query($conexion, "SELECT * FROM productos");

while ($p = mysqli_fetch_assoc($productos)) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Accesorios</title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link rel="icon" type="image/png" href="img/logo.png">
        <link rel="stylesheet" href="css/stylesSecciones.css">
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

        <div class="contenedor-productos">

            <img src="img/<?php echo $p['imagen']; ?>" width="150">

            <h3><?php echo $p['nombre']; ?></h3>

            <p>$<?php echo $p['precio']; ?></p>

            <p><?php echo $p['marca']; ?></p>

            <a href="producto.php?id=<?php echo $p['id']; ?>">Ver producto</a>

        </div>

    <?php } ?>