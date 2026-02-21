document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("formComentario");
    const lista = document.getElementById("listaComentarios");

    // Usamos una clave distinta por producto
    const clave = "comentarios_separador_pestanas";

    let comentarios = JSON.parse(localStorage.getItem(clave)) || [];

    mostrarComentarios();

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const nombre = document.getElementById("nombreUsuario").value;
        const texto = document.getElementById("textoComentario").value;

        const nuevoComentario = {
            nombre,
            texto,
            fecha: new Date().toLocaleString()
        };

        comentarios.push(nuevoComentario);
        localStorage.setItem(clave, JSON.stringify(comentarios));

        form.reset();
        mostrarComentarios();
    });

    function mostrarComentarios() {
        lista.innerHTML = "";
        comentarios.forEach(c => {
            lista.innerHTML += `
                <div class="comentario-item">
                    <strong>${c.nombre}</strong>
                    <p>${c.texto}</p>
                    <small>${c.fecha}</small>
                </div>
            `;
        });
    }

});