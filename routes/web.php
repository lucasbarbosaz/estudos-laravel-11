<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {


    $post = Post::find(2);
    $post->delete();

    // $input = [
    //     'title' => 'Meu novo titulo vindo do input',
    //     'body' => 'Meu novo corpo vindo do input'
    // ];


    // $post = Post::find(1);

    // $post->fill($input);
    // $post->save();

    // $post->title = 'Meu novo titulo';
    // $post->save();

    //para buscar um registro
    // $post = Post::find(1);
    // $post = Post::where('title', 'Meu primeiro post')->where()->first();

    //para buscar todos os registros ou usar o metodo all() para buscar todos os registros
    //$post = Post::where('title', 'LIKE', '%primeiro%')->get();

    dd($post);

    return view('welcome');
});

Route::get('/admin/usuarios', [ UserController::class, 'index' ]);

Route::get('/admin/usuarios/{user}', [ UserController::class, 'show' ]);
