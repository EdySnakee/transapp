@extends('layouts.app')

@section('title', 'Neidan · Translúcido')

@section('content')
    <div class="shell">
        <section class="neidan-profile" style="margin-top: 4rem; display: grid; grid-template-columns: minmax(0, 1fr) minmax(0, 1.2fr); gap: 4rem; align-items: center;">
            
            {{-- Columna de la Imagen --}}
            <div class="neidan-image-wrapper" style="position: relative;">
                <div class="hero-bg-glow" style="background: radial-gradient(circle at center, rgba(96, 165, 250, 0.3), transparent 70%); filter: blur(50px);"></div>
                <div style="position: relative; z-index: 1; border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-soft); border: 1px solid var(--color-border);">
                    <img src="/images/neidan/image-high-qcebuc.webp" alt="Retrato de Neidan" style="width: 100%; height: auto; object-fit: cover; filter: saturate(1.1) brightness(0.9); aspect-ratio: 4/5;">
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
                <span class="pill pill--pink" style="margin-bottom: 2rem;">El comienzo de todo</span>
                <h1 style="font-family: 'Fraunces', serif; font-size: 3.5rem; line-height: 1.1; margin: 0 0 1.5rem; color: white;">
                    Conoce a <span style="background: linear-gradient(135deg, var(--color-brand-pink), var(--color-trans-blue)); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Neidan</span>
                </h1>
                
                <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.7; margin-bottom: 1rem;">
                    <strong>El inicio de la transición: 1 de septiembre de 2023 a los 34 años.</strong>
                </p>
                <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.7; margin-bottom: 2rem;">
                    Decidí iniciar mi transición y caminar con mi sagrado masculino, con la firme intención de alinear mi cuerpo, mente y espíritu. Realizarme como un hombre de bien, NO UNO MÁS en la vida, sino uno que marque la diferencia.
                </p>

                <div style="margin-bottom: 3rem; padding-left: 2rem; border-left: 2px solid var(--color-trans-blue);">
                    <p style="font-family: 'Fraunces', serif; font-size: 1.5rem; color: white; line-height: 1.4; margin: 0; font-style: italic;">
                        "Translúcido nació para documentar que existen otras formas de habitar la masculinidad."
                    </p>
                </div>

                <div style="display: flex; gap: 1rem;">
                    <a href="https://wa.me/5215512345678?text=Hola%20Neidan,%20vengo%20de%20la%20revista%20Transl%C3%BAcido" target="_blank" rel="noopener noreferrer" class="btn-primary" style="text-decoration: none; display: inline-flex; align-items: center; gap: 0.5rem; background: #25D366; color: white;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                        Escribirle por WhatsApp
                    </a>
                </div>
            </div>

        </section>

        {{-- SECCIÓN DE VIDEO --}}
        <section style="margin-top: 8rem;">
            <div class="section-heading-row" style="margin-bottom: 2rem; text-align: center; justify-content: center; flex-direction: column;">
                <span style="text-transform: uppercase; letter-spacing: 0.2em; font-size: 0.85rem; color: var(--color-brand-pink); font-weight: 700; display: block; margin-bottom: 1rem;">Nuestra Voz</span>
                <h2 style="font-family: 'Fraunces', serif; font-size: 2.5rem; color: white; margin: 0;">Un mensaje de Neidan</h2>
            </div>
            
            <div style="max-width: 900px; margin: 0 auto; border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-soft); border: 1px solid var(--color-border); aspect-ratio: 16/9; background: #000; position: relative;">
                {{-- Aquí va el iframe de youtube --}}
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/4xakGqKA-lk?si=mCiqfmBTHMENEQlD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="position: absolute; top: 0; left: 0;"></iframe>
            </div>
        </section>

        {{-- HISTORIA DE NEIDAN --}}
        <section style="margin-top: 8rem; max-width: 800px; margin-inline: auto;">
            <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                <strong>Neidan</strong> significa <em>Alquimia Interna</em>. Es el nombre que escogí para mí; lo descubrí un día escribiendo mi antiguo nombre Nadia, jugando con las letras, escribiéndolas al revés, revolviendo las vocales. Escribí Neidan intentando mantener las mismas letras de Nadia. Encontré que significa Alquimia Interna y que son una serie de prácticas mentales, espirituales y físicas para encontrar el equilibrio. Fue perfecto, era mi nombre. Sentí que lo recordé, estaba destinado para mí.
            </p>
            <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                Mi masculino se encontraba capacitado para salir y relevar, cultivado y nutrido de la experiencia femenina. Enfocado en la protección de mi esencia y la protección de los que amo. El espíritu busca la manifestación de su esencia pura. Al espíritu no le interceden los géneros, somos masculinos y femeninos porque estamos integrados en Unidad.
            </p>
            <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                Desde la primera vez que consumí la testosterona, mis células recibieron esa medicina y trabajaron en conjunto y en amor. Fue ahí cuando decidí elevar mi propósito de ser hombre y no solamente caminar en mi masculino, sino también poder contribuir con las transiciones de otros hombres trans para encontrar la plenitud.
            </p>
            <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                Integrar el femenino a mi masculino me ha traído una mayor confianza de sentirme orgulloso de quién soy, puesto que he encontrado que soy un ser con un cuerpo dual, con más ventajas que desventajas, con una enriquecedora experiencia femenina que me ayuda a comprender tanto a mujeres como a hombres. Lograr ser un aliado y empatizar al saber cómo es que sufren sin desarrollar una inteligencia emocional que los ayude a ser libres.
            </p>
            <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                Construyéndome como un ser humano completo, pleno, seguro, orgulloso, consciente y valiente; siendo una nueva propuesta. Marcando una diferencia porque ⚠️ <strong>Encontrarnos a nosotros mismos es la misión que tenemos desde que nacemos.</strong> ⚠️ La esencia será siempre la misma ✨.
            </p>

            <div style="margin: 4rem 0; height: 1px; background: var(--color-border);"></div>

            <h3 style="font-family: 'Fraunces', serif; font-size: 2rem; color: white; margin-bottom: 1.5rem;">¿Quién es Neidan Macías?</h3>
            <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                Neidan Macías es un hombre trans, periodista, productor de televisión y radio, y especialista en relaciones públicas con una trayectoria consolidada en medios de comunicación en México. Con una licenciatura en Comunicación y Periodismo, ha trabajado en la creación y promoción de contenido que visibiliza la diversidad y fomenta la representación de la comunidad transmasculina en el país.
            </p>
            <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                Actualmente, es productor del programa <em>“Capital por Cual”</em> con Fernanda Tapia en Capital 21. Su experiencia en producción audiovisual, relaciones públicas y eventos lo ha convertido en una figura clave dentro del ámbito mediático. También es fundador de la revista TRANSLUCIDO.NET, un espacio dedicado a dar voz y visibilidad a la comunidad transmasculina en México, promoviendo el empoderamiento y la creación de redes de apoyo.
            </p>
            <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                Desde hace 16 años, Neidan sigue el camino espiritual wixárika, integrando la cosmovisión de este pueblo indígena en su vida y encontrando en sus rituales una guía para su proceso personal. Su conexión con la espiritualidad ha sido fundamental en su transición de género, otorgándole herramientas para abrazar su identidad con fuerza y autenticidad.
            </p>
            <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                Su labor en la promoción turística y cultural le valió la Medalla al Mérito Turístico otorgada por el Congreso de la Unión en 2022, así como el reconocimiento como Embajador Turístico de la Ciudad de México. Además, fue el primer hombre trans en aparecer en la portada de la revista BOYS.MEX, un hito en la representación de la comunidad transmasculina en el país.
            </p>
            <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                Neidan es también el creador del proyecto <strong>#NuevosHombres</strong>, una iniciativa que busca inspirar a otros hombres trans a vivir su verdad con orgullo y dignidad. Su lema, <em>“Dualidad en unidad”</em>, refleja su filosofía de vida, basada en la aceptación y la integración de todas las partes de su ser. Como él mismo expresa:
            </p>
            <div style="margin: 3rem 0; padding: 3rem; background: var(--color-bg-alt); border-radius: var(--radius-lg); text-align: center; border: 1px solid var(--color-border);">
                <p style="font-family: 'Fraunces', serif; font-size: 2rem; color: white; line-height: 1.4; margin: 0; font-style: italic;">
                    "No hay hombre más completo que el que lleva por dentro a una mujer."
                </p>
            </div>
            <p style="font-size: 1.125rem; color: var(--color-text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                Con esta perspectiva, Neidan invita a reflexionar sobre la riqueza de la identidad y la posibilidad de vivir la dualidad como una fortaleza. Su vida y su trabajo han estado dedicados a demostrar que la autenticidad no tiene límites y que la verdadera plenitud se encuentra en abrazar todas las facetas del ser.
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
