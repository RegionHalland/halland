{{--
	Template Name: Section Page
--}}


@extends('layouts.app')

@section('content')
	
	<!-- **************************** -->
	<!-- Content with grey background -->
	<!-- **************************** -->
	<div class="relative">
		<nav aria-label="Huvudnavigation" class="container background-dark-blue relative mx-auto pl5 pr5 pt0 pb4 z1">
			@include('partials.new_breadcrumbs')
			@include('partials.new_nav-section')
		</nav>
	</div>	
		
	<!-- ********** -->
	<!-- Quick find -->
	<!-- ********** -->
	<nav aria-labelledby="690690" class="" style="background-color: #F0F6FB">
		<div class="container mx-auto pl4 pr4 pb1 pt2">
			<div class="m4">
				
				<div class="pb2 pl4 ml4">
					<h1 class="h2" id="690690">Hitta snabbt</h1>
				</div>

				<div class="container mx-auto pl5 pr5 pb3 pt0">
					<div class="flex flex-wrap">
						@if($top_links)
							@foreach($top_links as $key => $top_link)
								@if($top_link["external_link_toggle"])
									<div class="col-12 lg-col-4 p2">
										<a class="featured-link featured-link--external background-white" href="{{ $top_link["external_link"]["link"] }}" style="color: black; font-weight: bold;">
											<div style="max-width: 90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $top_link["external_link"]["link_label"] ? $top_link["external_link"]["link_label"] : $top_link["external_link"]["link"]}}</div>
											<svg class="icon-badge featured-link__icon icon-badge--md">
												<use xlink:href="#external-link"/>
											</svg>
										</a>
									</div>
								@else
									<div class="col-12 lg-col-4 p2">
										<a class="featured-link background-white" href="{{ get_permalink($top_link["internal_link"]["link"][0]->ID) }}" style="color: black; font-weight: bold;">
											<div style="max-width: 90%; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $top_link["internal_link"]["link_label"] ? $top_link["internal_link"]["link_label"] : $top_link["internal_link"]["link"][0]->post_title }}</div>
											<svg class="featured-link__icon icon-badge icon-badge--md">
												<use xlink:href="#arrow-right"/>
											</svg>
										</a>
									</div>
								@endif
							@endforeach
						@endif
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- **** -->
	<!-- News (Must be fixed) -->
	<!-- **** -->
	<div class="background-white">
		<div class="container mx-auto pl4 pr4 pb1 pt2">
			<div class="m4">
				<div class="pb3 ml3">
					<h1 class="h2">Nyheter Läkemedel</h1>
				</div>
				<div class="container mx-auto">
					<div class="flex flex-wrap">
						{{-- Loop här --}}
						@php(var_dump($news_by_category))
						{{-- Loop här --}}
						<div class="col-12 lg-col-4">
							<div class="pb3 pl3 pr3 pt0">
								<div class="pb2">
									<h2 class="h4"><a href="">Truxal tablett med högre pris</a></h2 class="h3">
								</div>
								<div class="mb2 small">
									<time datetime="2018-08-12">12:e augusti 2018</time>
								</div>
								<div class="pb3">
									Nullam pulvinar faucibus odio, eget porttitor mauris lobortis in. Aliquam egestas ultrices ligula.
								</div>

							</div>
						</div>
						<div class="col-12 lg-col-4">
							<div class="pb3 pl3 pr3 pt0">
								<div class="pb3">
									<h2 class="h4"><a href="">Nya statliga medincinlistor</a></h2>
								</div>
								<div class="mb2 small">
									<time datetime="2018-08-12">12:e augusti 2018</time>
								</div>
								<div class="pb3">
									Nullam pulvinar faucibus odio, eget porttitor mauris lobortis in. Aliquam egestas ultrices ligula.
								</div>
							</div>
						</div>
						<div class="col-12 lg-col-4">
							<div class="pb3 pl3 pr3 pt0">
								<div class="pb2">
									<h2 class="h4"><a href="">Psykosociala resurser i centrum</a></h2>
								</div>
								<div class="mb2 small">
									<time datetime="2018-08-12">12:e augusti 2018</time>
								</div>
								<div class="pb3">
									Nullam pulvinar faucibus odio, eget porttitor mauris lobortis in. Aliquam egestas ultrices ligula.
								</div>

							</div>
						</div>
					</div>
				</div>
				<span class="ml4">
					<a class="small" href="" style="vertical-align: middle; text-decoration: underline;">Gå till nyhetsarkiv</a>
					<object aria-hidden="true" tabindex="-1" class="pl2" type="image/svg+xml" data="img/icon-navlink.svg" style="vertical-align: middle;"></object>
				</span>
			</div>
		</div>
	</div>

	<!-- ************ -->
	<!-- Page content -->
	<!-- ************ -->
	<main class="" style="background-color: #F0F6FB">
		<div class="container mx-auto pt3 pb4 pl4 pr4">
			<div class="m5">
				@while(have_posts()) @php(the_post())
					<div class="pb3">
						<h2>{!! get_the_title() !!}</h2>
					</div>
					<div class="mr6">
						<article>
							@php(the_content())
						</article>
					</div>
					@include('partials.new_entry-meta')
				@endwhile
			</div>	
		</div>	
	</main>

@endsection

<!--
@section('subheader')
rollo2
<div class="col col-12 mt5 mb3">
	<h1 class="text-white mb0">{!! get_the_title() !!}</h1>
	<header class="mt4">
		<h2 class="text-white mb0 h4">Topplänkar för dig</h2>
		<i class="text-white mb0">Här hittar du de mest populära länkarna</i>
	</header>
	<nav class="background-dark-blue border-radius col col-12 p3 mt2">
		<div class="clearfix mxn3">
		@if($top_links)
			@foreach($top_links as $key => $top_link)
				@if($top_link["external_link_toggle"])
					<div class="col col-12 sm-col-6 md-col-4 px3 my2">
						<a class="featured-link featured-link--external background-white" href="{{ $top_link["external_link"]["link"] }}">
							<h3 class="featured-link__title">
								<span>{{ $top_link["external_link"]["link_label"] ? $top_link["external_link"]["link_label"] : $top_link["external_link"]["link"]}}</span>
							</h3>
							<svg class="icon-badge featured-link__icon icon-badge--md">
								<use xlink:href="#external-link"/>
							</svg>
						</a>
					</div>
				@else
					<div class="col col-12 sm-col-6 md-col-4 px3 my2">
						<a class="featured-link background-white" href="{{ get_permalink($top_link["internal_link"]["link"][0]->ID) }}">
							<h3 class="featured-link__title">
								<span>{{ $top_link["internal_link"]["link_label"] ? $top_link["internal_link"]["link_label"] : $top_link["internal_link"]["link"][0]->post_title }}</span>
							</h3>
							<svg class="featured-link__icon icon-badge icon-badge--md">
								<use xlink:href="#arrow-right"/>
							</svg>
						</a>
					</div>
				@endif
			@endforeach
		@endif
		</div>
	</nav>
</div>
@endsection
-->

<!--
@section('content')
	@while(have_posts()) @php(the_post())
	<div class="px3 container mx-auto mb4 mt4">
		<div class="clearfix mxn3">
			<div class="col col-12 sm-col-4 md-col-4 mt2 mb2 px3">
				<h2 class="mb2">Om {!! get_the_title() !!}</h2>
				@php(the_content())
			</div>
			<div class="col col-12 sm-col-8 md-col-8 mt2 mb2 px3">
				@include('partials.nav-section')
			</div>
		</div>
	</div>
	@endwhile

@endsection
-->