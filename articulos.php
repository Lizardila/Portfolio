<?php

$articulos = [
    // =========================================
    // 1. FUNDAMENTOS Y LENGUAJES BASE
    // =========================================
    'html-semantico-accesibilidad-a11y' => [
        'destacado'        => true,
        'categoria_slug'   => 'diseno',
        'categoria_nombre' => 'Diseño & UI',
        'titulo'           => 'HTML semántico y accesibilidad (a11y): construir una web para todas las personas',
        'fecha'            => '15 de noviembre de 2026',
        'lectura'          => '5 min de lectura',
        'resumen'          => 'Por qué elegir las etiquetas correctas, gestionar el foco del teclado y aplicar atributos ARIA transforma la experiencia de uso y el SEO.',
        'extracto'         => 'Guía práctica sobre HTML semántico, navegación por teclado y estándares WCAG para interfaces accesibles.',
        'tags'             => ['HTML5', 'Accesibilidad', 'a11y', 'WCAG'],
        'contenido'        => '
            <p>La accesibilidad web no es un añadido de última hora, sino la base de un desarrollo frontend responsable. Todo empieza con algo tan esencial como escribir HTML semántico.</p>
            <h2>Más allá del div</h2>
            <p>Usar etiquetas como <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;article&gt;</code> y <code>&lt;button&gt;</code> permite que los lectores de pantalla y tecnologías de asistencia interpreten la jerarquía real del contenido sin esfuerzo extra.</p>
            <h2>Navegación por teclado y atributos ARIA</h2>
            <p>Asegurar estados de foco visibles, textos alternativos descriptivos y atributos como <code>aria-expanded</code> o <code>aria-label</code> garantiza que cualquier persona pueda navegar e interactuar con tu aplicación sin depender del ratón.</p>
        ',
    ],

    'css-moderno-diseno-responsivo' => [
        'destacado'        => false,
        'categoria_slug'   => 'diseno',
        'categoria_nombre' => 'Diseño & UI',
        'titulo'           => 'CSS moderno y diseño responsivo: Grid, Flexbox y unidades fluidas',
        'fecha'            => '11 de noviembre de 2026',
        'lectura'          => '6 min de lectura',
        'resumen'          => 'Cómo crear interfaces adaptables sin depender de cientos de media queries gracias a CSS Grid, clamp() y Container Queries.',
        'extracto'         => 'Técnicas actuales de maquetación responsiva con CSS Grid, Flexbox, variables nativas y diseño fluido.',
        'tags'             => ['CSS3', 'Responsive Design', 'CSS Grid', 'UI'],
        'contenido'        => '
            <p>El diseño responsivo ha evolucionado de adaptar pantallas a tres tamaños fijos a construir sistemas verdaderamente fluidos que responden al espacio disponible.</p>
            <h2>Tipografía y espaciados fluidos con clamp()</h2>
            <p>Combinar unidades relativas como <code>rem</code>, <code>vw</code> y la función <code>clamp()</code> permite que los titulares y márgenes escalen suavemente entre móvil y escritorio con una sola línea de código.</p>
            <h2>Layouts inteligentes con Grid y Container Queries</h2>
            <p>Con <code>repeat(auto-fit, minmax())</code> y las nuevas <em>Container Queries</em>, los componentes se adaptan al contenedor donde viven y no solo al ancho total de la ventana.</p>
        ',
    ],

    'javascript-y-typescript-bases-solidas' => [
        'destacado'        => false,
        'categoria_slug'   => 'desarrollo',
        'categoria_nombre' => 'Desarrollo',
        'titulo'           => 'JavaScript y TypeScript: del dinamismo del navegador al tipado estático',
        'fecha'            => '7 de noviembre de 2026',
        'lectura'          => '6 min de lectura',
        'resumen'          => 'Entender a fondo el Event Loop, la asincronía en JavaScript y cómo TypeScript previene errores antes de llegar a producción.',
        'extracto'         => 'Fundamentos de JavaScript moderno y ventajas clave de adoptar TypeScript en proyectos escalables.',
        'tags'             => ['JavaScript', 'TypeScript', 'Frontend', 'ES6+'],
        'contenido'        => '
            <p>Dominar JavaScript puro sigue siendo la mejor inversión para cualquier desarrolladora web, sin importar qué librería o framework utilice después.</p>
            <h2>Asincronía y manipulación eficiente del DOM</h2>
            <p>Comprender cómo funcionan las promesas, <code>async/await</code>, los cierres (<em>closures</em>) y la delegación de eventos permite escribir código limpio y predecible.</p>
            <h2>¿Por qué dar el salto a TypeScript?</h2>
            <p>TypeScript añade una capa de seguridad mediante interfaces y tipos estáticos que documentan el código por sí mismos, mejoran el autocompletado y detectan fallos en tiempo de desarrollo.</p>
        ',
    ],

    // =========================================
    // 2. FRAMEWORKS Y ARQUITECTURAS MODERNAS
    // =========================================
    'inteligencia-artificial-en-la-interfaz' => [
        'destacado'        => false,
        'categoria_slug'   => 'desarrollo',
        'categoria_nombre' => 'Desarrollo',
        'titulo'           => 'Inteligencia artificial en la interfaz: patrones UX y ejecución en el cliente',
        'fecha'            => '3 de noviembre de 2026',
        'lectura'          => '5 min de lectura',
        'resumen'          => 'Cómo integrar modelos de IA en aplicaciones web mediante streaming de respuestas, APIs del navegador e interfaces asistivas.',
        'extracto'         => 'Diseño de interfaces con IA, respuestas en tiempo real y ejecución de modelos en el navegador.',
        'tags'             => ['IA', 'UX/UI', 'Frontend', 'Web APIs'],
        'contenido'        => '
            <p>La inteligencia artificial ha cambiado la forma en que los usuarios interactúan con el software, pasando de formularios rígidos a experiencias contextuales y conversacionales.</p>
            <h2>Feedback inmediato y streaming</h2>
            <p>Cuando una interfaz depende de un modelo generativo, la percepción de velocidad es clave. Implementar respuestas en <em>streaming</em> y estados de carga claros mantiene al usuario en control.</p>
            <h2>IA directamente en el navegador</h2>
            <p>Gracias a tecnologías como WebGPU y las APIs integradas en navegadores modernos, cada vez es más viable ejecutar tareas de inferencia ligera localmente, protegiendo la privacidad y reduciendo la latencia.</p>
        ',
    ],

    'webassembly-wasm-rendimiento-nativo' => [
        'destacado'        => false,
        'categoria_slug'   => 'desarrollo',
        'categoria_nombre' => 'Desarrollo',
        'titulo'           => 'WebAssembly (Wasm): llevando potencia nativa al navegador web',
        'fecha'            => '29 de octubre de 2026',
        'lectura'          => '5 min de lectura',
        'resumen'          => 'Qué es WebAssembly, cómo complementa a JavaScript y en qué casos de uso marca una diferencia radical de velocidad.',
        'extracto'         => 'Introducción práctica a WebAssembly (Wasm) y su papel en aplicaciones web de alto rendimiento.',
        'tags'             => ['WebAssembly', 'Wasm', 'Arquitectura', 'Rendimiento'],
        'contenido'        => '
            <p>WebAssembly (Wasm) es un formato de instrucciones binarias diseñado para ejecutarse en una máquina virtual dentro del navegador a velocidades cercanas al código nativo.</p>
            <h2>Un aliado para JavaScript, no un reemplazo</h2>
            <p>Mientras JavaScript gestiona la interfaz y los eventos del DOM, Wasm permite compilar módulos escritos en Rust, C++ o Go para tareas pesadas como edición de video, procesamiento de imágenes, motores 3D o simulaciones en tiempo real.</p>
        ',
    ],

    'optimizacion-rendimiento-web-vitals' => [
        'destacado'        => false,
        'categoria_slug'   => 'desarrollo',
        'categoria_nombre' => 'Desarrollo',
        'titulo'           => 'Optimización de rendimiento y Core Web Vitals: velocidad que se siente',
        'fecha'            => '24 de octubre de 2026',
        'lectura'          => '6 min de lectura',
        'resumen'          => 'Estrategias prácticas para mejorar LCP, INP y CLS mediante carga diferida, optimización de fuentes e imágenes modernas.',
        'extracto'         => 'Cómo medir y optimizar los Core Web Vitals para ofrecer tiempos de carga instantáneos.',
        'tags'             => ['Web Vitals', 'Performance', 'SEO', 'Optimización'],
        'contenido'        => '
            <p>El rendimiento es una característica fundamental de la experiencia de usuario. Una web rápida retiene mejor a las visitas y posiciona mejor en buscadores.</p>
            <h2>Las tres métricas clave (Core Web Vitals)</h2>
            <p><strong>LCP (Largest Contentful Paint)</strong> mide qué tan rápido carga el elemento principal; <strong>INP (Interaction to Next Paint)</strong> evalúa la fluidez al interactuar; y <strong>CLS (Cumulative Layout Shift)</strong> evita saltos visuales inesperados mientras carga la página.</p>
            <h2>Acciones de alto impacto</h2>
            <p>Usar formatos de imagen como WebP o AVIF, diferir scripts no críticos con <code>defer</code> y reservar dimensiones explícitas en imágenes y contenedores resuelve la mayoría de cuellos de botella.</p>
        ',
    ],

    // =========================================
    // 3. CALIDAD, HERRAMIENTAS Y DESPLIEGUE
    // =========================================
    'testing-automatizado-frontend' => [
        'destacado'        => false,
        'categoria_slug'   => 'aprendizajes',
        'categoria_nombre' => 'Aprendizajes',
        'titulo'           => 'Testing automatizado en la web: desplegar código con confianza',
        'fecha'            => '19 de octubre de 2026',
        'lectura'          => '5 min de lectura',
        'resumen'          => 'Cómo implementar pruebas unitarias, de integración y end-to-end para garantizar que cada despliegue sea estable y predecible.',
        'extracto'         => 'Estrategias de testing automatizado para frontend y cómo integrarlas en el flujo de desarrollo y despliegue.',
        'tags'             => ['Testing', 'QA', 'Automatización', 'Despliegue'],
        'contenido'        => '     
            <p>El testing automatizado es la columna vertebral de un flujo de desarrollo confiable. Permite detectar errores antes de que lleguen a producción y asegura que nuevas funcionalidades no rompan lo existente.</p>
            <h2>Tipos de pruebas</h2>
            <p>Las pruebas unitarias verifican funciones individuales, las de integración aseguran que los módulos trabajen juntos correctamente, y las end-to-end simulan la experiencia completa del usuario.</p>
            <h2>Integración continua y despliegue</h2>
            <p>Al integrar pruebas en pipelines de CI/CD, cada commit puede ser validado automáticamente, reduciendo riesgos y acelerando el tiempo de entrega al usuario final.</p>            
        ',
    ],
];
