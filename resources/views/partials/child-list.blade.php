<ul class="list-reset">
	<li><a href="{{ the_permalink($item->ID) }}">{{ $item->post_title }}</a></li>
	@if (!empty($item->children))
	    <ul class="list-reset pl-2">
	    @foreach($item->children as $item)
			@include('partials.child-list')
	    @endforeach
	    </ul>
	@endif
</ul>