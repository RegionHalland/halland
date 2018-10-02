@while(have_posts()) @php(the_post())
	
	@include('partials.new_article')

	@if (is_active_sidebar('sidebar-article-bottom'))
	<hr>
	<div class="col-12">
		@include('partials.sidebar-article-bottom')
	</div>
	@endif

	@include('partials.new_entry-meta')

@endwhile

