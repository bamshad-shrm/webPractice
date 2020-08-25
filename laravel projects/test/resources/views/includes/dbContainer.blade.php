

		<ul class="list-group">
			@foreach ($links as $link)
			 	<li class="list-group-item"><a href="{{ $link->url }}" target="_blank">{{ $link->title }}</a></li>
			@endforeach
		</ul>



