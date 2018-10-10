@extends('layouts.app')
@php($id = uniqid())
@section('content')

<div class="bg-blue-light pt-16 pb-8">
	<div class="container mx-auto px-4">
		<div class="flex flex-wrap items-stretch -mx-4">
			<div class="w-full sm:w-6/12 lg:w-4/12 px-4 mb-8">
				<h3 class="mb-2">Medicinska områden</h3>
				<p class="leading-normal">This page includes läkemedel, analysförteckning and something else.</p>
			</div>
			<div class="w-full sm:w-6/12 lg:w-4/12 px-4 mb-8">
				<h3 class="mb-2">Service & IT</h3>
				<p class="leading-normal">This page includes läkemedel, analysförteckning and something else.</p>
			</div>
			<div class="w-full sm:w-6/12 lg:w-4/12 px-4 mb-8">
				<h3 class="mb-2">Medicinska områden</h3>
				<p class="leading-normal">This page includes läkemedel, analysförteckning and something else.</p>
			</div>
			<div class="w-full sm:w-6/12 lg:w-4/12 px-4 mb-8">
				<h3 class="mb-2">Service & IT</h3>
				<p class="leading-normal">This page includes läkemedel, analysförteckning and something else.</p>
			</div>
			<div class="w-full sm:w-6/12 lg:w-4/12 px-4 mb-8">
				<h3 class="mb-2">Medicinska områden</h3>
				<p class="leading-normal">This page includes läkemedel, analysförteckning and something else.</p>
			</div>
			<div class="w-full sm:w-6/12 lg:w-4/12 px-4 mb-8">
				<h3 class="mb-2">Service & IT</h3>
				<p class="leading-normal">This page includes läkemedel, analysförteckning and something else.</p>
			</div>
		</div>
	</div>
</div>

<div class="pt-16 pb-8">
	<div class="container mx-auto px-4">
		<div class="-mx-4">
			
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
