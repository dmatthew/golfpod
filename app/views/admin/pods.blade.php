@extends('layouts/admin')
@section('title', 'PODs')
@section('description', '')
@section('page_header', 'PODs')

@section('content')
<div class='panel'>
    <div class="panelbody">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Game</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($pods as $pod)
                <tr>
                    <td>{{{ $pod->id }}}</td>
                    <td>{{{ $pod->getDate() }}}</td>
                    <td>{{{ $pod->game->title }}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $pods->links() }}
    </div>
</div>
@stop
