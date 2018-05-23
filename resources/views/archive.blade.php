@extends('layouts.app')

@section('subheader')
<div class="col col-12 mt4 mb2 px3">
	<h1 class="h2 text-white mb0 inline-block align-middle">
		{!! get_the_archive_title() !!}
	</h1>
</div>
@endsection

@section('content')
<div class="px3">
	<div class="container mx-auto">
		<div class="clearfix mxn3 py4">
		@if (!have_posts())
			<div class="alert alert-warning">
				{{ __('Oj, här var det tomt!', 'halland') }}
			</div>
			{!! get_search_form(false) !!}
		@endif
		<div class="col col-12 px3">
			@include('partials.content-archive')
		</div>
		</div>
	</div>
</div>
@endsection
