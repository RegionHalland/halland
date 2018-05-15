<?php

namespace App\Traits;

trait Comments
{
	/**
	 * Returns array of comments.
	 * @return array
	 */
	private $comments;

	public function comments_open() {
		return comments_open();
	}

	public function comments()
	{
		global $post;

		$comments = get_comments( array(
			'post_id' => $post->ID,
			'hierarchical' => 'threaded',
			'status' => 'approve',
			'orderby' => 'comment_date',
			'order' => 'ASC',
		));

		foreach($comments as $comment) {
			self::addReplies($comment);
		}

		return $comments;

	}

	/**
	 * Nest replies
	 * @return array
	 */
	private function addReplies($comment) {

			$replies = $comment->get_children(array(
				'hierarchical' => 'threaded',
				'status' => 'approve',
				'orderby' => 'comment_date',
			));

			foreach($replies as $reply) {
				self::addReplies($reply);
			}

			$comment->replies = $replies;
			$comment->comment_author_email_md5 = md5($comment->comment_author_email);
	}
}
