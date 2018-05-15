@if($tags)
	<aside class="article">
		<h3>Taggar</h3>

		<ul class="tags clearfix">
			@foreach ($tags as $item) 
				<li>
					<a href="{{ $item['href'] }}">
						{{ $item['label'] }}
					</a>
				</li>
			@endforeach
		</ul>
	</aside>
@endif