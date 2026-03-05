@extends('layouts.app')

@section('title', 'Calendario · Translúcido')

@section('content')
    <div class="shell">
        <section class="hero hero--small">
            <div>
                <div class="hero-eyebrow">Comunidad y Eventos</div>
                <h1 class="hero-title">Encuentros <span>y Talleres</span></h1>
                <p class="hero-subtitle">
                    Espacios seguros para compartir, escuchar y aprender juntes. Te invitamos a sumarte a nuestros próximos eventos presenciales y virtuales.
                </p>
            </div>
        </section>

        <section class="sections" style="border-top: 1px solid var(--color-border); padding-top: 3rem; margin-top: 3rem;">
            <div class="calendar-list" style="display: flex; flex-direction: column; gap: 2rem; max-width: 800px; margin: 0 auto;">
                
                {{-- Evento 1 --}}
                <div class="event-card" style="display: flex; flex-direction: column; gap: 1.5rem; background: var(--color-bg-alt); padding: 2rem; border-radius: 1rem; border: 1px solid var(--color-border);">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1rem;">
                        <div>
                            <span class="pill pill--pink" style="margin-bottom: 1rem; display: inline-block;">Taller Virtual</span>
                            <h3 class="article-title" style="margin-bottom: 0.5rem;">Cuidado vocal y transición</h3>
                            <div class="article-meta" style="color: var(--color-text-muted);">
                                <strong>Martes, 15 de Octubre</strong> · 18:00 hrs (GMT-3) · Vía Zoom
                            </div>
                        </div>
                        <div style="font-size: 2rem; font-family: 'Fraunces', serif; color: var(--color-brand-pink); line-height: 1;">
                            15<br><span style="font-size: 1rem; font-family: 'Manrope', sans-serif; color: var(--color-text-main);">OCT</span>
                        </div>
                    </div>
                    <p class="article-excerpt">
                        Un taller interactivo con especialistas en fonoaudiología para explorar tu voz de manera segura, compartiendo técnicas de cuidado preventivo.
                    </p>
                    <div>
                        <button class="btn-primary" style="padding: 0.5rem 1rem;">Inscribirme al taller</button>
                    </div>
                </div>

                {{-- Evento 2 --}}
                <div class="event-card" style="display: flex; flex-direction: column; gap: 1.5rem; background: var(--color-bg-alt); padding: 2rem; border-radius: 1rem; border: 1px solid var(--color-border);">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1rem;">
                        <div>
                            <span class="pill pill--pink" style="margin-bottom: 1rem; display: inline-block;">Encuentro Presencial</span>
                            <h3 class="article-title" style="margin-bottom: 0.5rem;">Círculo de lectura: Masculinidades disidentes</h3>
                            <div class="article-meta" style="color: var(--color-text-muted);">
                                <strong>Sábado, 28 de Octubre</strong> · 16:00 hrs · Centro Cultural Translúcido (CDMX)
                            </div>
                        </div>
                        <div style="font-size: 2rem; font-family: 'Fraunces', serif; color: var(--color-brand-pink); line-height: 1;">
                            28<br><span style="font-size: 1rem; font-family: 'Manrope', sans-serif; color: var(--color-text-main);">OCT</span>
                        </div>
                    </div>
                    <p class="article-excerpt">
                        Nos reuniremos para debatir el último dossier de la revista. Habrá café, fanzines y espacio para charlar sin prisas. Entrada libre.
                    </p>
                    <div>
                        <button class="btn-secondary" style="padding: 0.5rem 1rem;">Ver mapa y detalles</button>
                    </div>
                </div>
                
                {{-- Evento 3 --}}
                <div class="event-card" style="display: flex; flex-direction: column; gap: 1.5rem; background: var(--color-bg-alt); padding: 2rem; border-radius: 1rem; border: 1px solid var(--color-border); opacity: 0.8;">
                    <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1rem;">
                        <div>
                            <span class="pill" style="margin-bottom: 1rem; display: inline-block; background: transparent; border: 1px solid var(--color-border);">Grupo de Apoyo</span>
                            <h3 class="article-title" style="margin-bottom: 0.5rem;">Charla abierta: Ansiedad y redes sociales</h3>
                            <div class="article-meta" style="color: var(--color-text-muted);">
                                <strong>Jueves, 09 de Noviembre</strong> · 19:00 hrs · Discord de la Comunidad
                            </div>
                        </div>
                        <div style="font-size: 2rem; font-family: 'Fraunces', serif; color: var(--color-text-muted); line-height: 1;">
                            09<br><span style="font-size: 1rem; font-family: 'Manrope', sans-serif; color: var(--color-text-main);">NOV</span>
                        </div>
                    </div>
                    <p class="article-excerpt">
                        Conversación moderada por nuestro equipo editorial para compartir herramientas sobre cómo manejar el consumo de redes sociales durante la transición.
                    </p>
                    <div>
                        <button class="btn-secondary" style="padding: 0.5rem 1rem;">Unirme a Discord</button>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
