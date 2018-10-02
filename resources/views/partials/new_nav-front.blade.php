@foreach($nav_site as $topLevelPage)
<li class="col-12 lg-col-4">
	<div class="p3">
		<span class="center strong">
			<svg class="icon-badge icon-badge--md mr1">
		 		<use xlink:href="#chevron-right"/>
			</svg>
			<a href="{{ get_page_link($topLevelPage->ID) }}" style="vertical-align: middle; color: #004B93">{{ $topLevelPage->post_title }}</a>
		</span>
	</div>
</li>
@endforeach