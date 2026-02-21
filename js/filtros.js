document.addEventListener("DOMContentLoaded", function () {

    const filtroMarca = document.getElementById("filtroMarca");
    const filtroTipo = document.getElementById("filtroTipo");
    const ordenar = document.getElementById("ordenar");
    const buscador = document.getElementById("buscador");

    const productos = document.querySelectorAll(".tarjeta-producto");
    const contenedor = document.querySelector(".contenedor-productos");

    function aplicarFiltros() {
        let marcaSeleccionada = filtroMarca.value;
        let tipoSeleccionado = filtroTipo.value;
        let textoBusqueda = buscador.value.toLowerCase();
        let tipoOrden = ordenar.value;

        // Filtrar productos
        productos.forEach(producto => {
            let nombre = producto.dataset.nombre.toLowerCase();
            let marca = producto.dataset.marca.toLowerCase();
            let tipo = producto.dataset.tipo.toLowerCase();

            let coincideMarca = marcaSeleccionada === "" || marca === marcaSeleccionada.toLowerCase();
            let coincideTipo = tipoSeleccionado === "" || tipo.includes(tipoSeleccionado.toLowerCase());
            let coincideBusqueda = nombre.includes(textoBusqueda);

            producto.style.display = (coincideMarca && coincideTipo && coincideBusqueda) ? "block" : "none";

            if (marcaSeleccionada === "" && tipoSeleccionado === "" && textoBusqueda === "") {
        producto.style.display = "block";
    } else {
        producto.style.display = (coincideMarca && coincideTipo && coincideBusqueda) ? "block" : "none";
    }

        });

        // Ordenar por precio
        if (tipoOrden !== "") {
            let listaVisibles = Array.from(productos).filter(p => p.style.display !== "none");

            listaVisibles.sort((a, b) => {
                let precioA = Number(a.dataset.precio);
                let precioB = Number(b.dataset.precio);
                return tipoOrden === "Menor a Mayor" ? precioA - precioB : precioB - precioA;
            });

            listaVisibles.forEach(p => contenedor.appendChild(p));
        }
    }

    filtroMarca.addEventListener("change", aplicarFiltros);
    filtroTipo.addEventListener("change", aplicarFiltros);
    ordenar.addEventListener("change", aplicarFiltros);
    buscador.addEventListener("keyup", aplicarFiltros);
});