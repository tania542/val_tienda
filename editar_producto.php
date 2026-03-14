<?php
include 'conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE id='$id'";
$resultado = mysqli_query($conexion, $sql);
$producto = mysqli_fetch_assoc($resultado);
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
        <h1>Editar Producto</h1>

        <form action="actualizar_producto.php" method="POST" class="form-producto">
            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
            <input type="text" name="nombre" value="<?php echo $producto['nombre']; ?>">
            <input type="number" name="precio" value="<?php echo $producto['precio']; ?>">
            <input type="text" name="marca" value="<?php echo $producto['marca']; ?>">
            <input type="text" name="categoria" value="<?php echo $producto['categoria']; ?>">
            <button type="submit">Actualizar</button>
    </div>
    </form>