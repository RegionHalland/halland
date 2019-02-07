@php 
$link = get_field('link', $blurb->ID)
@endphp
<article class="px-6 py-6 bg-green-light rounded">
    @if(isset($link) && !empty($link))
        <a class="mt-2 inline-block text-black font-sans hover:bg-yellow-light focus:bg-yellow-light" href="{{ $link['url'] }}">
        	<h2 class="mb-4 font-sans">{{ $blurb->post_title }}</h2>
        </a>
    @else
        <h2 class="mb-4 font-sans">{{ $blurb->post_title }}</h2>
    @endif
        <p class="mb-6 font-sans text-lg leading-tight">{{ the_field('excerpt', $blurb->ID) }}</p>
    @if(isset($link) && !empty($link))
        <a target="{{ $link['target'] }}" class="underline hover:bg-yellow-light focus:bg-yellow-light text-black font-sans text-lg" href="{{ $link['url'] }}">{{ $link['title'] }}</a>
   	@endif
</article>