{{-- @if (isset($cookie_notice))
<div id="cookie-notice" class="notice py2 relative z4 background-light-blue">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			<div class="col col-12 px3">
				<div class="cookie-notice__column cookie-notice__column-left">
					&#9432;
				</div>
				<div class="notice__text cookie-notice__text cookie-notice__column cookie-notice__column-center">
					{!! $cookie_notice['message'] !!}
				</div>
				<div class="cookie-notice__column cookie-notice__column-right">
					<button id="cookie-consent" class="strong background-dark-blue text-white notice__button cookie-notice__button">
						{!! $cookie_notice['button'] !!}
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endif --}}

@if (isset($cookie_notice))
<div id="cookie-notice" class="relative background-light-blue p3 z4">
	<div class="container mx-auto">
		<div class="clearfix mxn3">
			<div class="cookie-notice__container">
				<div class="cookie-notice__text-container px3">
					<svg class="icon mr1">
						<use xlink:href="#info"/>
					</svg>
					<span class="h5">{!! $cookie_notice['message'] !!}</span>
				</div>
				<div class="cookie-notice__btn-container px3">
					<button id="cookie-consent" class="btn btn-primary">{!! $cookie_notice['button'] !!}</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endif