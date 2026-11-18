/* =========================================
   1. MENÚ DE NAVEGACIÓN
   ========================================= */

const botonMenu = document.querySelector(".navegacion__boton");
const listaMenu = document.querySelector(".navegacion__lista");
const enlacesMenu = document.querySelectorAll(".navegacion__enlace");

if (botonMenu && listaMenu) {
    botonMenu.addEventListener("click", function () {
        const abierto = botonMenu.getAttribute("aria-expanded") === "true";

        botonMenu.setAttribute("aria-expanded", String(!abierto));
        botonMenu.setAttribute(
            "aria-label",
            abierto ? "Abrir menú" : "Cerrar menú"
        );

        listaMenu.classList.toggle(
            "navegacion__lista--abierta",
            !abierto
        );
    });

    enlacesMenu.forEach(function (enlace) {
        enlace.addEventListener("click", function () {
            botonMenu.setAttribute("aria-expanded", "false");
            botonMenu.setAttribute("aria-label", "Abrir menú");
            listaMenu.classList.remove("navegacion__lista--abierta");

            enlacesMenu.forEach(function (otroEnlace) {
                otroEnlace.classList.remove("navegacion__enlace--activo");
                otroEnlace.removeAttribute("aria-current");
            });

            enlace.classList.add("navegacion__enlace--activo");
            enlace.setAttribute("aria-current", "page");
        });
    });

    window.addEventListener("resize", function () {
        if (window.innerWidth > 760) {
            botonMenu.setAttribute("aria-expanded", "false");
            botonMenu.setAttribute("aria-label", "Abrir menú");
            listaMenu.classList.remove("navegacion__lista--abierta");
        }
    });
}


/* =========================================
   2. OJO ANIMADO
   ========================================= */

const ojo = document.querySelector(".ojo-marca");
const mirada = document.querySelector(".ojo-marca__mirada");
const parpado = document.querySelector(".ojo-marca__parpado");

const movimientoReducido = window.matchMedia(
    "(prefers-reduced-motion: reduce)"
);

let temporizadorMirada = null;
let temporizadorParpadeo = null;
let ultimaDireccion = -1;

const direccionesMirada = [
    { x: -5, y: 0 },
    { x: 5, y: 0 },
    { x: 0, y: -3 },
    { x: 0, y: 3 },
    { x: -3, y: -2 },
    { x: 3, y: 2 },
    { x: 0, y: 0 }
];

function cancelarAnimacionesOjo() {
    clearTimeout(temporizadorMirada);
    clearTimeout(temporizadorParpadeo);
}

function moverMirada() {
    if (!mirada || movimientoReducido.matches) return;

    let indice;

    do {
        indice = Math.floor(Math.random() * direccionesMirada.length);
    } while (
        indice === ultimaDireccion &&
        direccionesMirada.length > 1
    );

    ultimaDireccion = indice;

    const direccion = direccionesMirada[indice];

    mirada.style.transform =
        `translate(${direccion.x}px, ${direccion.y}px)`;

    temporizadorMirada = setTimeout(
        moverMirada,
        1000 + Math.random() * 1500
    );
}

function parpadear() {
    if (!parpado || movimientoReducido.matches) return;

    parpado.classList.remove("parpadeo-activo");
    void parpado.getBoundingClientRect();
    parpado.classList.add("parpadeo-activo");

    temporizadorParpadeo = setTimeout(function () {
        parpado.classList.remove("parpadeo-activo");
        parpadear();
    }, 2200 + Math.random() * 3000);
}

function iniciarAnimacionOjo() {
    cancelarAnimacionesOjo();

    if (mirada) {
        mirada.style.transform = "translate(0, 0)";
    }

    if (parpado) {
        parpado.classList.remove("parpadeo-activo");
    }

    if (movimientoReducido.matches || !ojo || !mirada || !parpado) {
        return;
    }

    ultimaDireccion = -1;

    temporizadorMirada = setTimeout(moverMirada, 700);
    temporizadorParpadeo = setTimeout(parpadear, 1800);
}

iniciarAnimacionOjo();

if (movimientoReducido.addEventListener) {
    movimientoReducido.addEventListener("change", iniciarAnimacionOjo);
} else {
    movimientoReducido.addListener(iniciarAnimacionOjo);
}


/* =========================================
   3. TEXTO SCRAMBLE
   ========================================= */

(() => {

    const reducir = window.matchMedia(
        "(prefers-reduced-motion: reduce)"
    ).matches;

    const caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789✳∆";

    const titulares = document.querySelectorAll("[data-scramble]");

    titulares.forEach((titular) => {

        if (reducir) return;

        const textoOriginal = titular.innerHTML;
        const textoPlano = titular.innerText;

        let iniciado = false;

        const iniciarScramble = () => {

            if (iniciado) return;

            iniciado = true;

            const inicio = performance.now();
            const duracion = 1100;

            function animar(ahora) {

                const progreso = Math.min(
                    (ahora - inicio) / duracion,
                    1
                );

                const cantidadFija = Math.floor(
                    progreso * textoPlano.length
                );

                let resultado = "";

                for (let i = 0; i < textoPlano.length; i++) {

                    const letra = textoPlano[i];

                    if (letra === "\n" || letra === " ") {
                        resultado += letra;
                    } else if (i < cantidadFija) {
                        resultado += letra;
                    } else {
                        resultado += caracteres[
                            Math.floor(Math.random() * caracteres.length)
                        ];
                    }
                }

                titular.innerText = resultado;

                if (progreso < 1) {
                    requestAnimationFrame(animar);
                } else {
                    titular.innerHTML = textoOriginal;
                }
            }

            requestAnimationFrame(animar);
        };

        const observador = new IntersectionObserver(
            (entradas, obs) => {
                if (entradas[0].isIntersecting) {
                    iniciarScramble();
                    obs.disconnect();
                }
            },
            {
                threshold: 0.4
            }
        );

        observador.observe(titular);
    });

})();


/* =========================================
   4. INFORMACIÓN DE LOS PROYECTOS
   ========================================= */

const proyectos = {
    animo: {
        numero: "01",
        categoria: "PYTHON · LÓGICA · BIENESTAR DIGITAL",
        titulo: "Diario de Ánimo",
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
            "Variables",
            "Bucles",
            "Validación",
            "Interés compuesto"
        ],
        nota:
            "Simulación educativa, no asesoramiento financiero. Los resultados no garantizan rendimientos reales.",
        enlace: ""
    },

    reservas: {
        numero: "03",
        categoria: "DESARROLLO WEB · GESTIÓN DE RESERVAS",
        titulo: "Reservas de restaurante",
        introduccion:
            "Una aplicación web académica para consultar la disponibilidad de mesas y registrar reservas de un restaurante.",
        descripcion:
            "El sistema permite seleccionar una sede, indicar los datos de la reserva y consultar las mesas disponibles según la fecha, la hora y el número de comensales. La asignación contempla la capacidad de las mesas para procurar elegir una opción adecuada al tamaño del grupo.",
        aprendizajes: [
            "Conexión entre PHP y una base de datos MySQL.",
            "Consultas para comprobar la disponibilidad de mesas.",
            "Validación de datos y envío de formularios con JavaScript.",
            "Organización de la información de clientes, mesas y reservas."
        ],
        tecnologias: [
            "PHP",
            "MySQL",
            "JavaScript",
            "HTML",
            "CSS"
        ],
        nota:
            "Proyecto académico en desarrollo. La disponibilidad y la gestión de reservas dependen de los datos registrados en la base de datos.",
        enlace: ""
    }
};

/* =========================================
   5. CARRUSEL DE PROYECTOS
   ========================================= */

    const carrusel = document.querySelector(".proyectos__carrusel");

    const tarjetas = Array.from(
        document.querySelectorAll(".tarjeta-proyecto")
);

const botonAnterior = document.querySelector(
    ".proyectos__flecha--anterior"
);

const botonSiguiente = document.querySelector(
    ".proyectos__flecha--siguiente"
);

const contador = document.querySelector(".proyectos__contador");

function obtenerTarjetaActual() {
    if (!carrusel || tarjetas.length === 0) return 0;

    const centroCarrusel =
        carrusel.getBoundingClientRect().left +
        carrusel.clientWidth / 2;

    let indiceActual = 0;
    let distanciaMinima = Infinity;

    tarjetas.forEach(function (tarjeta, indice) {
        const rectangulo = tarjeta.getBoundingClientRect();
        const centroTarjeta = rectangulo.left + rectangulo.width / 2;
        const distancia = Math.abs(centroCarrusel - centroTarjeta);

        if (distancia < distanciaMinima) {
            distanciaMinima = distancia;
            indiceActual = indice;
        }
    });

    return indiceActual;
}

function actualizarCarrusel() {
    if (!carrusel || tarjetas.length === 0) return;

    const indice = obtenerTarjetaActual();
    const desplazamientoMaximo =
        carrusel.scrollWidth - carrusel.clientWidth;

    if (contador) {
        contador.textContent =
            `${String(indice + 1).padStart(2, "0")} / ` +
            `${String(tarjetas.length).padStart(2, "0")}`;
    }

    if (botonAnterior) {
        botonAnterior.disabled = carrusel.scrollLeft <= 3;
    }

    if (botonSiguiente) {
        botonSiguiente.disabled =
            carrusel.scrollLeft >= desplazamientoMaximo - 3;
    }
}

function desplazarCarrusel(direccion) {
    if (!carrusel || tarjetas.length === 0) return;

    const indiceActual = obtenerTarjetaActual();
    const siguienteIndice = Math.max(
        0,
        Math.min(tarjetas.length - 1, indiceActual + direccion)
    );

    tarjetas[siguienteIndice].scrollIntoView({
        behavior: movimientoReducido.matches ? "auto" : "smooth",
        block: "nearest",
        inline: "start"
    });
}

botonAnterior?.addEventListener("click", function () {
    desplazarCarrusel(-1);
});

botonSiguiente?.addEventListener("click", function () {
    desplazarCarrusel(1);
});

carrusel?.addEventListener("scroll", actualizarCarrusel, {
    passive: true
});

window.addEventListener("resize", actualizarCarrusel);


/* =========================================
   6. VENTANA EMERGENTE
   ========================================= */

const ventana = document.querySelector(".ventana-proyecto");
const botonCerrar = document.querySelector(".ventana-proyecto__cerrar");

const campoNumero = document.querySelector("[data-modal-numero]");
const campoCategoria = document.querySelector("[data-modal-categoria]");
const campoTitulo = document.querySelector("#ventana-proyecto-titulo");
const campoIntroduccion = document.querySelector("[data-modal-introduccion]");
const campoDescripcion = document.querySelector("[data-modal-descripcion]");
const campoAprendizajes = document.querySelector("[data-modal-aprendizajes]");
const campoTecnologias = document.querySelector("[data-modal-tecnologias]");
const campoNota = document.querySelector("[data-modal-nota]");
const campoEnlace = document.querySelector("[data-modal-enlace]");

let ultimoElementoActivo = null;

function abrirProyecto(clave, boton) {
    const proyecto = proyectos[clave];

    if (!proyecto || !ventana) return;

    ultimoElementoActivo = boton;

    campoNumero.textContent = proyecto.numero;
    campoCategoria.textContent = proyecto.categoria;
    campoTitulo.textContent = proyecto.titulo;
    campoIntroduccion.textContent = proyecto.introduccion;
    campoDescripcion.textContent = proyecto.descripcion;
    campoNota.textContent = proyecto.nota;

    campoAprendizajes.replaceChildren();

    proyecto.aprendizajes.forEach(function (aprendizaje) {
        const elemento = document.createElement("li");
        elemento.textContent = aprendizaje;
        campoAprendizajes.appendChild(elemento);
    });

    campoTecnologias.replaceChildren();

    proyecto.tecnologias.forEach(function (tecnologia) {
        const etiqueta = document.createElement("span");
        etiqueta.className = "ventana-proyecto__etiqueta";
        etiqueta.textContent = tecnologia;
        campoTecnologias.appendChild(etiqueta);
    });

    campoEnlace.href = proyecto.enlace || "portfolio.php";
    campoEnlace.hidden = false;

    ventana.showModal();
}

document.querySelectorAll(".tarjeta-proyecto__abrir").forEach(
    function (boton) {
        boton.addEventListener("click", function () {
            abrirProyecto(boton.dataset.proyecto, boton);
        });
    }
);

botonCerrar?.addEventListener("click", function () {
    ventana?.close();
});

/* Cerrar al pulsar sobre el fondo de la ventana. */

ventana?.addEventListener("click", function (evento) {
    if (evento.target === ventana) {
        ventana.close();
    }
});

/* Recuperar el foco al cerrar el popup. */

ventana?.addEventListener("close", function () {
    ultimoElementoActivo?.focus();
});


/* =========================================
   7. INICIALIZACIÓN
   ========================================= */

actualizarCarrusel();


/* =========================================
   VENTANA EMERGENTE DEL FORMULARIO DE CONTACTO
   ========================================= */

const ventanaContacto = document.querySelector("#ventana-contacto");
const botonAbrirContacto = document.querySelector("#abrir-formulario-contacto");
const botonCerrarContacto = document.querySelector("#cerrar-formulario-contacto");

if (ventanaContacto && botonAbrirContacto && botonCerrarContacto) {

    botonAbrirContacto.addEventListener("click", () => {
        ventanaContacto.showModal();
    });

    botonCerrarContacto.addEventListener("click", () => {
        ventanaContacto.close();
    });

    ventanaContacto.addEventListener("click", (evento) => {
        if (evento.target === ventanaContacto) {
            ventanaContacto.close();
        }
    });
}

/* ═══════════════════════════════════════
   MAPA INTERACTIVO — MÁLAGA
═══════════════════════════════════════ */

(() => {

    const mapEl = document.getElementById('map');
    const mapBlock = document.querySelector('.map-block');

    if (!mapEl || !mapBlock) return;

    let mapaInicializado = false;

    const malaga = [36.7213, -4.4214];

    function cargarLeaflet(callback) {

        if (window.L) {
            callback();
            return;
        }

        if (!document.querySelector('#leaflet-css')) {

            const css = document.createElement('link');

            css.id = 'leaflet-css';
            css.rel = 'stylesheet';
            css.href = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.css';

            document.head.appendChild(css);
        }

        const script = document.createElement('script');

        script.src = 'https://unpkg.com/leaflet@1.9.4/dist/leaflet.js';

        script.onload = callback;

        script.onerror = () => {
            console.error('Error al cargar Leaflet.');
        };

        document.head.appendChild(script);
    }

    function iniciarMapa() {

        if (mapaInicializado || !window.L) return;

        mapaInicializado = true;

        const movil = window.innerWidth <= 768;

        const mapa = L.map(mapEl, {

            center: [40.0, -3.7],

            zoom: movil ? 5 : 6,

            zoomControl: false,

            scrollWheelZoom: false,

        });

        L.control.zoom({
            position: 'bottomright'
        }).addTo(mapa);

        L.tileLayer(
            'https://services.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Dark_Gray_Base/MapServer/tile/{z}/{y}/{x}',
            {
                maxZoom: 16,

                attribution:
                    'Tiles &copy; Esri &mdash; Esri, HERE, Garmin, &copy; OpenStreetMap contributors'
            }
        ).addTo(mapa);

        L.circle(malaga, {

            radius: 60000,

            color: '#8065A8',

            weight: 1,

            opacity: 0.5,

            fillColor: '#C8B8E8',

            fillOpacity: 0.08

        }).addTo(mapa);

        L.circle(malaga, {

            radius: 22000,

            color: '#8065A8;',

            weight: 1.5,

            opacity: 0.9,

            fillColor: '#C8B8E8',

            fillOpacity: 0.18

        }).addTo(mapa);

        const marcador = L.divIcon({

            className: 'map-pulse',

            html: `
                <span class="map-pulse-core"></span>
                <span class="map-pulse-ring"></span>
                <span class="map-pulse-ring r2"></span>
            `,

            iconSize: [22, 22],

            iconAnchor: [11, 11]

        });

        L.marker(malaga, {

            icon: marcador,

            keyboard: false,

            interactive: false

        }).addTo(mapa);

        requestAnimationFrame(() => {
            mapa.invalidateSize();
        });

        setTimeout(() => {

            mapa.flyTo(
                malaga,
                movil ? 8 : 9,
                {
                    duration: 2.4
                }
            );

        }, 600);

    }

    const observadorEntrada = new IntersectionObserver(
        (entradas, observador) => {

            if (entradas[0].isIntersecting) {

                mapBlock.classList.add('map-visible');

                observador.disconnect();

                cargarLeaflet(iniciarMapa);

            }

        },
        {
            threshold: 0.15
        }
    );

    observadorEntrada.observe(mapBlock);

})();


/* =========================================
   DESTELLOS CREATIVOS · TODA LA PÁGINA
   ========================================= */

(() => {

    const iniciarDestellos = () => {

        if (window.matchMedia("(pointer: coarse)").matches) return;
        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;

        const colores = [
            "#C8B8E8",
            "#8065A8",
            "#A9C9BB"
        ];

        let ultimoDestello = 0;

        document.addEventListener("pointermove", (evento) => {

            if (evento.pointerType !== "mouse") return;

            const ahora = performance.now();

            if (ahora - ultimoDestello < 45) return;

            ultimoDestello = ahora;

            const destello = document.createElement("span");

            destello.className = "destello-cursor";
            destello.setAttribute("aria-hidden", "true");

            destello.style.left = `${evento.clientX}px`;
            destello.style.top = `${evento.clientY}px`;

            const color = colores[
                Math.floor(Math.random() * colores.length)
            ];

            const tamano = Math.floor(Math.random() * 6) + 7;

            destello.style.setProperty("--color-destello", color);
            destello.style.setProperty("--tamano-destello", `${tamano}px`);

            document.body.appendChild(destello);

            destello.addEventListener("animationend", () => {
                destello.remove();
            });

        });

    };

    if (document.readyState === "loading") {
        document.addEventListener("DOMContentLoaded", iniciarDestellos);
    } else {
        iniciarDestellos();
    }

})();