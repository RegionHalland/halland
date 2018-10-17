{{--
	Template Name: Section Page
--}}

@extends('layouts.app')

@section('content')


<div class="pt-16 relative bg-blue-dark">
	<div class="container mx-auto px-4 relative">
		<div class="w-full md:w-11/12 mx-auto">
			<h1 class="mb-4 text-white">{!! get_the_title() !!}</h1>
			@while(have_posts()) @php(the_post())
				<div class="text-lg leading-tight md:text-xl mb-12 text-blue-light lg:w-5/12">
					@php(the_content())
				</div>
			@endwhile
			@include('partials.page-toolbar')
		</div>
	</div>
</div>


<div class="bg-white pt-12 pb-8">
	<div class="container mx-auto px-4">
		<div class="w-full md:w-11/12 mx-auto">
			<div class="flex flex-wrap -mx-4">
				<div class="w-full lg:w-8/12 px-4">
					@include('partials.section-navigation')
				</div>
				<div class="w-full lg:w-4/12 px-4 mt-12 lg:mt-0">
					@include('partials.top-links')
				</div>
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
					<article>
						<a href="" title="" class="text-blue-dark mb-2 inline-block">
							<h2 class="text-xl sm:text-2xl leading-tight">Syn, hörsel och DAKO igång med webbtidbok</h2>
						</a>
						<span class="text-base block text-grey-dark mb-4">Publicerad : 27/10/2019</span>
						<p class="text-lg text-grey-darkest leading-tight mb-4">Webbtidbokning innebär att en patient kan sköta sina bokningar genom att logga in via www.1177.se. Inne i tjänsten guidas patienten bland annat till att välja rätt typ av besök.</p>
						<a href="#" class="px-2 mr-2 mb-2 py-1 text-sm no-underline hover:underline text-black bg-grey-lightest rounded-full inline-block">Kategori</a>
						<a href="#" class="px-2 mr-2 mb-2 py-1 text-sm no-underline hover:underline text-black bg-grey-lightest rounded-full inline-block">Läkemedel</a>
						<a href="#" class="px-2 mr-2 mb-2 py-1 text-sm no-underline hover:underline text-black bg-grey-lightest rounded-full inline-block">Behandlingsstöd</a>
					</article>
				</div>
				<div class="w-full lg:w-6/12 px-4 mb-8">
					@include('partials.blurb-list')
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
