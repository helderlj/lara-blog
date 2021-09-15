<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>

        Autor: <a href="#">{{ $post->user->name }}</a> <p><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
    </article>
    <a href="/">Voltar</a>
</x-layout>

