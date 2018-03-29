@extends('layouts.app')

@section('content')
<div class="py4">
	<div class="container mx-auto">
		
		<div class="col col-12 md-col-3 px2">
			@include('partials.nav-sidebar')
			@if (is_active_sidebar('sidebar-left'))
				@include('partials.sidebar-left')
			@endif
		</div>
		

		<div class="col col-12 md-col-6 px2">
			<header>
				<h1 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h1>
			</header>
			
			@while(have_posts()) @php(the_post())
				@include('partials.article')
			@endwhile

			@if (is_active_sidebar('sidebar-bottom'))
				<div class="col col-12">
					@include('partials.sidebar-bottom')
				</div>
			@endif
		</div>

		@if (is_active_sidebar('sidebar-right'))
			<div class="col col-12 md-col-3">
				@include('partials.sidebar-right')
			</div>
		@endif
	</div>
</div>
@endsection
