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
						@include('partials.new_section-news')
					</div>
				</div>
				<!--
				<span class="ml4">
					<a class="small" href="" style="vertical-align: middle; text-decoration: underline;">Gå till nyhetsarkiv</a>
					<object aria-hidden="true" tabindex="-1" class="pl2" type="image/svg+xml" data="img/icon-navlink.svg" style="vertical-align: middle;"></object>
				</span>
				-->
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