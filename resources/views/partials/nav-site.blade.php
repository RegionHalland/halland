<nav>
	{{-- Top bar --}}
	<div class="w-full border-b border-grey-lighter">
		<div class="container mx-auto py-3 px-4">
			<div class="flex flex-wrap items-center justify-between -mx-4">

				{{-- Logo Container --}}
				<div class="px-4">
					<img class="block w-32 md:w-48" src="@asset('images/navigation_logo.svg')" alt="">
				</div>
				{{-- Logo Container END--}}

				{{-- Right Container --}}
				<div class="flex flex-wrap px-4">
					{{-- Utilities --}}
					<div class="hidden md:flex flex-wrap items-center">
						<a class="flex items-center text-black no-underline mr-4" href="#">
							<span class="inline-flex h-6 w-6 rounded-full bg-blue-light items-center justify-center mr-2">
								<svg class="inline-flex h-4 w-4 align-middle">
									<use xlink:href="#external-link"/>
								</svg>
							</span>Talande Webb
						</a>
						<a class="flex items-center text-black no-underline mr-4" href="#">
							<span class="inline-flex h-6 w-6 rounded-full bg-blue-light items-center justify-center mr-2">
								<svg class="inline-flex h-4 w-4 align-middle">
									<use xlink:href="#external-link"/>
								</svg>
							</span>E-tjänster
						</a>
					</div>
					{{-- Utilities END --}}

					{{-- Search Field --}}
					<form class="flex">
						<input class="border py-3 px-4 rounded" type="search" name="search" placeholder="Sök här">
					</form>
					{{-- Search Field END --}}
				</div>
				{{-- Right Container END --}}
			</div>
		</div>
	</div>
	{{-- Top bar END --}}
	
	{{-- Bottom bar --}}
	@if(isset($top_level_pages) && !empty($top_level_pages))
	<div class="container mx-auto py-4 px-4 overflow-auto">
		<ul class="list-reset flex -mx-4">
			@foreach($top_level_pages as $top_level_page)
			<li class="px-4 flex-no-shrink"><a class="no-underline text-black" href="{{ the_permalink($top_level_page->ID) }}">{{ $top_level_page->post_title }}</a></li>
			@endforeach
		</ul>
	</div>
	@endif
	{{-- Bottom bar END --}}
</nav>