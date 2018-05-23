@if (isset($notices) && !empty($notices))
@foreach ($notices as $notice)
<div class="notice">
	<div class="container mx-auto">
		<div class="clearfix mxn3">
			<div class="col col-12 px3">
				<div class="notice__text">
					<svg class="icon mr2">
						<use href="#bell">
					</svg>
					<div class="notice__text inline-block">
						{!! $notice['notice_message'] !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endforeach
@endif