@if(isset($content_nav) && count($content_nav) > 0)
@php($id = uniqid())
<nav class="content-nav-container">
	<div class="content-nav">
		<div class="content-nav__header">
			<h4 class="content-nav__title">Hitta på sidan</h4>
			<button class="content-nav__toggle-button px2 py1">
				<svg class="icon icon--sm">
					<use xlink:href="#caret-bottom"/>
				</svg>
			</button>
		</div>
		<ul class="content-nav__list open" itemscope itemtype="http://schema.org/ItemList" aria-labelledby="{{ $id }}">
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
