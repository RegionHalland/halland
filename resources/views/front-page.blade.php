@extends('layouts.app')

@php($id = uniqid())

@section('content')

<div class="bg-blue-dark">
	<div class="container mx-auto px-4 pt-20 pb-12">
		<div class="w-full md:w-11/12 mx-auto flex justify-between flex-wrap">
			<div class="w-full md:w-6/12">
				@while(have_posts()) @php(the_post())
					<h1 class="text-3xl md:text-4xl text-white mb-4">{{ the_title() }}</h1>
					<div class="text-blue-light text-lg leading-tight md:text-xl mb-6">{!! the_content() !!}</div>
				@endwhile
				<form>
					<div role="search" class="bg-white rounded overflow-hidden relative">
						<input name="s" id="search" placeholder="Sök på webbplatsen" class="text-lg bg-transparent h-12 md:h-16 pin-t px-6 pin-l w-full" type="text">
						<button type="submit" class="bg-yellow flex items-center justify-center absolute pin-r pin-b h-12 w-12 md:h-16 md:w-16">
							<svg class="h-6 w-6">
								<use xlink:href="#search"/>
							</svg>
						</button>
					</div>
				</form>
			</div>
			<div class="w-full md:w-4/12 mt-12 md:mt-0">
			@php($popular_links = get_field('popular_links'))
			@if(isset($popular_links) && !empty($popular_links))
				<header class="text-lg font-bold text-white block mb-2">Populära länkar</header>
				<ol class="list-reset bg-white relative rounded overflow-hidden">
					@foreach($popular_links as $link)
					<li class="px-3 py-4 border-b border-grey-lightest bg-white">
						<svg class="h-4 w-4 align-middle mr-1">
							<use xlink:href="#link-2"/>
						</svg>
						<a class="text-black" href="{{ $link['link']['url'] }}">{{ $link['link']['title'] }}</a>
					</li>
					@endforeach
				</ol>
			@endif
			</div>
		</div>
	</div>
</div>


<div class="bg-white pt-16 pb-8">
	<div class="container mx-auto px-4">
		<div class="w-full md:w-11/12 mx-auto">
			<header class="relative pb-4 block mb-8">
				<span class="border-b-2 border-blue-dark text-2xl font-bold text-black pb-2 z-20 relative leading-none">Vad letar du efter?</span>
				<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
			</header>
			<div class="flex flex-wrap items-stretch -mx-4">
				@foreach($top_level_pages as $top_level_page)
					<div class="w-full sm:w-6/12 lg:w-4/12 px-4 mb-8">
						<a href="{{ the_permalink($top_level_page->ID) }}" class="text-blue-dark">
							<h3 class="mb-2 text-xl md:text-2xl">{{ $top_level_page->post_title }}</h3>
						</a>
						<p class="leading-tight text-lg text-grey-darkest">
							@if(get_field('excerpt', $top_level_page->ID)) 
								{{ the_field('excerpt', $top_level_page->ID) }}
							@else
								{{ \App\trim_excerpt($top_level_page->post_content) }}
							@endif
						</p>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>


<div class="bg-white pt-16 pb-8">
	<div class="container mx-auto px-4">
		<div class="w-full md:w-11/12 mx-auto">
			<header class="relative pb-4 block mb-8">
				<span class="border-b-2 border-blue-dark text-2xl font-bold text-black pb-2 z-20 relative leading-none">Nyheter</span>
				<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
			</header>

			<div class="flex flex-wrap -mx-4">
				<div class="w-full w-full lg:w-6/12 px-4 mb-8">
					@include('partials.news-list')
				</div>
				<div class="w-full lg:w-6/12 px-4 mb-8">
					@include('partials.blurb-list')
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
