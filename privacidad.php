<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#F6F1EB">
    <meta name="description" content="Politicas de privacidad del Portfolio personal de Lizeth Ardila.">

    <title>Lizeth Ardila | Portfolio</title>

    <!-- Tipografías de la identidad visual -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Manrope:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap">

    <!-- Estilos generales del portfolio -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- Estilos exclusivos de la política de privacidad -->
    <link rel="stylesheet" href="css/privacidad.css">

    <!-- JavaScript del menú y las interacciones -->
    <script src="menu.js" defer></script>
</head>

<body>

     <!-- =========================================
         ENCABEZADO Y NAVEGACIÓN
         ========================================= -->
    <header class="encabezado">
        <nav class="navegacion" aria-label="Navegación principal">

            <!-- Marca personal -->
            <a
                class="marca"
                href="#inicio"
                aria-label="Lizeth Ardila, inicio"
            >
                <span class="marca__nombre">Lizeth Ardila</span>
                <span class="marca__simbolo" aria-hidden="true">✦</span>
            </a>

            <!-- Botón del menú móvil -->
            <button
                class="navegacion__boton"
                type="button"
                aria-label="Abrir menú"
                aria-expanded="false"
                aria-controls="enlaces-navegacion"
            >
                <span class="navegacion__icono" aria-hidden="true"></span>
            </button>

            <!-- Enlaces de navegación -->
            <ul class="navegacion__lista" id="enlaces-navegacion">
                <li class="navegacion__elemento">
                    <a
                        class="navegacion__enlace navegacion__enlace--activo"
                        href="#inicio"
                        aria-current="page"
                    >
                        Inicio
                    </a>
                </li>

                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="#sobre-mi">
                        Sobre mí
                    </a>
                </li>

                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="#habilidades">
                        Habilidades
                    </a>
                </li>

                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="#experiencia">
                        Experiencia y colaboración
                    </a>
                </li>

                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="#proyectos">
                        Proyectos
                    </a>
                </li>

                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="#contacto">
                        Contacto
                    </a>
                </li>
            </ul>

            <!-- Ilustración animada del ojo -->
            <div
                class="ojo-marca"
                role="img"
                aria-label="Ilustración de un ojo con delineado felino"
            >
                <svg
                    class="ojo-marca__dibujo"
                    viewBox="0 0 100 100"
                    xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true"
                >
                    <defs>
                        <clipPath id="recorte-ojo">
                            <path d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z" />
                        </clipPath>
                    </defs>

                    <circle class="ojo-marca__fondo" cx="50" cy="50" r="47" />

                    <path
                        class="ojo-marca__destello"
                        d="M16 29 L18 35 L24 37 L18 39 L16 45 L14 39 L8 37 L14 35 Z"
                    />

                    <path
                        class="ojo-marca__destello"
                        d="M79 65 L81 70 L86 72 L81 74 L79 79 L77 74 L72 72 L77 70 Z"
                    />

                    <path
                        class="ojo-marca__destello"
                        d="M78 18 L79.5 22 L84 23.5 L79.5 25 L78 29 L76.5 25 L72 23.5 L76.5 22 Z"
                    />

                    <path
                        class="ojo-marca__pliegue"
                        d="M20 46 Q43 19 74 36"
                    />

                    <g clip-path="url(#recorte-ojo)">
                        <path
                            class="ojo-marca__blanco"
                            d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z"
                        />

                        <g class="ojo-marca__mirada">
                            <circle
                                class="ojo-marca__iris"
                                cx="52"
                                cy="49"
                                r="15"
                            />

                            <circle
                                class="ojo-marca__pupila"
                                cx="54"
                                cy="49"
                                r="7"
                            />

                            <circle
                                class="ojo-marca__brillo"
                                cx="48"
                                cy="43"
                                r="3.5"
                            />

                            <circle
                                class="ojo-marca__brillo"
                                cx="58"
                                cy="53"
                                r="1.5"
                            />
                        </g>
                    </g>

                    <path
                        class="ojo-marca__delineado"
                        d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z"
                    />

                    <path
                        class="ojo-marca__pestanas"
                        d="M26 40 L20 32 M34 34 L30 25 M44 30 L42 21 M55 30 L56 22 M66 35 L70 27"
                    />

                    <path
                        class="ojo-marca__pestanas-inferiores"
                        d="M35 65 L32 70 M45 69 L44 74 M56 68 L58 72"
                    />

                    <path
                        class="ojo-marca__parpado"
                        d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z"
                    />
                </svg>
            </div>

        </nav>
    </header>

    <!-- =========================================
         CONTENIDO PRINCIPAL
         ========================================= -->
    <main>

    <!-- MENÚ LATERAL DE REDES SOCIALES -->
<aside class="redes-sociales" aria-label="Redes sociales">

    <!-- LINKEDIN -->
    <a  class="redes-sociales__enlace"  href="https://www.linkedin.com/in/lizardila/"
        target="_blank"  rel="noopener noreferrer" aria-label="LinkedIn" title="LinkedIn" >
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path fill="currentColor" d="M20.45 2H3.55C2.69 2 2 2.68 2 3.52v16.96c0 .84.69 1.52 1.55 1.52h16.9c.86 0 1.55-.68 1.55-1.52V3.52c0-.84-.69-1.52-1.55-1.52ZM7.93 18.7H4.95V9.1h2.98v9.6ZM6.44 7.79a1.73 1.73 0 1 1 0-3.46 1.73 1.73 0 0 1 0 3.46ZM19.05 18.7h-2.98v-4.67c0-1.11-.02-2.54-1.55-2.54-1.55 0-1.79 1.21-1.79 2.46v4.75H9.75V9.1h2.86v1.31h.04c.4-.75 1.37-1.55 2.82-1.55 3.02 0 3.58 1.99 3.58 4.57v5.27Z"/>
        </svg>
    </a>

    <!-- GITHUB -->
    <a  class="redes-sociales__enlace" href="https://github.com/Lizardila"
        target="_blank" rel="noopener noreferrer" aria-label="GitHub (se abre en una pestaña nueva)" title="GitHub" >
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path fill="currentColor" d="M12 .9a11.1 11.1 0 0 0-3.51 21.63c.56.1.76-.24.76-.54v-2.1c-3.1.67-3.75-1.32-3.75-1.32-.5-1.28-1.24-1.62-1.24-1.62-1.01-.69.08-.68.08-.68 1.12.08 1.71 1.15 1.71 1.15 1 .1.9 2.03 3.42 1.56.1-.72.39-1.2.7-1.48-2.47-.28-5.07-1.24-5.07-5.5 0-1.22.44-2.22 1.15-3-.12-.28-.5-1.42.11-2.96 0 0 .94-.3 3.05 1.15a10.6 10.6 0 0 1 5.55 0c2.11-1.44 3.04-1.15 3.04-1.15.61 1.54.23 2.68.12 2.96.72.78 1.15 1.78 1.15 3 0 4.27-2.6 5.22-5.08 5.49.4.34.75 1.02.75 2.06v3.04c0 .3.2.65.77.54A11.1 11.1 0 0 0 12 .9Z"/>
        </svg>
    </a>

    <!-- YOUTUBE -->
    <a  class="redes-sociales__enlace" href="https://www.youtube.com/@IdeasQueTomanForma"
        target="_blank" rel="noopener noreferrer" aria-label="YouTube (se abre en una pestaña nueva)" title="YouTube"  >
        <svg viewBox="0 0 24 24" aria-hidden="true">
            <path fill="currentColor" d="M23.5 6.2a3 3 0 0 0-2.11-2.12C19.52 3.57 12 3.57 12 3.57s-7.52 0-9.39.5A3 3 0 0 0 .5 6.2 31.2 31.2 0 0 0 0 12a31.2 31.2 0 0 0 .5 5.8 3 3 0 0 0 2.11 2.12c1.87.5 9.39.5 9.39.5s7.52 0 9.39-.5a3 3 0 0 0 2.11-2.12A31.2 31.2 0 0 0 24 12a31.2 31.2 0 0 0-.5-5.8ZM9.55 15.58V8.42L15.82 12l-6.27 3.58Z"/>
        </svg>
    </a>

    <a  class="redes-sociales__enlace" href="https://wa.me/34641714214" 
        target="_blank" rel="noopener noreferrer" aria-label="WhatsApp (se abre en una pestaña nueva)" title="WhatsApp">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
        </svg>
    </a>
</aside> 
</main>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="contenido-privacidad">

        <div class="privacidad-introduccion">
            <div class="privacidad-introduccion__metadatos">
                <span class="texto-editorial">INFORMACIÓN LEGAL</span>
                <span class="texto-editorial">LA — 002</span>
            </div>

            <p class="privacidad-ceja">TRANSPARENCIA · PROTECCIÓN DE DATOS</p>

            <h1 class="privacidad-titulo">
                Política de
                <em>privacidad.</em>
            </h1>

            <p class="privacidad-resumen">
                La confianza también forma parte de una buena experiencia
                digital. En esta página te explico qué datos personales
                pueden recogerse a través de mi portfolio, con qué finalidad
                y cómo puedes ejercer tus derechos.
            </p>

            <p class="privacidad-actualizacion">
                ÚLTIMA ACTUALIZACIÓN · 28 OCTUBRE 2026
            </p>

        </div>

        <!-- APARTADOS LEGALES -->
        <article class="documento-privacidad">

            <section class="apartado-privacidad">
                <span class="apartado-privacidad__numero">01</span>

                <div class="apartado-privacidad__contenido">
                    <h2>Responsable del tratamiento</h2>

                    <p>
                        La responsable del tratamiento de los datos personales
                        es Lizeth Natalia Ardila Hernandez.
                    </p>

                    <p>
                        Para consultas relacionadas con la privacidad o para
                        ejercer tus derechos, puedes contactar a través de:
                    </p>

                    <p>
                        <a href="mailto:liznardilah@gmail.com">
                            liznardilah@gmail.com
                        </a>
                    </p>
                </div>
            </section>

            <section class="apartado-privacidad">
                <span class="apartado-privacidad__numero">02</span>

                <div class="apartado-privacidad__contenido">
                    <h2>Datos personales que se recogen</h2>

                    <p>
                        A través del formulario de contacto podrán solicitarse
                        los siguientes datos:
                    </p>

                    <ul>
                        <li>Nombre.</li>
                        <li>Dirección de correo electrónico.</li>
                        <li>Motivo de la consulta.</li>
                        <li>Contenido del mensaje.</li>
                    </ul>

                    <p>
                        Se recomienda facilitar únicamente la información
                        necesaria para gestionar la consulta y evitar incluir
                        datos especialmente sensibles o información personal
                        de terceras personas que no resulte necesaria.
                    </p>
                </div>
            </section>

            <section class="apartado-privacidad">
                <span class="apartado-privacidad__numero">03</span>

                <div class="apartado-privacidad__contenido">
                    <h2>Finalidad del tratamiento</h2>

                    <p>
                        Los datos se tratarán para leer y responder mensajes,
                        atender solicitudes de información y gestionar
                        comunicaciones relacionadas con oportunidades
                        profesionales, colaboraciones y proyectos digitales.
                    </p>

                    <p>
                        Los datos no deberán utilizarse para finalidades
                        incompatibles con las indicadas en esta política.
                    </p>
                </div>
            </section>

            <section class="apartado-privacidad">
                <span class="apartado-privacidad__numero">04</span>

                <div class="apartado-privacidad__contenido">
                    <h2>Base jurídica del tratamiento</h2>

                    <p>
                        La base jurídica dependerá del contenido y del contexto
                        de cada comunicación. Podrá ser la adopción de medidas
                        precontractuales solicitadas por la persona interesada
                        cuando se trate de una posible relación profesional,
                        o el interés legítimo en atender y responder
                        comunicaciones pertinentes, cuando proceda.
                    </p>

                    <p>
                        Si para una finalidad concreta fuera necesario obtener
                        el consentimiento, este se solicitará de forma
                        específica y podrá retirarse posteriormente.
                    </p>
                </div>
            </section>

            <section class="apartado-privacidad">
                <span class="apartado-privacidad__numero">05</span>

                <div class="apartado-privacidad__contenido">
                    <h2>Destinatarios y proveedores</h2>

                    <p>
                        Los datos podrán ser tratados por los proveedores
                        tecnológicos necesarios para alojar la web, procesar
                        el formulario, almacenar la información o gestionar
                        las comunicaciones por correo electrónico, según la
                        configuración que finalmente se utilice.
                    </p>

                    <p>
                        Cuando dichos proveedores actúen como encargados del
                        tratamiento, se deberán establecer las garantías y
                        acuerdos exigibles por la normativa aplicable.
                        Cualquier transferencia internacional de datos deberá
                        contar con la base y las garantías que correspondan.
                    </p>

                    <p>
                        Este apartado deberá concretarse cuando se decidan
                        el alojamiento, el sistema de envío y la base de datos
                        utilizados por la web.
                    </p>
                </div>
            </section>

            <section class="apartado-privacidad">
                <span class="apartado-privacidad__numero">06</span>

                <div class="apartado-privacidad__contenido">
                    <h2>Conservación de los datos</h2>

                    <p>
                        Los datos se conservarán durante el tiempo necesario
                        para gestionar la consulta y mantener la comunicación
                        correspondiente. Posteriormente, se suprimirán cuando
                        ya no sean necesarios, salvo que deban conservarse
                        durante un plazo adicional para cumplir obligaciones
                        legales o atender posibles responsabilidades.
                    </p>

                    <p>
                        Los plazos concretos dependerán de la naturaleza
                        de la consulta y de las obligaciones aplicables.
                    </p>
                </div>
            </section>

            <section class="apartado-privacidad">
                <span class="apartado-privacidad__numero">07</span>

                <div class="apartado-privacidad__contenido">
                    <h2>Tus derechos</h2>

                    <p>
                        Puedes ejercer, cuando proceda, los derechos de acceso,
                        rectificación, supresión, oposición, limitación del
                        tratamiento y portabilidad de tus datos personales.
                        También puedes retirar un consentimiento previamente
                        otorgado, sin que ello afecte a la licitud del
                        tratamiento realizado antes de retirarlo.
                    </p>

                    <p>
                        Para realizar una solicitud, escribe a
                        <a href="mailto:liznardilah@gmail.com">
                            liznardilah@gmail.com
                        </a>,
                        indicando el derecho que deseas ejercer. Podrá ser
                        necesario verificar tu identidad para proteger tus
                        datos.
                    </p>

                    <p>
                        También puedes presentar una reclamación ante la
                        <a
                            href="https://www.aepd.es/"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Agencia Española de Protección de Datos (AEPD)
                        </a>.
                    </p>
                </div>
            </section>

            <section class="apartado-privacidad">
                <span class="apartado-privacidad__numero">08</span>

                <div class="apartado-privacidad__contenido">
                    <h2>Seguridad de la información</h2>

                    <p>
                        Se adoptarán medidas técnicas y organizativas adecuadas
                        al riesgo para proteger los datos frente a accesos no
                        autorizados, pérdida, alteración o divulgación indebida.
                    </p>

                    <p>
                        La configuración definitiva deberá tener en cuenta
                        las medidas de seguridad del servidor, los permisos
                        de acceso y la protección de la información almacenada.
                    </p>
                </div>
            </section>

            <section class="apartado-privacidad">
                <span class="apartado-privacidad__numero">09</span>

                <div class="apartado-privacidad__contenido">
                    <h2>Actualizaciones de esta política</h2>

                    <p>
                        Esta política podrá actualizarse si cambian las
                        funcionalidades del portfolio, los proveedores
                        tecnológicos o la normativa aplicable. La fecha de
                        actualización se indicará al inicio del documento.
                    </p>
                </div>
            </section>

        </article>

    </main>

    <!-- =========================================
         PIE GLOBAL Y NAVEGACIÓN SECUNDARIA
         ========================================= -->
    <footer class="pie-global">
        <div class="pie-global__principal">
            <div class="pie-global__marca">
                <a href="#inicio" class="pie-global__nombre">Lizeth Ardila <span aria-hidden="true">✦</span></a>
                <p>
                    Desarrollo de software, creatividad y tecnología
                    para transformar ideas en soluciones digitales.
                </p>
            </div>

            <nav class="pie-global__navegacion" aria-label="Navegación del pie de página">
                <div>
                    <span class="pie-global__titulo">EXPLORAR</span>
                    <a href="#inicio">Inicio</a>
                    <a href="#sobre-mi">Sobre mí</a>
                    <a href="#habilidades">Habilidades</a>
                    <a href="#experiencia">Experiencia y colaboración</a>
                    <a href="portfolio.php">Portfolio</a>
                    <a href="blog.php">Blog</a>
                </div>

                <div>
                    <span class="pie-global__titulo">INFORMACIÓN LEGAL</span>
                    <a href="aviso-legal.php">Aviso legal</a>
                    <a href="privacidad.php">Política de privacidad</a>
                    <a href="cookies.php">Política de cookies</a>
                </div>

                <div>
                    <span class="pie-global__titulo">ENCUÉNTRAME</span>
                    <a href="https://www.linkedin.com/in/lizardila/" target="_blank" rel="noopener noreferrer">LinkedIn ↗</a>
                    <a href="https://github.com/Lizardila" target="_blank" rel="noopener noreferrer">GitHub ↗</a>
                    <a href="mailto:liznardilah@gmail.com">Correo electrónico ↗</a>
                </div>
            </nav>
        </div>

        <div class="pie-global__inferior">
            <span>PORTFOLIO PERSONAL · LIZETH ARDILA</span>
            <span>IDEAS QUE TOMAN FORMA.</span>
            <a href="#inicio">VOLVER ARRIBA ↑</a>
        </div>
    </footer>

</body>
</html>
