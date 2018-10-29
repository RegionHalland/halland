@if(isset($nav_site) && !empty($nav_site))
<div class="border border-grey-lightest rounded overflow-hidden">
	<ul class="js-sidebar-nav list-reset">
		@each('partials.child-list', $nav_site, 'item')
	</ul>
</div>
@endif