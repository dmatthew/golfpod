@extends('layouts/admin')
@section('title', 'Create New User')
@section('description', '')
@section('page_header', 'Users')

@section('content')
<div class="container">
    <h3>New User</h3>
    {{ Form::open(['url' => 'gp/users', 'name' => 'newUserForm']) }}
        <div class="form-group">
            <label class="control-label">Username *</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
    
        <div class="form-group">
            <label class="control-label">Email *</label>
            <input type="text" name="email" class="form-control" placeholder="Email" required>
        </div>
    
        <div class="form-group">
            <label class="control-label">Password *</label>
            <input type="text" name="password" class="form-control" placeholder="Password" required>
        </div>

        <div class="control-group">
            <label></label>
            <div class="controls">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    {{ Form::close() }}
</div>
@stop
