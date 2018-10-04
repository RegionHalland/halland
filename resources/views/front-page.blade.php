@extends('layouts.app')
@php($id = uniqid())

@section('content')

			<!-- **************************** -->
			<!-- Content with grey background -->
			<!-- **************************** -->
			<div class="relative">
				
				<!-- **************** -->
				<!-- Background image -->
				<!-- **************** -->
				<!--   Removed for now when we implement only limited functionality
				<div class="absolute z0 col-12 background-grey">
					<img src="img/himmel.jpg" style="width:100%" alt="" />
				</div>
				-->
				<!-- *********************** -->
				<!-- White box with headings -->
				<!-- *********************** -->
				<nav aria-label="Huvudnavigation" class="container background-dark-blue relative mx-auto z1 frontpage_nav">
					<ul class="flex flex-wrap p3 background-white" aria-label="Huvudnavigation">
						@include('partials.new_nav-front')
					</ul>
				</nav>
				
				
			
			<!-- ******************* -->
			<!-- News + editor boxes -->
			<!-- ******************* -->
			<main class="background-white">
				<div class="container mx-auto pl5 pr5 pt4 pb4">
					<div class="ml4">
						<h1 id="223344">Nyheter</h1>
					</div>
					<span class="mt2 ml4 mr2 mb4">
						<svg class="icon-badge icon-badge--sm">
	 						<use xlink:href="#rss"/>
						</svg>
						<a href="" style="text-decoration: underline; vertical-align: middle;">Prenumerera på RSS</a>
					</span>     <!--   Look in current blade file for correct way to fetch link --> 
										
					<!-- **** -->
					<!-- News -->
					<!-- **** -->
					<div class="pt3 m2 flex flex-wrap">
						<div class="col-12 lg-col-5" >
						<ul aria-labelledby="223344">
							@foreach($news as $newsitem)
								<li class="mr4 mb3" style="border-bottom: 1px solid lightgrey">  
									<div class="pl3 mb3" style="border-left: 4px solid #004B93;">
										<div class="mb1"><h2 class="h4"><a href="@php( the_permalink($newsitem) )" style="color: #004B93">{{ $newsitem->post_title }}</a></h2></div>
										<div class="mb2 small">
											@include('partials.new_updated-time', ['post' => $newsitem])
										</div>
										<div class="mb3">
											@if($newsitem->post_excerpt)
												{{ get_the_excerpt($newsitem) }}
											@endif
										</div>
									</div>
								</li>
							@endforeach
							
							<!--
							<a class="small" href="" style="vertical-align: middle; text-decoration: underline;">Gå till nyhetsarkiv</a>
							<object aria-hidden="true" tabindex="-1" class="pl2" type="image/svg+xml" data="img/icon-navlink.svg" style="vertical-align: middle;"></object>
							-->
							
						</div>
						</ul>
						
						<!-- ************ -->
						<!-- Editor boxes -->
						<!-- ************ -->
						<ul class="col-12 lg-col-7 flex flex-wrap" aria-labelledby="223344">
							<li class="col-12 lg-col-6">
								<div class="mb4 ml3 mr3 pt0" style="border-bottom: 4px solid #004B93; box-shadow: 0px 0px 5px #888888;">
									<div class="pb3">
										<!--
										<img src="img/th.jpg" style="width:100%" alt="" />-->
									</div>
									<div class="center pb2">
										<h2 class="h4"><a href="" style="color: #004B93">Lediga jobb</a></h2>
									</div>
									<div class="pb3 pl3 pr3">
										Nullam pulvinar faucibus odio, eget porttitor mauris lobortis in. Aliquam egestas ultrices ligula.
									</div>
								</div>
							</li>
							<li class="col-12 lg-col-6">
								<div class="mb4 ml3 mr3 pt0" style="border-bottom: 4px solid #004B93; box-shadow: 0px 0px 5px #888888;">
									<div class="pb3">
										<!--<img src="img/th.jpg" style="width:100%" alt="" />-->
									</div>
									<div class="center pb2">
										<h2 class="h4"><a href="" style="color: #004B93">Flytta hit</a></h2>
									</div>
									<div class="pb3 pl3 pr3">
										Nullam pulvinar faucibus odio, eget porttitor mauris lobortis in. Aliquam egestas ultrices ligula.
									</div>
								</div>								
							</li>	
							<li class="col-12 lg-col-6">
								<div class="mb4 ml3 mr3 pt0" style="border-bottom: 4px solid #004B93; box-shadow: 0px 0px 5px #888888;">
									<div class="pb3">
										<!--<img src="img/th.jpg" style="width:100%" alt="" />-->
									</div>
									<div class="center pb2">
										<h2 class="h4"><a href="" style="color: #004B93">Ansökan och antagning</a></h2>
									</div>
									<div class="pb3 pl3 pr3">
										Nullam pulvinar faucibus odio, eget porttitor mauris lobortis in. Aliquam egestas ultrices ligula.
									</div>
								</div>
							</li>
							<li class="col-12 lg-col-6">
								<div class="mb4 ml3 mr3 pt0" style="border-bottom: 4px solid #004B93; box-shadow: 0px 0px 5px #888888;">
									<div class="pb3">
										<!--<img src="img/th.jpg" style="width:100%" alt="" />-->
									</div>
									<div class="center pb2">
										<h2 class="h4"><a href="" style="color: #004B93">Nu gör vi det enklare för dig</a></h2>
									</div>
									<div class="pb3 pl3 pr3">
										Nullam pulvinar faucibus odio, eget porttitor mauris lobortis in. Aliquam egestas ultrices ligula. 
									</div>
								</div>								
							</li>
						</ul>
					</div>

				</div>
			</main>

<!--
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
-->
@endsection
