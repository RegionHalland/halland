@if(isset($breadcrumbs))
<div class="breadcrumbs-container px3">
	<div class="container mx-auto">
		<div class="clearfix mxn3">
			<nav class="col col-12 px3">
			<ol class="breadcrumbs" aria-label="Länkstig" itemscope itemtype="http://schema.org/BreadcrumbList">
				@foreach ($breadcrumbs as $breadcrumb)
					<li class="breadcrumbs__item @if ($loop->last) active @endif" @if ($loop->last) aria-current="page" @endif itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
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
@endif
