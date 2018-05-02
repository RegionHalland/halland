@while(have_posts()) @php(the_post())
	
	@include('partials.article')
	<hr>
	@include('partials.entry-meta')

@endwhile

