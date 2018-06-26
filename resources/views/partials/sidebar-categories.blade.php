@if($categories && !empty($categories))
<aside class="mb2">
	<h3>Kategorier</h3>
	@foreach ($categories as $category) 
		<a href="{{ $category['link'] }}">{{ $category['name'] }}</a><span class="small light">({{ $category['count'] }})</span>@if (!$loop->last), @endif
	@endforeach
</aside>
@endif