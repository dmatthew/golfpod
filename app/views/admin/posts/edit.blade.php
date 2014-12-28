@extends('layouts/admin')
@section('title', 'Posts | '.$post->title)
@section('description', '')
@section('page_header', 'Posts')

@section('content')
<div class="container">
    <h3>Update Post</h3>
    {{ Form::open(['url' => 'gp/posts/'.$post->id, 'name' => 'updatePostForm', 'method' => 'PUT']) }}
        <div class="form-group">
            <label class="control-label">Title *</label>
            <input type="text" value="{{{ $post->title }}}" name="title" class="form-control" placeholder="Enter Title" required>
        </div>

        <div class="form-group">
            <label class="control-label">Published Date *</label>
            <input type="text" name="published_date" class="form-control" placeholder="Enter Title" required>
        </div>

        <div class="form-group">
            <label class="control-label">Image *</label>
            <div class="controls">
                <input name="image" value="{{{ $post->media->first()->path }}}" class="form-control" placeholder="Enter path to image" type="text" required>
            </div>
        </div>
    
        <div class="form-group">
            <label class="control-label">Excerpt *</label>
            <div class="controls">
                <textarea name="excerpt" class="form-control form-control-lg" placeholder="Excerpt..." required>{{{ $post->excerpt }}}</textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label">Content *</label>
            <div class="controls">
                <textarea name="content" class="form-control form-control-lg" placeholder="Content..." required>{{{ $post->content }}}</textarea>
            </div>
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
