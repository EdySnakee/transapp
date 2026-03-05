@extends('layouts.app')

@section('title', 'Translúcido · Nuevos hombres')

@section('content')
    <div class="shell">

        {{-- HERO --}}
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
                        <h2 class="hero-cover-title">"Ser hombre sin dejar de ser suave"</h2>
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

        {{-- SECCIONES DE LA REVISTA --}}
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

        {{-- ARTÍCULOS + SIDEBAR --}}
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
                                "te quiero" sin pedir perdón.
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

        {{-- PRÓXIMOS ENCUENTROS (TEASER CALENDARIO) --}}
        <section class="events-teaser" style="background: var(--color-bg-alt); padding: 4rem 2rem; border-radius: 2rem; margin: 4rem 0;">
            <div class="section-heading-row" style="margin-bottom: 2rem;">
                <h2 class="section-title">Encuentros y espacios seguros</h2>
                <a href="{{ route('calendar') }}" class="section-link">Ver calendario completo</a>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <div class="event-card" style="background: var(--color-bg); padding: 1.5rem; border-radius: 1rem; border: 1px solid var(--color-border); transition: transform 0.2s;">
                    <span class="pill pill--pink" style="margin-bottom: 1rem; display: inline-block;">Taller Virtual</span>
                    <h3 class="article-title" style="margin-bottom: 0.5rem; font-size: 1.25rem;">Cuidado vocal y transición</h3>
                    <div class="article-meta" style="color: var(--color-text-muted);">
                        15 de Octubre · 18:00 hrs
                    </div>
                </div>
                <div class="event-card" style="background: var(--color-bg); padding: 1.5rem; border-radius: 1rem; border: 1px solid var(--color-border); transition: transform 0.2s;">
                    <span class="pill pill--pink" style="margin-bottom: 1rem; display: inline-block;">Presencial</span>
                    <h3 class="article-title" style="margin-bottom: 0.5rem; font-size: 1.25rem;">Círculo: Masculinidades disidentes</h3>
                    <div class="article-meta" style="color: var(--color-text-muted);">
                        28 de Octubre · 16:00 hrs
                    </div>
                </div>
            </div>
        </section>

        {{-- DOSSIER ESPECIAL / BANNER --}}
        <section class="banner-highlight" style="background: linear-gradient(135deg, var(--color-brand-pink) 0%, #ff8fa3 100%); color: white; padding: 4rem 2rem; border-radius: 2rem; text-align: center; margin: 4rem 0;">
            <span style="text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.875rem; font-weight: 700; opacity: 0.9; display: block; margin-bottom: 1rem;">Dossier del mes</span>
            <h2 style="font-family: 'Fraunces', serif; font-size: 2.5rem; margin-bottom: 1rem; line-height: 1.2;">Salud mental transmasculina</h2>
            <p style="max-width: 600px; margin: 0 auto 2rem; font-size: 1.125rem; line-height: 1.6; opacity: 0.95;">
                Una recopilación de ensayos, entrevistas a terapeutas y testimonios sobre cómo transitar la ansiedad, la disforia y el burnout desde el cuidado colectivo.
            </p>
            <button style="background: white; color: var(--color-brand-pink); border: none; padding: 1rem 2rem; border-radius: 999px; font-weight: 600; font-family: 'Manrope', sans-serif; cursor: pointer; transition: transform 0.2s;">
                Descargar Especial en PDF
            </button>
        </section>

        {{-- NEWSLETTER / COMUNIDAD --}}
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
@endsection
