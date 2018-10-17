@if(isset($breadcrumbs))
	<div class="bg-green-light">
		<div class="container mx-auto">
			<nav class="px-4">
				<ol class="breadcrumbs list-reset" aria-label="Länkstig" itemscope itemtype="http://schema.org/BreadcrumbList">
					@foreach ($breadcrumbs as $breadcrumb)
						<li class="breadcrumbs__item inline-block py-2 sm:py-2 relative" @if ($loop->last) aria-current="page" @endif itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
							@if ($breadcrumb['url'])
								<a class="breadcrumbs__link text-black" href="{{ $breadcrumb['url'] }}">{!! $breadcrumb['name'] !!}</a>
								<span class="inline-block text-grey">
									<svg class="h-4 w-4 align-middle ml-1">
										<use xlink:href="#chevron-right"/>
									</svg>
								</span>
							@else
								<div class="absolute pin-b w-full -mb-1 h-1 bg-green-dark rounded-t"></div>
								<span class="breadcrumbs__span text-black" itemprop="name">{!! $breadcrumb['name'] !!}</span>
							@endif
							<meta itemprop="position" content="{{ $loop->iteration }}">
						</li>
					@endforeach
				</ol>
			</nav>
		</div>
	</div>
@endif
