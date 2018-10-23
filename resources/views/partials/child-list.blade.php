<li class="border-t border-grey-lightest relative">
	<a href="{{ the_permalink($item->ID) }}" class="block py-4 pl-3 pr-12 w-full block truncate overflow-hidden {{ $item->active ? 'active bg-blue-light' : '' }}">
		<span class="inline-block text-black text-lg no-underline hover:underline whitespace-no-wrap">{{ $item->post_title }}</span>
	</a>
	@if (!empty($item->children))
	<button class="js-sidebar-nav__toggle-btn  inline-flex h-8 w-8 rounded-full bg-blue-light absolute pin-r pin-t mt-2 items-center justify-center mr-2">
		<svg class="inline-flex h-4 w-4 align-middle">
			<use xlink:href="#chevron-down"/>
		</svg>
	</button>
	<ul class="js-sidebar-nav__list  list-reset border-l-4 border-blue-dark hidden">
	@foreach($item->children as $item)
		@include('partials.child-list')
	@endforeach
	</ul>
	@endif
</li>