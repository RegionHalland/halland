@extends('layouts.app')

@section('content')
<main id="main">
	<div class="pt-16 md:pt-24 bg-blue-dark mb-12">
		<div class="container mx-auto px-4">
			<div class="w-full mx-auto mb-16">
				<form role="search">
					<label for="search" class="text-white text-xl lg:text-2xl mb-2 block font-bold">Sök på webbplatsen</label>
					<div class="bg-white rounded overflow-hidden relative">
						<input name="s" id="search" placeholder="Sök på webbplatsen" class="text-lg bg-transparent h-12 md:h-16 pin-t px-4 md:px-6 pin-l w-full" type="search">
						<button type="submit" aria-label="Sök" class="bg-yellow flex items-center justify-center absolute pin-r pin-b h-12 w-12 md:h-16 md:w-16">
							<svg class="h-6 w-6">
								<use xlink:href="#search"/>
							</svg>
						</button>
					</div>
				</form>
			</div>
			<ul class="tabs js--tabs">
				<a href="#" data-category="all" class="tab tab--active">
					<li class="tab__item">
						<span>Alla resultat</span>
						<span class="tab__counter">{{ $results["stats"]["all_hits"] }}</span>
					</li>
				</a>
				<a href="#" data-category="std" class="tab">
					<li class="tab__item">
						<span>Styrda dokument</span>
						<span class="tab__counter">{{ $results["stats"]["std_hits"] }}</span>
					</li>
				</a>
				<a href="#" data-category="vgw" class="tab">
					<li class="tab__item">
						<span>Sidor</span>
						<span class="tab__counter">{{ $results["stats"]["vgw_hits"] }}</span>
					</li>
				</a>
			</ul>
		</div>
	</div>


	<div class="container mx-auto px-4">
		<div class="w-full mx-auto">
			<div class="flex flex-wrap -mx-4">
				<div class="w-full md:w-8/12 px-4">
					<header class="relative pb-4 block">
						<h1 class="border-b-2 border-blue-dark inline-block text-2xl font-bold text-black pb-2 z-20 relative leading-none">Dina sökresultat</h1>
						<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-4 border-blue-light z-10">
					</header>
					
					@if ($results["stats"]["all_hits"] == 0)
						<div class="p-4 bg-grey-lightest text-lg rounded mt-4 mb-16">
							{{  __('Din sökning gav tyvärr inga resultat.', 'sage') }}
						</div>
					@endif

					@if ($results["stats"]["all_hits"] > 0)
						<div class="js--search-results">
							@foreach($results["all_documents"] as $result)
								@if($result->category === "vgw")
									@include('partials.content-search-vgw')
								@endif
								@if($result->category === "std")
									@include('partials.content-search-std')
								@endif
							@endforeach
						</div>
					@endif

				</div>
				<div class="w-full md:w-4/12 px-4 hidden md:block">
					
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
