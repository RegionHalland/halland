<header class="relative pb-4 block mb-8">
	<span class="border-b-2 border-blue-dark text-2xl font-bold text-black pb-2 z-20 relative leading-none">Vad letar du efter?</span>
	<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
</header>
<div class="flex flex-wrap items-stretch -mx-4">
	@foreach($page_children as $index => $page)
		@php
			global $post;
			// Assign your post details to $post (& not any other variable name!!!!)
			$post = $page;
			setup_postdata( $post );
		@endphp

		@if($index <= 5)
			<div class="w-full sm:w-6/12 lg:w-6/12 px-4 mb-8">
				<a href="{{ $page->url }}" class="text-blue-dark">
					<h2 class="mb-2 text-xl md:text-2xl">{{ $page->post_title }}</h2>
				</a>
				<p class="leading-tight text-lg text-grey-darkest">
					@if(has_excerpt($page->ID)) 
						{{ $page->acf_excerpt }}
					@else
						{{ html_entity_decode(wp_trim_words(get_the_excerpt(), 10, '...'))  }}
					@endif
				</p>
			</div>
		@endif
		@if($index === 5)
			<div class="block w-full px-4 mt-4">
				<header class="relative pb-4 w-full mb-6">
					<span class="border-b-2 border-grey text-lg font-bold text-black pb-2 z-20 relative leading-none">Fler länkar</span>
					<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-grey-lightest z-10">
				</header>
			</div>
		@endif
		@if($index > 5)
			<div class="w-full sm:w-6/12 lg:w-6/12 px-4 mb-2">
				<a href="{{ $page->url }}" class="text-blue-dark leading-normal">
					<span class="text-lg">{{ $page->post_title }}</span>
				</a>
			</div>
		@endif
	@endforeach
</div>