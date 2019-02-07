@if (isset($cookie_notice))
<div id="cookie-notice" class="relative bg-blue-light py-4 z-4">
	<div class="container mx-auto">
		<div class="-mx-4">
			<div class="cookie-notice__container px-4">
				<div class="cookie-notice__text-container block md:inline-flex px-4">
					<svg class="block h-4 w-4 mr-2 align-middle mb-4 md:mb-0">
						<use xlink:href="#info"/>
					</svg>
					<span class="h5">{!! $cookie_notice['message'] !!}</span>
				</div>
				<div class="cookie-notice__btn-container px-4 mt-4 md:mt-0">
					<button id="cookie-consent" class="px-4 py-2 bg-yellow rounded">{!! $cookie_notice['button'] !!}</button>
				</div>
			</div>
		</div>
	</div>
</div>
@endif