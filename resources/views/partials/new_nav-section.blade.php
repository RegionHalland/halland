@if(isset($page_children))
<ul class="flex flex-wrap mobile-friendly-padding background-dark-blue-frida" aria-label="Huvudnavigation">
@foreach($page_children as $page)
<li class="col-12 md-col-4 lg-col-4">
	<div class="p2">
		<div class="background-white" style="min-height: 5em; border-radius: 0.7ex;">
			<div class="p3">
				<span class="center strong">
					<svg class="icon-badge icon-badge--md mr1">
	 					<use xlink:href="#chevron-right"/>
					</svg>
					<a href="{{ $page->url }}" style="vertical-align: middle; color: black">{{ $page->post_title }}</a>
				</span>
			</div>
		</div>
	</div>							
</li>
@endforeach
</ul>
@endif
