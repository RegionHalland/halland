@if(isset($content_nav) && count($content_nav) > 0)
@php($id = uniqid())
<nav class="content-nav-container">
	<div class="content-nav__head">
		<div class="content-nav__page-name">{{ the_title() }}</div><div class="content-nav__toggle-container"><a class="content-nav__toggle-button">&#65088;</a></div>
		<div class="content-nav__currently-active"></div>
	</div>
	<div class="content-nav">
		<h4 id="{{ $id }}">Hitta på sidan</h4>
		<ul class="content-nav__list" itemscope itemtype="http://schema.org/ItemList" aria-labelledby="{{ $id }}">
			@foreach ($content_nav as $item)
			<li class="content-nav__item" itemprop="itemListElement">
				<a class="content-nav__link" href="#{{ $item['slug'] }}" data-pointstoid="{{ $item['slug'] }}">{!! $item['content'] !!}</a>
				<meta itemprop="position" content="{{ $loop->iteration }}" />
			</li>
			@endforeach
		</ul>
	</div>
</nav>
@endif
