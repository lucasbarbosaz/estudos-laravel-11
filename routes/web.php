<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //para buscar um registro
    // $post = Post::find(1);
    // $post = Post::where('title', 'Meu primeiro post')->where()->first();

    //para buscar todos os registros ou usar o metodo all() para buscar todos os registros
    $post = Post::where('title', 'LIKE', '%primeiro%')->get();

    dd($post);

    return view('welcome');
});

Route::get('/admin/usuarios', [ UserController::class, 'index' ]);

Route::get('/admin/usuarios/{user}', [ UserController::class, 'show' ]);
