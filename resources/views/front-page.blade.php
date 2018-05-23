@extends('layouts.app')

@section('content')
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

			<main class="col col-12 px3">
				<article class="article">
					<div class="clearfix flex justify-between items-baseline">
						<h2 class="flex-auto p0 m0">Nyheter</h2>
						<div class="mr1 flex-auto right-align">
							<a href="{{ get_bloginfo_rss() }}" >
								<svg class="icon-badge icon-badge--md">
							 		<use xlink:href="#rss"/>
								</svg> Prenumerera på RSS
							</a>
						</div>
					</div>
					<p>Nyheter och aktuellt för dig som är vårdgivare i Halland</p>
					</article>
					<ul class="list list--none">
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
@endsection
