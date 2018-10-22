<div class="inline-block mt-8 pb-6 border-b w-full border-grey-light">

	<header class="relative pb-4 block mb-6">
		<span class="border-b-2 border-blue-dark text-lg font-bold text-black pb-2 z-20 relative leading-none">Kontakt</span>
		<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
	</header>
	<div class="block mb-2">
		<span class="">Publicerad av:</span>
		<span class="text-base">
			@if(get_field('manual_data_curator') === true)
				{{ the_field('innehallsansvarig') }}
			@else
				@php($author_id = intval(get_field('data_curator')))
				{{ get_the_author_meta('first_name', $author_id) }} {{ get_the_author_meta('last_name', $author_id) }}
			@endif
		</span>
	</div>
	<div class="block mb-2">
		<span class="text-base">
			@if(get_field('manual_data_curator') === true)
				Kontakta redaktören: <a class="text-blue-dark" href="mailto:{{ the_field('data_curator_email') }}">{{ the_field('data_curator_email') }}</a>
			@else
				Kontakta redaktören: <a class="text-blue-dark" href="mailto:{{ get_the_author_meta('email', $author_id) }}">{{ get_the_author_meta('email', $author_id) }}</a>
			@endif
		</span>
	</div>
	<div class="block mb-2">
		<span class="text-base">
			Senast ändrad: {{ get_the_date('d/m/Y', get_the_id()) }}
		</span>
	</div>
</div>