<x-app-layout>
    <h1>Here is a list of all blog posts</h1>
    <a href="{{route('posts.create')}}" class="btn btn-primary">New post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{route('posts.show', $post->id)}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
</x-app-layout>