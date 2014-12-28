@extends('layouts/admin')
@section('title', 'Posts')
@section('description', '')
@section('page_header', 'Posts')

@section('content')
<!-- ACTIONS -->
<div class="row">
    <div class="col-xs-12">
        <a href="{{ URL::to('gp/posts/create') }}" class="btn btn-default">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create Post
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
                    <th>Excerpt</th>
                    <th>Created At</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{{ $post->id }}}</td>
                    <td>{{{ $post->title }}}</td>
                    <td>{{{ str_limit($post->excerpt, '80') }}}</td>
                    <td>{{{ $post->created_at }}}</td>
                    <td>
                        <a title="Edit Post" href='{{{ URL::to("gp/posts/$post->id/edit") }}}' class='btn btn-sm btn-success'>
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                        </a>
                        {{ Form::open(['url' => 'gp/posts/'.$post->id, 'name' => 'deletePostForm', 'method' => 'DELETE', 'class' => 'inline-form']) }}
                            <button title="Delete Post" class='btn btn-sm btn-danger btn-delete'>
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </button>
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{ $posts->links() }}
    </div>
</div>
<!-- END LIST -->
@stop
