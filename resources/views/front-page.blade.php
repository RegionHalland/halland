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
						<input id="search" placeholder="Sök på webbplatsen" class="text-lg bg-transparent h-12 md:h-16 pin-t px-6 pin-l w-full" type="text">
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

{{-- 
<div class="background-gradient-blue py3 px3">
	<div class="container mx-auto">
		<div class="clearfix mxn3">
			<div class="col col-12 px3 mt4 mb2">
				<h1 class="h2 text-white mb0 inline-block align-middle">{!! get_the_title() !!}</h1>
			</div>
		</div>
	</div>
</div>

<div class="py4 px3">
	<div class="container mx-auto">
		<div class="clearfix mxn3">
			@if (is_active_sidebar('sidebar-left'))
			<div class="col col-12 md-col-3 px3">
				@include('partials.sidebar-left')
			</div>
			@endif

			<main>
				<div class="col col-12 px3 flex justify-between items-baseline">
					<h2 class="flex-auto p0 m0" id="{{ $id }}">Nyheter</h2>
					<a class="mr1 flex-auto right-align" href="{{ bloginfo('rss_url') }}" >
						<svg class="icon-badge icon-badge--md mr1">
							<use xlink:href="#rss"/>
						</svg>Prenumerera på RSS
					</a>
				</div>
				<div class="col col-12 px3 mb3">
					<p>Nyheter och aktuellt för dig som är vårdgivare i Halland</p>
				</div>
				<div class="col col-12 px3">
					<ul class="list list--none" aria-labelledby="{{ $id }}">
						@foreach($news as $newsitem)
							<li class="li--border-bottom">
								<article>
									<header>
										<h3><a href="@php( the_permalink($newsitem) )">{{ $newsitem->post_title }}</a></h3>
										<p>
											@include('partials.updated-time', ['post' => $newsitem])
										</p>
									</header>
									@if($newsitem->post_excerpt)
									<p>{{ get_the_excerpt($newsitem) }}</p>
									@endif
								</article>
							</li>
						@endforeach
					</ul>
				</div>
				@if (is_active_sidebar('sidebar-article-bottom'))
				@include('partials.sidebar-article-bottom')
				@endif
			</main>
			@if (is_active_sidebar('sidebar-right'))
			<div class="col col-12 md-col-3 px3">
				@include('partials.sidebar-right')
			</div>
			@endif
		</div>
	</div>
</div> 
--}}
@endsection
