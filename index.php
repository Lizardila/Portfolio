<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="theme-color" content="#F6F1EB">
    <meta
        name="description"
        content="Portfolio personal de Lizeth Ardila."
    >

    <title>Lizeth Ardila | Portfolio</title>

    <!-- Tipografías de la identidad visual -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Manrope:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">


    <!-- Hoja de estilos -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- JavaScript -->
    <script src="js/menu.js" defer></script>
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

        <!-- =====================================
             PORTADA
             ===================================== -->
        <section
            class="portada"
            id="inicio"
            aria-labelledby="portada-titulo"
        >
            <div class="portada__contenido">

                <!-- Decoración geométrica -->
                <div class="decoracion-geometrica" aria-hidden="true">
                    <span class="figura figura--cuadrado"></span>
                    <span class="figura figura--triangulo"></span>
                    <span class="figura figura--circulo"></span>
                </div>

                <!-- Frase principal de la marca -->
                <h1 class="portada__titulo" id="portada-titulo">
                    <span class="portada__titulo-linea" data-scramble>Ideas que</span>
                    <span class="portada__titulo-linea portada__titulo-linea--destacada">
                        toman
                    </span>
                    <span class="portada__titulo-linea">
                        <em class="portada__titulo-contorno" data-scramble>forma.</em>
                    </span>
                </h1>

                <!-- Texto de apoyo -->
                <p class="portada__descripcion">
                  Ingeniera en Desarrollo de Software. Desarrollo soluciones
                    digitales con lógica, sensibilidad y curiosidad.
                </p>

                <!-- Acceso a los proyectos -->
                <a class="portada__enlace" href="portfolio.php">
                    <span>Explorar proyectos</span>
                    <span class="portada__flecha" aria-hidden="true">↗</span>
                </a>

            </div>
        </section>

      
        <!-- =====================================
             SOBRE MÍ
             ===================================== -->
        <section
            class="sobre-mi"
            id="sobre-mi"
            aria-labelledby="sobre-mi-titulo"
        >
            <div class="sobre-mi__contenedor">

                <!-- Composición superior -->
                <div class="sobre-mi__principal">

                    <!-- Composición fotográfica -->
                    <div class="sobre-mi__visual">
                        <p class="sobre-mi__nota sobre-mi__nota--lateral">
                            Curiosidad<br>
                            también es<br>
                            una forma<br>
                            de avanzar.
                        </p>

                        <span
                            class="sobre-mi__papel sobre-mi__papel--lavanda"
                            aria-hidden="true"
                        ></span>

                        <span
                            class="sobre-mi__forma sobre-mi__forma--menta"
                            aria-hidden="true"
                        ></span>

                        <figure class="sobre-mi__retrato">
                            <span class="sobre-mi__cinta" aria-hidden="true"></span>

                            <img
                                class="sobre-mi__fotografia"
                                src="imagenes/lizeth-ardila.png"
                                alt="Retrato personal de Lizeth Ardila"
                                loading="lazy"
                            >
                        </figure>

                        <span
                            class="sobre-mi__destello sobre-mi__destello--uno"
                            aria-hidden="true"
                        >✧</span>
                    </div>

                    <!-- Presentación personal -->
                    <div class="sobre-mi__contenido">
                        <div class="sobre-mi__encabezado">
                            <span class="sobre-mi__etiqueta">01 / SOBRE MÍ</span>
                            <span class="sobre-mi__palabras">
                                APRENDER<br>CREAR<br>APORTAR
                            </span>
                        </div>

                        <h2 class="sobre-mi__titulo" id="sobre-mi-titulo">
                            Detrás del<br>
                            <em>código,</em><br>
                            hay una idea.
                        </h2>

                        <p class="sobre-mi__presentacion">
                            Soy Lizeth Ardila, desarrolladora de software
                            y una persona curiosa por naturaleza.
                        </p>

                        <p class="sobre-mi__descripcion">
                            Me interesa entender cómo funcionan las cosas,
                            encontrar patrones y transformar ideas en soluciones
                            digitales útiles. Disfruto aprender, explorar nuevas
                            tecnologías y crear experiencias que hagan la vida
                            más simple, funcional y bonita.
                        </p>

                        <!-- Descarga del currículum -->
                        <a
                            class="sobre-mi__descarga"
                            href="documentos/CV-Lizeth-Ardila.pdf"
                            download="CV-Lizeth-Ardila.pdf"
                        >
                            <svg
                                class="sobre-mi__icono-descarga"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                            >
                                <path
                                    d="M12 3v11m0 0 4-4m-4 4-4-4M5 16v4h14v-4"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="1.6"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>

                            <span>Descargar mi CV</span>
                        </a>

                        <span class="sobre-mi__formato-cv">
                            — &nbsp; PDF · CURRÍCULUM PROFESIONAL
                        </span>

                        <blockquote class="sobre-mi__cita">
                            <p>
                                La lógica estructura las ideas.<br>
                                La curiosidad las hace avanzar.
                            </p>
                        </blockquote>

                        <!-- Decoración geométrica -->
                        <div class="sobre-mi__geometria" aria-hidden="true">
                            <span class="sobre-mi__figura sobre-mi__figura--cuadrado"></span>
                            <span class="sobre-mi__figura sobre-mi__figura--triangulo"></span>
                            <span class="sobre-mi__figura sobre-mi__figura--circulo"></span>
                        </div>
                    </div>
                </div>

                <!-- FORMACIÓN ACADÉMICA Y COMPLEMENTARIA -->
                <section
                    class="sobre-mi__formacion"
                    aria-labelledby="formacion-titulo"
                >
                    <div class="sobre-mi__formacion-encabezado">
                        <span class="sobre-mi__indice">02 / FORMACIÓN</span>
                        <h3 id="formacion-titulo">
                            Conocimiento que<br>
                            <em>se transforma en práctica.</em>
                        </h3>
                        <p>
                            Una base en desarrollo de software que complemento
                            con formación en programación, bases de datos,
                            inteligencia artificial y diseño digital.
                        </p>
                    </div>

                    <div class="sobre-mi__formacion-lista">
                        <article class="sobre-mi__formacion-item sobre-mi__formacion-item--principal">
                            <span class="sobre-mi__formacion-tipo">TITULACIÓN</span>
                            <h4>Ingeniería en Desarrollo de Software</h4>
                            <p>Formación en desarrollo y construcción de soluciones de software.</p>
                        </article>

                        <article class="sobre-mi__formacion-item">
                            <span class="sobre-mi__formacion-tipo">CERTIFICACIÓN ORACLE</span>
                            <h4>Oracle Certified Foundations Associate, Java SE</h4>
                        </article>

                        <article class="sobre-mi__formacion-item">
                            <span class="sobre-mi__formacion-tipo">FORMACIÓN COMPLEMENTARIA</span>
                            <h4>Fundamentos de Programación en Python</h4>
                        </article>

                        <article class="sobre-mi__formacion-item">
                            <span class="sobre-mi__formacion-tipo">FORMACIÓN COMPLEMENTARIA</span>
                            <h4>Iniciación al Diseño Gráfico</h4>
                        </article>

                        <article class="sobre-mi__formacion-item">
                            <span class="sobre-mi__formacion-tipo">FORMACIÓN COMPLEMENTARIA</span>
                            <h4>Introducción a la Inteligencia Artificial</h4>
                        </article>

                        <article class="sobre-mi__formacion-item">
                            <span class="sobre-mi__formacion-tipo">DIPLOMADO</span>
                            <h4>Administración y Consulta de Bases de Datos SQL Server</h4>
                        </article>
                    </div>
                </section>
                
<!-- HABILIDADES Y TECNOLOGÍAS -->
<section class="sobre-mi__habilidades" id="habilidades" aria-labelledby="habilidades-titulo">

    <div class="sobre-mi__habilidades-cabecera">
        <span class="sobre-mi__indice">03 / MI STACK TECNOLÓGICO</span>

        <h3>
            Herramientas para<br>
            <em>dar vida a las ideas.</em>
        </h3>

        <p>
            Tecnologías y lenguajes que utilizo para desarrollar
            soluciones digitales, construir experiencias web
            y transformar ideas en proyectos funcionales.
        </p>
    </div>

    <div class="sobre-mi__tecnologias">

        <!-- HTML -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-html5-plain colored"
               aria-hidden="true"></i>
            <h4>HTML5</h4>
            <span>Estructura web</span>
        </article>

        <!-- CSS -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-css3-plain colored"
               aria-hidden="true"></i>
            <h4>CSS3</h4>
            <span>Diseño y estilos</span>
        </article>

        <!-- JavaScript -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-javascript-plain colored"
               aria-hidden="true"></i>
            <h4>JavaScript</h4>
            <span>Interactividad web</span>
        </article>

         <!-- Java -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-java-plain colored"
               aria-hidden="true"></i>
            <h4>Java</h4>
            <span>Interactividad web</span>
        </article>

        <!-- PHP -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-php-plain colored"
               aria-hidden="true"></i>
            <h4>PHP</h4>
            <span>Desarrollo backend</span>
        </article>

        <!-- MySQL -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-mysql-plain colored"
               aria-hidden="true"></i>
            <h4>MySQL</h4>
            <span>Bases de datos</span>
        </article>

        <!-- WordPress -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-wordpress-plain colored"
               aria-hidden="true"></i>
            <h4>WordPress</h4>
            <span>Desarrollo de sitios web</span>
        </article>

        <!-- Visual Code -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-vscode-plain colored"
               aria-hidden="true"></i>
            <h4>Visual Code</h4>
            <span>Entorno de desarrollo</span>
        </article>

        <!-- Canva -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-canva-plain colored"
               aria-hidden="true"></i>
            <h4>Canva</h4>
            <span>Diseño gráfico</span>
        </article>

        <!-- ChatGPT -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-chatgpt-plain colored"
               aria-hidden="true"></i>
            <h4>ChatGPT</h4>
            <span>Asistente de IA</span>
        </article>

        <!-- Claude -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-claude-plain colored"
               aria-hidden="true"></i>
            <h4>Claude</h4>
            <span>Asistente de IA</span>
        </article>

        <!-- Gemini -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-gemini-plain colored"
               aria-hidden="true"></i>
            <h4>Gemini</h4>
            <span>Asistente de IA</span>
        </article>

        <!-- Dall-E -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-dalle-plain colored"
               aria-hidden="true"></i>
            <h4>Dall-E</h4>
            <span>Generación de imágenes</span>
        </article>

        <!-- DaVinci -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-davinci-plain colored"
               aria-hidden="true"></i>
            <h4>DaVinci</h4>
            <span>Edición de video</span>
        </article>

        <!-- Git -->
        <article class="sobre-mi__tecnologia">
            <i class="devicon-git-plain colored"
               aria-hidden="true"></i>
            <h4>Git</h4>
            <span>Control de versiones</span>
        </article>

    </div>

</section>

</section>

        <!-- =====================================
             EXPERIENCIA Y ÁREAS DE COLABORACIÓN
             ===================================== -->
        <section
            class="experiencia"
            id="experiencia"
            aria-labelledby="experiencia-titulo"
        >
            <div class="experiencia__contenedor">
                <header class="experiencia__cabecera">
                    <span class="experiencia__indice">04 / EXPERIENCIA Y COLABORACIÓN</span>
                    <h2 id="experiencia-titulo">
                        Aprender haciendo.<br>
                        <em>Crear para aportar.</em>
                    </h2>
                    <p>
                        Mi recorrido práctico se construye a través de proyectos
                        académicos y personales en los que exploro tecnologías,
                        resuelvo retos y convierto ideas en experiencias digitales.
                    </p>
                </header>

                <div class="experiencia__composicion">
                    <article class="experiencia__bloque">
                        <span class="experiencia__numero">01</span>
                        <div>
                            <span class="experiencia__etiqueta">MI RECORRIDO PRÁCTICO</span>
                            <h3>Proyectos académicos y personales</h3>
                            <p>
                                Desarrollo ejercicios y proyectos propios para
                                aplicar conocimientos de programación, lógica,
                                desarrollo web, bases de datos y herramientas digitales.
                                Cada proyecto representa una oportunidad para aprender,
                                probar soluciones y mejorar el proceso.
                            </p>
                            <a class="experiencia__enlace" href="portfolio.php">
                                Explorar todos mis proyectos <span aria-hidden="true">↗</span>
                            </a>
                        </div>
                    </article>

                    <article class="experiencia__bloque">
                        <span class="experiencia__numero">02</span>
                        <div>
                            <span class="experiencia__etiqueta">ÁREAS DE COLABORACIÓN</span>
                            <h3>Ámbitos en los que puedo aportar</h3>
                            <ul class="experiencia__lista">
                                <li>Maquetación y desarrollo de interfaces web con HTML y CSS.</li>
                                <li>Interactividad y funcionalidades con JavaScript.</li>
                                <li>Desarrollo de proyectos con PHP y gestión de bases de datos.</li>
                                <li>Programación y resolución de ejercicios con Python y Java.</li>
                                <li>Exploración de herramientas de inteligencia artificial.</li>
                                <li>Apoyo en diseño gráfico y creación de recursos digitales.</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- =====================================
             PROYECTOS
             ===================================== -->
        <section
            class="proyectos"
            id="proyectos"
            aria-labelledby="proyectos-titulo"
        >
            <div class="proyectos__encabezado">
                <div class="proyectos__introduccion">
                    <span class="proyectos__sobretitulo">
                        UNA SELECCIÓN DE MI TRABAJO · 001—003
                    </span>

                    <h2 class="proyectos__titulo" id="proyectos-titulo">
                        Ideas en <em data-scramble>movimiento.</em>
                    </h2>

                    <p class="proyectos__descripcion">
                        Experimentos, herramientas y soluciones digitales
                        que nacen de la curiosidad y toman forma a través del código.
                    </p>
                </div>
            </div>

            <div class="proyectos__ventana">
                <div
                    class="proyectos__carrusel"
                    aria-label="Carrusel de proyectos"
                >

                <!-- TARJETA 1 RESERVAS DE RESTAURANTE -->
                    <article class="tarjeta-proyecto">
                        <button
                            class="tarjeta-proyecto__abrir"
                            type="button"
                            data-proyecto="reservas"
                            aria-haspopup="dialog"
                            aria-label="Ampliar información sobre Reservas de restaurante"
                        >
                            <div class="tarjeta-proyecto__visual tarjeta-proyecto__visual--reservas">
                                <img
                                    class="tarjeta-proyecto__imagen"
                                    src="imagenes/reservas.png"
                                    alt="Captura de pantalla del sistema de reservas de restaurante"
                                    decoding="async"
                                >
                                <span class="tarjeta-proyecto__numero">01 / WEB</span>
                                <span class="tarjeta-proyecto__simbolo" aria-hidden="true">↗</span>
                            </div>

                            <div class="tarjeta-proyecto__informacion">
                                <div>
                                    <span class="tarjeta-proyecto__categoria">
                                        PHP · MYSQL · JAVASCRIPT
                                    </span>
                                    <h3>Reservas de restaurante</h3>
                                </div>

                                <span class="tarjeta-proyecto__indicador" aria-hidden="true">↗</span>
                            </div>

                            <p class="tarjeta-proyecto__resumen">
                                Una aplicación web para consultar disponibilidad y gestionar reservas.
                            </p>
                        </button>
                    </article>


                    <!-- TARJETA 2: GESTOR DE TAREAS -->
                    <article class="tarjeta-proyecto">
                        <button
                            class="tarjeta-proyecto__abrir"
                            type="button"
                            data-proyecto="gestorTareas"
                            aria-haspopup="dialog"
                            aria-label="Ampliar información sobre Gestor de Tareas"
                        >
                            <div class="tarjeta-proyecto__visual tarjeta-proyecto__visual--animo">
                                <img
                                    class="tarjeta-proyecto__imagen"
                                    src="imagenes/gestor-java.png"
                                    alt="Captura de pantalla del proyecto Gestor de Tareas"
                                    decoding="async"
                                >
                                <span class="tarjeta-proyecto__numero">02 / Java</span>
                                <span class="tarjeta-proyecto__simbolo" aria-hidden="true">↗</span>
                            </div>

                            <div class="tarjeta-proyecto__informacion">
                                <div>
                                    <span class="tarjeta-proyecto__categoria">
                                        POO · JAVA
                                    </span>
                                    <h3>Gestor de Tareas</h3>
                                </div>
                                <span class="tarjeta-proyecto__indicador" aria-hidden="true">↗</span>
                            </div>

                            <p class="tarjeta-proyecto__resumen">
                                Aplicación modular diseñada para organizar tareas diarias por prioridad y estado.
                            </p>
                        </button>

                    </article>

                    <!-- TARJETA 3: SIMULADOR DE INVERSIONES -->
                    <article class="tarjeta-proyecto">
                        <button
                            class="tarjeta-proyecto__abrir"
                            type="button"
                            data-proyecto="inversiones"
                            aria-haspopup="dialog"
                            aria-label="Ampliar información sobre Simulador de inversiones"
                        >
                            <div class="tarjeta-proyecto__visual tarjeta-proyecto__visual--inversiones">
                                <img
                                    class="tarjeta-proyecto__imagen"
                                    src="imagenes/Simulador.png"
                                    alt="Captura de pantalla del Simulador de inversiones"
                                    decoding="async"
                                >
                                <span class="tarjeta-proyecto__numero">03 / PY</span>
                                <span class="tarjeta-proyecto__simbolo" aria-hidden="true">↗</span>
                            </div>

                            <div class="tarjeta-proyecto__informacion">
                                <div>
                                    <span class="tarjeta-proyecto__categoria">
                                        PYTHON · CÁLCULO
                                    </span>
                                    <h3>Simulador de inversiones</h3>
                                </div>

                                <span class="tarjeta-proyecto__indicador" aria-hidden="true">↗</span>
                            </div>

                            <p class="tarjeta-proyecto__resumen">
                                Una herramienta para explorar el interés compuesto.
                            </p>
                        </button>
                    </article>

                    
                </div>
            </div>

            <!-- Pie editorial de proyectos -->
            <div class="proyectos__pie">
                <span>DESLIZA PARA EXPLORAR</span>
                <span class="proyectos__linea" aria-hidden="true"></span>
                <span>EL PROCESO TAMBIÉN ES PARTE DEL RESULTADO</span>
            </div>

            <div class="proyectos__acceso-portfolio">
                <a href="portfolio.php" class="proyectos__boton-portfolio">
                    Ver portfolio completo <span aria-hidden="true">↗</span>
                </a>
            </div>

        </section>

        <!-- =====================================
             VENTANA EMERGENTE DE PROYECTOS
             ===================================== -->
        <dialog
            class="ventana-proyecto"
            aria-labelledby="ventana-proyecto-titulo"
        >
            <div class="ventana-proyecto__contenido">

                <div class="ventana-proyecto__cabecera">
                    <span class="ventana-proyecto__numero">
                        PROYECTO · <span data-modal-numero>01</span>
                    </span>

                    <button
                        class="ventana-proyecto__cerrar"
                        type="button"
                        aria-label="Cerrar ventana del proyecto"
                    >
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="ventana-proyecto__cuerpo">
                    <span
                        class="ventana-proyecto__categoria"
                        data-modal-categoria
                    ></span>

                    <h2
                        class="ventana-proyecto__titulo"
                        id="ventana-proyecto-titulo"
                    >
                        Título del proyecto
                    </h2>

                    <p
                        class="ventana-proyecto__introduccion"
                        data-modal-introduccion
                    ></p>

                    <div class="ventana-proyecto__separador"></div>

                    <div class="ventana-proyecto__detalle">
                        <div>
                            <h3>El proyecto</h3>
                            <p data-modal-descripcion></p>
                        </div>

                        <div>
                            <h3>Qué he trabajado</h3>
                            <ul
                                class="ventana-proyecto__lista"
                                data-modal-aprendizajes
                            ></ul>
                        </div>
                    </div>

                    <div class="ventana-proyecto__tecnologias">
                        <h3>Tecnologías y conceptos</h3>
                        <div
                            class="ventana-proyecto__etiquetas"
                            data-modal-tecnologias
                        ></div>
                    </div>

                    <p class="ventana-proyecto__nota" data-modal-nota></p>

                    <a
                        class="ventana-proyecto__enlace"
                        data-modal-enlace
                        href="portfolio.php"                
                    >
                        Explorar Portafolio Completo
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>

                <div class="ventana-proyecto__pie">
                    <span>LIZETH ARDILA</span>
                    <span>IDEAS QUE TOMAN FORMA.</span>
                </div>

            </div>
        </dialog>

        <!-- =====================================
             CONTACTO
             ===================================== -->
        <section
            class="contacto"
            id="contacto"
            aria-labelledby="contacto-titulo"
        >
            <div class="contacto__contenedor">

                <!-- Cabecera editorial -->
                <header class="contacto__cabecera">
                    <span class="contacto__sobretitulo">
                        LIZETH ARDILA · PORTFOLIO
                    </span>

                    <span class="contacto__edicion">
                        DISPONIBLE PARA NUEVOS RETOS
                    </span>
                </header>

                <!-- Composición principal -->
                <div class="contacto__composicion">

                    <div class="contacto__introduccion">
                        <span class="contacto__etiqueta">03 / HABLEMOS</span>

                        <h2 class="contacto__titulo" id="contacto-titulo">
                            ¿Creamos algo
                            <span>con <em>sentido?</em></span>
                        </h2>

                        <p class="contacto__descripcion">
                            Estoy abierta a nuevas oportunidades profesionales,
                            colaboraciones y proyectos digitales en los que pueda
                            aportar ideas, lógica y creatividad.
                        </p>

                        <p class="contacto__descripcion-secundaria">
                            Si tienes una propuesta, una idea que quieras desarrollar
                            o simplemente te apetece conversar sobre tecnología,
                            estaré encantada de leerte.
                        </p>

                        <!-- Botón para abrir el formulario -->
                        <button
                            class="contacto__boton"
                            id="abrir-formulario-contacto"
                            type="button"
                            aria-haspopup="dialog"
                            aria-controls="ventana-contacto"
                        >
                            <span>Contáctame</span>
                            <span aria-hidden="true">↗</span>
                        </button>
                    </div>

                    <!-- Datos de contacto -->
                    <aside
                        class="contacto__datos"
                        aria-label="Datos de contacto"
                    >
                        <div class="contacto__detalle">
                            <span class="contacto__indice">01 / CORREO</span>

                            <a
                                class="contacto__enlace"
                                href="mailto:liznardilah@gmail.com"
                            >
                                LIZNARDILAH@GMAIL.COM
                                <span aria-hidden="true">↗</span>
                            </a>
                        </div>

                        <div class="contacto__detalle">
                            <span class="contacto__indice">
                                02 / CÓDIGO Y PROYECTOS
                            </span>

                            <a
                                class="contacto__enlace"
                                href="https://github.com/Lizardila"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                Explorar mi GitHub
                                <span aria-hidden="true">↗</span>
                            </a>
                        </div>

                        <div class="contacto__nota">
                            <span
                                class="contacto__nota-simbolo"
                                aria-hidden="true"
                            >✳</span>

                            <p>
                                Las buenas ideas empiezan con una conversación.
                            </p>
                        </div>

                        <!-- Decoración geométrica -->
                        <div class="contacto__geometria" aria-hidden="true">
                            <span class="contacto__figura contacto__figura--cuadrado"></span>
                            <span class="contacto__figura contacto__figura--circulo"></span>
                            <span class="contacto__figura contacto__figura--triangulo"></span>
                        </div>
                    </aside>

                </div>

                <!-- MAPA DE UBICACIÓN -->
  <div class="map-block">

    <div class="map-frame">

        <!-- Mapa interactivo -->
        <div
            id="map"
            class="map"
            role="img"
            aria-label="Mapa de España centrado en Málaga"
        ></div>

        <!-- Información sobre la ubicación -->
        <div class="map-overlay">

            <span class="map-kicker">
                <span class="map-live"></span>
                CON BASE EN
            </span>

            <span class="map-city">
                Málaga, España
            </span>

            <span class="map-note">
                Desarrollo web para empresas de toda España,
                y en remoto para todo el mundo.
            </span>

        </div>

        <!-- Coordenadas -->
        <div class="map-coords">
            36.7213° N · 4.4214° W
        </div>

    </div>

</div>


                <!-- Pie editorial -->
                <footer class="contacto__pie">
                    <span>IDEAS QUE TOMAN FORMA.</span>
                    <span class="contacto__pie-linea" aria-hidden="true"></span>
                    <span>MÁLAGA · 2026</span>
                </footer>

            </div>
        </section>

    </main>

    <!-- =========================================
         VENTANA EMERGENTE DEL FORMULARIO
         ========================================= -->
    <dialog
        class="ventana-contacto"
        id="ventana-contacto"
        aria-labelledby="formulario-contacto-titulo"
    >
        <div class="ventana-contacto__contenido">

            <!-- Cabecera del formulario -->
            <header class="ventana-contacto__cabecera">
                <span class="ventana-contacto__sobretitulo">
                    LIZETH ARDILA · CONTACTO
                </span>

                <button
                    class="ventana-contacto__cerrar"
                    id="cerrar-formulario-contacto"
                    type="button"
                    aria-label="Cerrar formulario"
                >
                    ×
                </button>
            </header>

            <!-- Contenido del formulario -->
            <div class="ventana-contacto__cuerpo">
                <span class="ventana-contacto__etiqueta">
                    CUÉNTAME TU IDEA
                </span>

                <h2
                    class="ventana-contacto__titulo"
                    id="formulario-contacto-titulo"
                >
                    Empecemos por
                    <em>hablar.</em>
                </h2>

                <p class="ventana-contacto__descripcion">
                    Rellena el formulario y me pondré en contacto contigo.
                </p>

                <!-- Formulario de contacto -->
                <form
                    class="formulario-contacto"
                    id="formulario-contacto"
                    action="procesar-contacto.php"
                    method="POST"
                >
                    <div class="formulario-contacto__campo">
                        <label for="contacto-nombre">Nombre</label>

                        <input
                            id="contacto-nombre"
                            name="nombre"
                            type="text"
                            autocomplete="name"
                            placeholder="¿Cómo te llamas?"
                            maxlength="100"
                            required
                        >
                    </div>

                    <div class="formulario-contacto__campo">
                        <label for="contacto-correo">
                            Correo electrónico
                        </label>

                        <input
                            id="contacto-correo"
                            name="correo"
                            type="email"
                            autocomplete="email"
                            placeholder="tu@correo.com"
                            maxlength="254"
                            required
                        >
                    </div>

                    <div class="formulario-contacto__campo">
                        <label for="contacto-asunto">Asunto</label>

                        <select
                            id="contacto-asunto"
                            name="asunto"
                            required
                        >
                            <option value="" selected disabled>
                                Selecciona el motivo del contacto
                            </option>

                            <option value="Oportunidad profesional">
                                Oportunidad profesional
                            </option>

                            <option value="Colaboración">
                                Colaboración
                            </option>

                            <option value="Proyecto digital">
                                Proyecto digital
                            </option>

                            <option value="Otro">Otro</option>
                        </select>
                    </div>

                    <div class="formulario-contacto__campo">
                        <label for="contacto-mensaje">Mensaje</label>

                        <textarea
                            id="contacto-mensaje"
                            name="mensaje"
                            rows="5"
                            maxlength="5000"
                            placeholder="Cuéntame un poco más..."
                            required
                        ></textarea>
                    </div>

                    <!-- Confirmación de lectura de privacidad -->
                    <div class="formulario-contacto__privacidad">
                        <label class="formulario-contacto__consentimiento">
                            <input
                                type="checkbox"
                                id="contacto-privacidad"
                                name="acepta_privacidad"
                                value="si"
                                required
                            >

                            <span>
                                He leído y acepto la
                                <a
                                    href="privacidad.php"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    política de privacidad
                                </a>.
                            </span>
                        </label>

                        <p class="formulario-contacto__nota">
                            Tus datos se tratarán para gestionar y responder
                            a tu consulta.
                        </p>
                    </div>

                    <!-- Botón de envío -->
                    <button
                        class="formulario-contacto__enviar"
                        type="submit"
                    >
                        <span>Enviar mensaje</span>
                        <span aria-hidden="true">↗</span>
                    </button>
                </form>
            </div>
             
            <!-- Pie del formulario -->
            <footer class="ventana-contacto__pie">
                <span>IDEAS QUE TOMAN FORMA.</span>
                <span>LA — 001</span>
            </footer>

        </div>
    </dialog>

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
