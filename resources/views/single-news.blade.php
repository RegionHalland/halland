@extends('layouts.app')

@section('content')
	<div class="container mx-auto px-4">
		<div class="flex flex-wrap -mx-4">
			<div class="w-full sm:w-full md:w-4/12 lg:w-4/12 px-4">
		  		<header class="relative pb-4 block mb-8">
					<span class="border-b-2 border-blue-dark text-2xl font-bold text-black pb-2 z-20 relative leading-none">Fler nyheter</span>
					<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
				</header>
				@if(isset($news) && !empty($news))
					<ul class="list-reset">
						@while($news->have_posts()) @php($news->the_post())
							<li>
								<a href="{{ the_permalink() }}" title="" class="text-blue-dark mb-2 inline-block">
									<h2 class="text-xl sm:text-1xl leading-tight">{{ get_the_title() }}</h2>
								</a>
								<br>
							</li>
						@endwhile
						<a href="{{ get_post_type_archive_link(get_post_type()) }}" class="inline-block no-underline text-white bg-blue-dark px-6 py-4 text-lg rounded">{{ get_post_type_object(get_post_type())->labels->view_items }}<svg class="h-4 w-4"><use xlink:href="#chevron-right" /></svg></a>
					</ul>
				@endif
			</div>
			<div class="w-full sm:w-full md:w-8/12 lg:w-8/12 px-4">
				@while(have_posts()) @php(the_post())
					<h1>{{ get_the_title() }}</h1>
					<p>{{ the_content() }}</p>
				@endwhile
			</div>
		</div>
	</div>
@endsection
