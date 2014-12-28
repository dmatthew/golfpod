@extends('layouts/admin')
@section('title', 'Games | '.$game->title)
@section('description', '')
@section('page_header', 'Games')

@section('content')
<div class="container">
    <h3>Update Game</h3>
    {{ Form::open(['url' => 'gp/games/'.$game->id, 'name' => 'updateGameForm', 'method' => 'PUT']) }}
        <div class="form-group">
            <label class="control-label">Title *</label>
            <input type="text" name="title" value="{{{ $game->title }}}" class="form-control" placeholder="Enter Title" required>
        </div>

        <div class="form-group">
            <label class="control-label">Category *</label>
            <div class="controls">
                <select name="category" class="form-control">
                    <option>Putting</option>
                    <option>Chip/Pitch/Sand</option>
                    <option>Driving Range</option>
                    <option>On Course</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label>Video *</label>
            <div class="controls">
                <input name="video" value="" class="form-control" placeholder="Enter path to video" type="text" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label">Image *</label>
            <div class="controls">
                <input name="image" value="" class="form-control" placeholder="Enter path to image" type="text" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label">Excerpt *</label>
            <div class="controls">
                <textarea name="excerpt" class="form-control form-control-lg" placeholder="Excerpt..." required>{{{ $game->excerpt }}}</textarea>
            </div>
        </div>
    
        <div class="form-group">
            <label class="control-label">Description *</label>
            <div class="controls">
                <textarea name="description" class="form-control form-control-lg" placeholder="Full description..." required>{{{ $game->description }}}</textarea>
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
