<div class="clearfix">

	@include('partials.updated-time', ['post' => $post])

	{{--
	<span class="right light small">
		{{ __('Innehållsansvarig', 'sage') }}: 
		<a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn">
			{{ get_the_author() }}
		</a>
	</span>
	--}}
</div>