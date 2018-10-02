@if(isset($page_children))
<ul class="flex flex-wrap pt3 pb3 pl5 pr5 background-dark-blue" aria-label="Huvudnavigation">
@foreach($page_children as $page)
<li class="col-12 lg-col-4">
	<div class="p2">
		<div class="background-white">
			<div class="p3">
				<span class="center strong">
					<object aria-hidden="true" tabindex="-1" class="pr1" type="image/svg+xml" data="img/icon-navlink.svg" style="vertical-align: middle;"></object>
					<a href="{{ $page->url }}" style="vertical-align: middle; color: #004B93">{{ $page->post_title }}</a>
				</span>
			</div>
		</div>
	</div>							
</li>
@endforeach
</ul>
@endif
