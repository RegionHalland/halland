@if(isset($page_children))
<nav class="section-nav mxn3">
	@foreach($page_children as $page)
	<div class="section-nav__item col col-12 sm-col-6 md-col-6 px3 mb3">
		<a class="featured-link background-white" href="{{ $page->url }}">
			<h3 class="featured-link__title">
				<span>{{ $page->post_title }}</span>
			</h3>
			<svg class="featured-link__icon icon-badge icon-badge--md">
		 		<use xlink:href="#arrow-right"/>
			</svg>
			{{-- <p class="featured-link__excerpt">
			@if(has_excerpt($page->ID)) 
				{{ $page->acf_excerpt }}
			@else
				{{ \App\trim_excerpt($page->post_content) }}
			@endif
			</p> --}}
		</a>
	</div>
	@endforeach
</nav>
@endif