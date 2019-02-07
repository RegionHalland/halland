<li>
	<article>
		<footer class="flex justify-between items-center clearfix">
			<div class="flex-auto">

				<div class="flex items-center justify-start">

					<div class="">
						<img src="https://www.gravatar.com/avatar/{{ $comment->comment_author_email_md5 }}?s=96" width="48px" height="48px" alt="" class="avatar">
					</div>

					<div class="ml2">
						<p class="light small">
							{{$comment->comment_date}}
						</p>
						<a href="mailto:{{ $comment->comment_author_email }}">{{ $comment->comment_author }}</a> skrev:
					</div>

				</div>

			</div>

			<div class="flex-auto right-align">

				<a href="@php(get_permalink())?replytocom={{ $comment->comment_ID }}#respond" class="btn btn--outline btn--small">Svara</a>
			</div>

		</footer>
		<div class="comment-body">
			{{ $comment->comment_content }}
		</div>

	</article>



@if (isset($comment->replies))
    <ul>
   	@foreach($comment->replies as $reply)
        @include('partials.comment', ['comment' => $reply])
    @endforeach
    </ul>
@endif
</li>
