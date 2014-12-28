@extends('layouts/admin')
@section('title', 'Create New Game')
@section('description', '')
@section('page_header', 'Games')

@section('content')
<div class="container">
    <h3>New Game</h3>
    {{ Form::open(['url' => 'gp/games', 'name' => 'newGameForm']) }}
        <div class="form-group">
            <label class="control-label">Title *</label>
            <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
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
                <input name="video" class="form-control" placeholder="Enter path to video" type="text" required>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label">Excerpt *</label>
            <div class="controls">
                <textarea name="excerpt" class="form-control form-control-lg" placeholder="Excerpt..." required></textarea>
            </div>
        </div>
    
        <div class="form-group">
            <label class="control-label">Description *</label>
            <div class="controls">
                <textarea name="description"  class="form-control form-control-lg" placeholder="Full description..." required></textarea>
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
