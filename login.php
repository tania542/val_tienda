<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="css/stylesUsuario.css">
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
    
        <section class="contendor-login">
            <div class="formulario">
                <h1>Acceder</h1>
                <form id="form-login" method="POST" action="validar_login.php">
                    <input type="email" name="correo" placeholder="Correo" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                        <button class="boton">Acceder</button></a>
                </form>

        </section>

    
    <a href="contacto.html" class="btn-contacto">
        <img src="img/contacto.png" alt="contacto">
    </a>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2025 v.glow. Todos los derechos reservados.</p>
    </footer>

    <script src="js/scriptUsuario.js"></script>
</body>

</html>