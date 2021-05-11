<?php
class Comment {
/*
Function used to create a comment on a post
*/
	
public static function create($commentBody, $postId){
			$userId = User::isLoggedIn();	
	
			//check if the comment body length is greater than 160 and also less than one
			if (strlen($commentBody) > 180 || strlen($commentBody) < 1){
				die('incorrect length!');
			}
			
			if(!DatabaseConnector::query('SELECT id from posts where id=:postid', array(':postid'=>$postId))){
				die('invalid post id');
			}	else {
				DatabaseConnector::query('INSERT INTO comments (comment, user_id, post_id, posted_on) VALUES (:comment, :userid, :postid, UNIX_TIMESTAMP())', array(':comment'=>$commentBody,':userid'=>$userId,':postid'=>$postId));
				//keep the get parameters
				header ('Location: '.$GLOBALS['url_loc'][1]. preserve_qs());
				die;
			}
	}
	
public static function fetch_Comments($postId, $order){	
	return DatabaseConnector::query('SELECT * FROM comments WHERE post_id=:postid ORDER BY posted_on '.$order, array(':postid'=>$postId));
}	
	
}
?>