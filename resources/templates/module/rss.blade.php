<div>
@if (!$hideTitle && !empty($post_title))
	<header id={!! sanitize_title($post_title) !!} class="relative pb-4 block mb-4">
	<span class="border-b-2 border-blue-dark text-xl font-bold text-black pb-2 z-20 relative leading-none">{!! apply_filters('the_title', $post_title) !!}</span>
		<hr class="absolute pin-b pin-l w-full h-0 border-b-2 mb-1 border-blue-light z-10">
	</header>
    @endif
	<ul class="list-reset mb-8">
	@if(! isset($items['error']))
		@foreach($items as $item)
			<li class="mb-2">
				@if(\Modularity\Module\Rss\Rss::getRssLink($item->get_link()))
					<svg class="h-4 w-4 align-middle mr-1">
						<use xlink:href="#link-2"/>
					</svg>
					<a href="{{ \Modularity\Module\Rss\Rss::getRssLink($item->get_link()) }}" class="text-lg text-blue-dark">
						<span>{{ \Modularity\Module\Rss\Rss::getRssTitle($item->get_title()) }}</span>
						@if($date && $item->get_date('U'))
							<time class="text-sm text-grey-darker">{{ date_i18n(get_option('date_format'), $item->get_date('U')) }}</time>
						@endif
					</a>
				@else
					<span class="title">{{ \Modularity\Module\Rss\Rss::getRssTitle($item->get_title()) }}</span>
					@if($date && $item->get_date('U'))
						<time class="text-sm text-grey-darker">{{ date_i18n(get_option('date_format'), $item->get_date('U')) }}</time>
					@endif
				@endif

				@if($summary && \Modularity\Module\Rss\Rss::getRssSummary($item->get_description()))
					<p>{{ \Modularity\Module\Rss\Rss::getRssSummary($item->get_description()) }}</p>
				@endif

				@if($author && \Modularity\Module\Rss\Rss::getRssAuthor($item->get_author()))
					<p>{{ \Modularity\Module\Rss\Rss::getRssAuthor($item->get_author()) }}</p>
				@endif
			</li>
		@endforeach
	@else
		<li>
			<svg class="h-4 w-4 align-middle mr-1">
				<use xlink:href="#alert-triangle"/>
			</svg>
			{{ $items['error'] }}
		</li>
	@endif
	</ul>
</div>