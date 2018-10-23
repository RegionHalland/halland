@if(isset($nav_sidebar) && !empty($nav_sidebar))
<div class="border border-grey-lightest rounded overflow-hidden">
	<ul class="js-sidebar-nav list-reset">
		@each('partials.child-list', $nav_sidebar, 'item')
	</ul>
</div>
@endif