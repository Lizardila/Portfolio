<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#F6F1EB">
    <meta name="description" content="Aviso legal e información identificativa de Lizeth Natalia Ardila Hernández.">
    
    
    <title>Portfolio | Lizeth Ardila</title>

    <!-- Tipografías de la identidad visual -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Manrope:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap">


    <!-- Estilos globales de la web -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- Estilos exclusivos de Aviso Legal -->
    <link rel="stylesheet" href="css/aviso-legal.css">

    <!-- Navegación y animaciones globales -->
    <script src="js/menu.js" defer></script>
    
</head>

<body>

    <!-- =========================================
         ENCABEZADO Y NAVEGACIÓN
         ========================================= -->
    <header class="encabezado">
        <nav class="navegacion" aria-label="Navegación principal">

            <a
                class="marca"
                href="index.php#inicio"
                aria-label="Lizeth Ardila, inicio"
            >
                <span class="marca__nombre">Lizeth Ardila</span>
                <span class="marca__simbolo" aria-hidden="true">✦</span>
            </a>

            <button
                class="navegacion__boton"
                type="button"
                aria-label="Abrir menú"
                aria-expanded="false"
                aria-controls="enlaces-navegacion"
            >
                <span class="navegacion__icono" aria-hidden="true"></span>
            </button>

            <ul class="navegacion__lista" id="enlaces-navegacion">

                <li class="navegacion__elemento">
                    <a class="navegacion__enlace navegacion__enlace--activo"
                     href="index.php#inicio" aria-current="page">
                        Inicio
                    </a>
                </li>

                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="index.php#sobre-mi">
                        Sobre mí
                    </a>
                </li>

                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="index.php#habilidades">
                        Habilidades
                    </a>
                </li>

                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="index.php#experiencia">
                        Experiencia y colaboración
                    </a>
                </li>

                <li class="navegacion__elemento">
                    <a
                        class="navegacion__enlace"
                        href="portfolio.php"
                        
                    >
                        Portfolio
                    </a>
                </li>

                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="index.php#contacto">
                        Contacto
                    </a>
                </li>

            </ul>

            <!-- Ojo animado de la identidad visual -->
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

                    <path class="ojo-marca__destello"
                        d="M16 29 L18 35 L24 37 L18 39 L16 45 L14 39 L8 37 L14 35 Z" />

                    <path class="ojo-marca__destello"
                        d="M79 65 L81 70 L86 72 L81 74 L79 79 L77 74 L72 72 L77 70 Z" />

                    <path class="ojo-marca__destello"
                        d="M78 18 L79.5 22 L84 23.5 L79.5 25 L78 29 L76.5 25 L72 23.5 L76.5 22 Z" />

                    <path class="ojo-marca__pliegue"
                        d="M20 46 Q43 19 74 36" />

                    <g clip-path="url(#recorte-ojo)">
                        <path class="ojo-marca__blanco"
                            d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z" />

                        <g class="ojo-marca__mirada">
                            <circle class="ojo-marca__iris" cx="52" cy="49" r="15" />
                            <circle class="ojo-marca__pupila" cx="54" cy="49" r="7" />
                            <circle class="ojo-marca__brillo" cx="48" cy="43" r="3.5" />
                            <circle class="ojo-marca__brillo" cx="58" cy="53" r="1.5" />
                        </g>
                    </g>

                    <path class="ojo-marca__delineado"
                        d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z" />

                    <path class="ojo-marca__pestanas"
                        d="M26 40 L20 32 M34 34 L30 25 M44 30 L42 21 M55 30 L56 22 M66 35 L70 27" />

                    <path class="ojo-marca__pestanas-inferiores"
                        d="M35 65 L32 70 M45 69 L44 74 M56 68 L58 72" />

                    <path class="ojo-marca__parpado"
                        d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z" />
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


    <!-- CONTENIDO DEL AVISO LEGAL -->
    <main class="contenido-legal">

        <div class="legal-introduccion">
            <div class="legal-introduccion__metadatos">
                <span class="texto-editorial">INFORMACIÓN LEGAL</span>
                <span class="texto-editorial">LA — 001</span>
            </div>
        
            <p class="legal-ceja">TRANSPARENCIA · AVISO LEGAL</p>

            <h1 class="legal-titulo">
                Aviso <em>Legal.</em>
            </h1> 

            <p class="legal-resumen">
                La claridad y la transparencia también forman parte de una buena experiencia digital. 
                En esta página encontrarás los datos identificativos de la titularidad de este portfolio, 
                las condiciones de uso y los derechos de propiedad intelectual
            </p>

            <p class="legal-actualizacion">
                ÚLTIMA ACTUALIZACIÓN · 28 OCTUBRE 2026
            </p>
        </div>       

        <article class="documento-legal">

        <section class="apartado-legal" aria-labelledby="datos-titular">
                <span class="apartado-legal__numero">01</span>
                <div class="apartado-legal__contenido">
                    <h2 id="datos-titular">Datos identificativos del titular</h2>

                    <p>
                    En cumplimiento de lo establecido en la Ley 34/2002, de 11 de julio, 
                    de Servicios de la Sociedad de la Información y de Comercio Electrónico (LSSI-CE), 
                    se facilita la siguiente información sobre la titularidad de este sitio web:
                    </p>

        <ul>
          <li><strong>Titular:</strong> Lizeth Natalia Ardila Hernández.</li>
          <li><strong>Actividad profesional:</strong> Profesional autónoma especializada en Desarrollo de Software.</li>
          <li><strong>NIE:</strong> Z4687493Y.</li>
          <li><strong>Domicilio:</strong> Avenida Doctor Gálvez Ginachero, Málaga, España.</li>
          <li><strong>Correo electrónico:</strong> <a href="mailto:liznardilah@gmail.com">liznardilah@gmail.com</a>.</li>
        </ul>
      </section>

      <section class="apartado-legal" aria-labelledby="objeto-sitio">
        <span class="apartado-legal__numero">02</span>

        <div class="apartado-legal__contenido">
          <h2 id="objeto-sitio">2. Objeto del sitio web</h2>

          <p>
            El presente sitio web tiene como finalidad dar a conocer el perfil profesional de 
            Lizeth Natalia Ardila Hernández como desarrolladora de software Full Stack, 
            así como presentar su portfolio, proyectos, conocimientos técnicos, experiencia y 
          servicios relacionados con el desarrollo de aplicaciones y soluciones digitales.
        </p>

        <p>
          A través de este espacio, las personas visitantes podrán conocer su trayectoria profesional 
          y contactar con ella para posibles colaboraciones, oportunidades laborales o proyectos profesionales.
        </p>
      </section>

      <section class="apartado-legal"  aria-labelledby="condiciones-uso">
        <span class="apartado-legal__numero">03</span>

        <div class="apartado-legal__contenido">
        <h2 id="condiciones-uso">3. Condiciones de uso</h2>
        
        <p>
          El acceso y la navegación por este sitio web son gratuitos y atribuyen la condición de persona usuaria, 
          lo que implica la aceptación de las condiciones recogidas en este Aviso Legal.
        </p>
        <p>
          La persona usuaria se compromete a realizar un uso adecuado, responsable y lícito del sitio web, 
          respetando la legislación vigente, la buena fe y los derechos de terceros.
        </p>
        <p>
          Queda expresamente prohibido utilizar los contenidos, servicios o funcionalidades de este sitio web con 
          fines ilícitos, fraudulentos o que puedan perjudicar los intereses de la titular o de terceros.
        </p>
        </section>

        <section class="apartado-legal" aria-labelledby="propiedad-intelectual">
          <span class="apartado-legal__numero">04</span>
          
          <div class="apartado-legal__contenido">
            <h2 id="propiedad-intelectual">4. Propiedad intelectual e industrial</h2>

            <p>
              La marca personal <strong>LIZETH ARDILA</strong>, su identidad visual, logotipo, diseño, estructura, textos, 
              elementos gráficos, proyectos y demás contenidos publicados en este sitio web están protegidos 
              por la normativa vigente en materia de propiedad intelectual e industrial.
            </p>
            
            <p>
              Dichos elementos son titularidad de Lizeth Natalia Ardila Hernández o se utilizan con la 
              correspondiente autorización de sus legítimos titulares.
            </p>
         
            <p>
            Queda prohibida la reproducción, distribución, comunicación pública, transformación o cualquier 
            otra forma de explotación de los contenidos de este sitio web sin la autorización expresa y por 
            escrito de la titular.
            </p>

            <p>
            Los proyectos y recursos de terceros que puedan aparecer en el portfolio pertenecen a sus respectivos 
            autores o titulares y se encuentran sujetos a sus propias condiciones de uso y licencias.
            </p>
      </section>

      <section class="apartado-legal" aria-labelledby="responsabilidad">        
        <span class="apartado-legal__numero">05</span>

        <div class="apartado-legal__contenido">
          <h2 id="responsabilidad">5. Responsabilidad</h2>

          <p>
            La titular procura mantener la información publicada en este sitio web actualizada y 
            garantizar su correcto funcionamiento. No obstante, no garantiza la disponibilidad permanente 
            del sitio ni la ausencia de errores técnicos.
            </p>
            <p>
            Lizeth Natalia Ardila Hernández no se hace responsable de los daños o perjuicios que pudieran 
            derivarse de un uso inadecuado del sitio web por parte de las personas usuarias, ni de posibles 
            incidencias técnicas ajenas a su control.
            </p>
            <p>
            Este sitio web puede contener enlaces a sitios de terceros. La titular no se hace responsable 
            del contenido, políticas de privacidad ni prácticas de dichos sitios externos.
            </p>
        </section>
        
        <section class="apartado-legal" aria-labelledby="legislacion">
          <span class="apartado-legal__numero">06</span>

          <div class="apartado-legal__contenido">
            <h2 id="legislacion">6. Legislación aplicable y jurisdicción</h2>
            <p>
            La relación entre la titular y las personas usuarias se regirá por la legislación española vigente. 
            Cualquier controversia que pudiera surgir en relación con el uso de este sitio web se someterá a los 
            Juzgados y Tribunales de Málaga, renunciando expresamente a cualquier otro fuero que pudiera corresponderles.
          </p>
        </section>
        </article>
    </main>              

    <!-- =========================================
         PIE GLOBAL
         ========================================= -->
    <footer class="pie-global">

        <div class="pie-global__principal">

            <div class="pie-global__marca">
                <a href="index.php#inicio" class="pie-global__nombre">
                    Lizeth Ardila <span aria-hidden="true">✦</span>
                </a>

                <p>
                    Desarrollo de software, creatividad y tecnología
                    para transformar ideas en soluciones digitales.
                </p>
            </div>


            <nav
                class="pie-global__navegacion"
                aria-label="Navegación del pie de página"
            >

                <div>
                    <span class="pie-global__titulo">EXPLORAR</span>

                    <a href="index.php#inicio">Inicio</a>
                    <a href="index.php#sobre-mi">Sobre mí</a>
                    <a href="index.php#habilidades">Habilidades</a>
                    <a href="index.php#experiencia">Experiencia y colaboración</a>
                    <a href="portfolio.php"  aria-current="page">Portfolio</a>
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

                    <a
                        href="https://www.linkedin.com/in/lizardila/"
                        target="_blank"
                        rel="noopener noreferrer"
                    >LinkedIn ↗</a>

                    <a
                        href="https://github.com/Lizardila"
                        target="_blank"
                        rel="noopener noreferrer"
                    >GitHub ↗</a>

                    <a href="mailto:liznardilah@gmail.com">
                        Correo electrónico ↗
                    </a>
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
