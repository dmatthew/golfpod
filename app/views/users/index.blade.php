@extends('layouts/default')
@section('title', 'Welcome to GolfPOD')
@section('description', 'Welcome to GolfPOD')

@section('content')
    <h1>All Users</h1>

    @if ($users->count())
        @foreach ($users as $user)
            <li>{{ link_to("/users/{$user->username}", $user->username) }}</li>
        @endforeach
    @else
        <p>There doesn't seem to be any users registered.</p>
    @endif
@stop
