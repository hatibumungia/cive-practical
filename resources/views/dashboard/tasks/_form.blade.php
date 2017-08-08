<div class="form-group">
      <label for="title" class="col-sm-3 control-label">Title</label>
      <div class="col-sm-6">
      	<input type="text" class="form-control" name="title" id="title" placeholder="Enter task title" value="{{ isset($task->title) ? $task->title : old('title') }}">
      </div>
</div>
<div class="form-group">
      <label for="body" class="col-sm-3 control-label">Body</label>
      <div class="col-sm-6">
      	<textarea  rows=7 class="form-control" name="body" id="body" placeholder="Enter task Body">{{ isset($task->body) ? $task->body : old('body') }}</textarea>
      </div>
</div>