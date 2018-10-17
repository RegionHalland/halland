@php($blurbs = get_field('blurbs', $post->ID))

@if(isset($blurbs) && !empty($blurbs))
	@foreach ($blurbs as $blurb)
	<div class="mb-4">
		@include('partials.blurb')
	</div>
	@endforeach
@endif