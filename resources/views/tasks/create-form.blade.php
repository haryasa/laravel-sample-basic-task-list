<!-- Add task form -->
<form class="ui form {{ count($errors)?'error':'' }}" method="POST" action="{{ url('tasks') }}">
	
	{{ csrf_field() }}

	<div class="ui fluid action input">
		<input placeholder="Enter task name" type="text" name="name">
		<button type="submit" class="ui primary button">Add Task</button>
	</div>

	<!-- Display Validation Errors -->
	@include('layouts.errors')

</form>