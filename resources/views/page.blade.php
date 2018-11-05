@extends('layouts.app')

@section('content')
{{-- Container --}}
<div class="container mx-auto px-4 pt-8 md:pt-16 pb-12">
	<div class="w-full mx-auto">
		<div class="flex flex-wrap items-stretch -mx-4 {{ isset($nav_sidebar) && !empty($nav_sidebar) ? 'justify-start' : 'justify-between' }}">
		
		{{-- Sidebar --}}

		@if(isset($nav_sidebar) && !empty($nav_sidebar))
			<aside class="w-full md:w-3/12 px-4 mb-8 hidden md:block">
				{{-- Sidebar Navigation --}}
				@include('partials.nav-sidebar')
				{{-- Sidebar Navigation END--}}

				{{-- Left Sidebar END --}}
				@if (is_active_sidebar('sidebar-left'))
					@include('partials.sidebar-left')
				@endif
				{{-- Left Sidebar END --}}
			</aside>
		@endif
		{{-- Sidebar END --}}

		{{-- Main Content --}}
		<main class="w-full px-4 md:w-9/12 lg:w-7/12" id="main">
			@while(have_posts()) @php(the_post())
				<h1>{{ the_title() }}</h1>
				{{-- Content --}}
				<article class="article">{!! the_content() !!}</article>
				{{-- Content END --}}
				
				{{-- Sidebar Bottom --}}
				@if (is_active_sidebar('sidebar-article-bottom'))
				<aside class="w-full mt-8">
					@include('partials.sidebar-article-bottom')
				</aside>
				@endif
				{{-- Sidebar Bottom END --}}

				{{-- Author --}}
				@include('partials.author-info')
				{{-- Author END --}}
			@endwhile
		</main>
		{{-- Main Content END --}}

		<aside class="w-full md:w-3/12 px-4">
			{{-- Content Navigation --}}
			@include('partials.content-nav')
			{{-- Content Navigation END --}}
		</aside>

		</div>
	</div>
</div>
{{-- Container END --}}
@endsection
