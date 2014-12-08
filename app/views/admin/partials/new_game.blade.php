<div id="new_game">
	<div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>New Game</h4>
            </div>
        </div>
        <div class="panel-body">
            {{ Form::open(['url' => 'admin/games', 'name' => 'newGameForm']) }}
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
                        <input name="txtVideo" class="form-control" placeholder="Enter path to video" type="text" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label">Image *</label>
                    <div class="controls">
                        <input name="txtImage" class="form-control" placeholder="Enter path to image" type="text" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label">Content *</label>
                    <div class="controls">
                        <textarea name="txtContent" class="form-control form-control-lg" placeholder="This is where the main content goes..." required></textarea>
                    </div>
                </div>

                <div class="control-group">
                    <label></label>
                    <div class="controls">
                        <input type="hidden" name="action" value="add_new_game">
                        <button type="submit" class="btn btn-primary">Add New Game</button>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
