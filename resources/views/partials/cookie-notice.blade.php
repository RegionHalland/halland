@if (isset($cookie_notice))
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
@endif
