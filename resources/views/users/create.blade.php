@extends('layouts.app')

@section('title', 'Cadastro de usuários')
@section('content')
    <h1>Cadastro de usuário</h1>

    @if ($errors->any()) 
        @foreach ($errors->all() as $error)
            <div> {{ $error }} </div>
        @endforeach
    @endif
    <form 
        action="{{ route('users.store') }}" 
        method="POST"
        enctype="multipart/form-data"
    >
        @csrf
        @method('POST')

        <div>
            <label for""">Nome: </label>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>

        <div>
            <label for""">E-mail: </label>
            <input type="email" name="email" value="{{ old('email') }}">
        </div>

        <div>
            <label for"">Senha</label>
            <input type="password" name="password">
        </div>

        <div>
            <label for="">Avatar</label>
            <input type="file" name="avatar">
        </div>

        <div>
            <button type="submit">Cadastrar</button>
        </div>
    </form>
@endsection
