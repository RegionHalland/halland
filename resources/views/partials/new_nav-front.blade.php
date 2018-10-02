@foreach($nav_site as $topLevelPage)
<li class="col-12 lg-col-4">
	<div class="p3">
		<span class="center strong">
			<object aria-hidden="true" tabindex="-1" class="pr1" type="image/svg+xml" data="img/icon-navlink.svg" style="vertical-align: middle;"></object>
			<a href="{{ get_page_link($topLevelPage->ID) }}" style="vertical-align: middle; color: #004B93">{{ $topLevelPage->post_title }}</a>
		</span>
	</div>
</li>
@endforeach