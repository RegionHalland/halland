@if(isset($news) && !empty($news))
	@while($news->have_posts()) @php($news->the_post())
		@include('partials.news-list-item')
	@endwhile
@endif