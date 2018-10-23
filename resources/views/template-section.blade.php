{{--
	Template Name: Section Overview
--}}

@extends('layouts.app')

@section('content')

<div class="bg-white pt-16 pb-8">
	<div class="container mx-auto px-4">
		<div class="w-full md:w-11/12 mx-auto">
			<h1 class="mb-4">{!! get_the_title() !!}</h1>
			@while(have_posts()) @php(the_post())
				<div class="text-lg leading-tight md:text-xl mb-12 text-grey-darkest lg:w-5/12">
					@php(the_content())
				</div>
			@endwhile
			<header class="relative pb-4 block mb-8">
				<span class="border-b-2 border-blue-dark text-lg font-bold text-black pb-2 z-20 relative leading-none">Navigation</span>
				<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
			</header>
			<div class="flex flex-wrap items-stretch -mx-4">
				@foreach($page_children as $page)
					@php
						global $post;
						// Assign your post details to $post (& not any other variable name!!!!)
						$post = $page;
						setup_postdata( $post );
					@endphp
					<div class="w-full sm:w-6/12 lg:w-4/12 px-4 mb-8">
						<a href="{{ $page->url }}" class="text-blue-dark">
							<h3 class="mb-2 text-xl md:text-2xl">{{ $page->post_title }}</h3>
						</a>
						<p class="leading-tight text-lg text-grey-darkest">
							@if(has_excerpt($page->ID)) 
								{{ $page->acf_excerpt }}
							@else
								{{ html_entity_decode(wp_trim_words(get_the_excerpt(), 10, '...'))  }}
							@endif
						</p>
					</div>
				@endforeach
			</div>
		</div>
	</div>
	
	@if (is_active_sidebar('sidebar-article-bottom'))
		@include('partials.sidebar-article-bottom')
	@endif
	
</div>

@endsection