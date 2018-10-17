@extends('layouts.app')

@section('content')
<div class="bg-white pt-24 pb-8">
	<div class="container mx-auto px-4">
		<div class="w-full md:w-11/12 mx-auto">
			<div class="flex flex-wrap">
				<div class="w-full sm:w-full md:w-8/12 px-4">
					@while(have_posts()) @php(the_post())
						<article class="article">
							<h1 class="mb-8">{{ get_the_title() }}</h1>
							<p>{{ the_content() }}</p>
							@include('partials.author-info')
						</article>
					@endwhile
				</div>
				<div class="w-full sm:w-full md:w-4/12 px-4">
					<div class="sticky pin-t">
						@if(isset($news) && !empty($news))
						<header class="relative pb-4 block mb-8">
							<span class="border-b-2 border-yellow text-2xl font-bold text-black pb-2 z-20 relative leading-none">Fler nyheter</span>
							<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-yellow-light z-10">
						</header>
						<ol class="list-reset bg-yellow-light relative rounded border border-grey-lightest overflow-hidden">
							@while($news->have_posts()) @php($news->the_post())
									<li class="px-4 py-4 border-grey-lightest truncate overflow-hidden relative">
										<div class="absolute bg-yellow pin-l pin-t h-full w-1"></div>
										<a class="text-black whitespace-no-wrap" href="{{ the_permalink() }}">{{ get_the_title() }}</a>
									</li>
							@endwhile
						</ol>
						<a href="{{ get_post_type_archive_link(get_post_type()) }}" class="inline-block no-underline text-white bg-blue-dark px-6 mt-4 flex items-center justify-between py-4 text-lg rounded">{{ get_post_type_object(get_post_type())->labels->view_items }}<svg class="h-4 w-4"><use xlink:href="#chevron-right" /></svg></a>
						@endif
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
