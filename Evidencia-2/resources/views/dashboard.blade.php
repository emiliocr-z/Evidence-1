<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    @auth
        <h1>Dashboard</h1>
        <ul>
            <li><a href="{{ route('users.index') }}">Usuarios</a></li>
            <li><a href="{{ route('orders.index') }}">Pedidos</a></li>
        </ul>
    @endauth
@endsection
