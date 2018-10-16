@php($blurbs = get_field('blurbs'))

@if(isset($blurbs) && !empty($blurbs))
	@foreach ($blurbs as $blurb)
	<div class="mb-4">
		@include('partials.blurb')
	</div>
	@endforeach
@endif