<div class="mx-auto flex justify-end bg-white w-full px-4 py-3 border-b-4 border-blue-light rounded-t">
	<div class="inline-block">
		@if(get_field('show_data_curator'))
		<span class="">Publicerad av:</span>
		<span class="text-base">
				@if(get_field('manual_data_curator'))
					{{ the_field('innehallsansvarig') }}
				@else
					@php $author_id = intval(get_field('data_curator')) @endphp
					{{ get_the_author_meta('first_name', $author_id) }} {{ get_the_author_meta('last_name', $author_id) }}
				@endif

		</span>
		@endif
	</div>
</div>