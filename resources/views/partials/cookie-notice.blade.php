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