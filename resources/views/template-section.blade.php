{{--
	Template Name: Section Overview
--}}

@extends('layouts.app')

@section('content')

<div class="container mx-auto mt4 mb4">
	<div class="clearfix mxn3 mt4">
		<div class="col col-12 sm-col-4 md-col-4 mt2 mb2 px3">
			<h2 class="mb2">{!! get_the_title() !!} - Översikt</h2>
			@while(have_posts()) @php(the_post())
				@php(the_content())
			@endwhile
		</div>
		<div class="col col-12 sm-col-8 md-col-8 mt2 mb2 px3">
			@include('partials.nav-section')
		</div>
	</div>
</div>

@endsection