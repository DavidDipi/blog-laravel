<x-app-layout>
    <h1>New post</h1>

    @if ($errors->any())

        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif
    
    <form action="/posts" method="POST" class="d-flex flex-column p-2">
        @csrf
        <label>
            Title:
            <input type="text" name="title" value="{{old('title')}}">
        </label>

        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label>
            Slug:
            <input type="text" name="slug" value="{{old('slug')}}">
        </label>

        @error('slug')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label>
            Category:
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        @error('category')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <label>
            Content:
            <textarea name="content">{{old('content')}}</textarea>
        </label>

        @error('slug')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">Create post</button>
    </form>
</x-app-layout>