@extends('layouts/admin')
@section('title', 'Games')
@section('description', '')
@section('page_header', 'Posts')

@section('content')
<div class='panel'>
    <div class="panelbody">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Excerpt</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{{ $post->id }}}</td>
                    <td>{{{ $post->title }}}</td>
                    <td>{{{ str_limit($post->excerpt, '80') }}}</td>
                    <td>{{{ $post->created_at }}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
</div>
@stop
