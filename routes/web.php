<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    //N > N;
    // $roles = Role::all();

    // dd($roles);
    
    $user = User::with('roles')->find(2);
    $user->roles()->sync([2]);
    //$user->roles()->attach(2); //adiciona um novo registro na tabela pivô
    //$user->roles()->detach(1); //remove um registro da tabela pivô

    // $user->posts()->create([
    //     'title' => 'meu ultimo post',
    //     'body' => 'conteudo do post',
    // ]); 

    dd($user);

    return view('welcome');
});

Route::get('/admin/usuarios', [ UserController::class, 'index' ]);

Route::get('/admin/usuarios/{user}', [ UserController::class, 'show' ]);
