<article class="px-6 py-6 bg-green-light rounded">
	<div class="h-16 w-16 rounded-full flex items-center justify-center bg-green mb-6">
		<svg class="h-8 w-8">
			<use xlink:href="#search"/>
		</svg>
    </div>
    <a class="inline-block text-black font-sans" href="">
    	<h2 class="mb-4 font-sans">{{ $blurb->post_title }}</h2>
    </a>
    <p class="mb-6 font-sans text-lg leading-tight">{{ the_field('excerpt', $blurb->ID) }}</p>
    @php($link = get_field('link', $blurb->ID))
    <a target="{{ $link['target'] }}" class="underline text-black font-sans text-lg" href="{{ $link['url'] }}">{{ $link['title'] }}</a>
</article>