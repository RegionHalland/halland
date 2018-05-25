@if(isset($content_nav) && count($content_nav) > 0)
<nav class="content-nav-container">
	<div class="content-nav">
	<h4>Hitta på sidan</h4>
	<ul class="content-nav__list" itemscope itemtype="http://schema.org/ItemList">
		@foreach ($content_nav as $item)
		<li class="content-nav__item" itemprop="itemListElement">
			<a class="content-nav__link" href="#{{ $item['slug'] }}">{!! $item['content'] !!}</a>
			<meta itemprop="position" content="{{ $loop->iteration }}" />
		</li>
		@endforeach
	</ul>
	</div>
</nav>
@endif
