<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

use function Pest\Laravel\get;

Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{id}', [PostController::class,'show']);

Route::get('prueba', function () {
    
    // $post = new Post();

    // $post->title = 'Titulo de prueba 1';
    // $post->content = 'Contenido de prueba 1';
    // $post->category = 'Categoria de prueba 1';
    // $post->published_at = now();

    // $post->save();

    $post = Post::find(1);
    dd($post->is_active) ;

});