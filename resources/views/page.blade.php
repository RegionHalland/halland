@extends('layouts.app')

@section('subheader')

				<div class="col col-12 mt4 mb2">
					@if ( $post->post_parent )
					<a class="mr1" href="{{ get_permalink( $post->post_parent ) }}" >
						<svg class="icon-badge icon-badge--md">
					 		<use xlink:href="#arrow-left"/>
						</svg>
					</a>
					@endif
					<h1 class="h2 text-white mb0 inline-block align-middle">
						{!! get_the_title() !!}
					</h1>
				</div>

@endsection


@section('content')



<div class="px2">
	<div class="container mx-auto mt3">
		<div class="clearfix mxn2 flex flex-wrap content-stretch">
			<div class="col col-12 md-col-3 px2">
				@include('partials.nav-sidebar')
				@if (is_active_sidebar('sidebar-left'))
				@include('partials.sidebar-left')
				@endif
			</div>

			<main id="main" class="col col-12 md-col-6 px2">
				@include('partials.content-page')

				@if (is_active_sidebar('sidebar-bottom'))
				<div class="col col-12">
					@include('partials.sidebar-bottom')
				</div>
				@endif
			</main>


			<div class="col col-12 md-col-3 px2 flex">
				@if (is_active_sidebar('sidebar-right'))
					@include('partials.sidebar-right')
				@endif

				@include('partials.content-nav')
			</div>

		</div>
	</div>
</div>

@if (have_comments() || comments_open())
@include('partials.comments')
@endif

@endsection
