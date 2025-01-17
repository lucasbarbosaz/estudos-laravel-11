<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // $post = new Post();
    // $post->title = 'Meu primeiro post';
    // $post->body = 'Texto Texto';
    // $post->save();
    $post = Post::create([
        'title' => 'Meu segundo post',
        'body' => 'Texto Texto'
    ]);

    dd($post);

    return view('welcome');
});

Route::get('/admin/usuarios', [ UserController::class, 'index' ]);

Route::get('/admin/usuarios/{user}', [ UserController::class, 'show' ]);
