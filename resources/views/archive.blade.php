@extends('layouts.app')

@section('content')
	<div class="container mx-auto px-4">
		<div class="flex flex-wrap -mx-4">
		  	<div class="w-full sm:w-6/12 md:w-4/12 lg:w-6/12 px-4">
		  		<header class="relative pb-4 block mb-8">
					<span class="border-b-2 border-blue-dark text-2xl font-bold text-black pb-2 z-20 relative leading-none">{{ get_the_archive_title() }}</span>
					<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
				</header>
				
				@while($archive_posts->have_posts()) @php($archive_posts->the_post())
					@include('partials.news-list-item')
				@endwhile
			</div>

			<div class="w-full sm:w-6/12 md:w-4/12 lg:w-4/12 px-4">
				<header class="relative pb-4 block mb-8">
					<span class="border-b-2 border-blue-dark text-2xl font-bold text-black pb-2 z-20 relative leading-none">Kategorier</span>
					<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
				</header>
				<ul class="list-reset">
					@foreach($categories as $key => $value)
						<li><a href="{{ get_post_type_archive_link(get_post_type()) }}?{{'filter[category]=' .  $value->slug }}" class="px-2 mr-2 mb-2 py-1 text-sm no-underline hover:underline text-black bg-grey-lightest rounded-full inline-block">{{ $value->name }}</a></li>
					@endforeach
				</ul>
			</div>
		</div>
	</div>
@endsection