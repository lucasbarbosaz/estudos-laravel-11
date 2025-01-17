<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //1 > N;
    $user = User::with('posts', 'profile')->find(1);
    $user->posts()->create([
        'title' => 'meu ultimo post',
        'body' => 'conteudo do post',
    ]); 

    dd($user);

    return view('welcome');
});

Route::get('/admin/usuarios', [ UserController::class, 'index' ]);

Route::get('/admin/usuarios/{user}', [ UserController::class, 'show' ]);
