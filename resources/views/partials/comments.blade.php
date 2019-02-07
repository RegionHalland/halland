@if ($comments_open || $comments)
	<div class="container__outer container__outer--alt">
		<div class="container mx-auto">
			@include('partials.comments-list')
			@php(comments_template('/partials/comments-form.blade.php'))
		</div>
	</div>
@endif