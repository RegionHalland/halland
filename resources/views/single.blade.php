@extends('layouts.app')

@section('content')
	<div class="py4 px2">
		<div class="container mx-auto">
			<div class="clearfix mxn2">
				@if (is_active_sidebar('sidebar-left'))		
					<div class="col col-12 md-col-3 px2">
						@include('partials.sidebar-left')
					</div>
				@endif

				<main class="col col-12 md-col-9 px2" id="content-nav-container">
				
					@include('partials.content-page')
					
				</main>

				<div class="col col-12 md-col-3 px2">
						@include('partials.sidebar-categories')
						@include('partials.sidebar-tags')
						@include('partials.sidebar-right')
						@include('partials.content-nav')
				</div>
			</div>
		</div>
	</div>

	@include('partials.comments')

@endsection