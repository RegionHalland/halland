@if (isset($cookie_notice))
<div id="cookie-notice" class="notice background-dark-blue py2 relative z4">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			<div class="col col-12 px2">
				<div class="notice__text text-white">
					{!! $cookie_notice['message'] !!}
				</div>
				<button id="cookie-consent" class="strong text-white notice__button">
					{!! $cookie_notice['button'] !!}
				</button>
			</div>
		</div>
	</div>
</div>
@endif