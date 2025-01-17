<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index () 
    {

        $users = User::paginate(3);

        return view('users.index', [
            'message' => 'Hello World',
            'users' => $users
        ]);
    }

    public function show (User $user) 
    {
        return view('users.show', [
            'user' => $user
        ]);
    }

    public function create () {
        return view('users.create');
    }

    public function store (Request $request) {
        $input = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'avatar' => 'file'
        ]);

        if (!empty($input['avatar']) && $input['avatar']->isValid()) {
            $input['avatar']->store();
        }

        dd($input);
        //User::create($input);

        return redirect()->back();
    }
}
