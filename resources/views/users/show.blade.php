@extends('layouts.app')


@section('title', 'Mostrar usuário')
@section('content')
    <h1>Mostrar usuário {{ $user->name }}</h1>

    @php
        $isAdmin = false;
    @endphp

    @if ($user->id === 1)
        <p>Sou administrador</p>
    @else
        <p>Não sou administrador</p>
    @endif
@endsection
