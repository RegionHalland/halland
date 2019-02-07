
<article class="search-item py-4 border-b border-grey-lightest" data-collection="{{ $result->collection }}">
	<a href="{{ isset($result->url) ? $result->url : ''  }}" target="_blank" title="" class="text-blue-dark mb-2 inline-block hover:bg-yellow-light focus:bg-yellow-light">
		<h2 class="text-xl sm:text-2xl leading-tight">{{ isset($result->title) ? $result->title : '' }}</h2>
	</a>
	<span class="text-base block text-grey-darkest mb-3">
		<span class="inline-block">
			<svg class="inline-flex h-4 w-4 align-top text-grey-darkest">
				<use xlink:href="#file-text"/>
			</svg>
			<span class="no-underline text-grey-darkest">Dokument</span>
		</span>
	</span>
</article>

