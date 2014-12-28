@extends('layouts/admin')
@section('title', 'PODs')
@section('description', '')
@section('page_header', 'PODs')

@section('content')
<!-- ACTIONS -->
<div class="row">
    <div class="col-xs-12">
        <a href="{{ URL::to('gp/pods/create') }}" class="btn btn-default">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create POD
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
                    <th>Date</th>
                    <th>Game</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($pods as $pod)
                <tr>
                    <td>{{{ $pod->id }}}</td>
                    <td>{{{ $pod->getDate() }}}</td>
                    <td>{{{ $pod->game->title }}}</td>
                    <td>
                        <a title="Edit POD" href='{{{ URL::to("gp/pods/$pod->id/edit") }}}' class='btn btn-sm btn-success'>
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        {{ Form::open(['url' => 'gp/pods/'.$pod->id, 'name' => 'deletePodForm', 'method' => 'DELETE', 'class' => 'inline-form']) }}
                            <button title="Delete POD" class='btn btn-sm btn-danger btn-delete'>
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </button>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $pods->links() }}
    </div>
</div>
<!-- END LIST -->
@stop
