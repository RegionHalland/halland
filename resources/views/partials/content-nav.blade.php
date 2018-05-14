@if(isset($content_nav) && count($content_nav) > 0)
<nav class="content-nav" style="top: 20px">
	<ul style="position: sticky; top: 20px">
		@foreach ($content_nav as $item)
		<li itemprop="itemListElement" itemtype="http://schema.org/ListItem">
			<a href="#{{ $item['slug'] }}">{!! $item['content'] !!}</a>
			<meta itemprop="position" content="{{ $loop->iteration }}" />
		</li>
		@endforeach
	</ul>
</nav>
@endif
