<div class="clearfix">
	<div class="col col-12">
		
		<h2 class="mb3">Kommentarer</h2>
		<ul class="comments">
			@foreach ($comments as $comment) 
				@include('partials.comment', ['comment' => $comment])
			@endforeach
		</ul>
	</div>
</div>
			

{{--
	<h2 class="h2 mb3">
				{!! sprintf(_nx('1 svar till &ldquo;%2$s&rdquo;', '%1$s svar till &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>') !!}
			</h2>
			@if (get_comment_pages_count() > 1 && get_option('page_comments'))
				<nav>
					<ul class="pager">
						@if (get_previous_comments_link())
							<li class="previous">@php(previous_comments_link(__('&larr; Äldre kommentarer', 'sage')))</li>
						@endif
						  
						@if (get_next_comments_link())
							<li class="next">@php(next_comments_link(__('Nyare kommentarer &rarr;', 'sage')))</li>
						@endif
					</ul>
				</nav>
			@endif
			--}}
	  	
					

