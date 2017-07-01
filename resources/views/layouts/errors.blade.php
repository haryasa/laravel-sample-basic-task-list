<div class="ui error message">
	<div class="header">Whoops! Something went wrong!</div>
	<ul class="list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>