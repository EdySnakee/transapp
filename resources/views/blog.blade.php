@extends('layouts.app')

@section('title', 'Blog · Translúcido')

@section('content')
    <div class="shell">
        <section class="hero hero--small">
            <div>
                <div class="hero-eyebrow">Revista Digital</div>
                <h1 class="hero-title">Archivo <span>y ensayos</span></h1>
                <p class="hero-subtitle">
                    Explora todas nuestras publicaciones. Textos sobre el cuerpo, la transición, la ternura y la resistencia.
                </p>
                <div class="search-bar" style="margin-top: 2rem; display: flex; gap: 1rem; max-width: 600px;">
                    <input type="text" placeholder="Buscar artículos, autores o temas..." style="flex: 1; padding: 1rem; border: 1px solid var(--color-border); border-radius: 999px; background: var(--color-bg-alt); font-family: inherit;">
                    <button class="btn-primary" style="padding: 1rem 1.5rem; border-radius: 999px;">Buscar</button>
                </div>
            </div>
        </section>

        <section class="sections" style="border-top: 1px solid var(--color-border); padding-top: 3rem; margin-top: 3rem;">
            <div class="categories-nav" style="display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 3rem;">
                <a href="#" class="pill pill--pink" style="text-decoration: none; color: inherit;">Todos</a>
                <a href="#" class="btn-secondary" style="padding: 0.5rem 1rem; border-radius: 999px; text-decoration: none;">Crónica</a>
                <a href="#" class="btn-secondary" style="padding: 0.5rem 1rem; border-radius: 999px; text-decoration: none;">Ensayo</a>
            </div>

            <div class="articles-grid" style="grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));">
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
                
                <article class="article-card">
                    <div class="article-thumb" style="background-image:url('https://images.unsplash.com/photo-1492684223066-81342ee5ff30?auto=format&fit=crop&w=900&q=80');"></div>
                    <div class="article-body">
                        <span class="pill pill--pink">Crónica</span>
                        <h3 class="article-title">Voces desde el interior</h3>
                        <p class="article-excerpt">
                            Relatos cortos de la comunidad transmasculina en ciudades pequeñas. Descentralizando la narrativa.
                        </p>
                        <div class="article-meta">Por Varios Autores · 15 min</div>
                    </div>
                </article>

                <article class="article-card">
                    <div class="article-thumb" style="background-image:url('https://images.unsplash.com/photo-1506126613408-eca07ce68773?auto=format&fit=crop&w=900&q=80');"></div>
                    <div class="article-body">
                        <span class="pill pill--pink">Ensayo</span>
                        <h3 class="article-title">El derecho a la fragilidad</h3>
                        <p class="article-excerpt">
                            Por qué desaprender el machismo es una tarea urgente para las masculinidades trans.
                        </p>
                        <div class="article-meta">Por Juan X · 10 min</div>
                    </div>
                </article>
            </div>
            
            <div style="text-align: center; margin-top: 4rem;">
                <button class="btn-secondary">Cargar más artículos</button>
            </div>
        </section>
    </div>
@endsection
