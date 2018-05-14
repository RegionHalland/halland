{{--
	Template Name: Section Page
--}}

@extends('layouts.app')

@section('subheader')


	<div class="col col-12 mt5 mb3">
		<h1 class="text-white mb0">{!! get_the_title() !!}</h1>
		<header class="mt4">
			<h2 class="text-white mb0 h4">Topplänkar för dig</h2>
			<i class="text-white mb0">Här hittar du de mest populära länkarna</i>
		</header>
		<nav class="background-dark-blue border-radius col col-12 p3 mt2">
			<div class="clearfix mxn2">
			@if($top_links)
				@foreach($top_links as $key => $top_link)
					@if($top_link["external_link_toggle"])
						<div class="col col-12 sm-col-6 md-col-4 px2 my2">
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
						<div class="col col-12 sm-col-6 md-col-4 px2 my2">
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

@section('content')
@while(have_posts()) @php(the_post())



<div class="px2 container mx-auto mb4 mt4">
	<div class="clearfix mxn2">
		<div class="col col-12 sm-col-4 md-col-4 mt2 mb2 px2">
			<h2 class="mb2">Om {!! get_the_title() !!}</h2>
			@php(the_content())
		</div>
		<div class="col col-12 sm-col-8 md-col-8 mt2 mb2 px2">
			@include('partials.nav-section')
		</div>
	</div>
</div>

@endwhile


@endsection
