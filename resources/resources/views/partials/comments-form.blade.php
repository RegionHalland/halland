<div class="panel">
	<div class="panel__body">
		@if (!comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments'))
	
			{{ __('Kommentarerna är nu stängda.', 'sage') }}
					
		@else
				
			@php(comment_form(array('submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="btn btn--primary" value="%4$s" />')))
						
		@endif
	</div>
</div>