@extends('layouts.app')

@section('content')
	<div class="py4 px3">
		<div class="container mx-auto">
			<div class="clearfix mxn3">
				@if (is_active_sidebar('sidebar-left'))
					<div class="col col-12 md-col-3 px3">
						@include('partials.sidebar-left')
					</div>
				@endif

				<main class="col col-12 md-col-9 px3" id="content-nav-container">
					<h1>{{ the_title() }}</h1>
					{{-- @include('partials.content-utility-bar') --}}
					@include('partials.content-page')
				</main>

				<div class="col col-12 md-col-3 px3">
					@include('partials.sidebar-categories')
					@include('partials.sidebar-tags')
					@include('partials.sidebar-right')
					@include('partials.content-nav')

					<a href="<?php echo get_post_type_archive_link('news'); ?>">Arkiv</a>
				</div>
			</div>
		</div>
	</div>

	@include('partials.comments')

@endsection
