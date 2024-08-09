<x-app-layout>
    <h1>New post</h1>
    <form action="/posts" method="POST" class="d-flex flex-column p-2">
        @csrf
        <label>
            Title:
            <input type="text" name="title">
        </label>
        <label>
            Slug:
            <input type="text" name="slug">
        </label>
        <label>
            Category:
            <input type="text" name="category">
        </label>
        <label>
            Content:
            <textarea name="content"></textarea>
        </label>
        <button type="submit">Create post</button>
    </form>
</x-app-layout>