<x-layout>
    @foreach($posts as $post)
        <article>
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            Autor: <a href="#">{{ $post->user->name }}</a><br>
            Categoria: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
</x-layout>




