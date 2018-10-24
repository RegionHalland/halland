@if(isset($news) && !empty($news))
	@while($news->have_posts()) @php($news->the_post())
		@include('partials.news-list-item')
	@endwhile

	@if(isset($news_category->name))
		<a href="{{ get_post_type_archive_link(get_post_type()) }}?{{'filter[category]=' .  $news_category->slug }}" class="inline-flex no-underline text-white bg-blue-dark px-6 mt-4 items-center justify-between py-4 text-lg rounded">
		{{ get_post_type_object(get_post_type())->labels->view_items }} 
		{{ $news_category ? 'inom ' . strtolower($news_category->name) : '' }}
		<svg class="h-4 w-4"><use xlink:href="#chevron-right" /></svg></a>
	@else
		<a href="{{ get_post_type_archive_link(get_post_type()) }}" class="inline-flex no-underline text-white bg-blue-dark px-6 mt-4 items-center justify-between py-4 text-lg rounded">{{ get_post_type_object(get_post_type())->labels->view_items }}<svg class="h-4 w-4"><use xlink:href="#chevron-right" /></svg></a>
	@endif
	
@endif