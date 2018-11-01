@php($footerContent = get_field('footer_content', 'options'))
@if(isset($footerContent) && !empty($footerContent))
<footer class="bg-grey-lightest pt-16 border-t border-grey-lighter mt-8">
	<div class="container mx-auto px-4 mt-8 mb-12">
		<div class="w-full mx-auto">
			<div class="w-full flex flex-wrap items-stretch -mx-4">
				@foreach($footerContent as $column)
				@if(isset($column) && !empty($column))
				<div class="w-full md:w-6/12 lg:w-4/12 px-4 mb-12">
					<div class="relative pb-4 block mb-4">
						<span class="border-b-2 border-blue-dark text-xl md:text-2xl font-bold text-black pb-2 z-20 relative leading-none">{{ $column['title'] }}</span>
						<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
					</div>
					<ul class="list-reset">
						@if(isset($column['list']) && !empty($column['list'])) 
							@foreach($column['list'] as $item)
								<li class="mb-2">
									<a class="text-black text-lg hover:opacity-75" href="{{ $item['link']['url'] }}">{{ $item['link']['title'] }}</a>
								</li>
							@endforeach
						@endif
					</ul>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
	<div class="py-4 bg-grey-lightest border-t border-grey-lighter">
		<div class="container mx-auto px-4">Copyright © Region Halland</div>
	</div>
</footer>
@endif
@php(wp_footer())