<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="css/Stylesproduct.css">
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
                <input type="text" name="search" placeholder="Escribe tu búsqueda...">
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



    <main class="producto">
        <div class="imagenes">
            <img src="img/img19.png" alt="">
        </div>
        <div class="informacion">
            <h2>Shampoo Anticaspa</h2>
            <h4> $ 40.000</h4>

            <div class="detalles">
                <h3>Detalles del Producto</h3>
                <p> Una fórmula única para el tratamiento de la caspa y estados descamativos del cuero cabelludo la encuentras en el SHAMPOO ANTICASPA de Anyeluz, completamente sin sal con una composición a base de extractos naturales como el extracto de ají, limón, ortiga y tomillo junto con el Piritionato de Zinc, reducen la descamación, hidratando y protegiendo el cabello y
                     el cuero cabelludo. Se puede usar en niños.</p>
            </div>

            <button>Agregar al Carrito</button>




        </div>


    </main>
    <section class="comentarios-section">
        <div class="comentarios-contenedor">
            <h3>Comentarios</h3>

            <div id="listaComentarios"></div>

            <form id="formComentario" method="POST" action="guardar_comentario.php">
                <input type="hidden" name="id_producto" value="19">

                <input type="text" name="nombreUsuario" placeholder="Tu nombre" required>
                <textarea name="textoComentario" placeholder="Escribe tu opinión" required></textarea>
                <button type="submit">Enviar Comentario</button>
            </form>
        </div>
        <?php include 'mostrar_comentarios.php'; ?>
    </section>
    <!-- Pie de página -->
    <footer>
        <p>&copy; 2025 VAL DISTRIBUIDORA DE BELLEZA. Todos los derechos reservados.</p>
    </footer>
    <script src="js/cantidad.js" defer></script>
</body>

</html>