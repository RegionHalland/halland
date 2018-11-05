
<article class="py-4 border-b border-grey-lightest">
	<a href="http://google.com" title="" class="text-blue-dark mb-2 inline-block">
		<h2 class="text-xl sm:text-2xl leading-tight">{{ $result->_id }}</h2>
	</a>

	<span class="text-base block text-grey-darkest mb-4">Publicerad: <time itemprop="datePublished" datetime="{{ get_the_date('d/m/Y', get_the_id()) }}">{{ get_the_date('d/m/Y', get_the_id()) }}</time></span>
	<p class="text-lg text-grey-darkest leading-tight mb-4">Utdrag</p>

</article>

