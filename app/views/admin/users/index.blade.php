@extends('layouts/admin')
@section('title', 'Users')
@section('description', '')
@section('page_header', 'Users')

@section('content')
<!-- ACTIONS -->
<div class="row">
    <div class="col-xs-12">
        <a href="{{ URL::to('gp/users/create') }}" class="btn btn-default">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create User
        </a>
    </div>
</div>
<!-- END ACTIONS -->

<!-- TOOLBAR -->
<div class="row table-toolbar">
    <div class="col-xs-12">
        
    </div>
</div>
<!-- END TOOLBAR -->


<!-- LIST -->
<div class='row'>
    <div class="col-xs-12">
         <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>User Since</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{{ $user->id }}}</td>
                    <td>{{{ $user->username }}}</td>
                    <td>{{{ $user->email }}}</td>
                    <td>{{{ $user->created_at }}}</td>
                    <td>
                        <a title="Edit User" href='{{{ URL::to("gp/users/$user->id/edit") }}}' class='btn btn-sm btn-success'>
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        {{ Form::open(['url' => 'gp/users/'.$user->id, 'name' => 'deleteUserForm', 'method' => 'DELETE', 'class' => 'inline-form']) }}
                            <button title="Delete User" class='btn btn-sm btn-danger btn-delete'>
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </button>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>
<!-- END LIST -->
@stop
