@extends('layouts.app')

@section('title', 'Neidan · Translúcido')

@section('content')
    <div class="shell">
        <section class="neidan-profile" style="margin-top: 4rem; display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1.2fr); gap: 4rem; align-items: center;">
            
            {{-- Columna de la Imagen --}}
            <div class="neidan-image-wrapper" style="position: relative;">
                <div class="hero-bg-glow" style="background: radial-gradient(circle at center, rgba(96, 165, 250, 0.3), transparent 70%); filter: blur(50px);"></div>
                <div style="position: relative; z-index: 1; border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-soft); border: 1px solid var(--color-border);">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=1000&q=80" alt="Retrato de Neidan" style="width: 100%; height: auto; object-fit: cover; filter: saturate(1.1) brightness(0.9); aspect-ratio: 4/5;">
                </div>
                
                {{-- Placa flotante --}}
                <div style="position: absolute; bottom: -20px; right: -20px; background: var(--color-bg-alt); padding: 1.5rem; border-radius: 1rem; border: 1px solid var(--color-border); box-shadow: var(--shadow-soft); z-index: 2; display: flex; align-items: center; gap: 1rem;">
                    <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, var(--color-brand-pink), var(--color-trans-blue)); display: flex; align-items: center; justify-content: center;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"></path><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                    </div>
                    <div>
                        <div style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.1em; color: var(--color-text-muted);">Iniciador</div>
                        <div style="font-weight: 700; color: white;">Director Editorial</div>
                    </div>
                </div>
            </div>

            {{-- Columna de Texto --}}
            <div class="neidan-text">
                <span class="pill pill--pink" style="margin-bottom: 2rem;">Acerca del fundador</span>
                <h1 style="font-family: 'Fraunces', serif; font-size: 3.5rem; line-height: 1.1; margin: 0 0 1.5rem; color: white;">
                    Conoce a <span style="background: linear-gradient(135deg, var(--color-brand-pink), var(--color-trans-blue)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Neidan</span>
                </h1>
                
                <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.7; margin-bottom: 2rem;">
                    Las transiciones no suceden en el vacío; se sostienen en red. Cuando empecé este proyecto, buscaba un espejo donde por fin reconocerme: un lugar donde ser hombre no significara endurecerse, sino permitirse la fragilidad, el cuidado y la ternura.
                </p>

                <div style="margin-bottom: 3rem; padding-left: 2rem; border-left: 2px solid var(--color-trans-blue);">
                    <p style="font-family: 'Fraunces', serif; font-size: 1.5rem; color: white; line-height: 1.4; margin: 0; font-style: italic;">
                        "Translúcido nació para documentar que existen otras formas de habitar la masculinidad, unas más suaves y brillantes."
                    </p>
                </div>

                <div style="display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 3rem;">
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="color: var(--color-brand-pink); font-size: 1.5rem;">✦</div>
                        <div>
                            <strong style="color: white; display: block; margin-bottom: 0.25rem;">Visionario Comunitario</strong>
                            <span style="color: var(--color-text-muted); font-size: 0.95rem;">Más de 5 años facilitando espacios seguros para infancias y juventudes trans.</span>
                        </div>
                    </div>
                    <div style="display: flex; gap: 1rem; align-items: flex-start;">
                        <div style="color: var(--color-brand-pink); font-size: 1.5rem;">✦</div>
                        <div>
                            <strong style="color: white; display: block; margin-bottom: 0.25rem;">Curaduría Sensible</strong>
                            <span style="color: var(--color-text-muted); font-size: 0.95rem;">Seleccionando y editando historias que priorizan el cuidado emocional de quienes leen y quienes escriben.</span>
                        </div>
                    </div>
                </div>

                <div style="display: flex; gap: 1rem;">
                    <a href="mailto:hola@translucido.com" class="btn-primary" style="text-decoration: none; display: inline-block;">Escribirle a Neidan</a>
                    <a href="{{ route('blog') }}" class="btn-secondary" style="text-decoration: none; display: inline-block;">Leer sus editoriales</a>
                </div>
            </div>

        </section>

        {{-- SECCIÓN DE MANIFIESTO --}}
        <section style="margin-top: 8rem; padding: 4rem; background: linear-gradient(135deg, var(--color-bg-alt), #0a0a10); border-radius: var(--radius-xl); border: 1px solid var(--color-border); text-align: center;">
            <span style="text-transform: uppercase; letter-spacing: 0.2em; font-size: 0.85rem; color: var(--color-trans-blue); font-weight: 700; display: block; margin-bottom: 1.5rem;">Nuestro Compromiso</span>
            <h2 style="font-family: 'Fraunces', serif; font-size: 2.5rem; color: white; margin-bottom: 2rem; max-width: 800px; margin-inline: auto;">Crear recursos y memoria visual para los que vienen detrás.</h2>
            <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.7; max-width: 600px; margin: 0 auto;">
                El trabajo de Neidan y del equipo de Translúcido no busca la perfección académica, sino la <strong>honestidad brutal</strong> y la <strong>ternura radical</strong>. Queremos que cada persona que lea esta revista sepa que su proceso es válido, hermoso y digno de ser documentado.
            </p>
        </section>

    </div>

    <style>
        @media (max-width: 960px) {
            .neidan-profile {
                grid-template-columns: 1fr !important;
                gap: 3rem !important;
            }
            .neidan-image-wrapper {
                max-width: 500px;
                margin: 0 auto;
            }
        }
    </style>
@endsection
