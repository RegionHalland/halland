@extends('layouts.app')

@section('content')


	<div class="py-16 md:py-24 bg-blue-dark mb-12">


		<div class="container mx-auto px-4">
			<div class="w-full md:w-11/12 mx-auto">
				<h1 class="text-white text-xl lg:text-2xl mb-2">Sök på webbplatsen</h1>
				<form>
					<div role="search" class="bg-white rounded overflow-hidden relative">
						<input name="s" id="search" placeholder="Sök på webbplatsen" class="text-lg bg-transparent h-12 md:h-16 pin-t px-6 pin-l w-full" type="text">
						<button type="submit" class="bg-yellow flex items-center justify-center absolute pin-r pin-b h-12 w-12 md:h-16 md:w-16">
							<svg class="h-6 w-6">
								<use xlink:href="#search"/>
							</svg>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div class="container mx-auto px-4">
		<div class="w-full md:w-11/12 mx-auto">
			<div class="flex flex-wrap -mx-4">
				<div class="w-full md:w-8/12 px-4">
					<header class="relative pb-4 block">
						<span class="border-b-2 border-blue-dark text-2xl font-bold text-black pb-2 z-20 relative leading-none">Dina sökresultat</span>
						<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
					</header>
					@if (!have_posts())
						<div class="p-4 bg-grey-lightest text-lg rounded mt-4">
							{{  __('Din sökning gav tyvärr inga resultat.', 'sage') }}
						</div>
					@endif
					@while(have_posts()) @php(the_post())
						@include('partials.content-search')
					@endwhile
				</div>
				<div class="w-full md:w-4/12 px-4">
					<header class="relative pb-4 block mb-8">
						<span class="border-b-2 border-yellow text-2xl font-bold text-black pb-2 z-20 relative leading-none">Populära sökningar</span>
						<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-yellow-light z-10">
					</header>
				</div>
			</div>
		</div>
	</div>

@endsection
