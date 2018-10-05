@if(isset($page_children))
<ul class="flex flex-wrap mobile-friendly-padding background-dark-blue" aria-label="Huvudnavigation">
@foreach($page_children as $page)
<li class="col-12 lg-col-4">
	<div class="p2">
		<div class="background-white" style="min-height: 5em; border-radius: 0.7ex;">
			<div class="p3">
				<span class="center strong">
					<svg class="icon-badge icon-badge--sm">
	 					<use xlink:href="#chevron-right"/>
					</svg>
					<a href="{{ $page->url }}" style="vertical-align: middle; color: #004B93">{{ $page->post_title }}</a>
				</span>
			</div>
		</div>
	</div>							
</li>
@endforeach
</ul>
@endif
