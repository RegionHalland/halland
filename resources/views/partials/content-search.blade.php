
<article class="py-4 border-b border-grey-lightest">
	<a href="{{ isset($result->url) ? $result->url : ''  }}" title="" class="text-blue-dark mb-2 inline-block hover:bg-yellow-light focus:bg-yellow-light">
		<h2 class="text-xl sm:text-2xl leading-tight">{{ isset($result->title) ? $result->title : '' }}</h2>
	</a>
	
	@php
	// Show only date, not time.
	$published = isset($result->created) ? preg_replace('#\ .*#', '', $result->created) : ''; 
	@endphp

	<span class="text-base block text-grey-darkest mb-4">Publicerad: <time itemprop="datePublished" datetime="{{ $published }}">{{ $published }}</time></span>
	<p class="text-lg text-grey-darkest leading-tight mb-4">{{ isset($result->content) ? \App\trim_excerpt($result->content) : '' }}</p>
</article>

