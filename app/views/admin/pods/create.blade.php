@extends('layouts/admin')
@section('title', 'Create New POD')
@section('description', '')
@section('page_header', 'PODS')

@section('content')
<div class="container">
    <h3>New POD</h3>
    {{ Form::open(['url' => 'gp/pods', 'name' => 'newPodForm']) }}
        <div class="form-group">
            <label class="control-label">Published Date *</label>
            <input type="text" name="pod_date" class="form-control" required>
            <button type="button" class="btn btn-default">Today</button>
        </div>
    
        <div class="form-group">
            <label class="control-label">Game</label>
            <select name="game_id" class="form-control" required>
                <option value="1">1</option>
            </select>
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
