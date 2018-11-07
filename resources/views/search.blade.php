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
			<ul class="list-reset inline-flex rounded-tl rounded-tr overflow-scroll w-full md:w-auto whitespace-no-wrap">
				<a href="" class="text-black no-underline whitespace-no-wrap">
					<li class="bg-white text-lg border-t-4 border-yellow hover:bg-grey-light h-16 flex items-center px-4">
						Alla resultat 
						<span class="bg-yellow px-2 h-6 ml-2 inline-flex items-center text-sm justify-center rounded-full">24</span>
					</li>
				</a>
				<a href="" class="text-black no-underline whitespace-no-wrap">
					<li class="bg-grey-lightest text-lg border-t-4 border-grey hover:bg-grey-light  h-16 flex items-center px-4">
						Sidor
						<span class="bg-grey px-2 h-6 ml-2 inline-flex items-center text-sm justify-center rounded-full">16</span>
					</li>
				</a>
				<a href="" class="text-black no-underline whitespace-no-wrap">
					<li class="bg-grey-lightest text-lg border-t-4 border-grey hover:bg-grey-light  h-16 flex items-center px-4">
						Styrda dokument
						<span class="bg-grey px-2 h-6 ml-2 inline-flex items-center text-sm justify-center rounded-full">8</span>
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
					
					@if ($results["hits"] == 0)
						<div class="p-4 bg-grey-lightest text-lg rounded mt-4 mb-16">
							{{  __('Din sökning gav tyvärr inga resultat.', 'sage') }}
						</div>
					@endif
					
					@if ($results["hits"] > 0)
						@foreach($results["documents"] as $result)
							@include('partials.content-search')	
						@endforeach
					@endif

				</div>
				<div class="w-full md:w-4/12 px-4 hidden md:block">
					
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
