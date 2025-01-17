<?php

use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $user = User::with('profile')->find(1);
    $user->profile()->create([
        'type' => 'PJ',
        'document_number' => '1234567890',
    ]);

    dd($user->profile->document_number);

    return view('welcome');
});

Route::get('/admin/usuarios', [ UserController::class, 'index' ]);

Route::get('/admin/usuarios/{user}', [ UserController::class, 'show' ]);
