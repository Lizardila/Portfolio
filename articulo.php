<?php
require_once __DIR__ . '/datos/articulos.php';


$slugActual = $_GET['slug'] ?? '';

if (!isset($articulos[$slugActual])) {
    header('Location: blog.php');
    exit;
}

$articulo = $articulos[$slugActual];

// Calcular el siguiente artículo de forma circular
$claves = array_keys($articulos);
$indiceActual = array_search($slugActual, $claves, true);
$indiceSiguiente = ($indiceActual + 1) % count($claves);
$slugSiguiente = $claves[$indiceSiguiente];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#F6F1EB">
    <meta name="description" content="<?= htmlspecialchars($articulo['extracto']) ?>">

    <title><?= htmlspecialchars($articulo['titulo']) ?> | Lizeth Ardila</title>

    <!-- Tipografías de la identidad visual -->
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Manrope:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap">
    
    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/articulo.css">

    <!-- JavaScript -->
    <script src="js/menu.js" defer></script>
    <script src="js/articulo.js" defer></script>

</head>
<body>

    <!-- =========================================
         ENCABEZADO Y NAVEGACIÓN
         ========================================= -->
    <header class="encabezado">
        <nav class="navegacion" aria-label="Navegación principal">
            <!-- Marca personal -->
            <a class="marca" href="index.php#inicio" aria-label="Lizeth Ardila, inicio">
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
                    <a class="navegacion__enlace" href="index.php#inicio">Inicio</a>
                </li>
                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="index.php#sobre-mi">Sobre mí</a>
                </li>
                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="index.php#habilidades">Habilidades</a>
                </li>
                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="index.php#experiencia">Experiencia y colaboración</a>
                </li>
                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="portfolio.php">Portfolio</a>
                </li>
                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="index.php#contacto">Contacto</a>
                </li>
            </ul>

            <!-- Ilustración animada del ojo -->
            <div class="ojo-marca" role="img" aria-label="Ilustración de un ojo con delineado felino">
                <svg class="ojo-marca__dibujo" viewBox="0 0 100 100" xmlns="http://w3.org" aria-hidden="true">
                    <defs>
                        <clipPath id="recorte-ojo">
                            <path d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z" />
                        </clipPath>
                    </defs>
                    <circle class="ojo-marca__fondo" cx="50" cy="50" r="47" />
                    <path class="ojo-marca__destello" d="M16 29 L18 35 L24 37 L18 39 L16 45 L14 39 L8 37 L14 35 Z" />
                    <path class="ojo-marca__destello" d="M79 65 L81 70 L86 72 L81 74 L79 79 L77 74 L72 72 L77 70 Z" />
                    <path class="ojo-marca__destello" d="M78 18 L79.5 22 L84 23.5 L79.5 25 L78 29 L76.5 25 L72 23.5 L76.5 22 Z" />
                    <path class="ojo-marca__pliegue" d="M20 46 Q43 19 74 36" />
                    <g clip-path="url(#recorte-ojo)">
                        <path class="ojo-marca__blanco" d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z" />
                        <g class="ojo-marca__mirada">
                            <circle class="ojo-marca__iris" cx="52" cy="49" r="15" />
                            <circle class="ojo-marca__pupila" cx="54" cy="49" r="7" />
                            <circle class="ojo-marca__brillo" cx="48" cy="43" r="3.5" />
                            <circle class="ojo-marca__brillo" cx="58" cy="53" r="1.5" />
                        </g>
                    </g>
                    <path class="ojo-marca__delineado" d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z" />
                    <path class="ojo-marca__pestanas" d="M26 40 L20 32 M34 34 L30 25 M44 30 L42 21 M55 30 L56 22 M66 35 L70 27" />
                    <path class="ojo-marca__pestanas-inferiores" d="M35 65 L32 70 M45 69 L44 74 M56 68 L58 72" />
                    <path class="ojo-marca__parpado" d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z" />
                </svg>
            </div>
        </nav>
    </header>

    <!-- =========================================
         CONTENIDO DEL ARTÍCULO
         ========================================= -->
    <main class="contenido-articulo" id="inicio">

        <!-- MENÚ LATERAL DE REDES SOCIALES -->
        <aside class="redes-sociales" aria-label="Redes sociales">
            <a class="redes-sociales__enlace" href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" title="LinkedIn">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path fill="currentColor" d="M20.45 2H3.55C2.69 2 2 2.68 2 3.52v16.96c0 .84.69 1.52 1.55 1.52h16.9c.86 0 1.55-.68 1.55-1.52V3.52c0-.84-.69-1.52-1.55-1.52ZM7.93 18.7H4.95V9.1h2.98v9.6ZM6.44 7.79a1.73 1.73 0 1 1 0-3.46 1.73 1.73 0 0 1 0 3.46ZM19.05 18.7h-2.98v-4.67c0-1.11-.02-2.54-1.55-2.54-1.55 0-1.79 1.21-1.79 2.46v4.75H9.75V9.1h2.86v1.31h.04c.4-.75 1.37-1.55 2.82-1.55 3.02 0 3.58 1.99 3.58 4.57v5.27Z"/>
                </svg>
            </a>

            <a class="redes-sociales__enlace" href="https://github.com" target="_blank" rel="noopener noreferrer" aria-label="GitHub (se abre en una pestaña nueva)" title="GitHub">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path fill="currentColor" d="M12 .9a11.1 11.1 0 0 0-3.51 21.63c.56.1.76-.24.76-.54v-2.1c-3.1.67-3.75-1.32-3.75-1.32-.5-1.28-1.24-1.62-1.24-1.62-1.01-.69.08-.68.08-.68 1.12.08 1.71 1.15 1.71 1.15 1 .1.9 2.03 3.42 1.56.1-.72.39-1.2.7-1.48-2.47-.28-5.07-1.24-5.07-5.5 0-1.22.44-2.22 1.15-3-.12-.28-.5-1.42.11-2.96 0 0 .94-.3 3.05 1.15a10.6 10.6 0 0 1 5.55 0c2.11-1.44 3.04-1.15 3.04-1.15.61 1.54.23 2.68.12 2.96.72.78 1.15 1.78 1.15 3 0 4.27-2.6 5.22-5.08 5.49.4.34.75 1.02.75 2.06v3.04c0 .3.2.65.77.54A11.1 11.1 0 0 0 12 .9Z"/>
                </svg>
            </a>

            <a class="redes-sociales__enlace" href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="YouTube (se abre en una pestaña nueva)" title="YouTube">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path fill="currentColor" d="M23.5 6.2a3 3 0 0 0-2.11-2.12C19.52 3.57 12 3.57 12 3.57s-7.52 0-9.39.5A3 3 0 0 0 .5 6.2 31.2 31.2 0 0 0 0 12a31.2 31.2 0 0 0 .5 5.8 3 3 0 0 0 2.11 2.12c1.87.5 9.39.5 9.39.5s7.52 0 9.39-.5a3 3 0 0 0 2.11-2.12A31.2 31.2 0 0 0 24 12a31.2 31.2 0 0 0-.5-5.8ZM9.55 15.58V8.42L15.82 12l-6.27 3.58Z"/>
                </svg>
            </a>
        </aside>

        <article class="entrada">
            <!-- ENLACE DE REGRESO -->
            <nav class="entrada__volver" aria-label="Ruta de navegación">
                <a href="blog.php">← Volver al blog</a>
            </nav>

            <!-- CABECERA DEL ARTÍCULO -->
            <header class="entrada__cabecera">
                <div class="entrada__metadatos">
                    <span class="entrada__categoria"><?= htmlspecialchars($articulo['categoria_nombre']) ?></span>
                    <span class="entrada__fecha"><?= htmlspecialchars($articulo['fecha']) ?> · <?= htmlspecialchars($articulo['lectura']) ?></span>
                </div>

                <h1 class="entrada__titulo">
                    <?= htmlspecialchars($articulo['titulo']) ?>
                </h1>

                <p class="entrada__entradilla">
                    <?= htmlspecialchars($articulo['extracto']) ?>
                </p>

                <div class="entrada__autor">
                    <span>Por <strong>Lizeth Ardila</strong></span>
                    <div class="entrada__tags">
                        <?php foreach ($articulo['tags'] as $tag): ?>
                            <span><?= htmlspecialchars($tag) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </header>

            <!-- CUERPO DE LECTURA -->
            <div class="entrada__cuerpo">
                <?= $articulo['contenido'] ?>
            </div>

            <!-- PIE DEL ARTÍCULO -->
            <footer class="entrada__pie">
                <a class="entrada__nav-enlace" href="blog.php">← Ver todos los artículos</a>
                <a class="entrada__nav-enlace" href="articulo.php?slug=<?= urlencode($slugSiguiente) ?>">Siguiente artículo →</a>
            </footer>
        </article>
    </main>

   <?php
require_once 'datos/articulos.php';

$slugActual = $_GET['slug'] ?? '';

if (!isset($articulos[$slugActual])) {
    header('Location: blog.php');
    exit;
}

$articulo = $articulos[$slugActual];

// Calcular el siguiente artículo de forma circular
$claves = array_keys($articulos);
$indiceActual = array_search($slugActual, $claves, true);
$indiceSiguiente = ($indiceActual + 1) % count($claves);
$slugSiguiente = $claves[$indiceSiguiente];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#F6F1EB">
    <meta name="description" content="<?= htmlspecialchars($articulo['extracto']) ?>">

    <title><?= htmlspecialchars($articulo['titulo']) ?> | Lizeth Ardila</title>

    <!-- Tipografías de la identidad visual -->
    <link rel="preconnect" href="https://googleapis.com">
    <link rel="preconnect" href="https://gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Manrope:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap">
    <link rel="stylesheet" href="https://jsdelivr.net">

    <!-- Hojas de estilo -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/articulo.css">

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
            <a class="marca" href="index.php#inicio" aria-label="Lizeth Ardila, inicio">
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
                    <a class="navegacion__enlace" href="index.php#inicio">Inicio</a>
                </li>
                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="index.php#sobre-mi">Sobre mí</a>
                </li>
                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="index.php#habilidades">Habilidades</a>
                </li>
                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="index.php#experiencia">Experiencia y colaboración</a>
                </li>
                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="portfolio.php">Portfolio</a>
                </li>
                <li class="navegacion__elemento">
                    <a class="navegacion__enlace" href="index.php#contacto">Contacto</a>
                </li>
            </ul>

            <!-- Ilustración animada del ojo -->
            <div class="ojo-marca" role="img" aria-label="Ilustración de un ojo con delineado felino">
                <svg class="ojo-marca__dibujo" viewBox="0 0 100 100" xmlns="http://w3.org" aria-hidden="true">
                    <defs>
                        <clipPath id="recorte-ojo">
                            <path d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z" />
                        </clipPath>
                    </defs>
                    <circle class="ojo-marca__fondo" cx="50" cy="50" r="47" />
                    <path class="ojo-marca__destello" d="M16 29 L18 35 L24 37 L18 39 L16 45 L14 39 L8 37 L14 35 Z" />
                    <path class="ojo-marca__destello" d="M79 65 L81 70 L86 72 L81 74 L79 79 L77 74 L72 72 L77 70 Z" />
                    <path class="ojo-marca__destello" d="M78 18 L79.5 22 L84 23.5 L79.5 25 L78 29 L76.5 25 L72 23.5 L76.5 22 Z" />
                    <path class="ojo-marca__pliegue" d="M20 46 Q43 19 74 36" />
                    <g clip-path="url(#recorte-ojo)">
                        <path class="ojo-marca__blanco" d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z" />
                        <g class="ojo-marca__mirada">
                            <circle class="ojo-marca__iris" cx="52" cy="49" r="15" />
                            <circle class="ojo-marca__pupila" cx="54" cy="49" r="7" />
                            <circle class="ojo-marca__brillo" cx="48" cy="43" r="3.5" />
                            <circle class="ojo-marca__brillo" cx="58" cy="53" r="1.5" />
                        </g>
                    </g>
                    <path class="ojo-marca__delineado" d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z" />
                    <path class="ojo-marca__pestanas" d="M26 40 L20 32 M34 34 L30 25 M44 30 L42 21 M55 30 L56 22 M66 35 L70 27" />
                    <path class="ojo-marca__pestanas-inferiores" d="M35 65 L32 70 M45 69 L44 74 M56 68 L58 72" />
                    <path class="ojo-marca__parpado" d="M17 51 Q43 23 72 43 L91 29 L81 52 Q50 79 17 51 Z" />
                </svg>
            </div>
        </nav>
    </header>

    <!-- =========================================
         CONTENIDO DEL ARTÍCULO
         ========================================= -->
    <main class="contenido-articulo" id="inicio">

        <!-- MENÚ LATERAL DE REDES SOCIALES -->
        <aside class="redes-sociales" aria-label="Redes sociales">
            <a class="redes-sociales__enlace" href="https://linkedin.com" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" title="LinkedIn">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path fill="currentColor" d="M20.45 2H3.55C2.69 2 2 2.68 2 3.52v16.96c0 .84.69 1.52 1.55 1.52h16.9c.86 0 1.55-.68 1.55-1.52V3.52c0-.84-.69-1.52-1.55-1.52ZM7.93 18.7H4.95V9.1h2.98v9.6ZM6.44 7.79a1.73 1.73 0 1 1 0-3.46 1.73 1.73 0 0 1 0 3.46ZM19.05 18.7h-2.98v-4.67c0-1.11-.02-2.54-1.55-2.54-1.55 0-1.79 1.21-1.79 2.46v4.75H9.75V9.1h2.86v1.31h.04c.4-.75 1.37-1.55 2.82-1.55 3.02 0 3.58 1.99 3.58 4.57v5.27Z"/>
                </svg>
            </a>

            <a class="redes-sociales__enlace" href="https://github.com" target="_blank" rel="noopener noreferrer" aria-label="GitHub (se abre en una pestaña nueva)" title="GitHub">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path fill="currentColor" d="M12 .9a11.1 11.1 0 0 0-3.51 21.63c.56.1.76-.24.76-.54v-2.1c-3.1.67-3.75-1.32-3.75-1.32-.5-1.28-1.24-1.62-1.24-1.62-1.01-.69.08-.68.08-.68 1.12.08 1.71 1.15 1.71 1.15 1 .1.9 2.03 3.42 1.56.1-.72.39-1.2.7-1.48-2.47-.28-5.07-1.24-5.07-5.5 0-1.22.44-2.22 1.15-3-.12-.28-.5-1.42.11-2.96 0 0 .94-.3 3.05 1.15a10.6 10.6 0 0 1 5.55 0c2.11-1.44 3.04-1.15 3.04-1.15.61 1.54.23 2.68.12 2.96.72.78 1.15 1.78 1.15 3 0 4.27-2.6 5.22-5.08 5.49.4.34.75 1.02.75 2.06v3.04c0 .3.2.65.77.54A11.1 11.1 0 0 0 12 .9Z"/>
                </svg>
            </a>

            <a class="redes-sociales__enlace" href="https://youtube.com" target="_blank" rel="noopener noreferrer" aria-label="YouTube (se abre en una pestaña nueva)" title="YouTube">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path fill="currentColor" d="M23.5 6.2a3 3 0 0 0-2.11-2.12C19.52 3.57 12 3.57 12 3.57s-7.52 0-9.39.5A3 3 0 0 0 .5 6.2 31.2 31.2 0 0 0 0 12a31.2 31.2 0 0 0 .5 5.8 3 3 0 0 0 2.11 2.12c1.87.5 9.39.5 9.39.5s7.52 0 9.39-.5a3 3 0 0 0 2.11-2.12A31.2 31.2 0 0 0 24 12a31.2 31.2 0 0 0-.5-5.8ZM9.55 15.58V8.42L15.82 12l-6.27 3.58Z"/>
                </svg>
            </a>
        </aside>

        <article class="entrada">
            <!-- ENLACE DE REGRESO -->
            <nav class="entrada__volver" aria-label="Ruta de navegación">
                <a href="blog.php">← Volver al blog</a>
            </nav>

            <!-- CABECERA DEL ARTÍCULO -->
            <header class="entrada__cabecera">
                <div class="entrada__metadatos">
                    <span class="entrada__categoria"><?= htmlspecialchars($articulo['categoria_nombre']) ?></span>
                    <span class="entrada__fecha"><?= htmlspecialchars($articulo['fecha']) ?> · <?= htmlspecialchars($articulo['lectura']) ?></span>
                </div>

                <h1 class="entrada__titulo">
                    <?= htmlspecialchars($articulo['titulo']) ?>
                </h1>

                <p class="entrada__entradilla">
                    <?= htmlspecialchars($articulo['extracto']) ?>
                </p>

                <div class="entrada__autor">
                    <span>Por <strong>Lizeth Ardila</strong></span>
                    <div class="entrada__tags">
                        <?php foreach ($articulo['tags'] as $tag): ?>
                            <span><?= htmlspecialchars($tag) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </header>

            <!-- CUERPO DE LECTURA -->
            <div class="entrada__cuerpo">
                <?= $articulo['contenido'] ?>
            </div>

            <!-- PIE DEL ARTÍCULO -->
            <footer class="entrada__pie">
                <a class="entrada__nav-enlace" href="blog.php">← Ver todos los artículos</a>
                <a class="entrada__nav-enlace" href="articulo.php?slug=<?= urlencode($slugSiguiente) ?>">Siguiente artículo →</a>
            </footer>
        </article>
    </main>

    <!-- =========================================
         PIE DE PÁGINA
         ========================================= -->
    <footer class="pie-pagina">
        <p class="pie-pagina__texto">© 2024 Lizeth Ardila. Todos los derechos reservados.</p>
    </footer>

