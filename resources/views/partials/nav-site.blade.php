<nav class="" aria-label="Huvudmeny">
	{{-- Top bar --}}
	<div class="w-full border-b border-grey-lighter bg-white relative z-50">
		<div class="container mx-auto py-3 px-4">
			<div class="flex flex-wrap items-center justify-between -mx-4">

				{{-- Logo Container --}}
				<a class="px-4" title="Gå till startsida" aria-label="Gå till startsida" href="{{ esc_url( home_url( '/' ) ) }}">
					<img class="block w-40" alt="Region Halland - Vårdgivarwebben" src="@asset('images/navigation_logo.svg')" alt="">
				</a>
				{{-- Logo Container END--}}

				{{-- Right Container --}}
				<div class="flex flex-wrap px-4">
					
					{{-- Utilities --}}
					<div class="hidden md:flex flex-wrap items-center">

						<a class="flex items-center text-black no-underline hover:underline focus:underline mr-6" id="" onclick="toggleBar();" href="#">
							<span class="inline-flex h-8 w-8 rounded-full bg-green-light items-center justify-center mr-2">
								<svg class="inline-flex h-4 w-4 align-middle">
									<use xlink:href="#volume-2"/>
								</svg>
							</span>Talande Webb
						</a>
						<a class="flex items-center text-black no-underline hover:underline focus:underline mr-6" target="_blank" href="https://etjanster.intra.regionhalland.se/">
							<span class="inline-flex h-8 w-8 rounded-full bg-green-light items-center justify-center mr-2">
								<svg class="inline-flex h-4 w-4 align-middle">
									<use xlink:href="#user"/>
								</svg>
							</span>E-tjänster
						</a>

					</div>
					{{-- Utilities END --}}


					{{-- Search Field --}}
					<form action="{{ home_url() }}" role="search">
						<div class="bg-grey-lighter rounded-full lg:rounded lg:w-64 overflow-hidden flex rounded relative">
							<label for="main-search" class="visually-hidden">Sök: </label>
							<input name="s" id="main-search" aria-label="Sök på webbplatsen" placeholder="Sök på webbplatsen" class="hidden lg:inline-block text-base bg-transparent h-12 pin-t px-4 pin-l w-full" type="search">
							<button type="submit" aria-label="Sök" class="bg-yellow flex items-center justify-center block lg:absolute pin-r pin-b h-8 w-8 md:h-12 md:w-12">
								<svg class="h-4 w-4 md:h-6 md:w-6" title="Sök">
									<use xlink:href="#search"/>
								</svg>
							</button>
						</div>
					</form>
					{{-- Search Field END --}}

					{{-- Mobile Menu Button --}}
					<button type="submit" class="js-site-nav--toggle bg-yellow flex rounded-full ml-2 items-center justify-center block md:hidden pin-r pin-b h-8 w-8 md:h-12 md:w-12">
						<svg class="h-4 w-4 md:h-6 md:w-6" title="Meny">
							<use xlink:href="#menu"/>
						</svg>
					</button>
					{{-- Mobile Menu Button END --}}

				</div>
				{{-- Right Container END --}}
			</div>
		</div>
	</div>
	{{-- Top bar END --}}
	
	{{-- Mobile Menu Drawer --}}
	<nav class="js-site-nav hidden md:hidden w-full pin-t pin-l bg-white z-40">
		@include('partials.nav-mobile')
	</nav>
	{{-- Mobile Menu Drawer END --}}

	{{-- Bottom bar --}}
	@if(isset($top_level_pages) && !empty($top_level_pages))
	<div class="hidden md:block container mx-auto px-4 overflow-auto scrolling-touch">
		<ul class="list-reset flex flex-wrap -mx-4">
			@foreach($top_level_pages as $top_level_page)
				<li class="flex-no-shrink px-4">

					@if($top_level_page->active === true)
						<a class="no-underline hover:underline focus:underline text-black font-bold py-4 inline-block relative" href="{{ the_permalink($top_level_page->ID) }}">{{ $top_level_page->post_title }}
							 <div class="absolute pin-b pin-l w-full h-1 rounded-t bg-blue-dark"></div>
						</a>
					@else
						<a class="no-underline hover:underline focus:underline text-black font-bold py-4 inline-block" href="{{ the_permalink($top_level_page->ID) }}">{{ $top_level_page->post_title }}</a>
					@endif
				</li>
			@endforeach
		</ul>
	</div>
	@endif
	{{-- Bottom bar END --}}
</nav>