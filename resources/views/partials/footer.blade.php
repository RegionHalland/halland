@php($footerContent = get_field('footer_content', 'options'))
@if(isset($footerContent) && !empty($footerContent))
<footer class="bg-grey-lightest pb-8 pt-16">
	<div class="container mx-auto px-4">
		<div class="w-full md:w-11/12 mx-auto">
			<div class="w-full flex flex-wrap items-stretch -mx-4">
				@foreach($footerContent as $column)
				@if(isset($column) && !empty($column))
				<div class="w-full md:w-6/12 lg:w-4/12 px-4 mb-8">
					<h5 class="text-xl mb-4">{{ $column['title'] }}</h5>
					<ul class="list-reset">
						@foreach($column['list'] as $item)
						<li><a href="{{ $item['link']['url'] }}">{{ $item['link']['title'] }}</a></li>
						@endforeach
					</ul>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
</footer>
@endif
@php(wp_footer())
