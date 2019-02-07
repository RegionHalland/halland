<div class="inline-block mt-8 pb-6 border-b w-full border-grey-light">
	<header class="relative pb-4 block mb-6">
		<span class="border-b-2 border-blue-dark text-xl font-bold text-black pb-2 z-20 relative leading-none">Om innehållet</span>
		<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
	</header>
	@if(get_field('show_data_curator'))
	<div class="block mb-2">
		<span class="">Publicerad av:</span>
		<span class="text-base">
			@if(get_field('manual_data_curator') === true)
				{{ the_field('innehallsansvarig') }}
			@else
				@php $author_id = intval(get_field('data_curator')) @endphp
				{{ get_the_author_meta('first_name', $author_id) }} {{ get_the_author_meta('last_name', $author_id) }}
			@endif
		</span>
	</div>
	<div class="block mb-2">
		<span class="text-base">
			@if(get_field('manual_data_curator'))
					Kontakta redaktören: <a class="text-blue-dark" href="mailto:{{ the_field('data_curator_email') }}">{{ the_field('data_curator_email') }}</a>
			@else
				Kontakta redaktören: <a class="text-blue-dark" href="mailto:{{ get_the_author_meta('email', $author_id) }}">{{ get_the_author_meta('email', $author_id) }}</a>
			@endif
		</span>
	</div>
	@endif
	<div class="block mb-2">
		<span class="text-base">
			Senast ändrad: <time itemprop="dateModified" datetime="{{ the_modified_date('Y-m-d') }}">{{ the_modified_date('Y-m-d') }}</time>
		</span>
	</div>
</div>