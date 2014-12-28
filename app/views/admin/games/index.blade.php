@extends('layouts/admin')
@section('title', 'Games')
@section('description', '')
@section('page_header', 'Games')

@section('content')
<!-- ACTIONS -->
<div class="row">
    <div class="col-xs-12">
        <a href="{{ URL::to('gp/games/create') }}" class="btn btn-default">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create Game
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
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>{{{ $game->id }}}</td>
                    <td>{{{ $game->title }}}</td>
                    <td>{{{ $game->category }}}</td>
                    <td>{{{ str_limit($game->description, 80) }}}</td>
                    <td>{{{ $game->created_at }}}</td>
                    <td>
                        <a title="Edit Game" href='{{{ URL::to("gp/games/$game->id/edit") }}}' class='btn btn-sm btn-success'>
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        {{ Form::open(['url' => 'gp/games/'.$game->id, 'name' => 'deleteGameForm', 'method' => 'DELETE', 'class' => 'inline-form']) }}
                            <button title="Delete Game" class='btn btn-sm btn-danger btn-delete'>
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </button>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $games->links() }}
    </div>
</div>
<!-- END LIST -->
@stop
