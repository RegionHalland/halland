@if(isset($pagination))
<div class="pagination-container px3">
	<div class="container mx-auto">
		<div class="clearfix mxn3">
			<nav itemscope itemtype="http://schema.org/SiteNavigationElement">
			<div class="col col-6 md-col-4 px3 d-md-block">
				@if(isset($pagination->previous))
				<a class="mr1" href="{{ $pagination->previous }}" >
					<svg class="icon-badge icon-badge--md">
						<use xlink:href="#arrow-left"/>
					</svg>
						{{ __('Föregående sida', 'halland') }}
				</a>
				@else
					&nbsp;
				@endif

			</div>
			<div class="col col-4 px3 d-print-none d-none d-md-block center">
				{{ __('Sida', 'halland') }}
				<select class="select select--inline select--small"  onchange="if (this.value) window.location.href=this.value">
					@for ($i = 1; $i <= $pagination->total; $i++)
							<option value="{{$pagination->base}}{{$i}}" @if($i == $pagination->current) selected @endif>{!! $i !!}</option>
					@endfor
				</select>
				{{ __('av', 'halland') }}
				{!! $pagination->total !!}
			</div>
			<div class="col col-6 md-col-4 px3 right-align">
				@if(isset($pagination->next))
				<a class="ml1" href="{{ $pagination->next }}" >
					{{ __('Nästa sida', 'halland') }}
					<svg class="icon-badge icon-badge--md">
						<use xlink:href="#arrow-right"/>
					</svg>
				</a>
				@endif
			</div>
		</nav>
		</div>
	</div>
</div>
@endif
