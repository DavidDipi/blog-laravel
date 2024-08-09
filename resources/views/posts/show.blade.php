<x-app-layout>

    
    <div class="container">
        <a href="/posts" class="mt-5">Return to post</a>
        <h1 class="m-5">Title: {{ $post->title }}</h1>
        <p class="mx-4">
            <b>Category: </b> {{ $post->category }}
        </p>

        <p>
            {{ $post->content }}
        </p>

        <a href="/posts/{{ $post->id }}/edit">Edit post</a>

        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">
                Delete post
            </button>
        </form>
    </div>

</x-app-layout>