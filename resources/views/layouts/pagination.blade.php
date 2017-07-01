<div class="ui pagination menu">
	<a 
		class="{{ $paginator-> previousPageUrl()?'':'disabled' }} item" 
		href="{{ $paginator->previousPageUrl()?:'#' }}">
		<<
	</a>

	@for($i=1;$i<=$paginator->lastPage();$i++)
		<a 
			class="{{ ($paginator->currentPage() == $i)?'active':'' }} item" 
			href="{{ ($paginator->currentPage() == $i)?'#':$paginator->url($i) }}">
			{{ $i }}		
		</a>
	@endfor
	
	<a 
		class="{{ $paginator->nextPageUrl()?'':'disabled' }} item" 
		href="{{ $paginator->nextPageUrl()?:'#' }}">
		>>
	</a>
</div>