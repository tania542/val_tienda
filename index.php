<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accesorios</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="stylesSecciones.css">
</head>

<body>
    <!-- Encabezado -->
    <header>
        <nav>
            <a href="index.html" class="logo">
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
                <a href="loguin.html"><i class="fa-solid fa-circle-user login-icono" style="color: #ffffff;"></i></a>
            </div>
        </nav>
    </header>
    <section class="productos">
        <h1>PRODUCTOS CAPILARES</h1>
    </section>


    <!-- Menú ahora filtro -->
    <section class="filtros" style="padding: 20px; text-align: center;">

        <select id="filtroMarca">
            <option value="">Marca</option>
            <option value="Anyeluz">Anyeluz</option>
            <option value="Click Hair">Click Hair</option>
            <option value="Kaba">Kaba</option>
            <option value="La Poción">La Poción</option>
            <option value="Recamier">Recamier</option>
        </select>

        <select id="filtroTipo">
            <option value="">Tipo</option>
            <option value="Caspa">Caspa</option>
            <option value="Dañado">Dañado</option>
            <option value="Grasa">Grasa</option>
            <option value="Seco">Seco</option>
            <option value="Todo tipo">Todo tipo</option>
        </select>

        <select id="ordenar">
            <option value="">Ordenar por precio</option>
            <option value="Menor a Mayor">Menor a Mayor</option>
            <option value="Mayor a Menor">Mayor a Menor</option>
        </select>
    </section>

    <!-- Sección principal -->


    <div class="contenedor-productos">

        <div class="tarjeta-producto" data-nombre="Acondicionador con Ceramidas" data-marca="Kaba" data-tipo="Dañado"
            data-precio="40000">
            <a href="producto1.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img1.png" alt="Acondicionador con Ceramidas">
                </div>
                <div class="info-producto">
                    <h2>Acondicionador con Ceramidas</h2>
                    <h2>$40.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>

        <div class="tarjeta-producto" data-nombre="Acondicionador con Romero Anyeluz" data-marca="Anyeluz"
            data-tipo="Todo tipo" data-precio="40000">
            <a href="producto2.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img2.png" alt="Acondicionador con Romero Anyeluz">
                </div>
                <div class="info-producto">
                    <h2>Acondicionador con Romero Anyeluz</h2>
                    <h2>$40.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>

        <div class="tarjeta-producto" data-nombre="Acondicionador Kerat Ultra Force 300ml" data-marca="Recamier"
            data-tipo="Dañado" data-precio="31900">
            <a href="producto3.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img3.png" alt="Acondicionador Kerat Ultra Force 300ml">
                </div>
                <div class="info-producto">
                    <h2>Acondicionador Kerat Ultra Force 300ml</h2>
                    <h2>$39.900</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Acondicionador Reparador SOS 450ml" data-marca="Kaba"
            data-tipo="Dañado / Seco" data-precio="80000">
            <a href="producto4.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img4.png" alt="Acondicionador Reparador SOS 450ml">
                </div>
                <div class="info-producto">
                    <h2>Acondicionador Reparador SOS 450ml</h2>
                    <h2>$80.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Biomascarilla Capilar" data-marca="Kaba" data-tipo="Seco / Dañado"
            data-precio="45000">
            <a href="producto5.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img5.png" alt="Biomascarilla Capilar">
                </div>
                <div class="info-producto">
                    <h2>Biomascarilla Capilar</h2>
                    <h2>$45.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Bioterapia Capilar con Romero y Bioelixir" data-marca="Anyeluz"
            data-tipo="Todo tipo" data-precio="43000">
            <a href="producto6.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img6.png" alt="Bioterapia Capilar con Romero y Bioelixir">
                </div>
                <div class="info-producto">
                    <h2>Bioterapia Capilar con Romero y Bioelixir</h2>
                    <h2>$43.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Booster Tratamiento Capilar Reparador" data-marca="La Poción"
            data-tipo="Dañado / Seco" data-precio="35000">
            <a href="producto7.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img7.png" alt="Booster Tratamiento Capilar Reparador">
                </div>
                <div class="info-producto">
                    <h2>Booster Tratamiento Capilar Reparador</h2>
                    <h2>$35.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>

        <div class="tarjeta-producto" data-nombre="Crema Dual para Peinar" data-marca="La Poción" data-tipo="Todo tipo"
            data-precio="35000">
            <a href="producto8.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img8.png" alt="Crema Dual para Peinar">
                </div>
                <div class="info-producto">
                    <h2>Crema Dual para Peinar</h2>
                    <h2>$35.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Duo de Miel Brillo Intenso" data-marca="Click Hair"
            data-tipo="Seco / Todo tipo" data-precio="117200">
            <a href="producto9.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img9.png" alt="Duo de Miel Brillo Intenso">
                </div>
                <div class="info-producto">
                    <h2>Duo de Miel Brillo Intenso</h2>
                    <h2>$117.200</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>

        <div class="tarjeta-producto" data-nombre="Energetizante Capilar" data-marca="Click Hair" data-tipo="Todo tipo"
            data-precio="46000">
            <a href="producto10.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img10.png" alt="Energetizante Capilar">
                </div>
                <div class="info-producto">
                    <h2>Energetizante Capilar</h2>
                    <h2>$46.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Mask Vegan Keratin Recamier 500g" data-marca="Recamier"
            data-tipo="Seco / Dañado" data-precio="54000">
            <a href="producto11.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img11.png" alt="Mask Vegan Keratin Recamier 500g">
                </div>
                <div class="info-producto">
                    <h2>Mask Vegan Keratin Recamier 500g</h2>
                    <h2>$54.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>

        <div class="tarjeta-producto" data-nombre="Miel para el Cabello 50ml" data-marca="Click Hair"
            data-tipo="Seco / Todo tipo" data-precio="60000">
            <a href="producto12.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img12.png" alt="Miel para el Cabello 50ml">
                </div>
                <div class="info-producto">
                    <h2>Miel para el Cabello 50ml</h2>
                    <h2>$60.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Shampoo con Cebolla Anyeluz" data-marca="Anyeluz"
            data-tipo="Todo tipo" data-precio="45000">
            <a href="producto13.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img13.png" alt="Shampoo con Cebolla Anyeluz">
                </div>
                <div class="info-producto">
                    <h2>Shampoo con Cebolla Anyeluz</h2>
                    <h2>$45.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Shampoo Control Grasa" data-marca="La Poción" data-tipo="Grasa"
            data-precio="37500">
            <a href="producto14.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img14.png" alt="Shampoo Control Grasa">
                </div>
                <div class="info-producto">
                    <h2>Shampoo Control Grasa</h2>
                    <h2>$37.500</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Shampoo Crecimiento y Control Caída" data-marca="La Poción"
            data-tipo="Todo tipo" data-precio="45000">
            <a href="producto15.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img15.png" alt="Shampoo Crecimiento y Control Caída">
                </div>
                <div class="info-producto">
                    <h2>Shampoo Crecimiento y Control Caída</h2>
                    <h2>$45.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Shampoo de Miel Brillo Intenso" data-marca="Click Hair"
            data-tipo="Seco / Todo tipo" data-precio="44000">
            <a href="producto16.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img16.png" alt="Shampoo de Miel Brillo Intenso">
                </div>
                <div class="info-producto">
                    <h2>Shampoo de Miel Brillo Intenso</h2>
                    <h2>$44.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>

        <div class="tarjeta-producto" data-nombre="Shampoo Reparador SOS 450ml" data-marca="Kaba"
            data-tipo="Dañado / Seco" data-precio="80000">
            <a href="producto17.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img17.png" alt="Shampoo Reparador SOS 450ml">
                </div>
                <div class="info-producto">
                    <h2>Shampoo Reparador SOS 450ml</h2>
                    <h2>$80.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Shampoo Vegan Keratin 1l" data-marca="Recamier"
            data-tipo="Seco / Dañado" data-precio="35900">
            <a href="producto18.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img18.png" alt="Shampoo Vegan Keratin 1l">
                </div>
                <div class="info-producto">
                    <h2>Shampoo Vegan Keratin 1l</h2>
                    <h2>$35.900</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>

        <div class="tarjeta-producto" data-nombre="Shampoo Anticaspa" data-marca="Anyeluz" data-tipo="Caspa"
            data-precio="40000">
            <a href="producto19.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img19.png" alt="Shampoo Anticaspa">
                </div>
                <div class="info-producto">
                    <h2>Shampoo Anticaspa</h2>
                    <h2>$40.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Suero Reconstructor" data-marca="Click Hair"
            data-tipo="Dañado / Seco" data-precio="38900">
            <a href="producto20.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img20.png" alt="Suero Reconstructor">
                </div>
                <div class="info-producto">
                    <h2>Suero Reconstructor</h2>
                    <h2>$38.900</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Terapia Capilar de Crecimiento Anyeluz" data-marca="Anyeluz"
            data-tipo="Todo tipo" data-precio="46000">
            <a href="producto21.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img21.png" alt="Terapia Capilar de Crecimiento Anyeluz">
                </div>
                <div class="info-producto">
                    <h2>Terapia Capilar de Crecimiento Anyeluz</h2>
                    <h2>$46.000</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>


        <div class="tarjeta-producto" data-nombre="Tratamiento Vegan Keratin Semi Di Lino" data-marca="Recamier"
            data-tipo="Seco / Dañado" data-precio="48900">
            <a href="producto22.html" class="enlace-tarjeta">
                <div class="imagenes">
                    <img src="img/img22.jpg" alt="Tratamiento Vegan Keratin Semi Di Lino">
                </div>
                <div class="info-producto">
                    <h2>Tratamiento Vegan Keratin Semi Di Lino</h2>
                    <h2>$48.900</h2>
                </div>
            </a>
            <div class="contenedor-boton">
                <button class="btn-carrito">Agregar al carrito</button>
            </div>
        </div>

    </div>
    </div>

    <!-- Pie de página -->
    <footer>
        <p>&copy; 2025 VAL DISTRIBUIDOS PRODUCTOR CAPILARES. Todos los derechos reservados.</p>
    </footer>
    <script src="filtros.js" defer></script>
</body>

</html>