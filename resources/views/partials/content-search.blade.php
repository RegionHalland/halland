
<article class="py-4 border-b border-grey-lightest">
	<a href="@php the_permalink() @endphp" title="" class="text-blue-dark mb-2 inline-block">
		<h2 class="text-xl sm:text-2xl leading-tight">@php the_title() @endphp</h2>
	</a>
	<span class="text-base block text-grey-darkest mb-4">Publicerad: <time itemprop="datePublished" datetime="{{ get_the_date('Y/m/d', get_the_id()) }}">{{ get_the_date('Y/m/d', get_the_id()) }}</time></span>
	<p class="text-lg text-grey-darkest leading-tight mb-4">{!! get_the_excerpt() !!}</p>
	@if(get_the_terms(get_the_id(), 'category'))
		@foreach(get_the_terms(get_the_id(), 'category') as $key => $term)
			<a href="{{ get_post_type_archive_link(get_post_type()) }}?{{'filter[category]=' .  $term->slug }}" class="px-2 mr-2 mb-2 py-1 text-sm no-underline hover:underline text-black bg-grey-lightest rounded-full inline-block">{{ $term->name }}</a>
		@endforeach
	@endif
</article>

