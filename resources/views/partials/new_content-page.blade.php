@while(have_posts()) @php(the_post())
	
	@include('partials.new_article')

	@include('partials.new_entry-meta')

@endwhile

