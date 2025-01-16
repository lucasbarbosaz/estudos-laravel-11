@extends('layouts.app')


@section('title', 'Listando usuários')
@section('content')
    <h1>{{ $message }}</h1>

    @foreach ($users as $user)
        <div>{{ $user->name }} - ({{ $user->email }})</div>
    @endforeach
@endsection
