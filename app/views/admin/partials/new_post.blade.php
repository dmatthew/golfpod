<div id="new_game">
	<div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <h4>New Post</h4>
            </div>
        </div>
        <div class="panel-body">
            {{ Form::open(['url' => 'admin/posts', 'name' => 'newPostForm']) }}
                <div class="form-group">
					<label class="control-label">Title *</label>
					<div class="controls">
						<input name="txtTitle" class="form-control" placeholder="Enter Title" type="text" required>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label">Content *</label>
					<div class="controls">
						<textarea id="gp-mce" name="txtContent" class="form-control form-control-lg" placeholder="This is where the main content goes..."></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label>Excerpt *</label>
					<div class="controls">
						<textarea name="txtExcerpt" class="form-control" placeholder="This should be a short description of the article..."></textarea>
					</div>
				</div>

				<div class="form-group">
					<label></label>
					<div class="controls">
						<input type="hidden" name="action" value="add_new_article">
						<button type="submit" class="btn btn-primary">Add New Post</button>
					</div>
				</div>
            {{ Form::close() }}
        </div>
    </div>
</div>
