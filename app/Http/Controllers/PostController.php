<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = Post::orderBy('id', 'desc')
            ->where('is_active', true)
            ->get();
        return view('posts.index', [
            'posts' => $post
        ]);
    }

    public function create(){
        return view('posts.create');   
    }

    public function store(Request $request){
        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->published_at = now();
        $post->save();

        return redirect('/posts');
    }

    public function show($id){
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();

        return redirect("/posts/{$id}");   
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->is_active = false;
        $post->save();

        // $post->delete();

        return redirect('/posts');
    }
}
