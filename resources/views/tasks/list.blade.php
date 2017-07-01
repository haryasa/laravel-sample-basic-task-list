<!-- Current Tasks -->
<table class="ui table">
	<thead>
		<tr>
			<th class="thirteen wide">Tasks</th>
			<th class="three wide">&nbsp;</th>
		</tr>
	</thead>

	<tbody>
		@foreach($tasks as $task)
			<tr>
				<td class="{{ $task->done?'disabled task-done':''}}">
					{{ $task->name }}
				</td>

				<td class="center aligned">
					<form action="/tasks/{{ $task->id }}" method="POST">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<button type="submit" class="ui {{ $task->done?'negative':'positive' }} icon button">
							<i class="{{ $task->done?'minus':'check' }} icon"></i>
						</button>
					</form>

					<form action="/tasks/{{ $task->id }}" method="POST">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<button type="submit" class="ui icon button">
							<i class="trash icon"></i>
						</button>
					</form>
				</td>

			</tr>
		@endforeach
	</tbody>

</table>

{{ $tasks->links('layouts.pagination') }}