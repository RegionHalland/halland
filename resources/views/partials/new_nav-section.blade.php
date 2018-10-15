@if(isset($page_children))
<ul class="flex flex-wrap nav-boxes-container background-dark-blue-frida" aria-label="Huvudnavigation">
@foreach($page_children as $page)
<li class="p2 col-12 md-col-4 lg-col-4">
	<a class="strong" href="{{ $page->url }}" style="color: black; display: flex; overflow: hidden;">
		<div class="px3 pt3 background-white" style="width: 100%; min-height: 5em; border-radius: 0.7ex;">
			<svg class="icon-badge icon-badge--md mr1">
					<use xlink:href="#chevron-right"/>
			</svg>
			{{ $page->post_title }}
		</div>
	</a>	
</li>
@endforeach
</ul>
@endif
