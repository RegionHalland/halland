@php($link = get_field('link', $blurb->ID))
<article class="px-6 py-6 bg-green-light rounded">
    <a class="mt-2 inline-block text-black font-sans" href="{{ $link['url'] }}">
    	<h2 class="mb-4 font-sans">{{ $blurb->post_title }}</h2>
    </a>
    <p class="mb-6 font-sans text-lg leading-tight">{{ the_field('excerpt', $blurb->ID) }}</p>
    <a target="{{ $link['target'] }}" class="underline text-black font-sans text-lg" href="{{ $link['url'] }}">{{ $link['title'] }}</a>
</article>