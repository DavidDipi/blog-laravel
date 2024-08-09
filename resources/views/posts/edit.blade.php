<x-app-layout>
    <h1>Edit post</h1>
    <form action="{{route('posts.update', $post)}}" method="POST" class="d-flex flex-column p-2">
        @csrf
        @method('PUT')
        <label>
            Title:
            <input type="text" name="title" value="{{ $post->title }}">
        </label>
        <label>
            Category:
            <input type="text" name="category" value="{{ $post->category }}">
        </label>
        <label>
            Content:
            <textarea name="content" >{{ $post->content }}</textarea>
        </label>
        <button type="submit">Update post</button>
    </form>
</x-app-layout>