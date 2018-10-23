@if(isset($breadcrumbs))
<div class="breadcrumbs pr4 pl4 pb0 pt0">
	<div class="pr2 pl2 pb0 pt1">
		<div class="px3">
			<div class="container mx-auto">
				<div class="clearfix mxn3">
					<nav class="col col-12">
					<ol class="breadcrumbs" aria-label="Länkstig" itemscope itemtype="http://schema.org/BreadcrumbList">
						@foreach ($breadcrumbs as $breadcrumb)
							<li class="breadcrumbs__item" @if ($loop->last) aria-current="page" @endif itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
								@if ($breadcrumb['url'])
									<a class="breadcrumbs__link text-white" href="{{ $breadcrumb['url'] }}">{!! $breadcrumb['name'] !!}</a>
								@else
									<span class="breadcrumbs__span text-white" itemprop="name">{!! $breadcrumb['name'] !!}</span>
								@endif
								<meta itemprop="position" content="{{ $loop->iteration }}" />
							</li>
						@endforeach
					</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
@endif
