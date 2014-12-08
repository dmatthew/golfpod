@extends('layouts/admin')
@section('title', 'Games')
@section('description', '')
@section('page_header', 'Games')

@section('content')
<div class='panel'>
    <div class="panelbody">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Created At</th>
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
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $games->links() }}
    </div>
</div>
@stop
