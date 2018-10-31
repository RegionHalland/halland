@extends('layouts.app')

@section('content')
<div class="py-12 -mx-4">
	<div class="container mx-auto px-4">
		@if (!have_posts())
			<h1 class="mb-4">{{ __('Sidan du söker efter verkar inte finnas.', 'halland') }}</h1>
			<p class="text-lg mb-4">Nedan hittar du några av våra mest populära länkar</p>
			@php
				$frontpage_id = get_option('page_on_front');
				$popular_links = get_field('popular_links', $frontpage_id);
			@endphp
			@if(isset($popular_links) && !empty($popular_links))
				<ol class="list-reset bg-white relative">
					@foreach($popular_links as $link)
					<li class="py-4 border-b border-grey-lightest bg-white">
						<svg class="h-4 w-4 align-middle mr-1">
							<use xlink:href="#link-2"/>
						</svg>
						<a class="text-black" href="{{ $link['link']['url'] }}">{{ $link['link']['title'] }}</a>
					</li>
					@endforeach
				</ol>
			@endif
		@endif
	</div>
</div>
@endsection
