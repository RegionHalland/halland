@extends('layouts.app')

@section('content')
<div class="py4 px3">
	<div class="container mx-auto">
		<div class="clearfix mxn3">
		@if (!have_posts())
			<div class="alert alert-warning">
				{{ __('Oj, här var det tomt!', 'sage') }}
			</div>
			{!! get_search_form(false) !!}
		@endif

		@if( is_archive() )
			@include('partials.content-archive')
		@else
			@while (have_posts()) @php(the_post())
			@include('partials.content-'.get_post_type())
			@endwhile
		@endif
		</div>
	</div>
</div>
@endsection
