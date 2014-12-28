@extends('layouts/admin')
@section('title', 'Create New Post')
@section('description', '')
@section('page_header', 'Posts')

@section('content')
<div class="container">
    <h3>New Post</h3>
    {{ Form::open(['url' => 'gp/posts', 'name' => 'newPostForm']) }}
        <div class="form-group">
            <label class="control-label">Title *</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Title" required autocomplete="off">
        </div>

        <div class="form-group">
            <label class="control-label">Published Date *</label>
            <input type="text" name="published_date" class="form-control" placeholder="Enter Title" required autocomplete="off">
        </div>

        <div class="form-group">
            <label class="control-label">Image *</label>
            <div class="controls">
                <input name="image" class="form-control" placeholder="Enter path to image" type="text" required autocomplete="off">
            </div>
        </div>
    
        <div class="form-group">
            <label class="control-label">Excerpt *</label>
            <div class="controls">
                <textarea name="excerpt" class="form-control form-control-lg" placeholder="Excerpt..." required autocomplete="off"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label">Content *</label>
            <div class="controls">
                <textarea name="content" class="form-control form-control-lg" placeholder="This is where the main content goes..." required autocomplete="off"></textarea>
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
