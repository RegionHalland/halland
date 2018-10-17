@if(isset($breadcrumbs))
	<div class="bg-white border-b-4 border-blue-light">
		<div class="container mx-auto">
			<nav class="px-3">
				<ol class="breadcrumbs list-reset" aria-label="Länkstig" itemscope itemtype="http://schema.org/BreadcrumbList">
					@foreach ($breadcrumbs as $breadcrumb)
						<li class="breadcrumbs__item inline-block py-2 sm:py-3 relative" @if ($loop->last) aria-current="page" @endif itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
							@if ($breadcrumb['url'])
								<a class="breadcrumbs__link text-black" href="{{ $breadcrumb['url'] }}">{!! $breadcrumb['name'] !!}</a>
								<span class="mx-1 inline-block text-grey">></span>
							@else
								<div class="absolute pin-b w-full -mb-1 h-1 bg-blue"></div>
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


{{-- @if(isset($breadcrumbs))
<div class="breadcrumbs-container px3">
	<div class="container mx-auto">
		<div class="clearfix mxn3">
			<nav class="col col-12 px3">
			<ol class="breadcrumbs" aria-label="Länkstig" itemscope itemtype="http://schema.org/BreadcrumbList">
				@foreach ($breadcrumbs as $breadcrumb)
					<li class="breadcrumbs__item" @if ($loop->last) aria-current="page" @endif itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
						@if ($breadcrumb['url'])
							<a class="breadcrumbs__link" href="{{ $breadcrumb['url'] }}">{!! $breadcrumb['name'] !!}</a>
						@else
							<span class="breadcrumbs__span" itemprop="name">{!! $breadcrumb['name'] !!}</span>
						@endif
						<meta itemprop="position" content="{{ $loop->iteration }}" />
					</li>
				@endforeach
			</ol>
			</nav>
		</div>
	</div>
</div>
@endif --}}
