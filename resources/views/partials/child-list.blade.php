<ul class="list-reset border-l-4 border-blue-dark">
	<li class="border-b p-3 border-grey-lightest">
		<a class="text-black text-lg no-underline" href="{{ the_permalink($item->ID) }}">{{ $item->post_title }}</a>
		@if (!empty($item->children))
			<button>Öppna</button>
		@endif
	</li>
	@if (!empty($item->children))
	    <ul class="list-reset">
	    @foreach($item->children as $item)
			@include('partials.child-list')
	    @endforeach
	    </ul>
	@endif
</ul>