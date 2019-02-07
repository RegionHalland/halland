@while(have_posts()) @php(the_post())
	@include('partials.article')

	@if (is_active_sidebar('sidebar-article-bottom'))
	<hr>
	<div class="col-12">
		@include('partials.sidebar-article-bottom')
	</div>
	@endif
	<hr>
	@include('partials.entry-meta')

@endwhile

