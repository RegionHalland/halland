@if(isset($pagination))
<div class="pagination-container px2">
	<div class="container mx-auto">
		<div class="clearfix mxn2">
			<div class="col col-12 px2">
			<ol class="pagination clearfix flex justify-between items-baseline" itemscope itemtype="http://schema.org/SiteNavigationElement">
				@if(isset($pagination->previous_link))
					<li class="flex-auto left-align">
						<a class="mr1" href="{{ $pagination->previous_link }}" >
							<svg class="icon-badge icon-badge--md">
								<use xlink:href="#arrow-left"/>
							</svg>
							{!! $pagination->previous_label !!}
						</a>
					</li>
				@endif
				<li class="flex-auto center">
					<ol class="list list--inline">
						@foreach ($pagination->pages as $page)
							<li>{!! $page !!}</li>
						@endforeach
					</ol>

				</li>
				@if(isset($pagination->next_link))
					<li class="flex-auto right-align">
						<a class="ml1" href="{{ $pagination->next_link }}" >
							{!! $pagination->next_label !!}
							<svg class="icon-badge icon-badge--md">
								<use xlink:href="#arrow-right"/>
							</svg>
						</a>
					</li>
				@endif
			</ol>
			</div>
		</div>
	</div>
</div>
@endif
