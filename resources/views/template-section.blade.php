{{--
	Template Name: Section Overview
--}}

@extends('layouts.app')

@section('content')

<!-- **************************** -->
<!-- Content with grey background -->
<!-- **************************** -->
<div class="relative">
	
	<!-- **************************** -->
	<!-- Bredacrumbs & new navigation -->
	<!-- **************************** -->
	<nav aria-label="Huvudnavigation" class="container background-dark-blue relative mx-auto pl5 pr5 pt4 pb4 z1">
			@include('partials.new_breadcrumbs')
			@include('partials.new_nav-section')
	</nav>
	
	<!-- ************ -->
	<!-- Page content -->
	<!-- ************ -->
	<main class="background-white">
		<div class="container mx-auto p4">
			<div class="m4">
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

</div>	
@endsection