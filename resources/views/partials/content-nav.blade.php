@if(isset($content_nav) && count($content_nav) > 0)
@php($id = uniqid())
<nav class="hidden md:block content-nav sticky pin-t">
	<header class="relative pb-4 block mb-2">
		<span class="border-b-2 border-blue-dark text-xl font-bold text-black pb-2 z-20 relative leading-none">Hitta på sidan</span>
		<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
	</header>
	<ul class="content-nav__list list-reset" itemscope itemtype="http://schema.org/ItemList">
		@foreach ($content_nav as $item)
		<li class="content-nav__item mb-2" itemprop="itemListElement">
			<a class="content-nav__link text-black no-underline hover:underline" href="#{{ $item['slug'] }}" data-pointstoid="{{ $item['slug'] }}">{!! $item['content'] !!}</a>
			<meta itemprop="position" content="{{ $loop->iteration }}" />
		</li>
		@endforeach
	</ul>
</nav>
@endif
