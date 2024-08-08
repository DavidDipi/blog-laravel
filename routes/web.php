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
    /*
    // Create a new post
    $post = new Post();
    
    $post->title = 'Título de prueba 2';
    $post->content = 'Contenido de prueba 2';
    $post->category = 'Categoría de prueba 2';

    $post->save();

    return $post;
    */
    

    /* Update a post */

    /* $post = Post::find(1);
    $post = Post::where('title', 'Título de prueba 1')
        ->first();

    $post->category = 'Categoria de prueba 1 (actualizado)';
    $post->save();

    return $post;
    */

    /* List of all posts */
    
    /*$posts = Post::orderBy('id', 'desc')
        ->get();    
        return $posts;
    */

    /* Delete a post */

    /*$post = Post::find(1);
    $post->delete();

    return 'Eliminado correctamente';
     */
    

});