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
                @forelse($posts as $post)
                    <a href="{{ route('posts.show', $post) }}" style="text-decoration: none; color: inherit; display: block;">
                        <article class="article-card">
                            <div class="article-thumb" style="background-image:url('{{ $post->image ? Storage::url($post->image) : 'https://images.unsplash.com/photo-1542213493895-edf5b94f5a33?auto=format&fit=crop&w=900&q=80' }}');"></div>
                            <div class="article-body">
                                @if($post->category)
                                    <span class="pill pill--pink">{{ $post->category->name }}</span>
                                @endif
                                <h3 class="article-title">{{ $post->title }}</h3>
                                <p class="article-excerpt">
                                    {{ $post->excerpt ?? Str::limit(strip_tags($post->content), 100) }}
                                </p>
                                <div class="article-meta">
                                    Por {{ $post->user->name ?? 'Translúcido' }} · {{ $post->published_at ? $post->published_at->translatedFormat('d M, Y') : '' }}
                                </div>
                            </div>
                        </article>
                    </a>
                @empty
                    <div style="grid-column: 1 / -1; padding: 4rem; text-align: center; color: var(--color-text-muted); background: var(--color-bg-alt); border-radius: var(--radius-lg); border: 1px solid var(--color-border);">
                        Aún no hay artículos publicados. ¡Vuelve pronto!
                    </div>
                @endforelse
            </div>
            
            <div style="text-align: center; margin-top: 4rem;">
                <button class="btn-secondary">Cargar más artículos</button>
            </div>
        </section>
    </div>
@endsection
