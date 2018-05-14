@extends('layouts.app')

@section('subheader')

				<div class="col col-12 mt4 mb2">

					<h1 class="h2 text-white mb0 inline-block align-middle">
						{!! get_the_archive_title() !!}
					</h1>
				</div>

@endsection


@section('content')

		<div class="container mx-auto">
			<div class="clearfix py4 px2">
				@if (!have_posts())
					<div class="alert alert-warning">
						{{ __('Oj, här var det tomt!', 'sage') }}
					</div>
					{!! get_search_form(false) !!}
				@endif


				@include('partials.content-archive')

			</div>
		</div>

@endsection
