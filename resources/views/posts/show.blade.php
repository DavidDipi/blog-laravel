<x-app-layout>

    
    <div class="container">
        <a href="{{route('posts.index')}}" class="mt-5">Return to post</a>
        <h1 class="m-5">Title: {{ $post->title }}</h1>
        <p class="mx-4">
            <b>Category: </b> {{ $post->category }}
        </p>

        <p>
            {{ $post->content }}
        </p>

        <a href="{{route('posts.edit', $post)}}">Edit post</a>

        <form action="{{route('posts.destroy', $post)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">
                Delete post
            </button>
        </form>
    </div>

</x-app-layout>