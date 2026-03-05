@extends('layouts.app')

@section('title', $post->title . ' · Translúcido')

@section('content')
    <div class="shell">
        <article class="post-single" style="max-width: 800px; margin: 4rem auto;">
            
            <header class="post-header" style="margin-bottom: 3rem; text-align: center;">
                @if($post->category)
                    <div style="margin-bottom: 1.5rem;">
                        <span class="pill pill--pink">{{ $post->category->name }}</span>
                    </div>
                @endif
                
                <h1 style="font-family: 'Fraunces', serif; font-size: 3rem; line-height: 1.1; margin-bottom: 1.5rem; color: white;">
                    {{ $post->title }}
                </h1>
                
                <div style="display: flex; gap: 1rem; justify-content: center; align-items: center; color: var(--color-text-muted); font-size: 1rem;">
                    <span>Por <strong>{{ $post->user->name ?? 'Translúcido' }}</strong></span>
                    <span>·</span>
                    <span>{{ $post->published_at ? $post->published_at->translatedFormat('d M, Y') : '' }}</span>
                </div>
            </header>

            <figure class="post-image" style="margin-bottom: 4rem; border-radius: var(--radius-xl); overflow: hidden; box-shadow: var(--shadow-soft);">
                @if($post->image)
                    <img src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}" style="width: 100%; height: auto; display: block; object-fit: cover; max-height: 500px;">
                @else
                    <div style="width: 100%; height: 400px; background-image: url('https://images.unsplash.com/photo-1542213493895-edf5b94f5a33?auto=format&fit=crop&w=1200&q=80'); background-size: cover; background-position: center;"></div>
                @endif
            </figure>

            <div class="post-content" style="font-size: 1.125rem; line-height: 1.8; color: var(--color-text-muted);">
                {!! $post->content !!}
            </div>

            @if($post->tags->count() > 0)
                <div class="post-tags" style="margin-top: 4rem; padding-top: 2rem; border-top: 1px solid var(--color-border); display: flex; gap: 0.5rem; flex-wrap: wrap;">
                    <span style="font-weight: bold; color: white; display: flex; align-items: center; margin-right: 0.5rem;">Etiquetas:</span>
                    @foreach($post->tags as $tag)
                        <span style="background: var(--color-bg-alt); color: var(--color-text-muted); padding: 0.25rem 0.75rem; border-radius: 999px; font-size: 0.875rem; border: 1px solid var(--color-border);">
                            #{{ $tag->name }}
                        </span>
                    @endforeach
                </div>
            @endif
            
            <div style="margin-top: 4rem; text-align: center;">
                <a href="{{ route('blog') }}" class="btn-secondary" style="text-decoration: none;">← Volver al archivo</a>
            </div>

        </article>
    </div>
    
    <style>
        .post-content h2,
        .post-content h3,
        .post-content h4 {
            color: white;
            font-family: 'Fraunces', serif;
            margin-top: 2.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        .post-content p {
            margin-bottom: 1.5rem;
        }
        .post-content blockquote {
            border-left: 4px solid var(--color-brand-pink);
            padding-left: 1.5rem;
            margin: 2rem 0;
            font-style: italic;
            color: white;
            font-size: 1.25rem;
        }
        .post-content img {
            max-width: 100%;
            height: auto;
            border-radius: var(--radius-lg);
            margin: 2rem 0;
        }
        .post-content ul,
        .post-content ol {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
        }
        .post-content li {
            margin-bottom: 0.5rem;
        }
    </style>
@endsection
