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

		$c = get_comments('post_id='.$post->ID);
		
		if(count($c) > 0) {
			$c = json_decode(json_encode($c), true);
			$c = self::prepareComments($c);
		} else {
			$this->comments = NULL;
		}
		
		return $this->comments;
	}

	private function prepareComments($arr) {
	    $temp = array();

	    foreach($arr as $key => $value) {
	    	$arr[$key]['comment_author_email_md5'] = md5($value['comment_author_email']);
	        $groupValue = $value['comment_ID'];
	        $temp[$groupValue] = $arr[$key];
	    }

	    $comments = self::nestComments($temp);


	    return $comments;
	}

	private function nestComments($comments) {

		$replies_on_top_level = 0;

		foreach ($comments as $comment) {

			if($comment['comment_parent'] != 0) {
				$parent = $comment['comment_parent'];
				$comments[$parent]['replies'][] = $comment;
				unset($comments[$comment['comment_ID']]);	
				
				$replies_on_top_level++;
				break;
			}
		}

		if($replies_on_top_level == 0) {
			$this->comments = $comments;
			return $comments;
		} else {
			self::nestComments($comments);
		}
	}
}