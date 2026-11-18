
// ================================================
// PORTFOLIO Categorías, proyectos y navegación modal
// ================================================

(() => {
    "use strict";


    // ============================================
    // 1. DATOS DE LOS PROYECTOS
    // ============================================

    const datosProyectos = {

        animo: {
            numero: "01",
            categoria: "PYTHON · LÓGICA · BIENESTAR DIGITAL",
            titulo: "Diario de Ánimo",
            imagen: "imagenes/Danimo.png",
            textoAlternativo:
                "Interfaz del proyecto Diario de Ánimo.",
            introduccion:
                "Una herramienta personal para registrar emociones y observar cómo cambia el estado de ánimo.",
            descripcion:
                "El proyecto permite registrar estados de ánimo y consultar los registros. Es una forma práctica de trabajar con datos y explorar cómo presentar la información de manera comprensible.",
            aprendizajes: [
                "Uso de listas para almacenar registros.",
                "Condicionales y bucles.",
                "Validación de las opciones introducidas.",
                "Organización de datos para futuras estadísticas."
            ],
            tecnologias: [
                "Python",
                "HTML",
                "CSS",
                "Listas",
                "Bucles",
                "Condicionales",
                "Validación"
            ],
            nota:
                "Proyecto de aprendizaje en evolución. Las funcionalidades dependen de la versión desarrollada.",
            enlace: ""
        },


        inversiones: {
            numero: "02",
            categoria: "PYTHON · MATEMÁTICAS · SIMULACIÓN",
            titulo: "Simulador de inversiones",
            imagen: "imagenes/Simulador.png",
            textoAlternativo:
                "Interfaz del Simulador de inversiones.",
            introduccion:
                "Una simulación para comprender cómo podría evolucionar un capital con aportaciones periódicas e interés compuesto.",
            descripcion:
                "El usuario introduce un capital inicial, una aportación mensual, una tasa anual y un plazo. La herramienta calcula una evolución estimada y presenta los resultados mediante una tabla y un gráfico.",
            aprendizajes: [
                "Variables numéricas y operaciones matemáticas.",
                "Cálculos iterativos a lo largo del tiempo.",
                "Validación de los datos introducidos.",
                "Presentación clara de los resultados."
            ],
            tecnologias: [
                "Python",
                "HTML",
                "CSS",
                "Variables",
                "Bucles",
                "Validación",
                "Interés compuesto"
            ],
            nota:
                "Simulación educativa, no asesoramiento financiero. Los resultados no garantizan rendimientos reales.",
            enlace: ""
        },


        videojuego: {
            numero: "03",
            categoria: "HTML · CSS · JAVASCRIPT · DISEÑO DE INTERFACES",
            titulo: "Interfaz de videojuego",
            imagen: "imagenes/personajes.png",
            textoAlternativo:
                "Diseño de la interfaz de un videojuego de fantasía postapocalíptica.",
            introduccion:
                "Una experiencia visual inspirada en un universo de fantasía postapocalíptica, donde los personajes y sus habilidades construyen la identidad del juego.",
            descripcion:
                "El proyecto explora la creación de una página de presentación para un videojuego con personajes jugables, ambientación fantástica, efectos visuales e interacciones. La propuesta combina estructura web, diseño de interfaces y programación para construir una experiencia coherente.",
            aprendizajes: [
                "Estructuración de interfaces con HTML.",
                "Diseño visual y composición con CSS.",
                "Interacciones y comportamiento mediante JavaScript.",
                "Organización de componentes y efectos visuales.",
                "Adaptación de la interfaz a diferentes pantallas."
            ],
            tecnologias: [
                "HTML5",
                "CSS3",
                "JavaScript",
                "Diseño responsive",
                "Animaciones"
            ],
            nota:
                "Proyecto personal en desarrollo. La experiencia y sus funcionalidades pueden ampliarse progresivamente.",
            enlace: ""
        },

        reservas: {
            numero: "04",
            categoria: "HTML · CSS · JAVASCRIPT · PHP · MYSQL",
            titulo: "Interfaz de reservas",
            imagen: "imagenes/reservas.png",
            textoAlternativo:
                "Diseño de la interfaz de reservas de un restaurante.",
            introduccion:
                "Una aplicación web diseñada para gestionar la reserva de mesas en un restaurante de forma intuitiva, rápida y visual.",
            descripcion:
                "El proyecto permite seleccionar fecha, horario, número de comensales y datos de contacto, validando la disponibilidad y almacenando las reservas en base de datos. Combina una interfaz cuidada en frontend con lógica de servidor.",
            aprendizajes: [
                "Diseño de formularios accesibles y validación de datos.",
                "Interactividad en tiempo real mediante JavaScript.",
                "Procesamiento de peticiones y lógica en PHP.",
                "Modelado y consulta de reservas en MySQL.",
                "Adaptación de la interfaz a dispositivos móviles."
            ],
            tecnologias: [
                "HTML5",
                "CSS3",
                "JavaScript",
                "PHP",
                "MySQL",
                "Diseño responsive"
            ],
            nota:
                "Proyecto personal en desarrollo. La experiencia y sus funcionalidades pueden ampliarse progresivamente.",
            enlace: ""
},

        gestorTareas: {
            numero: "05",
            categoria: "JAVA · POO · PERSISTENCIA DE DATOS",
            titulo: "Gestor de Tareas",
            imagen: "imagenes/gestor-java.png",
            textoAlternativo:
                "Captura del sistema de gestión de tareas desarrollado en Java.",
            introduccion:
                "Una aplicación modular diseñada para organizar tareas diarias por prioridad y estado, aplicando principios de Programación Orientada a Objetos y persistencia en archivos.",
            descripcion:
                "El sistema permite crear, filtrar, completar y eliminar tareas con fechas límite. La arquitectura separa la lógica de negocio del almacenamiento de datos, garantizando que la información se conserve entre sesiones mediante lectura y escritura estructurada de archivos.",
            aprendizajes: [
                "Modelado de clases, encapsulamiento y uso de enumerados (Enum).",
                "Gestión de colecciones dinámicas con ArrayList y Streams.",
                "Manejo moderno de fechas con la API java.time.",
                "Persistencia de datos mediante lectura y escritura de archivos.",
                "Control de errores y validación de entradas con excepciones."
            ],
            tecnologias: [
                "Java",
                "POO",
                "Collections",
                "Java Time API",
                "Manejo de archivos",
                "Excepciones"
            ],
            nota:
                "Proyecto enfocado en arquitectura limpia, modularidad y buenas prácticas en Java.",
            enlace: ""
        },

                identidadVisual: {
            numero: "06",
            categoria: "BRANDING · DIRECCIÓN DE ARTE · DISEÑO EDITORIAL",
            titulo: "Identidad visual y sistema gráfico",
            imagen: "imagenes/identidad-visual.png",
            textoAlternativo:
                "Tablero de identidad visual con logotipo, paleta cromática y tipografías.",
            introduccion:
                "Construcción de un universo gráfico propio que equilibra la calidez editorial con la precisión del entorno tecnológico.",
            descripcion:
                "El proyecto abarca el desarrollo completo de una identidad visual: desde la conceptualización del isotipo vectorial y la selección de una paleta cromática armónica, hasta la definición de reglas tipográficas y componentes gráficos aplicables tanto a soportes digitales como a interfaces web.",
            aprendizajes: [
                "Conceptualización y trazado vectorial de isotipos en SVG.",
                "Selección de paletas cromáticas con equilibrio y contraste accesible.",
                "Jerarquía y combinación tipográfica (editorial, sans-serif y monoespaciada).",
                "Creación de sistemas visuales coherentes y reutilizables."
            ],
            tecnologias: [
                "Figma",
                "Diseño vectorial (SVG)",
                "Branding",
                "Teoría del color",
                "Tipografía",
                "Diseño editorial"
            ],
            nota:
                "Caso de estudio de identidad visual aplicado al ecosistema digital de la marca.",
            enlace: ""
        },

                carruselEditorial: {
            numero: "07",
            categoria: "DISEÑO EDITORIAL · COMUNICACIÓN VISUAL · FIGMA",
            titulo: "Sistema de plantillas editoriales",
            imagen: "imagenes/carrusel-editorial.png",
            textoAlternativo:
                "Tres diapositivas de un carrusel editorial sobre arquitectura y código limpio.",
            introduccion:
                "Diseño de un sistema modular de piezas gráficas para divulgar conceptos de programación y tecnología de forma clara y atractiva.",
            descripcion:
                "El proyecto establece una estructura visual reutilizable para carruseles digitales. Combina contraste cromático, jerarquía tipográfica y bloques de lectura escaneables para transformar ideas técnicas en contenido visual fácil de comprender.",
            aprendizajes: [
                "Maquetación en retícula modular para formatos digitales (4:5).",
                "Jerarquía visual y ritmo de lectura entre diapositivas.",
                "Aplicación consistente de paleta cromática y contraste.",
                "Creación de plantillas reutilizables en Figma."
            ],
            tecnologias: [
                "Figma",
                "Diseño editorial",
                "Composición visual",
                "Tipografía",
                "Comunicación digital"
            ],
            nota:
                "Sistema gráfico diseñado para divulgación tecnológica y marca personal.",
            enlace: ""
        },

                planificadorComidas: {
            numero: "08",
            categoria: "JAVA · ESTRUCTURAS DE DATOS · AUTOMATIZACIÓN",
            titulo: "Planificador semanal de comidas",
            imagen: "imagenes/planificador-java.png",
            textoAlternativo:
                "Interfaz de consola del planificador semanal de comidas en Java.",
            introduccion:
                "Aplicación en Java para organizar menús semanales y generar automáticamente una lista de la compra ordenada y sin ingredientes duplicados.",
            descripcion:
                "El programa permite asignar desayunos, almuerzos y cenas a cada día de la semana junto con sus ingredientes. A partir de la planificación, procesa los datos para extraer una lista de compras unificada y conserva toda la información en disco.",
            aprendizajes: [
                "Uso de conjuntos (TreeSet) para eliminar duplicados y ordenar alfabéticamente.",
                "Filtrado y agrupación de colecciones mediante Java Streams.",
                "Modelado con múltiples enumerados (DiaSemana y TipoComida).",
                "Serialización y lectura de listas en archivos CSV."
            ],
            tecnologias: [
                "Java",
                "POO",
                "Collections (Set / List)",
                "Java Streams",
                "Persistencia CSV"
            ],
            nota:
                "Proyecto enfocado en resolución de problemas cotidianos mediante estructuras de datos eficientes.",
            enlace: ""
        }






    };


    // ============================================
    // 2. CATEGORÍAS DEL PORTFOLIO
    // ============================================

    const categorias = [

        {
            id: "html",
            numero: "01",
            titulo: "HTML y CSS",
            descripcion:
                "Estructura, composición visual y experiencias web adaptables.",
            etiqueta: "ESTRUCTURA · DISEÑO WEB",
            clase: "html",
            proyectos: ["reservas" , "videojuego"]
        },

        {
            id: "javascript",
            numero: "02",
            titulo: "JavaScript",
            descripcion:
                "Interacciones, lógica y funcionalidades que dan vida a la web.",
            etiqueta: "INTERACCIÓN · PROGRAMACIÓN",
            clase: "javascript",
            proyectos: ["videojuego", "reservas"]
        },

        {
            id: "php",
            numero: "03",
            titulo: "PHP y MySQL",
            descripcion:
                "Desarrollo backend, gestión de datos y lógica de servidor.",
            etiqueta: "BACKEND · BASES DE DATOS",
            clase: "php",
            proyectos: ["reservas"]
        },

        {
            id: "python",
            numero: "04",
            titulo: "Python",
            descripcion:
                "Lógica, automatización, cálculos y pequeñas soluciones prácticas.",
            etiqueta: "LÓGICA · PROGRAMACIÓN",
            clase: "python",
            proyectos: ["animo", "inversiones"]
        },

        {
            id: "java",
            numero: "05",
            titulo: "Java",
            descripcion:
                "Programación orientada a objetos y construcción de soluciones.",
            etiqueta: "POO · DESARROLLO",
            clase: "java",
            proyectos: ["gestorTareas", "planificadorComidas"]
        },

        {
            id: "diseno",
            numero: "06",
            titulo: "Diseño gráfico y herramientas digitales",
            descripcion:
                "Recursos visuales, creatividad y herramientas para comunicar ideas.",
            etiqueta: "DISEÑO · CREATIVIDAD DIGITAL",
            clase: "diseno",
            proyectos: ["identidadVisual", "carruselEditorial"]
        },

        

    ];


    // ============================================
    // 3. ELEMENTOS DEL DOCUMENTO
    // ============================================

    const contenedorCategorias = document.querySelector(
        "#portfolio-categorias"
    );

    const ventana = document.querySelector(
        "#portfolio-modal"
    );

    const botonCerrar = document.querySelector(
        "#portfolio-modal-cerrar"
    );

    const campoCategoria = document.querySelector(
        "#portfolio-modal-categoria"
    );

    const campoProyecto = document.querySelector(
        "#portfolio-modal-proyecto"
    );

    const campoVacio = document.querySelector(
        "#portfolio-modal-vacio"
    );

    const campoImagen = document.querySelector(
        "#portfolio-modal-imagen"
    );

    const campoNumero = document.querySelector(
        "#portfolio-modal-numero"
    );

    const campoEtiqueta = document.querySelector(
        "#portfolio-modal-etiqueta"
    );

    const campoTitulo = document.querySelector(
        "#portfolio-modal-titulo"
    );

    const campoIntroduccion = document.querySelector(
        "#portfolio-modal-introduccion"
    );

    const campoDescripcion = document.querySelector(
        "#portfolio-modal-descripcion"
    );

    const campoAprendizajes = document.querySelector(
        "#portfolio-modal-aprendizajes"
    );

    const campoTecnologias = document.querySelector(
        "#portfolio-modal-tecnologias"
    );

    const campoNota = document.querySelector(
        "#portfolio-modal-nota"
    );

    const campoEnlace = document.querySelector(
        "#portfolio-modal-enlace"
    );

    const botonAnterior = document.querySelector(
        "#portfolio-modal-anterior"
    );

    const botonSiguiente = document.querySelector(
        "#portfolio-modal-siguiente"
    );

    const contador = document.querySelector(
        "#portfolio-modal-contador"
    );

    const pieModal = document.querySelector(
        "#portfolio-modal-pie"
    );


    // Comprobamos que exista la estructura necesaria.
    if (
        !contenedorCategorias ||
        !ventana ||
        !botonCerrar
    ) {
        return;
    }


    // ============================================
    // 4. ESTADO DE NAVEGACIÓN
    // ============================================

    let categoriaActual = null;
    let proyectosActuales = [];
    let indiceProyectoActual = 0;
    let ultimoElementoActivo = null;


    // ============================================
    // 5. CREAR LAS TARJETAS DE CATEGORÍAS
    // ============================================

    function crearTarjetasCategorias() {

        const fragmento = document.createDocumentFragment();

        categorias.forEach((categoria) => {

            const cantidad = categoria.proyectos.length;

            const tarjeta = document.createElement("button");

            tarjeta.type = "button";

            tarjeta.className =
                `portfolio__tarjeta portfolio__tarjeta--${categoria.clase}`;

            tarjeta.dataset.categoria = categoria.id;

            tarjeta.setAttribute(
                "aria-label",
                `Explorar categoría ${categoria.titulo}. ` +
                `${cantidad} proyectos disponibles.`
            );


            // Parte superior.
            const superior = document.createElement("div");

            superior.className = "portfolio__tarjeta-superior";

            const numero = document.createElement("span");

            numero.className = "portfolio__tarjeta-numero";
            numero.textContent = `${categoria.numero} / 08`;

            const cantidadTexto = document.createElement("span");

            cantidadTexto.className = "portfolio__tarjeta-cantidad";

            cantidadTexto.textContent =
                cantidad === 1
                    ? "01 PROYECTO"
                    : `${String(cantidad).padStart(2, "0")} PROYECTOS`;

            superior.append(numero, cantidadTexto);


            // Centro de la tarjeta.
            const centro = document.createElement("div");

            centro.className = "portfolio__tarjeta-centro";

            const textos = document.createElement("div");

            const titulo = document.createElement("h3");

            titulo.className = "portfolio__tarjeta-titulo";
            titulo.textContent = categoria.titulo;

            const descripcion = document.createElement("p");

            descripcion.className = "portfolio__tarjeta-descripcion";
            descripcion.textContent = categoria.descripcion;

            textos.append(titulo, descripcion);

            const icono = document.createElement("span");

            icono.className = "portfolio__tarjeta-icono";
            icono.setAttribute("aria-hidden", "true");
            icono.textContent = "↗";

            centro.append(textos, icono);


            // Parte inferior.
            const inferior = document.createElement("div");

            inferior.className = "portfolio__tarjeta-inferior";

            const etiqueta = document.createElement("span");

            etiqueta.className = "portfolio__tarjeta-etiqueta";
            etiqueta.textContent = categoria.etiqueta;

            const accion = document.createElement("span");

            accion.className = "portfolio__tarjeta-accion";
            accion.textContent = "Explorar";

            inferior.append(etiqueta, accion);


            tarjeta.append(superior, centro, inferior);

            fragmento.appendChild(tarjeta);

        });

        contenedorCategorias.replaceChildren(fragmento);

    }


    // ============================================
    // 6. MOSTRAR UN PROYECTO EN EL MODAL
    // ============================================

    function mostrarProyecto(indice) {

        if (
            indice < 0 ||
            indice >= proyectosActuales.length
        ) {
            return;
        }

        indiceProyectoActual = indice;

        const proyecto = proyectosActuales[indice];

        // Imagen.
        campoImagen.hidden = false;
        campoImagen.src = proyecto.imagen;
        campoImagen.alt = proyecto.textoAlternativo;

        // Si la imagen no existe, ocultamos el elemento.
        campoImagen.onerror = function () {
            campoImagen.hidden = true;
            console.warn(
                `No se ha encontrado la imagen: ${proyecto.imagen}`
            );
        };

        // Información principal.
        campoNumero.textContent = proyecto.numero;
        campoEtiqueta.textContent = proyecto.categoria;
        campoTitulo.textContent = proyecto.titulo;
        campoIntroduccion.textContent = proyecto.introduccion;
        campoDescripcion.textContent = proyecto.descripcion;
        campoNota.textContent = proyecto.nota;

        // Aprendizajes.
        const listaAprendizajes =
            document.createDocumentFragment();

        proyecto.aprendizajes.forEach((aprendizaje) => {

            const elemento = document.createElement("li");

            elemento.textContent = aprendizaje;

            listaAprendizajes.appendChild(elemento);

        });

        campoAprendizajes.replaceChildren(listaAprendizajes);


        // Tecnologías.
        const listaTecnologias =
            document.createDocumentFragment();

        proyecto.tecnologias.forEach((tecnologia) => {

            const etiqueta = document.createElement("span");

            etiqueta.className =
                "portfolio-modal__etiqueta-tecnologia";

            etiqueta.textContent = tecnologia;

            listaTecnologias.appendChild(etiqueta);

        });

        campoTecnologias.replaceChildren(listaTecnologias);


        // Enlace externo.
        if (proyecto.enlace) {

            campoEnlace.href = proyecto.enlace;
            campoEnlace.hidden = false;

        } else {

            campoEnlace.removeAttribute("href");
            campoEnlace.hidden = true;

        }


        // Contador.
        contador.textContent =
            `${String(indice + 1).padStart(2, "0")} / ` +
            `${String(proyectosActuales.length).padStart(2, "0")}`;


        // Estado de las flechas.
        botonAnterior.disabled = indice === 0;

        botonSiguiente.disabled =
            indice === proyectosActuales.length - 1;

    }


    // ============================================
    // 7. ABRIR UNA CATEGORÍA
    // ============================================

    function abrirCategoria(idCategoria, boton) {

        const categoria = categorias.find(
            (elemento) => elemento.id === idCategoria
        );

        if (!categoria) return;

        categoriaActual = categoria;

        ultimoElementoActivo = boton;

        proyectosActuales = categoria.proyectos
            .map((clave) => datosProyectos[clave])
            .filter(Boolean);

        indiceProyectoActual = 0;

        campoCategoria.textContent = categoria.titulo;


        // Categoría sin proyectos.
        if (proyectosActuales.length === 0) {

            campoProyecto.hidden = true;
            campoVacio.hidden = false;
            pieModal.hidden = true;

        } else {

            campoVacio.hidden = true;
            campoProyecto.hidden = false;
            pieModal.hidden = false;

            mostrarProyecto(0);

        }

        ventana.showModal();

        botonCerrar.focus();

    }


    // ============================================
    // 8. NAVEGAR ENTRE PROYECTOS
    // ============================================

    function cambiarProyecto(direccion) {

        if (proyectosActuales.length <= 1) return;

        const nuevoIndice = indiceProyectoActual + direccion;

        if (
            nuevoIndice < 0 ||
            nuevoIndice >= proyectosActuales.length
        ) {
            return;
        }

        mostrarProyecto(nuevoIndice);

        // Al cambiar de proyecto, llevamos la lectura
        // al principio del contenido de la ventana.
        ventana.scrollTo({
            top: 0,
            behavior: window.matchMedia(
                "(prefers-reduced-motion: reduce)"
            ).matches ? "auto" : "smooth"
        });

    }


    // ============================================
    // 9. CERRAR EL MODAL
    // ============================================

    function cerrarModal() {

        if (ventana.open) {
            ventana.close();
        }

    }

    botonCerrar.addEventListener("click", cerrarModal);


    // Cerrar al hacer clic en el fondo.
    ventana.addEventListener("click", (evento) => {

        if (evento.target === ventana) {
            cerrarModal();
        }

    });


    // Recuperar el foco en la tarjeta seleccionada.
    ventana.addEventListener("close", () => {

        if (ultimoElementoActivo) {
            ultimoElementoActivo.focus();
        }

        categoriaActual = null;
        proyectosActuales = [];
        indiceProyectoActual = 0;

    });


    // ============================================
    // 10. EVENTOS DE LAS TARJETAS
    // ============================================

    contenedorCategorias.addEventListener("click", (evento) => {

        const tarjeta = evento.target.closest(
            ".portfolio__tarjeta"
        );

        if (!tarjeta) return;

        abrirCategoria(
            tarjeta.dataset.categoria,
            tarjeta
        );

    });


    // ============================================
    // 11. EVENTOS DE NAVEGACIÓN
    // ============================================

    botonAnterior.addEventListener("click", () => {
        cambiarProyecto(-1);
    });

    botonSiguiente.addEventListener("click", () => {
        cambiarProyecto(1);
    });


    // Navegación con teclado dentro del modal.
    ventana.addEventListener("keydown", (evento) => {

        if (!ventana.open || proyectosActuales.length <= 1) {
            return;
        }

        if (evento.key === "ArrowLeft") {

            evento.preventDefault();
            cambiarProyecto(-1);

        }

        if (evento.key === "ArrowRight") {

            evento.preventDefault();
            cambiarProyecto(1);

        }

    });


    // ============================================
    // 12. INICIALIZACIÓN
    // ============================================

    crearTarjetasCategorias();

})();


// ================================================
// 13. RETRATO ARTÍSTICO · INTERACCIÓN CON EL CURSOR
// Lizeth Ardila
// ================================================

(() => {
    "use strict";

    const escenario = document.querySelector(
        ".portfolio__portada .sobre-mi__visual"
    );

    const retrato = escenario?.querySelector(
        ".sobre-mi__retrato"
    );

    if (!escenario || !retrato) return;

    const movimientoReducido = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    );

    const dispositivoConRaton = window.matchMedia(
        "(hover: hover) and (pointer: fine)"
    );

    if (movimientoReducido.matches || !dispositivoConRaton.matches) {
        return;
    }

    let cuadroAnimacion = null;

    function moverRetrato(evento) {

        const limites = escenario.getBoundingClientRect();

        const posicionX =
            (evento.clientX - limites.left) / limites.width;

        const posicionY =
            (evento.clientY - limites.top) / limites.height;

        const centroX = (posicionX - 0.5) * 2;
        const centroY = (posicionY - 0.5) * 2;

        if (cuadroAnimacion) {
            cancelAnimationFrame(cuadroAnimacion);
        }

        cuadroAnimacion = requestAnimationFrame(() => {

            // Movimiento tridimensional del retrato.
            retrato.style.setProperty(
                "--retrato-giro-x",
                `${centroY * -3}deg`
            );

            retrato.style.setProperty(
                "--retrato-giro-y",
                `${centroX * 4}deg`
            );

            retrato.style.setProperty(
                "--retrato-desplazamiento-x",
                `${centroX * 5}px`
            );

            retrato.style.setProperty(
                "--retrato-desplazamiento-y",
                `${centroY * 5}px`
            );

            // Movimiento independiente del papel lavanda.
            escenario.querySelector(
                ".sobre-mi__papel"
            )?.style.setProperty(
                "--papel-desplazamiento-x",
                `${centroX * -7}px`
            );

            escenario.querySelector(
                ".sobre-mi__papel"
            )?.style.setProperty(
                "--papel-desplazamiento-y",
                `${centroY * -6}px`
            );

            // Movimiento de la forma menta.
            escenario.querySelector(
                ".sobre-mi__forma--menta"
            )?.style.setProperty(
                "--menta-desplazamiento-x",
                `${centroX * 9}px`
            );

            escenario.querySelector(
                ".sobre-mi__forma--menta"
            )?.style.setProperty(
                "--menta-desplazamiento-y",
                `${centroY * 8}px`
            );

        });

    }

    function restaurarRetrato() {

        if (cuadroAnimacion) {
            cancelAnimationFrame(cuadroAnimacion);
            cuadroAnimacion = null;
        }

        retrato.style.setProperty("--retrato-giro-x", "0deg");
        retrato.style.setProperty("--retrato-giro-y", "0deg");
        retrato.style.setProperty("--retrato-desplazamiento-x", "0px");
        retrato.style.setProperty("--retrato-desplazamiento-y", "0px");

        const papel = escenario.querySelector(".sobre-mi__papel");
        const menta = escenario.querySelector(".sobre-mi__forma--menta");

        if (papel) {
            papel.style.setProperty("--papel-desplazamiento-x", "0px");
            papel.style.setProperty("--papel-desplazamiento-y", "0px");
        }

        if (menta) {
            menta.style.setProperty("--menta-desplazamiento-x", "0px");
            menta.style.setProperty("--menta-desplazamiento-y", "0px");
        }

    }

    escenario.addEventListener("pointermove", moverRetrato);
    escenario.addEventListener("pointerleave", restaurarRetrato);

})();

