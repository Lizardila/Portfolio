document.addEventListener("DOMContentLoaded", () => {
    const botonesFiltro = document.querySelectorAll(".blog-filtro");
    const articulos = document.querySelectorAll(".articulo-destacado, .tarjeta-articulo");

    if (!botonesFiltro.length || !articulos.length) return;

    botonesFiltro.forEach((boton) => {
        boton.addEventListener("click", () => {
            const categoriaSeleccionada = boton.dataset.categoria;

            // Actualizar estado activo y atributo ARIA de los botones
            botonesFiltro.forEach((btn) => {
                btn.classList.remove("blog-filtro--activo");
                btn.setAttribute("aria-pressed", "false");
            });

            boton.classList.add("blog-filtro--activo");
            boton.setAttribute("aria-pressed", "true");

            // Mostrar u ocultar artículos según la categoría
            articulos.forEach((articulo) => {
                const categoriaArticulo = articulo.dataset.categoria;
                const coincide =
                    categoriaSeleccionada === "todos" ||
                    categoriaArticulo === categoriaSeleccionada;

                articulo.hidden = !coincide;
            });
        });
    });
});
