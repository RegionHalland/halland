@if($categories)
	<aside class="article">
		<h3>Kategorier</h3>

			@foreach ($categories as $item) 
				<a href="{{ $item['href'] }}">{{ $item['label'] }}</a><span class="small light">({{ $item['count'] }})</span>@if (!$loop->last), @endif
			@endforeach
		
	</aside>
@endif