@extends('layouts.app')


@section('title', 'Listando usuários')
@section('content')
    <h1 class="title">{{ $message }}</h1>
    <img width="100" src="{{ Vite::asset('resources/images/carro-dosonho.jpg') }}">
    @foreach ($users as $user)
        <div class="user-name">{{ $user->name }} - ({{ $user->email }})</div>
    @endforeach

    {{ $users->links() }}
@endsection
