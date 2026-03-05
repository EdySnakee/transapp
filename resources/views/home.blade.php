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
                   Esta revista nace con la intención de visibilizar las transiciones masculinas, escuchar sus historias, sus valentías, atestiguar su día a día, crear comunidad y motivar a más chicos a tomar la decisión de ser valientes, felices y alinear su mente cuerpo y espíritu para lograr ser quienes realmente son.
                </p>
                <div class="hero-actions">
                    <button class="btn-primary">Leer la última edición</button>
                    <button class="btn-secondary">Explorar artículos</button>
                </div>
                <div class="hero-meta">
                    En Translúcido, celebramos con orgullo a cada miembro de nuestra <strong>Comunidad</strong>
                </div>
            </div>

            <div class="hero-cover-wrapper">
                <div class="hero-bg-glow"></div>
                <article class="hero-cover">
                    <div class="hero-cover-image" style="background-image: url('/images/neidan/image-high-qcebuc.webp'); background-size: cover; background-position: top center; height: 350px;"></div>
                    <div class="hero-cover-body">
                        <span class="pill pill--pink">Artículo de portada</span>
                        <h2 class="hero-cover-title">"Ser hombre sin dejar de ser suave"</h2>
                        <p class="hero-cover-text">
                            Una crónica íntima sobre transicionar, la ansiedad de verse y la ternura
                            como forma de resistencia frente a las masculinidades violentas.
                        </p>
                        <div class="hero-cover-meta">
                            Por Neidan · 12 min de lectura · Edición 01 · Primavera
                        </div>
                    </div>
                </article>
            </div>
        </section>

        {{-- EMISIONES DE LA REVISTA --}}
        <section class="sections">
            <div class="section-heading-row">
                <h2 class="section-title">Ediciones Publicadas</h2>
                <a href="#" class="section-link">Ver archivo completo</a>
            </div>

            <div class="sections-grid">
                <a href="#" class="section-card" style="text-decoration: none;">
                    <div class="section-card-label">Edición #01</div>
                    <div class="section-card-title">Primavera Renacimiento</div>
                    <div style="font-size: 0.8rem; color: var(--color-text-muted); margin-top: 0.5rem;">Cuerpos suaves en un mundo duro.</div>
                </a>
                
                <a href="#" class="section-card" style="text-decoration: none;">
                    <div class="section-card-label">Edición #02</div>
                    <div class="section-card-title">Verano de Transiciones</div>
                    <div style="font-size: 0.8rem; color: var(--color-text-muted); margin-top: 0.5rem;">El derecho al sol y a la visibilidad.</div>
                </a>
                
                <a href="#" class="section-card" style="text-decoration: none;">
                    <div class="section-card-label">Edición #03</div>
                    <div class="section-card-title">Otoño de Cuidados</div>
                    <div style="font-size: 0.8rem; color: var(--color-text-muted); margin-top: 0.5rem;">Tejiendo redes, salud hormonal y emocional.</div>
                </a>
                
                <a href="mailto:articulos@translucido.com" class="section-card" style="text-decoration: none; border-color: var(--color-trans-blue); background: rgba(96, 165, 250, 0.05);">
                    <div class="section-card-label" style="color: var(--color-trans-blue);">Convocatoria Abierta</div>
                    <div class="section-card-title">Envía tu Artículo</div>
                    <div style="font-size: 0.8rem; color: var(--color-text-muted); margin-top: 0.5rem;">Queremos leerte. Publica tu historia aquí.</div>
                </a>
            </div>
        </section>

        {{-- ARTÍCULOS + SIDEBAR --}}
        <section class="articles">

            <div>
                <div class="section-heading-row">
                    <h2 class="section-title">Artículos recientes</h2>
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

        {{-- BANNER PRIDE / BOLETOS --}}
        <section class="banner-highlight" style="background: radial-gradient(circle at top right, rgba(239, 68, 68, 0.4), transparent 50%), radial-gradient(circle at bottom left, rgba(59, 130, 246, 0.4), transparent 50%), linear-gradient(135deg, #111116 0%, #1a1a24 100%); border: 1px solid var(--color-border); color: white; padding: 4.5rem 2rem; border-radius: var(--radius-xl); text-align: center; margin: 4rem 0; position: relative; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.5);">
            {{-- Acento Pride Superior --}}
            
            <div style="position: relative; z-index: 1;">
                <span style="display: inline-flex; align-items: center; gap: 0.5rem; text-transform: uppercase; letter-spacing: 0.2em; font-size: 0.8rem; font-weight: 800; opacity: 0.9; margin-bottom: 1.5rem; color: white; background: rgba(255,255,255,0.05); padding: 0.5rem 1rem; border-radius: 999px; border: 1px solid rgba(255,255,255,0.1);">
                    <span style="display: block; width: 8px; height: 8px; border-radius: 50%; background: #25D366; box-shadow: 0 0 10px #25D366;"></span>
                    ¡Marcha con Nosotres!
                </span>
                <h2 style="font-family: 'Fraunces', serif; font-size: 3.5rem; margin-bottom: 1.5rem; line-height: 1.1;">Asegura tu lugar en la<br><span style="background: linear-gradient(90deg, var(--color-trans-pink), #FFD93D, var(--color-trans-blue)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Caravana Translúcido</span></h2>
                <p style="max-width: 600px; margin: 0 auto 3rem; font-size: 1.125rem; line-height: 1.7; color: var(--color-text-muted);">
                    Vive el <strong style="color: white;">Día del Pride</strong> rodeado de comunidad, seguridad y orgullo. Nuestro cupo es limitado para garantizar un espacio cuidado y de resistencia para masculinidades trans.
                </p>
                <button style="background: white; color: #000; border: none; padding: 1.25rem 2.5rem; border-radius: 999px; font-weight: 800; font-family: 'Manrope', sans-serif; cursor: pointer; transition: transform 0.2s, background 0.2s; font-size: 1.1rem;">
                    Comprar Boleto Ahora
                </button>
            </div>
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
