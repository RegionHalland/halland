@extends('layouts.app')

@section('content')
<div class="py4 px3">
	<div class="container mx-auto">
		<div class="clearfix mxn3">
			<div class="col col-12 px3">
			@if (!have_posts())
			<div class="alert alert-warning">
				{{ __('Sorry, but the page you were trying to view does not exist.', 'halland') }}
			</div>
			@endif
			</div>
		</div>
	</div>
</div>
@endsection
