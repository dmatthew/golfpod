@extends('layouts/admin')
@section('title', 'Users | '.$user->username)
@section('description', '')
@section('page_header', 'Users')

@section('content')
<div class="container">
    <h3>Update User</h3>
    {{ Form::open(['url' => 'gp/users/'.$user->id, 'name' => 'updateUserForm', 'method' => 'PUT']) }}
        <div class="form-group">
            <label class="control-label">Username *</label>
            <input type="text" value="{{{ $user->username }}}" name="username" class="form-control" placeholder="Username" required>
        </div>
    
        <div class="form-group">
            <label class="control-label">Email *</label>
            <input type="text" value="{{{ $user->email }}}" name="email" class="form-control" placeholder="Email" required>
        </div>

        <div class="control-group">
            <div class="controls">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger">Delete</a>
            </div>
        </div>
    {{ Form::close() }}
    
    <div class="hidden">
        {{ Form::open(['url' => 'gp/users'.$user->id, 'name' => 'deleteUserForm', 'method' => 'DELETE']) }}
            {{ Form::submit() }}
        {{Form::close() }}
    </div>
</div>
@stop
