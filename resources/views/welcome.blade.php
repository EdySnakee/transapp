<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Translúcido · Nuevos Hombres</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Tipografía (opcional, sin build tools) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&family=Fraunces:wght@600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --color-bg: #f5f5f7;
            --color-trans-pink: #f9a8e4;
            --color-trans-blue: #1d62b8;
            --color-smoke-dark: #9c9ac1;
            --color-ink: #141316;

            --radius-lg: 24px;
            --radius-xl: 32px;
            --shadow-soft: 0 18px 45px rgba(0, 0, 0, 0.16);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Manrope", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: var(--color-bg);
            color: #222;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .page {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* HEADER -------------------------------------------------- */

        .site-header {
            position: sticky;
            top: 0;
            z-index: 20;
            backdrop-filter: blur(18px);
            background: rgba(245,245,247,0.88);
            border-bottom: 1px solid rgba(156,154,193,0.25);
        }

        .site-header-inner {
            max-width: 1120px;
            margin: 0 auto;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-mark {
            width: 42px;
            height: 42px;
            border-radius: 999px;
            background: linear-gradient(135deg, var(--color-trans-blue), var(--color-trans-pink));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: "Fraunces", system-ui, serif;
            font-size: 24px;
        }

        .brand-text-main {
            font-family: "Fraunces", system-ui, serif;
            font-size: 22px;
            letter-spacing: 0.04em;
        }

        .brand-text-tagline {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            color: var(--color-smoke-dark);
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 22px;
            font-size: 13px;
            font-weight: 500;
        }

        .nav a {
            opacity: 0.8;
        }

        .nav a:hover {
            opacity: 1;
        }

        .nav-cta {
            padding: 9px 18px;
            border-radius: 999px;
            background: var(--color-trans-blue);
            color: white;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.18em;
            box-shadow: 0 10px 24px rgba(29, 98, 184, 0.45);
        }

        .nav-toggle {
            display: none;
        }

        /* LAYOUT principal ---------------------------------------- */

        .page-main {
            flex: 1;
        }

        .shell {
            max-width: 1120px;
            margin: 0 auto;
            padding: 28px 20px 72px;
        }

        /* HERO / PORTADA ------------------------------------------ */

        .hero {
            display: grid;
            grid-template-columns: minmax(0, 1.2fr) minmax(0, 1fr);
            gap: 40px;
            align-items: center;
            margin-top: 18px;
        }

        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            padding: 6px 12px;
            border-radius: 999px;
            background: rgba(29, 98, 184, 0.08);
            color: var(--color-trans-blue);
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.18em;
            margin-bottom: 16px;
        }

        .hero-title {
            font-family: "Fraunces", system-ui, serif;
            font-size: 40px;
            line-height: 1.05;
            letter-spacing: 0.01em;
            margin: 0 0 10px;
        }

        .hero-title span {
            color: var(--color-trans-blue);
        }

        .hero-subtitle {
            font-size: 16px;
            max-width: 34rem;
            color: #4b4b57;
            margin-bottom: 22px;
        }

        .hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 22px;
        }

        .btn-primary,
        .btn-secondary {
            padding: 12px 22px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 600;
            border: 0;
            cursor: pointer;
        }

        .btn-primary {
            background: #141316;
            color: white;
            box-shadow: 0 18px 42px rgba(0, 0, 0, 0.35);
        }

        .btn-secondary {
            background: white;
            color: #141316;
            border: 1px solid rgba(20, 19, 22, 0.08);
        }

        .hero-meta {
            font-size: 12px;
            color: #6b6b76;
        }

        .hero-meta strong {
            color: #222;
        }

        .hero-cover-wrapper {
            position: relative;
        }

        .hero-bg-glow {
            position: absolute;
            inset: -28px;
            border-radius: 40px;
            background: radial-gradient(circle at top left, rgba(249, 168, 228, 0.6), transparent 55%),
                        radial-gradient(circle at bottom right, rgba(29, 98, 184, 0.7), transparent 55%);
            filter: blur(26px);
            opacity: 0.9;
        }

        .hero-cover {
            position: relative;
            border-radius: var(--radius-xl);
            overflow: hidden;
            box-shadow: var(--shadow-soft);
            background: #000;
            color: white;
        }

        .hero-cover-image {
            height: 260px;
            background-image: url("https://images.unsplash.com/photo-1517840933442-d2d1a05edb75?auto=format&fit=crop&w=1200&q=80");
            background-size: cover;
            background-position: center;
            filter: saturate(1.1) contrast(1.05);
        }

        .hero-cover-body {
            padding: 18px 20px 20px;
        }

        .pill {
            display: inline-flex;
            padding: 4px 9px;
            border-radius: 999px;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.18em;
        }

        .pill--pink {
            background: rgba(249, 168, 228, 0.15);
            color: var(--color-trans-pink);
        }

        .hero-cover-title {
            font-size: 17px;
            margin: 10px 0 6px;
        }

        .hero-cover-text {
            font-size: 13px;
            color: rgba(255,255,255,0.85);
            margin-bottom: 10px;
        }

        .hero-cover-meta {
            font-size: 11px;
            color: rgba(255,255,255,0.7);
        }

        /* SECCIONES DESTACADAS ------------------------------------ */

        .sections {
            margin-top: 56px;
        }

        .section-heading-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            margin-bottom: 18px;
        }

        .section-title {
            font-family: "Fraunces", system-ui, serif;
            font-size: 22px;
        }

        .section-link {
            font-size: 13px;
            color: var(--color-trans-blue);
        }

        .sections-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
        }

        .section-card {
            border-radius: 999px;
            padding: 10px 14px;
            background: white;
            border: 1px solid rgba(156,154,193,0.2);
            font-size: 13px;
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .section-card-label {
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 0.16em;
            color: var(--color-smoke-dark);
        }

        .section-card-title {
            font-weight: 600;
        }

        /* ARTÍCULOS ----------------------------------------------- */

        .articles {
            margin-top: 42px;
            display: grid;
            grid-template-columns: 2fr 1.4fr;
            gap: 28px;
        }

        .articles-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .article-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(156,154,193,0.18);
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .article-thumb {
            height: 150px;
            background-size: cover;
            background-position: center;
        }

        .article-body {
            padding: 14px 14px 16px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .article-title {
            font-size: 15px;
            font-weight: 600;
        }

        .article-excerpt {
            font-size: 13px;
            color: #5a5a66;
        }

        .article-meta {
            font-size: 11px;
            color: #8b8b96;
            margin-top: 2px;
        }

        .sidebar-block {
            background: linear-gradient(135deg, #ffffff, #f5f5f7);
            border-radius: 22px;
            padding: 18px 18px 20px;
            border: 1px solid rgba(156,154,193,0.24);
        }

        .sidebar-title {
            font-size: 15px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .sidebar-item {
            font-size: 13px;
            margin-bottom: 8px;
        }

        /* NEWSLETTER / COMUNIDAD ---------------------------------- */

        .newsletter {
            margin-top: 54px;
            padding: 24px 22px;
            border-radius: 24px;
            background: radial-gradient(circle at top left, rgba(249, 168, 228, 0.8), transparent 55%),
                        radial-gradient(circle at bottom right, rgba(29, 98, 184, 0.9), transparent 60%),
                        #141316;
            color: white;
            display: grid;
            grid-template-columns: minmax(0, 1.5fr) minmax(0, 1fr);
            gap: 24px;
            align-items: center;
        }

        .newsletter-title {
            font-family: "Fraunces", system-ui, serif;
            font-size: 22px;
            margin: 0 0 8px;
        }

        .newsletter-text {
            font-size: 14px;
            max-width: 26rem;
            color: rgba(255,255,255,0.88);
        }

        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .newsletter-input {
            padding: 10px 12px;
            border-radius: 999px;
            border: none;
            font-size: 13px;
        }

        .newsletter-btn {
            padding: 10px 14px;
            border-radius: 999px;
            border: none;
            font-size: 13px;
            font-weight: 600;
            background: #141316;
            color: white;
            cursor: pointer;
        }

        .newsletter-note {
            font-size: 11px;
            color: rgba(255,255,255,0.84);
        }

        /* FOOTER -------------------------------------------------- */

        .site-footer {
            border-top: 1px solid rgba(156,154,193,0.3);
            padding: 18px 20px 26px;
            font-size: 12px;
            color: #6b6b76;
        }

        .site-footer-inner {
            max-width: 1120px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            gap: 14px;
            flex-wrap: wrap;
        }

        .footer-links {
            display: flex;
            gap: 16px;
        }

        .footer-links a:hover {
            color: var(--color-trans-blue);
        }

        /* RESPONSIVE ---------------------------------------------- */

        @media (max-width: 960px) {
            .hero {
                grid-template-columns: 1fr;
            }

            .hero-cover-wrapper {
                order: -1;
            }

            .articles {
                grid-template-columns: 1fr;
            }

            .sections-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .newsletter {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 700px) {
            .site-header-inner {
                padding-inline: 16px;
            }

            .nav {
                display: none;
            }

            .nav-toggle {
                display: inline-flex;
                width: 32px;
                height: 32px;
                border-radius: 999px;
                border: 1px solid rgba(0,0,0,0.1);
                align-items: center;
                justify-content: center;
                font-size: 18px;
                background: white;
            }

            .hero-title {
                font-size: 30px;
            }

            .articles-grid {
                grid-template-columns: 1fr;
            }

            .sections-grid {
                grid-template-columns: 1fr;
            }

            .newsletter {
                padding: 20px 18px;
            }
        }
    </style>
</head>
<body>
<div class="page">

    <header class="site-header">
        <div class="site-header-inner">
            <div class="brand">
                <div class="brand-mark">T</div>
                <div>
                    <div class="brand-text-main">Translúcido</div>
                    <div class="brand-text-tagline">Nuevos hombres</div>
                </div>
            </div>
            <nav class="nav">
                <a href="#">Revista</a>
                <a href="#">Secciones</a>
                <a href="#">Nosotres</a>
                <a href="#" class="nav-cta">Suscribirme</a>
            </nav>
            <button class="nav-toggle" aria-label="Abrir menú">≡</button>
        </div>
    </header>

    <main class="page-main">
        <div class="shell">

            <!-- HERO -->
            <section class="hero">
                <div>
                    <div class="hero-eyebrow">
                        Revista digital · Identidades transmasculinas
                    </div>
                    <h1 class="hero-title">
                        Historias, cuerpos y voces
                        <span>de nuevos hombres</span>
                    </h1>
                    <p class="hero-subtitle">
                        Translúcido es una revista digital para explorar masculinidades trans más suaves,
                        diversas y brillantes. Ensayos, crónicas, imágenes y recursos para habitar el cuerpo
                        con cuidado y deseo.
                    </p>
                    <div class="hero-actions">
                        <button class="btn-primary">Leer la última edición</button>
                        <button class="btn-secondary">Explorar artículos</button>
                    </div>
                    <div class="hero-meta">
                        Nueva edición cada mes · <strong>Sin paywall, con cuidado editorial</strong>
                    </div>
                </div>

                <div class="hero-cover-wrapper">
                    <div class="hero-bg-glow"></div>
                    <article class="hero-cover">
                        <div class="hero-cover-image"></div>
                        <div class="hero-cover-body">
                            <span class="pill pill--pink">Artículo de portada</span>
                            <h2 class="hero-cover-title">“Ser hombre sin dejar de ser suave”</h2>
                            <p class="hero-cover-text">
                                Una crónica íntima sobre transicionar, la ansiedad de verse y la ternura
                                como forma de resistencia frente a las masculinidades violentas.
                            </p>
                            <div class="hero-cover-meta">
                                Por Juan X · 12 min de lectura · Edición 01 · Primavera
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <!-- SECCIONES DE LA REVISTA -->
            <section class="sections">
                <div class="section-heading-row">
                    <h2 class="section-title">Secciones de la revista</h2>
                    <a href="#" class="section-link">Ver índice completo</a>
                </div>

                <div class="sections-grid">
                    <div class="section-card">
                        <div class="section-card-label">Editorial</div>
                        <div class="section-card-title">Cartas desde el cuerpo</div>
                    </div>
                    <div class="section-card">
                        <div class="section-card-label">Crónica</div>
                        <div class="section-card-title">Transitar la ciudad</div>
                    </div>
                    <div class="section-card">
                        <div class="section-card-label">Archivo visual</div>
                        <div class="section-card-title">Retratos translúcidos</div>
                    </div>
                    <div class="section-card">
                        <div class="section-card-label">Guía práctica</div>
                        <div class="section-card-title">Cuidado hormonal y emocional</div>
                    </div>
                </div>
            </section>

            <!-- ARTÍCULOS + LADO DERECHO -->
            <section class="articles">

                <div>
                    <div class="section-heading-row">
                        <h2 class="section-title">Notas recientes</h2>
                        <a href="#" class="section-link">Ver todas</a>
                    </div>

                    <div class="articles-grid">
                        <article class="article-card">
                            <div class="article-thumb" style="background-image:url('https://images.unsplash.com/photo-1542213493895-edf5b94f5a33?auto=format&fit=crop&w=900&q=80');"></div>
                            <div class="article-body">
                                <span class="pill pill--pink">Crónica</span>
                                <h3 class="article-title">La primera vez que me vi en un probador</h3>
                                <p class="article-excerpt">
                                    Entre espejos, luces violentas y tallas imposibles, una búsqueda lenta
                                    por un cuerpo que por fin se reconozca.
                                </p>
                                <div class="article-meta">Por Alex R · 9 min</div>
                            </div>
                        </article>

                        <article class="article-card">
                            <div class="article-thumb" style="background-image:url('https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=900&q=80');"></div>
                            <div class="article-body">
                                <span class="pill pill--pink">Ensayo</span>
                                <h3 class="article-title">Masculinidades que no necesitan endurecerse</h3>
                                <p class="article-excerpt">
                                    Un manifiesto por los hombres que lloran, se pintan las uñas y se dicen
                                    “te quiero” sin pedir perdón.
                                </p>
                                <div class="article-meta">Por Lu C · 7 min</div>
                            </div>
                        </article>

                        <article class="article-card">
                            <div class="article-thumb" style="background-image:url('https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?auto=format&fit=crop&w=900&q=80');"></div>
                            <div class="article-body">
                                <span class="pill pill--pink">Guía</span>
                                <h3 class="article-title">Pequeños rituales para habitar el pecho</h3>
                                <p class="article-excerpt">
                                    Gestos cotidianos para reconciliarse con las cicatrices, el binder
                                    y las fotos viejas.
                                </p>
                                <div class="article-meta">Por Nico M · 6 min</div>
                            </div>
                        </article>

                        <article class="article-card">
                            <div class="article-thumb" style="background-image:url('https://images.unsplash.com/photo-1514996937319-344454492b37?auto=format&fit=crop&w=900&q=80');"></div>
                            <div class="article-body">
                                <span class="pill pill--pink">Archivo</span>
                                <h3 class="article-title">Álbum de nuevos hombres</h3>
                                <p class="article-excerpt">
                                    Una serie fotográfica colaborativa sobre ternura, transición y complicidad
                                    entre amigos.
                                </p>
                                <div class="article-meta">Curaduría colectiva · 5 min</div>
                            </div>
                        </article>
                    </div>
                </div>

                <aside class="sidebar-block">
                    <h3 class="sidebar-title">Edición actual · Primavera</h3>
                    <p class="sidebar-item"><strong>Tema central:</strong> cuerpos suaves en un mundo duro</p>
                    <p class="sidebar-item">• Dossier sobre salud mental transmasculina</p>
                    <p class="sidebar-item">• Conversaciones con artistas y activistas</p>
                    <p class="sidebar-item">• Fanzine descargable en PDF</p>
                    <p class="sidebar-item">• Playlist colaborativa para leer la revista</p>
                </aside>

            </section>

            <!-- NEWSLETTER / COMUNIDAD -->
            <section class="newsletter">
                <div>
                    <h2 class="newsletter-title">Sigue la conversación fuera de la pantalla</h2>
                    <p class="newsletter-text">
                        Recibe en tu correo las nuevas ediciones, convocatorias abiertas, talleres
                        y pequeñas cartas editoriales. Sin spam, sin marcas, solo comunidad translúcida.
                    </p>
                </div>
                <div class="newsletter-form">
                    <input class="newsletter-input" type="email" placeholder="Tu correo electrónico">
                    <button class="newsletter-btn">Quiero suscribirme</button>
                    <p class="newsletter-note">
                        Puedes darte de baja cuando quieras. Cuidamos tus datos con el mismo cuidado
                        con el que editamos cada texto.
                    </p>
                </div>
            </section>

        </div>
    </main>

    <footer class="site-footer">
        <div class="site-footer-inner">
            <div>© {{ date('Y') }} Translúcido · Revista digital.</div>
            <div class="footer-links">
                <a href="#">Acerca</a>
                <a href="#">Contacto</a>
                <a href="#">Instagram</a>
            </div>
        </div>
    </footer>

</div>
</body>
</html>
